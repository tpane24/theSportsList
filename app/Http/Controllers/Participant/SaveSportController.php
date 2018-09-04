<?php

namespace App\Http\Controllers\Participant;

use App\SavedGame;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;

class SaveSportController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Sports Action Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles saving Sports, removing saved sports, and
  | viewing individual sport's adds.
  |
  */

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:participant');
  }

  /**
   * Handles action for a save game click
   *
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function getSaveSport () {
    $gameID = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    if($this->saveSport($gameID)) {
      return $this->gameSaved($this->getGameData($gameID));
    }
  }

  /**
   * Handles action for a remove game click
   *
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function getRemoveSport () {
    $gameID = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    if($this->removeSport($gameID)) {
      return $this->gameDeleted($this->getGameData($gameID));
    }
  }

  /**
   * Show the Participant Home Page.
   *
   * @return \Illuminate\Http\Response
   * returns Auth Participant view for domain/participant/view?
   */
  public function getViewSportsPage () {
    $gameID = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    if($this->checkThatGameExsists($gameID) < 1) {
      return $this->noGameFound($game_id);
    }
    return $this->viewSports($this->getGameData($gameID));
  }

  /**
   * Attempt to store the advertisement
   *
   * @param  int $gameID
   * @return bool
   */
  protected function saveSport ($gameID) {
    $participantID = Auth::id();
    $savedGame = new SavedGame([
      'game_id' => $gameID,
      'participant_id' => $participantID,
    ]);
    return $savedGame->save();
  }

  /**
   * Attempt to delete the game/advertisement
   *
   * @param  int $gameID
   * @return bool
   */
  protected function removeSport ($gameID) {
    $participantID = Auth::id();
    return DB::table('saved_games')->where('game_id', $gameID)->where('participant_id', $participantID)->delete();
  }

  /**
   * Check to make sure game Id belongs to advertisement
   *
   * @param  int $gameID
   * @return bool
   */
  protected function checkThatGameExsists ($gameID) {
    return DB::table('advertisements')
                      ->where('id', $gameID)
                      ->count();
  }

  /**
   * Gather data for saved game
   *
   * @param  int $participantID
   * @return Illuminate\Database\Eloquent\Collection
   */
  protected function getGameData ($gameID) {
    return DB::table('advertisements')->where('id', $gameID)->first();
  }

  public function gameSaved($game) {
    // returns view for domain/messages  with message gameSaved
    return redirect()->route('page.messages', [
      'message' => 'gameSaved',
      'game' => $game->event_name,
    ]);
  }

  public function gameDeleted($game) {
    // returns view for domain/messages  with message gameDeleted
    return redirect()->route('page.messages', [
      'message' => 'gameDeleted',
      'game' => $game->event_name,
    ]);
  }

  public function noGameFound($game_id) {
    // returns view for domain/messages with message noGameFound
    return redirect()->route('page.messages', [
      'message' => 'noGameFound',
      'id' => $game_id,
    ]);
  }

  public function viewSports($game) {
    // return view for domain/participant/view with game information from database
    return view('ParticipantPages.viewSportsPage', [
      'game' => $game,
    ]);
  }
}
