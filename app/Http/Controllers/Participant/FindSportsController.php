<?php

namespace App\Http\Controllers\Participant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FindSports;
use Auth;

class FindSportsController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Find Sports Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles searching for a sport in the database that matches
  | user's seacrh criteria.
  |
  */

  private $sport;
  private $type;
  private $age;
  private $gender;
  private $zip;
  private $radius;
  private $games;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(FindSports $request)
  {
      $this->middleware('auth:participant');
      $this->sport = $request->input('inputSport');
      $this->type = $request->input('inputType');
      $this->age = $request->input('inputAge');
      $this->gender = $request->input('inputGender');
      $this->zip = $request->input('inputZip');
      $this->radius = $request->input('inputRadius');
  }

  /**
   * Handle a findSports request from participant/home form.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function findSports (FindSports $request) {
    if ($this->testForZip() != '1') {
      return $this->notValidZip();
    }
    $zips = $this->findZipsWithinRadius();
    if ($this->checkForGamesWithinZips($zips) < 1) {
      return $this->noSportsFound();
    }

    return $this->sportsResults($this->findGamesWithinZips($zips));
  }

  /**
   * Test to make sure is valid.
   *
   * @param  \Illuminate\Http\Request  $request dependancy injection from
   * __construct
   * @return int
   */
  private function testForZip () {
    return DB::table('mytable')->where('zip_code', $this->zip)->count();
  }

  /**
   * Gathers all zip codes with in given radius from given zip code
   *
   * @param  \Illuminate\Http\Request  $request dependancy injection from
   * __construct
   * @return array
   */
  private function findZipsWithinRadius() {
    $zips = array();
    // Get data for Zip Code from my_table
    $zipData = DB::table('mytable')->where('zip_code', $this->zip)->first();
    // Calculate radius data
    $lat1 = $zipData->latitude;
    $lon1 = $zipData->longitude;
    $d = $this->radius;
    $r = 3969;
    $latN = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $r) + cos(deg2rad($lat1)) * sin($d / $r) * cos(deg2rad(0))));
    $latS = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $r) + cos(deg2rad($lat1)) * sin($d / $r) * cos(deg2rad(180))));
    $lonE = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(90)) * sin($d / $r) * cos(deg2rad($lat1)), cos($d / $r) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));
    $lonW = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(270)) * sin($d / $r) * cos(deg2rad($lat1)), cos($d / $r) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));
    // nearZips will now retrieve all valid zip codes from database
    $nearZips = DB::table('mytable')
                   ->select('zip_code', 'latitude', 'longitude')
                   ->where('latitude', '<=', $latN)
                   ->where('latitude', '>=', $latS)
                   ->where('longitude', '<=', $lonE)
                   ->where('longitude', '>=', $lonW)
                   ->orderBy('latitude', 'asc')
                   ->limit(100000)
                   ->get();
     // add each zip to an array to use with inWhere query builder
     foreach ($nearZips as $nearZip) {
       $truedistance = acos(sin(deg2rad($lat1)) * sin(deg2rad($nearZip->latitude)) + cos(deg2rad($lat1)) * cos(deg2rad($nearZip->latitude)) * cos(deg2rad($nearZip->longitude) - deg2rad($lon1))) * $r;
       if ($truedistance < $d) {
         array_push($zips, $nearZip->zip_code);
       }
     }
     return $zips;
  }

  /**
   * Check to see if any games meet search Criteria
   *
   * @param  \Illuminate\Http\Request  $request dependancy injection from
   * __construct
   * @return int
   */
  private function checkForGamesWithinZips ($zips) {
    return DB::table('advertisements')
                    ->when($sport = $this->sport, function ($query, $sport) {
                        return $query->where('sport', $sport);
                      })
                    ->when($gender = $this->gender, function ($query, $gender) {
                        return $query->where('gender', $gender);
                      })
                    ->when($age = $this->age, function ($query, $age) {
                        return $query->where('age', $age);
                      })
                    ->when($type = $this->type, function ($query, $type) {
                        if ($type == "Both") {
                          $type = array();
                          array_push($type, 'League', 'Tournament');
                          return $query->whereIn('type', $type);
                        } else {
                          return $query->where('type', $type);
                        }
                      })
                    ->whereIn('zip', $zips)
                    ->limit(10)
                    ->count();
  }
  
  /**
   * Gathers all games that meet search criteria
   *
   * @param  \Illuminate\Http\Request  $request dependancy injection from
   * __construct
   * @return Illuminate\Database\Eloquent\Collection
   */
  private function findGamesWithinZips ($zips) {
    return DB::table('advertisements')
                    ->when($sport = $this->sport, function ($query, $sport) {
                        return $query->where('sport', $sport);
                      })
                    ->when($gender = $this->gender, function ($query, $gender) {
                        return $query->where('gender', $gender);
                      })
                    ->when($age = $this->age, function ($query, $age) {
                        return $query->where('age', $age);
                      })
                    ->when($type = $this->type, function ($query, $type) {
                        if ($type == "Both") {
                          $type = array();
                          array_push($type, 'League', 'Tournament');
                          return $query->whereIn('type', $type);
                        } else {
                          return $query->where('type', $type);
                        }
                      })
                    ->whereIn('zip', $zips)
                    ->limit(100)
                    ->get();
  }

  public function notValidZip() {
    // returns view for domain/messages  with message notValidZip
    return redirect()->route('page.messages', [
      'message' => 'notValidZip',
       'zip' => $this->zip,
     ]);
  }

  public function noSportsFound () {
    // returns view for domain/messages  with message noSportsFound
    return redirect()->route('page.messages', [
      'message' => 'noSportsFound',
      'zip' => $this->zip,
      'sport' => $this->sport,
      'type' => $this->type,
      'radius' => $this->radius,
      'age' => $this->age,
      'gender' => $this->gender,
    ]);
  }

  public function sportsResults($games) {
    return view('participantPages.sportsResultsPage', [
      'games' => $games,
      'age' => $this->age,
      'gender' => $this->gender,
      'zip' => $this->zip,
      'sport' => $this->sport,
      'type' => $this->type,
      'radius' => $this->radius,
    ]);
  }
}
