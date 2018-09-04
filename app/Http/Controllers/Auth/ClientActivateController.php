<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ClientActivateController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Client Activate Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles activating a Client account from a GET request.
    | Request link is sent through email mail\ClientCreated
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:client')->except('logout');
    }

    /**
     * Handle a $_GET request from advertising/activate?email=&password=
     *
     * @return redirect for success or fail
     */
    public function getActivatePage () {
       $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
       $password = filter_var($_GET['password'], FILTER_SANITIZE_STRING);

       if($this->activateClient($email, $password)) {
         // returns domain/messages with message activateSuccess
         return redirect()->route('page.messages', [
           'message' => 'activateClientSuccess',
           'email' => $email,
         ]);
       } else {
         // returns view for domain/messages  with message activateFail
         return redirect()->route('page.messages', [
           'message' => 'activateFail',
           'email' => $email,
         ]);
       }
     }
     /**
      * Activates client account based on email and password
      *
      * @param string from $_GET = $email
      * @param string from $_GET = $password
      * @return bool
      */
     protected function activateClient ($email, $password) {
       $update = DB::table('clients')
                     ->where('email', $email)
                     ->where('password', $password)
                     ->update(['activated' => '1']);
       if ($update) {
         return true;
       } else {
         return false;
       }
     }

}
