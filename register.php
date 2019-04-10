<?php
$wrongpassword = 'Request could not be completed at this time. Try again later.';
$unknownuser = 'A user with the same email address already exists.';
$unknownerror = 'Backend error. Try again later.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up &middot; Elephant Template &middot; The fastest way to build Modern Admin APPS for any platform, browser, or device.</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta property="og:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:image" content="http://demo.madebytilde.com/elephant.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebytilde">
    <meta name="twitter:creator" content="@madebytilde">
    <meta name="twitter:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta name="twitter:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta name="twitter:image" content="http://demo.madebytilde.com/elephant.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#1c90fb">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/signup-2.min.css">
</head>
<body>
<div class="signup">
    <div class="signup-body">
        <a class="signup-brand" href="index.html">
            <h2>GYM MIS</h2>
        </a>
        <p style="font-size: 25px" class="signup-heading">
            <strong>Client Registration</strong>
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

        <div class="signup-form">
            <form data-toggle="validator" data-groups='{"birthdate": "birth_month birth_day birth_year"}' method="POST" action="app/register/register-api-client.php">
                <div class="row gutter-xs">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="first-name">First name</label>
                            <input id="first-name" class="form-control" type="text" name="first_name" spellcheck="false" data-msg-required="Please enter your first name." required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="last-name">Last name</label>
                            <input id="last-name" class="form-control" type="text" name="last_name" spellcheck="false" data-msg-required="Please enter your last name." required>
                        </div>
                    </div>
                </div>
                <div class="row gutter-xs">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="email" name="email" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
                        </div>
                    </div>
                </div>
                <div class="row gutter-xs">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
                            <small class="help-block">6-character minimum; case sensitive.</small>
                        </div>
                    </div>
                </div>
                <div class="row gutter-xs">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="birth-month">Birthdate</label>
                            <div class="row gutter-xs">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <select id="birth-month" class="custom-select" name="birth_month" data-msg-required="Please enter your birthday." required>
                                            <option value="" disabled="disabled" selected="selected">Month</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="birth-day" class="form-control" type="number" name="birth_day" placeholder="Day" min="1" max="31" data-msg-min="Please enter a valid day of the month." data-msg-max="Please enter a valid day of the month." data-msg-required="Please enter your birthday." required>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="birth-year" class="form-control" type="number" name="birth_year" placeholder="Year" min="1900" max="2017" data-msg-min="Please enter a valid year." data-msg-max="Please enter a valid year." data-msg-required="Please enter your birthday." required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-xs">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select id="gender" class="custom-select" name="gender" data-msg-required="Please indicate your gender." required>
                                <option value="" disabled="disabled" selected="selected">Select...</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit" name="register_submit" id="register_submit">Sign up</button>
            </form>
        </div>
    </div>
    <div class="signup-footer">
        Already have an account? <a href="login-2.html">Log in</a>
    </div>
</div>
<script src="js/vendor.min.js"></script>
<script src="js/elephant.min.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-83990101-1', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>