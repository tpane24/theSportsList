<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactUs;
use App\Mail\ContactUsEmail;

class ContactUsController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Contact Us Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the Contact us Page
  |
  */


  private $responseEmail;
  private $name;
  private $email;
  private $message;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(ContactUs $request)
  {
      $this->name = $request->input('inputName');
      $this->email = $request->input('inputEmail');
      $this->message = $request->input('inputMessage');
      /**
       * fillable, set email address to send contact form to
       */
      $this->responseEmail = 'thomas.pane24@gmail.com';
  }

  /**
   * Handle a post Contact Page request to the application.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function postContactPage () {
    if ($this->mailContactForm()) {
      return $this->contactUsSent();
    }
  }

  /**
   * Sends Contact form to Email
   *
   * @param  \Illuminate\Http\Request  $request
   * @return bool true
   *
   */
  protected function mailContactForm() {
    $data = [
      'name' => $this->name,
      'email' => $this->email,
      'message' => $this->message,
    ];
    Mail::to($this->responseEmail)->queue(new ContactUsEmail($data));
    return true;
  }

  /**
   * Returns view for domain/messages  with message signupSuccess
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse
   *
   */
  public function contactUsSent() {
    return redirect()->route('page.messages', [
      'message' => 'contactUsSent',
      'email' => $this->email,
      'text' => $this->message,
    ]);
  }
}
