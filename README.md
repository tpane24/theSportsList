# theSportsList
Utilizes Laravel’s “out of the box” controllers to implement Two Authentication methods, one for participants and one for clients. 
This app Utilizes 4 different Eloquent Models:
  1) Client.php
    a) It is an authenticatable model that implements a custom $guard = 'client';
    b) The Client.php Model is the "User" model for theSportsList's advertising section.
    C) It uses the table clients which is created from a migration.
  2) Participant.php
    a) It is an authenticatable model that implements a custom $guard = 'participant';
    b) The Participant.php Model is the "User" model for theSportsList's advertising section.
    C) It uses the table participants which is created from a migration.
  3) Advertisement.php
    a) Is is a model that can utilize softDeletes.
    b) An Advertisement.php model can only be inserted, updated, or deleted by an authenticated client.
    c) An Advertisement.php model can be searched (select) for by zip location by an authenticated participant.
    d) It uses the table advertisements which is created from a migration.
  4) SavedGame.php
    a) It is a model that can only be inserted or deleted by an authenticated participant.
    b) It is used to allow an authenticated participant to save advertisements to view later.
    c) It uses the table saved_games which is created from a migration.

This app utilizes several different "categories" of controllers:
  1) Http\Controllers\Auth
    a) these controllers are modified versions of Laravels out of the box auth controllers.
    b) there will be one of each of these for Participants and Clients:
      1. LoginController
      2. ActivatedController
      3. RegisterController
      4. ForgotPasswordController
      5. ResetPasswordController
  2) Http\Controllers\Client
    a) these controllers will handle all functionality that an authenticated client can carry out.
    b) They are seperated into 3 files:
      1. AdvertisingHomeController: Gather db info for Advertising views.
      2. GetAdvertisementController: Handles Get requests.
      3. PostAdvertisementController: Handles Post requests.
  3) Http\Controllers\Participant
    a) These contollers will handle all functionality that an authenticated participant can carry out.
  4) Http\Controllers\PageController.php
    a) This controller handles all navigation clicks to change between splash pages.

This app utilizes custom CSS/html developed in combination with the bootstrap framework.
  1) resources\views\advertisingPages
    a) contains all views that are needed for an authenticated client.
  2) resources\participantPages
    a) contains all views that are needed for an authenticated Participant
  3) resources\emails
    a) contains email markdowns for sending email via php mail.
  4) resources\splashPages
    a) contains all views that do not require authentication.
  5) resources\resetPasswords
    a) contains all views needed to reset passwords.
  6) resources\templates\html
    a) contains views for a players and providers add as well as a loading animation.
  7) resources\templates\nav
    a) contains views needed for the nav.
  8) resources\templates\
    a) contains views to be plugged and placed throughout the site.
    b) Also contains masterSplash template which is extended by most views on the app.
    
