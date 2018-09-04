<?php

namespace App\Http\Controllers\Client;

use App\Advertisement;
use App\Http\Requests\StoreNewAdd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class PostAdvertisementController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Post Advertisement Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the POST requests for new Advertisements and POST
  | requests to edit an advertisement
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
   * Handle a post newAdd request to the application.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function postNewAddPage (StoreNewAdd $request) {
    if ($this->saveNewAdd($request)) {
      return $this->newAddSuccess($request->input('inputEventName'));
    }
  }

  /**
   * Handle an edit add request to the application.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function postEditAddPage (StoreNewAdd $request) {
    $game_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $authenticate = $this->clientOwnsGame($game_id);
    if ($authenticate == 0) {
      return $this->notYourGame($request->input('inputEventName'));
    } else if ($authenticate == "1") {
      if ($this->updateAdvertisement($request, $game_id)) {
        return $this->updateAddSuccess($request->input('inputEventName'));
      }
    }
  }

  /**
   * Saves new add once StoreNewRequest validates it
   *
   * @param  \Illuminate\Http\Request  $request
   * @return bool
   *
   */
  protected function saveNewAdd($request) {
    // Creates a new advertisement after StoreNewAdd handles the validation
    $advertisement = new Advertisement([
      'created_by' => Auth::id(),
      'event_name' => $request->input('inputEventName'),
      'sport' => $request->input('inputSport'),
      'type' => $request->input('inputType'),
      'start_date' => $request->input('inputStartYear').'-'.$request->input('inputStartMonth').'-'.$request->input('inputStartDay'),
      'end_date' => $request->input('inputEndYear').'-'.$request->input('inputEndMonth').'-'.$request->input('inputEndDay'),
      'start_time' => $request->input('inputStartHour').':'.$request->input('inputStartMinute').':00',
      'start_tod' => $request->input('inputStartTOD'),
      'end_time' => $request->input('inputEndHour').':'.$request->input('inputEndMinute').':00',
      'end_tod' => $request->input('inputEndTOD'),
      'age' => $request->input('inputAge'),
      'gender' => $request->input('inputGender'),
      'link' => $request->input('inputLink'),
      'description' =>$request->input('inputDescription'),
      'address' => $request->input('inputAddress'),
      'city' => $request->input('inputCity'),
      'state' => $request->input('inputState'),
      'zip' => $request->input('inputZip'),
    ]);
    return $advertisement->save();
  }

  /**
   * Verifies that the client owns Advertisement
   *
   * @param  int $game_id
   * @return int
   *
   */
  protected function clientOwnsGame ($game_id) {
    return DB::table('advertisements')
                      ->where('created_by', Auth::id())
                      ->where('id', $game_id)
                      ->count();
  }

  /**
   * Updates a  clients advertisement
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int $game_id
   * @return bool
   *
   */
  protected function updateAdvertisement($request, $game_id) {
    // Updates advertisement after StoreNewAdd handles the validation and $authenticate custom handles client verification
    $advertisement = Advertisement::find($game_id);
    $advertisement->event_name = $request->input('inputEventName');
    $advertisement->sport = $request->input('inputSport');
    $advertisement->type = $request->input('inputType');
    $advertisement->start_date = $request->input('inputStartYear').'-'.$request->input('inputStartMonth').'-'.$request->input('inputStartDay');
    $advertisement->end_date = $request->input('inputEndYear').'-'.$request->input('inputEndMonth').'-'.$request->input('inputEndDay');
    $advertisement->start_time = $request->input('inputStartHour').':'.$request->input('inputStartMinute').':00';
    $advertisement->start_tod = $request->input('inputStartTOD');
    $advertisement->end_time = $request->input('inputEndHour').':'.$request->input('inputEndMinute').':00';
    $advertisement->end_tod = $request->input('inputEndTOD');
    $advertisement->age = $request->input('inputAge');
    $advertisement->gender = $request->input('inputGender');
    $advertisement->link = $request->input('inputLink');
    $advertisement->description =$request->input('inputDescription');
    $advertisement->address = $request->input('inputAddress');
    $advertisement->city = $request->input('inputCity');
    $advertisement->state = $request->input('inputState');
    $advertisement->zip = $request->input('inputZip');
    return $advertisement->save();
  }

  /**
   * Returns view for domain/messages  with message notYourGame
   *
   * @param  string $event = $request['inputEventName']
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function notYourGame($event) {
    return redirect()->route('page.messages', [
      'message' => 'notYourGame',
      'event' => $event,
    ]);
  }

  /**
   * Returns view for domain/messages  with message newAddSuccess
   *
   * @param  string $event = $request['inputEventName']
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function newAddSuccess($event) {
    return redirect()->route('page.messages', [
      'message' => 'newAddSuccess',
      'event' => $event,
    ]);
  }

  /**
   * Returns view for domain/messages with message updateAddSuccess
   *
   * @param  string $event = $request['inputEventName']
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function updateAddSuccess($event) {
    return redirect()->route('page.messages', [
      'message' => 'updateAddSuccess',
      'event' => $event,
    ]);
  }

}
