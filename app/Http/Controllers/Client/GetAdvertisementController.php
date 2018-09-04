<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class GetAdvertisementController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Get Advertisement Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the GET requests for Advertisements
  |
  */

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:client');
  }

  /**
   * Show the page to edit a add.
   *
   * @return \Illuminate\Http\Response
   * returns Auth Client view for domain/advertising/edit
   */
  public function getEditAddPage () {
    $game_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    return $this->editAddPage($this->getEditGameData($game_id));
  }

  /**
   * Handle a delete add request to the application.
   *
   * @param  int $id
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function getDeleteAdd ($game_id) {
    if($this->deleteAdd($game_id)) {
      return $this->deleteSuccess($game_id);
    } else {
      return $this->deleteFail($game_id);
    }
  }

  /**
   * Show the page to View an add.
   *
   * @return \Illuminate\Http\Response
   * returns Auth Client view for domain/advertising/view
   */
  public function getViewAddPage ($game_id) {
    // $game_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    if ($this->doesAddExsist($game_id) < 1) {
      return $this->noGameFound($game_id);
    }

    return $this->viewAddPage($this->getAddData($game_id));
  }

  /**
   * Gather Advertisement data to be edited
   *
   * @param  int $gameID
   * @return Illuminate\Database\Eloquent\Collection
   */
  protected function getEditGameData($game_id) {
    return DB::table('advertisements')
                    ->where('id', $game_id)
                    ->where('created_by', Auth::id())
                    ->first();
  }

  /**
   * Delete the advertsisement
   *
   * @param  int $gameID
   * @return bool
   */
  protected function deleteAdd($game_id) {
    return DB::table('advertisements')
                      ->where('created_by', Auth::id())
                      ->where('id', $game_id)
                      ->delete();
  }

  /**
   * Get the Advertisement Data
   *
   * @param  int $gameID
   * @return Illuminate\Database\Eloquent\Collection
   */
  protected function getAddData($game_id) {
    return DB::table('advertisements')
                      ->where('created_by', Auth::id())
                      ->where('id', $game_id)
                      ->first();
  }

  /**
   * Check to see if Add exsists
   *
   * @param  int $gameID
   * @return int
   */
  protected function doesAddExsist($game_id) {
    return DB::table('advertisements')
                      ->where('created_by', Auth::id())
                      ->where('id', $game_id)
                      ->count();
  }

  /**
   * Returns view for domain/messages with message deleteSuccess
   *
   * @param  int $id
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function deleteSuccess($game_id) {
    return redirect()->route('page.messages', [
      'message' => 'deleteSuccess',
      'id' => $game_id,
    ]);
  }

  /**
   * Returns view for domain/messages with message deleteFail
   *
   * @param  int $id
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function deleteFail($game_id) {
    return redirect()->route('page.messages', [
      'message' => 'deleteSuccess',
      'id' => $game_id,
    ]);
  }

  /**
   * Returns view for domain/messages with message noGameFound
   *
   * @param  int $id
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function noGameFound($game_id) {
    return redirect()->route('page.messages', [
      'message' => 'noGameFound',
      'id' => $game_id,
    ]);
  }

  /**
   * Return view for domain/advertising/view with game information from database
   *
   * @param  Illuminate\Database\Eloquent\Collection
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function viewAddPage($game) {
    return view('advertisingPages.viewAddPage', [
      'game' => $game,
    ]);
  }

  /**
   * Return view for page to edit an add.
   *
   * @return \Illuminate\Http\Response
   * returns Auth Client view for domain/advertising/edit
   */
  public function editAddPage ($game) {
    // reformat start and end dates to be compatable with html
    $startYear = substr($game->start_date, 0, 4);
    $startMonth = substr($game->start_date, 5, 2);
    $startDay = substr($game->start_date, 8, 2);
    $endYear = substr($game->end_date, 0, 4);
    $endMonth = substr($game->end_date, 5, 2);
    $endDay = substr($game->end_date, 8, 2);
    // reformat start and end time to be compatable with hmtl
    $startHour = substr($game->start_time, 0, 2);
    $startMinute = substr($game->start_time, 3, 2);
    $endHour = substr($game->end_time, 0, 2);
    $endMinute = substr($game->end_time, 3, 2);
    // return view for domain/advertising/edit with game information from database
    return view('advertisingPages.editAddPage', [
      'game' => $game,
      'state' => $game->state,
      'sport' => $game->sport,
      'startYear' => $startYear,
      'startMonth' => $startMonth,
      'startDay' => $startDay,
      'endYear' => $endYear,
      'endMonth' => $endMonth,
      'endDay' => $endDay,
      'startHour' => $startHour,
      'startMinute' => $startMinute,
      'endHour' => $endHour,
      'endMinute' => $endMinute,
    ]);
  }

}
