<?php

namespace App\Http\Controllers\Participant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;

class ParticipantHomeController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Participant Home Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles everyting necessay for the domain/participant/home
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
   * Show the Participant Home Page.
   *
   * @return \Illuminate\Http\Response
   * returns Auth Participant view for domain/participant/home
   */
  public function getHomePage () {
    $participantID = Auth::id();
    if ($this->checkForData($participantID) < 1) {
      return view('participantPages.homeParticipantPage', ['games' => 1]);
    }
    $games = $this->getParticipantSavedGames($participantID);
    return view('participantPages.homeParticipantPage', ['games' => $games]);
  }

  /**
   * Check to see if Participant Saved Game data exsists.
   *
   * @param  int  $participantID
   * @return int
   */
  private function checkForData ($participantID) {
    return DB::table('saved_games')->where('participant_id', $participantID)->count();
  }

  /**
   * Grab the Participant Saved game Data
   *
   * @param  int $participantID
   * @return Illuminate\Database\Eloquent\Collection
   */
  private function getParticipantSavedGames ($participantID) {
    $gameIDArray = array();
    $gameIDs = DB::table('saved_games')->where('participant_id', $participantID)->get();
    foreach ($gameIDs as $gameID) {
      array_push($gameIDArray, $gameID->game_id);
    }
    return DB::table('advertisements')->whereIn('id', $gameIDArray)->get();
  }
}
