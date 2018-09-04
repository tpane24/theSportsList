<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;

class AdvertisingHomeController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Advertising Home Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles returning the views for domain/advertising/home
  | and domain/advertising/newAdd
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
   * Show the Client Home Page.
   *
   * @return \Illuminate\Http\Response
   * returns Auth Client view for domain/advertising/home
   */
  public function getHomePage () {
    $games = $this->getAllGames(Auth::id());
    return view('advertisingPages.homeAdvertisingPage', ['games' => $games]);
  }

  /**
   * Show the page to create a new add.
   *
   * @return \Illuminate\Http\Response
   * returns Auth Client view for domain/advertising/newAdd
   */
  public function getNewAddPage () {
    $client = $this->getClientAdress(Auth::id());
    return $this->newAddPage($client);
  }

  /**
   * Gather data for all of the Clients Advertisements
   *
   * @param  int $id = Auth::id()
   * @return Illuminate\Database\Eloquent\Collection
   */
  protected function getAllGames ($id) {
    return DB::table('advertisements')->where('created_by', $id)
               ->select('event_name', 'start_date', 'id', 'created_by')
               ->orderBy('start_date', 'desc')
               ->get();
  }

  /**
   * Gather Address data for Client
   *
   * @param  int $id = Auth::id()
   * @return Illuminate\Database\Eloquent\Collection
   */
  protected function getClientAdress ($id) {
    return DB::table('clients')
                    ->where('id', $id)
                    ->select('address', 'city', 'state', 'zip')
                    ->first();
  }

  /**
   * Returns the View to create a new Add.
   *
   * @return \Illuminate\Http\Response
   * returns Auth Client view for domain/advertising/newAdd
   */
  public function newAddPage($client) {
    // return view for domain/advertising/newAdd with address information
    return view('advertisingPages.newAdvertisingPage', [
      'created_by' => Auth::id(),
      'address' => $client->address,
      'city' => $client->city,
      'state' => $client->state,
      'zip' => $client->zip,
    ]);
  }
}
