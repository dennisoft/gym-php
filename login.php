<?php
    $wrongpassword = 'Wrong password provided.';
    $unknownuser = 'User with this email does not exist.';
    $unknownerror = 'Backend error. Try again later.';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log In &middot; Elephant Template &middot; The fastest way to build Modern Admin APPS for any platform, browser, or device.</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta property="og:image" content="http://demo.madebytilde.com/elephant.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#1c90fb">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/login-2.min.css">
      <link rel="stylesheet" href="css/signup-2.min.css">

  </head>
  <body>

    <div class="login">
      <div class="login-body">

          <a class="signup-brand" href="index.html">
              <h2>GYM MIS</h2>
          </a>
          <p style="font-size: 25px" class="signup-heading">
              <strong>Client Login</strong>
          </p>
          <div class="signup-divider">
              <div class="divider">
                  <div class="divider-content">Please provide the details below</div>
              </div>
          </div>


          <div class="wrong-credentials" style="max-width: 100%;color:#f75b50; margin-bottom: 15px;margin-top: 15px;text-align: center;">
              <small id="password-error" style="max-width: 100%; display: block; justify-content: center;">
                  <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "password") {
                            echo $wrongpassword; }
                        else if ($_GET['error'] == "user") {
                            echo $unknownuser; }
                        else {
                            echo $unknownerror; }
                    }
                  ?>
              </small>
          </div>

        <div class="login-form">
          <form data-toggle="validator" name="login-form" method="POST" action="app/login/login-api-client.php">
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" class="form-control" type="email" name="current_email" id="current_email" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" class="form-control" type="password" name="current_password" id="current_password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
            </div>
            <div class="form-group">
              <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked="checked">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">Keep me signed in</span>
              </label>
              <span aria-hidden="true"> · </span>
              <a href="password-2.html">Forgot password?</a>
            </div>
            <button class="btn btn-primary btn-block" type="submit" name="current_submit" id="current_submit">Sign in</button>
          </form>
            <div class="login-footer">
                Don't have an account? <a href="signup-2.html">Sign Up</a>
            </div>
        </div>
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
  </body>
</html>