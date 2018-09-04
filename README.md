# theSportsList
Utilizes Laravel’s “out of the box” controllers to implement Two Authentication methods, one for participants and one for clients. 
This app Utilizes 4 different Eloquent Models:
  1) Client.php<br>
    a) It is an authenticatable model that implements a custom $guard = 'client';<br>
    b) The Client.php Model is the "User" model for theSportsList's advertising section.<br>
    C) It uses the table clients which is created from a migration.<br>
  2) Participant.php<br>
    a) It is an authenticatable model that implements a custom $guard = 'participant';<br>
    b) The Participant.php Model is the "User" model for theSportsList's advertising section.<br>
    C) It uses the table participants which is created from a migration.<br>
  3) Advertisement.php<br>
    a) Is is a model that can utilize softDeletes.<br>
    b) An Advertisement.php model can only be inserted, updated, or deleted by an authenticated client.<br>
    c) An Advertisement.php model can be searched (select) for by zip location by an authenticated participant.<br>
    d) It uses the table advertisements which is created from a migration.<br>
  4) SavedGame.php<br>
    a) It is a model that can only be inserted or deleted by an authenticated participant.<br>
    b) It is used to allow an authenticated participant to save advertisements to view later.<br>
    c) It uses the table saved_games which is created from a migration.<br>

This app utilizes several different "categories" of controllers:<br>
  1) Http\Controllers\Auth<br>
    a) these controllers are modified versions of Laravels out of the box auth controllers.<br>
    b) there will be one of each of these for Participants and Clients:<br>
      1. LoginController<br>
      2. ActivatedController<br>
      3. RegisterController<br>
      4. ForgotPasswordController<br>
      5. ResetPasswordController<br>
  2) Http\Controllers\Client<br>
    a) these controllers will handle all functionality that an authenticated client can carry out.<br>
    b) They are seperated into 3 files:<br>
      1. AdvertisingHomeController: Gather db info for Advertising views.<br>
      2. GetAdvertisementController: Handles Get requests.<br>
      3. PostAdvertisementController: Handles Post requests.<br>
  3) Http\Controllers\Participant<br>
    a) These contollers will handle all functionality that an authenticated participant can carry out.<br>
  4) Http\Controllers\PageController.php<br>
    a) This controller handles all navigation clicks to change between splash pages.<br>

This app utilizes custom CSS/html developed in combination with the bootstrap framework.<br>
  1) resources\views\advertisingPages<br>
    a) contains all views that are needed for an authenticated client.<br>
  2) resources\participantPages<br>
    a) contains all views that are needed for an authenticated Participant<br>
  3) resources\emails<br>
    a) contains email markdowns for sending email via php mail.<br>
  4) resources\splashPages<br>
    a) contains all views that do not require authentication.<br>
  5) resources\resetPasswords<br>
    a) contains all views needed to reset passwords.<br>
  6) resources\templates\html<br>
    a) contains views for a players and providers add as well as a loading animation.<br>
  7) resources\templates\nav<br>
    a) contains views needed for the nav.<br>
  8) resources\templates\<br>
    a) contains views to be plugged and placed throughout the site.<br>
    b) Also contains masterSplash template which is extended by most views on the app.<br>
    
