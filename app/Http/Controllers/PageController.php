<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  // redirect domain to be domain/home
  // actually redirects to domain/mission
  public function redirectHomePage () {
    return redirect()->route('page.animation');
  }

  // returns view for domain/home
  public function getAnimationPage () {
    return view('splashPages.animationPage');
  }

  // returns view for domain/home
  public function getHomePage () {
    return view('splashPages.homePage');
  }

  // returns view for domain/advertising
  public function getAdvertisingPage () {
    return view('splashPages.advertisingPage');
  }

  // returns view for domain/findsports
  public function getFindSportsPage () {
    return view('splashPages.findSportsPage');
  }

  // returns view for domain/messages
  public function getMessagesPage ($message) {
    return view('splashPages.messagesPage', [
      'message' => $message,
    ]);
  }

  // returns view for domain/sports
  public function getSportsPage () {
    return view('splashPages.sportsPage');
  }

  // returns view for domain/contact
  public function getContactPage () {
    return view('splashPages.contactPage');
  }

  // returns view for domain/test
  public function getTestPage () {
    return view('splashPages.testPage');
  }

  // returns view for domain/signin
  public function getSigninPage () {
    return view('splashPages.signinPage');
  }
}
