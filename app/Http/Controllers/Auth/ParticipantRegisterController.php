<?php

namespace App\Http\Controllers\Auth;

use App\Participant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use App\Mail\ParticipantCreated;

class ParticipantRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Participant Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new participants as well as their
    | validation and creation. This controller is created from laravel's built in
    | register controller and Illuminate\Foundation\Auth\RegistersUsers
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     * This no longer the redirect, instead it is redirected below
     * with public function register.
     *
     * @var string
     */
    protected $redirectTo = '/messages/signupSuccess?email=email';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:participant');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
          'inputName' => 'string|required',
          'inputEmail' => 'email|required|unique:participants,email',
          'inputPhone' => 'required|min:9',
          'inputPassword' => 'required|min:7',
          'inputConfirmPassword' => 'required|min:7|same:inputPassword',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Participant::create([
          'name' => $data['inputName'],
          'email' => $data['inputEmail'],
          'phone' => $data['inputPhone'],
          'password' => Hash::make($data['inputConfirmPassword']),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('participantPages.signupParticipantPage');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // sends activation email to Client who was just created
        Mail::to($request->input('inputEmail'))->queue(new ParticipantCreated($user));

        return $this->registered($request, $user)
                        ?: redirect()->route('page.messages', [
                          'message' => 'signupSuccess',
                          'email' => $request->input('inputEmail'),
                        ]);
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('participant');
    }
}
