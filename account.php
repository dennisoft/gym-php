<?php
    session_start();
    if ( isset( $_SESSION['id'] ) ) {
        require_once ('app/account/fetch-details-api.php');
        $response = getUser( $_SESSION['id']);
    }
    else {header("Location: login.php");}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form validation &middot; Elephant Template &middot; The fastest way to build Modern Admin APPS for any platform, browser, or device.</title>
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
    <link rel="stylesheet" href="css/application.min.css">
    <link rel="stylesheet" href="css/demo.min.css">
  </head>
  <body class="layout layout-header-fixed">
  <div class="layout-header">
      <div class="navbar navbar-default">
          <div class="navbar-header">
              <a class="navbar-brand navbar-brand-center" href="index.html">
                  <img class="navbar-brand-logo" src="img/logo-inverse.svg" alt="Elephant">
              </a>
              <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
                  <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
              </button>
              <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="arrow-up"></span>
                  <span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32" src="img/0180441436.jpg" alt="Teddy Wilson">
            </span>
              </button>
          </div>
          <div class="navbar-toggleable">
              <nav id="navbar" class="navbar-collapse collapse">
                  <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
                  </button>
                  <ul class="nav navbar-nav navbar-right">
                      <li class="visible-xs-block">
                          <h4 class="navbar-text text-center">Hi, Teddy Wilson</h4>
                      </li>
                      <li class="dropdown">
                          <a class="dropdown-toggle" href="form-validation.html#" role="button" data-toggle="dropdown" aria-haspopup="true">
                  <span class="icon-with-child hidden-xs">
                    <span class="icon icon-envelope-o icon-lg"></span>
                    <span class="badge badge-primary badge-above right">8</span>
                  </span>
                              <span class="visible-xs-block">
                    <span class="icon icon-envelope icon-lg icon-fw"></span>
                    <span class="badge badge-primary pull-right">8</span>
                    Messages
                  </span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                              <div class="dropdown-header">
                                  <a class="dropdown-link" href="compose.html">New Message</a>
                                  <h5 class="dropdown-heading">Recent messages</h5>
                              </div>
                              <div class="dropdown-body">
                                  <div class="list-group list-group-divided custom-scrollbar">
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0299419341.jpg" alt="Harry Jones">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">16 min</small>
                                                  <h5 class="notification-heading">Harry Jones</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Hi Teddy, Just wanted to let you know we got the project! We should be starting the planning next week. Harry</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0310728269.jpg" alt="Daniel Taylor">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">2 hr</small>
                                                  <h5 class="notification-heading">Daniel Taylor</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Teddy Boyyyy, label text isn't vertically aligned with value text in grid forms when using .form-control... DT</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0460697039.jpg" alt="Charlotte Harrison">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">Sep 20</small>
                                                  <h5 class="notification-heading">Charlotte Harrison</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Dear Teddy, Can we discuss the benefits of this approach during our Monday meeting? Best regards Charlotte Harrison</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0531871454.jpg" alt="Ethan Walker">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">Sep 19</small>
                                                  <h5 class="notification-heading">Ethan Walker</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">If you need any further assistance, please feel free to contact us. We are always happy to assist you. Regards, Ethan</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0601274412.jpg" alt="Sophia Evans">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">Sep 18</small>
                                                  <h5 class="notification-heading">Sophia Evans</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Teddy, Please call me when you finish your work! I have many things to discuss. Don't forget call me !! Sophia</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0777931269.jpg" alt="Harry Walker">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">Sep 17</small>
                                                  <h5 class="notification-heading">Harry Walker</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Thank you for your message. I am currently out of the office, with no email access. I will be returning on 20 Jun.</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0872116906.jpg" alt="Emma Lewis">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">Sep 15</small>
                                                  <h5 class="notification-heading">Emma Lewis</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Teddy, Please find the attached report. I am truly sorry and very embarrassed about not finishing the report by the deadline.</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0980726243.jpg" alt="Eliot Morgan">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">Sep 15</small>
                                                  <h5 class="notification-heading">Eliot Morgan</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Dear Teddy, Please accept this message as notification that I was unable to work yesterday, due to personal illness.m</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                              <div class="dropdown-footer">
                                  <a class="dropdown-btn" href="form-validation.html#">See All</a>
                              </div>
                          </div>
                      </li>
                      <li class="dropdown">
                          <a class="dropdown-toggle" href="form-validation.html#" role="button" data-toggle="dropdown" aria-haspopup="true">
                  <span class="icon-with-child hidden-xs">
                    <span class="icon icon-bell-o icon-lg"></span>
                    <span class="badge badge-primary badge-above right">7</span>
                  </span>
                              <span class="visible-xs-block">
                    <span class="icon icon-bell icon-lg icon-fw"></span>
                    <span class="badge badge-primary pull-right">7</span>
                    Notifications
                  </span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                              <div class="dropdown-header">
                                  <a class="dropdown-link" href="form-validation.html#">Mark all as read</a>
                                  <h5 class="dropdown-heading">Recent Notifications</h5>
                              </div>
                              <div class="dropdown-body">
                                  <div class="list-group list-group-divided custom-scrollbar">
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <span class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">35 min</small>
                                                  <h5 class="notification-heading">Update Status</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Failed to get available update data. To ensure the proper functioning of your application, update now.</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <span class="icon icon-flag bg-success circle sq-40"></span>
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">43 min</small>
                                                  <h5 class="notification-heading">Account Contact Change</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">A contact detail associated with your account teddy.wilson, has recently changed.</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <span class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">1 hr</small>
                                                  <h5 class="notification-heading">Failed Login Warning</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">There was a failed login attempt from "192.98.19.164" into the account teddy.wilson.</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0310728269.jpg" alt="Daniel Taylor">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">4 hr</small>
                                                  <h5 class="notification-heading">Daniel Taylor</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0872116906.jpg" alt="Emma Lewis">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">8 hr</small>
                                                  <h5 class="notification-heading">Emma Lewis</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0601274412.jpg" alt="Sophia Evans">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">8 hr</small>
                                                  <h5 class="notification-heading">Sophia Evans</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                      <a class="list-group-item" href="form-validation.html#">
                                          <div class="notification">
                                              <div class="notification-media">
                                                  <img class="circle" width="40" height="40" src="img/0180441436.jpg" alt="Teddy Wilson">
                                              </div>
                                              <div class="notification-content">
                                                  <small class="notification-timestamp">9 hr</small>
                                                  <h5 class="notification-heading">Teddy Wilson</h5>
                                                  <p class="notification-text">
                                                      <small class="truncate">Published a new post: "Everything you know about Bootstrap is wrong".</small>
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                              <div class="dropdown-footer">
                                  <a class="dropdown-btn" href="form-validation.html#">See All</a>
                              </div>
                          </div>
                      </li>
                      <li class="dropdown hidden-xs">
                          <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                              <img class="circle" width="36" height="36" src="img/0180441436.jpg" alt="Teddy Wilson"> <?php echo $response['user'][0]['name']. ' '.$response['user'][0]['lastName']?>
                              <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                  <a href="upgrade.html">
                                      <h5 class="navbar-upgrade-heading">
                                          Upgrade Now
                                          <small class="navbar-upgrade-notification">You have 15 days left in your trial.</small>
                                      </h5>
                                  </a>
                              </li>
                              <li class="divider"></li>
                              <li class="navbar-upgrade-version">Version: 1.0.0</li>
                              <li class="divider"></li>
                              <li><a href="contacts.html">Contacts</a></li>
                              <li><a href="profile.html">Profile</a></li>
                              <li><a href="login-1.html">Sign out</a></li>
                          </ul>
                      </li>
                      <li class="visible-xs-block">
                          <a href="contacts.html">
                              <span class="icon icon-users icon-lg icon-fw"></span>
                              Contacts
                          </a>
                      </li>
                      <li class="visible-xs-block">
                          <a href="profile.html">
                              <span class="icon icon-user icon-lg icon-fw"></span>
                              Profile
                          </a>
                      </li>
                      <li class="visible-xs-block">
                          <a href="login-1.html">
                              <span class="icon icon-power-off icon-lg icon-fw"></span>
                              Sign out
                          </a>
                      </li>
                  </ul>
                  <div class="title-bar">
                      <h1 class="title-bar-title">
                          <span class="d-ib">Account Details</span>
                          <span class="d-ib">
                  <a class="title-bar-shortcut" href="form-validation.html#" title="Add to shortcut list" data-container="body" data-toggle-text="Remove from shortcut list" data-trigger="hover" data-placement="right" data-toggle="tooltip">
                    <span class="sr-only">Add to shortcut list</span>
                  </a>
                </span>
                      </h1>
                      <p class="title-bar-description">
                          <small>You can change any of the information below</small>
                      </p>
                  </div>
              </nav>
          </div>
      </div>
  </div>
    <div class="layout-main">
      <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <?php include("nav.php") ?>
          </div>
        </div>
      </div>
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="demo-form-wrapper">
                <form data-toggle="validator">
                  <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <span class="icon icon-warning-circle icon-lg"></span>
                    <strong>Kindly provide the info below to update your profile</strong>
                  </div>
                  <div class="form-group">
                    <label for="name-1" class="control-label">First Name</label>
                    <input id="name-1" class="form-control" type="text" name="first_name" required value="<?php echo $response['user'][0]['name']?>">
                    <small class="help-block">Displayed on your profile and in other places as your first name.</small>
                  </div>
                    <div class="form-group">
                        <label for="name-1" class="control-label">Last Name</label>
                        <input id="name-1" class="form-control" type="text" name="last_name" required value="<?php echo $response['user'][0]['lastName']?>">
                        <small class="help-block">Displayed on your profile and in other places as your last name.</small>
                    </div>
                  <div class="form-group">
                    <label for="email-1" class="control-label">Email</label>
                    <input id="email-1" class="form-control" type="email" name="email" autocomplete="off" required value="<?php echo $response['user'][0]['email']?>">
                    <small class="help-block">Available publicly, but not shown on your profile.</small>
                  </div>

                    <div class="form-group">
                        <label for="email-1" class="control-label">Date of Birth</label>
                        <div class="input-group date">
                            <input id="demo-datepicker-2" class="form-control" name="dob" type="text" value="<?php echo $response['user'][0]['otherInformation']['dob']?>">
                            <span class="input-group-btn">
                                <button id="demo-datepicker-2-btn" class="btn btn-primary" type="button">
                                  <span class="icon icon-calendar"></span>
                                </button>
                            </span>
                        </div>
                        <small class="help-block">Date when you were born. Pick thi using the date picker.</small>
                    </div>

                    <div class="form-group">
                        <label for="demo-select2-5" class="form-label">Mobile phone</label>
                        <select id="demo-select2-5" class="form-control">
                            <option data-country-code="+1" value="us">United States +1</option>
                            <option data-country-code="+93" value="af">Afghanistan (‫افغانستان‬‎) +93</option>
                            <option data-country-code="+355" value="al">Albania (Shqipëri) +355</option>
                            <option data-country-code="+213" value="dz">Algeria +213</option>
                            <option data-country-code="+1684" value="as">American Samoa +1684</option>
                            <option data-country-code="+376" value="ad">Andorra +376</option>
                            <option data-country-code="+244" value="ao">Angola +244</option>
                            <option data-country-code="+1264" value="ai">Anguilla +1264</option>
                            <option data-country-code="+1268" value="ag">Antigua &amp; Barbuda +1268</option>
                            <option data-country-code="+54" value="ar">Argentina +54</option>
                            <option data-country-code="+374" value="am">Armenia (Հայաստան) +374</option>
                            <option data-country-code="+297" value="aw">Aruba +297</option>
                            <option data-country-code="+61" value="au">Australia +61</option>
                            <option data-country-code="+43" value="at">Austria (Österreich) +43</option>
                            <option data-country-code="+994" value="az">Azerbaijan (Azərbaycan) +994</option>
                            <option data-country-code="+1242" value="bs">Bahamas +1242</option>
                            <option data-country-code="+973" value="bh">Bahrain (‫البحرين‬‎) +973</option>
                            <option data-country-code="+880" value="bd">Bangladesh (বাংলাদেশ) +880</option>
                            <option data-country-code="+1246" value="bb">Barbados +1246</option>
                            <option data-country-code="+375" value="by">Belarus (Беларусь) +375</option>
                            <option data-country-code="+32" value="be">Belgium +32</option>
                            <option data-country-code="+501" value="bz">Belize +501</option>
                            <option data-country-code="+229" value="bj">Benin (Bénin) +229</option>
                            <option data-country-code="+1441" value="bm">Bermuda +1441</option>
                            <option data-country-code="+975" value="bt">Bhutan (འབྲུག) +975</option>
                            <option data-country-code="+591" value="bo">Bolivia +591</option>
                            <option data-country-code="+387" value="ba">Bosnia &amp; Herzegovina (Босна и Херцеговина) +387</option>
                            <option data-country-code="+267" value="bw">Botswana +267</option>
                            <option data-country-code="+55" value="br">Brazil (Brasil) +55</option>
                            <option data-country-code="+246" value="io">British Indian Ocean Territory +246</option>
                            <option data-country-code="+1284" value="vg">British Virgin Islands +1284</option>
                            <option data-country-code="+673" value="bn">Brunei +673</option>
                            <option data-country-code="+359" value="bg">Bulgaria (България) +359</option>
                            <option data-country-code="+226" value="bf">Burkina Faso +226</option>
                            <option data-country-code="+257" value="bi">Burundi (Uburundi) +257</option>
                            <option data-country-code="+855" value="kh">Cambodia (កម្ពុជា) +855</option>
                            <option data-country-code="+237" value="cm">Cameroon (Cameroun) +237</option>
                            <option data-country-code="+1" value="ca">Canada +1</option>
                            <option data-country-code="+238" value="cv">Cabo Verde (Kabu Verdi) +238</option>
                            <option data-country-code="+236" value="cf">Central African Republic (République centrafricaine) +236</option>
                            <option data-country-code="+235" value="td">Chad (Tchad) +235</option>
                            <option data-country-code="+56" value="cl">Chile +56</option>
                            <option data-country-code="+86" value="cn">China (中国) +86</option>
                            <option data-country-code="+57" value="co">Colombia +57</option>
                            <option data-country-code="+269" value="km">Comoros (‫جزر القمر‬‎) +269</option>
                            <option data-country-code="+243" value="cg">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo) +243</option>
                            <option data-country-code="+242" value="cg">Congo (Republic) (Congo-Brazzaville) +242</option>
                            <option data-country-code="+682" value="ck">Cook Islands +682</option>
                            <option data-country-code="+506" value="cr">Costa Rica +506</option>
                            <option data-country-code="+225" value="ci">Côte d&#x27;Ivoire +225</option>
                            <option data-country-code="+385" value="hr">Croatia (Hrvatska) +385</option>
                            <option data-country-code="+53" value="cu">Cuba +53</option>
                            <option data-country-code="+599" value="cw">Curaçao +599</option>
                            <option data-country-code="+357" value="cy">Cyprus (Κύπρος) +357</option>
                            <option data-country-code="+420" value="cz">Czech Republic (Česká republika) +420</option>
                            <option data-country-code="+45" value="dk">Denmark (Danmark) +45</option>
                            <option data-country-code="+253" value="dj">Djibouti +253</option>
                            <option data-country-code="+1767" value="do">Dominica +1767</option>
                            <option data-country-code="+1809" value="do">Dominican Republic (República Dominicana) +1809</option>
                            <option data-country-code="+593" value="ec">Ecuador +593</option>
                            <option data-country-code="+20" value="eg">Egypt (‫مصر‬‎) +20</option>
                            <option data-country-code="+503" value="sv">El Salvador +503</option>
                            <option data-country-code="+240" value="gq">Equatorial Guinea (Guinea Ecuatorial) +240</option>
                            <option data-country-code="+291" value="er">Eritrea +291</option>
                            <option data-country-code="+372" value="ee">Estonia (Eesti) +372</option>
                            <option data-country-code="+251" value="et">Ethiopia +251</option>
                            <option data-country-code="+500" value="fk">Falkland Islands (Islas Malvinas) +500</option>
                            <option data-country-code="+298" value="fo">Faroe Islands (Føroyar) +298</option>
                            <option data-country-code="+679" value="fj">Fiji +679</option>
                            <option data-country-code="+358" value="fi">Finland (Suomi) +358</option>
                            <option data-country-code="+33" value="fr">France +33</option>
                            <option data-country-code="+594" value="gf">French Guiana (Guyane française) +594</option>
                            <option data-country-code="+689" value="pf">French Polynesia (Polynésie française) +689</option>
                            <option data-country-code="+241" value="ga">Gabon +241</option>
                            <option data-country-code="+220" value="gm">Gambia +220</option>
                            <option data-country-code="+995" value="gs">Georgia (საქართველო) +995</option>
                            <option data-country-code="+49" value="de">Germany (Deutschland) +49</option>
                            <option data-country-code="+233" value="gh">Ghana (Gaana) +233</option>
                            <option data-country-code="+350" value="gi">Gibraltar +350</option>
                            <option data-country-code="+30" value="gr">Greece (Ελλάδα) +30</option>
                            <option data-country-code="+299" value="gl">Greenland (Kalaallit Nunaat) +299</option>
                            <option data-country-code="+1473" value="gd">Grenada +1473</option>
                            <option data-country-code="+590" value="gp">Guadeloupe +590</option>
                            <option data-country-code="+1671" value="gu">Guam +1671</option>
                            <option data-country-code="+502" value="gt">Guatemala +502</option>
                            <option data-country-code="+224" value="pg">Guinea (Guinée) +224</option>
                            <option data-country-code="+245" value="gw">Guinea-Bissau (Guiné-Bissau) +245</option>
                            <option data-country-code="+592" value="gy">Guyana +592</option>
                            <option data-country-code="+509" value="ht">Haiti +509</option>
                            <option data-country-code="+504" value="hn">Honduras +504</option>
                            <option data-country-code="+852" value="hk">Hong Kong (香港) +852</option>
                            <option data-country-code="+36" value="hu">Hungary (Magyarország) +36</option>
                            <option data-country-code="+354" value="is">Iceland (Ísland) +354</option>
                            <option data-country-code="+91" value="in">India (भारत) +91</option>
                            <option data-country-code="+62" value="id">Indonesia +62</option>
                            <option data-country-code="+98" value="ir">Iran (‫ایران‬‎) +98</option>
                            <option data-country-code="+964" value="iq">Iraq (‫العراق‬‎) +964</option>
                            <option data-country-code="+353" value="ie">Ireland +353</option>
                            <option data-country-code="+972" value="il">Israel (‫ישראל‬‎) +972</option>
                            <option data-country-code="+39" value="it">Italy (Italia) +39</option>
                            <option data-country-code="+1876" value="jm">Jamaica +1876</option>
                            <option data-country-code="+81" value="jp">Japan (日本) +81</option>
                            <option data-country-code="+962" value="jo">Jordan (‫الأردن‬‎) +962</option>
                            <option data-country-code="+7" value="kz">Kazakhstan (Казахстан) +7</option>
                            <option data-country-code="+254" value="ke" selected>Kenya +254</option>
                            <option data-country-code="+686" value="ki">Kiribati +686</option>
                            <option data-country-code="+965" value="kw">Kuwait (‫الكويت‬‎) +965</option>
                            <option data-country-code="+996" value="kg">Kyrgyzstan (Кыргызстан) +996</option>
                            <option data-country-code="+856" value="la">Laos (ລາວ) +856</option>
                            <option data-country-code="+371" value="lv">Latvia (Latvija) +371</option>
                            <option data-country-code="+961" value="lb">Lebanon (‫لبنان‬‎) +961</option>
                            <option data-country-code="+266" value="ls">Lesotho +266</option>
                            <option data-country-code="+231" value="lr">Liberia +231</option>
                            <option data-country-code="+218" value="ly">Libya (‫ليبيا‬‎) +218</option>
                            <option data-country-code="+423" value="li">Liechtenstein +423</option>
                            <option data-country-code="+370" value="lt">Lithuania (Lietuva) +370</option>
                            <option data-country-code="+352" value="lu">Luxembourg +352</option>
                            <option data-country-code="+853" value="mo">Macau (澳門) +853</option>
                            <option data-country-code="+389" value="mk">Macedonia (FYROM) (Македонија) +389</option>
                            <option data-country-code="+261" value="mg">Madagascar (Madagasikara) +261</option>
                            <option data-country-code="+265" value="mw">Malawi +265</option>
                            <option data-country-code="+60" value="my">Malaysia +60</option>
                            <option data-country-code="+960" value="mv">Maldives +960</option>
                            <option data-country-code="+223" value="so">Mali +223</option>
                            <option data-country-code="+356" value="mt">Malta +356</option>
                            <option data-country-code="+692" value="mh">Marshall Islands +692</option>
                            <option data-country-code="+596" value="mq">Martinique +596</option>
                            <option data-country-code="+222" value="mr">Mauritania (‫موريتانيا‬‎) +222</option>
                            <option data-country-code="+230" value="mu">Mauritius (Moris) +230</option>
                            <option data-country-code="+52" value="mx">Mexico (México) +52</option>
                            <option data-country-code="+691" value="fm">Micronesia +691</option>
                            <option data-country-code="+373" value="md">Moldova (Republica Moldova) +373</option>
                            <option data-country-code="+377" value="mc">Monaco +377</option>
                            <option data-country-code="+976" value="mn">Mongolia (Монгол) +976</option>
                            <option data-country-code="+382" value="me">Montenegro (Crna Gora) +382</option>
                            <option data-country-code="+1664" value="ms">Montserrat +1664</option>
                            <option data-country-code="+212" value="ma">Morocco +212</option>
                            <option data-country-code="+258" value="mz">Mozambique (Moçambique) +258</option>
                            <option data-country-code="+95" value="mm">Myanmar (Burma) (မြန်မာ) +95</option>
                            <option data-country-code="+264" value="na">Namibia (Namibië) +264</option>
                            <option data-country-code="+674" value="nr">Nauru +674</option>
                            <option data-country-code="+977" value="np">Nepal (नेपाल) +977</option>
                            <option data-country-code="+31" value="nl">Netherlands (Nederland) +31</option>
                            <option data-country-code="+687" value="nc">New Caledonia (Nouvelle-Calédonie) +687</option>
                            <option data-country-code="+64" value="nz">New Zealand +64</option>
                            <option data-country-code="+505" value="ni">Nicaragua +505</option>
                            <option data-country-code="+227" value="ng">Niger (Nijar) +227</option>
                            <option data-country-code="+234" value="ng">Nigeria +234</option>
                            <option data-country-code="+683" value="nu">Niue +683</option>
                            <option data-country-code="+6723" value="nf">Norfolk Island +6723</option>
                            <option data-country-code="+1" value="mp">Northern Mariana Islands +1</option>
                            <option data-country-code="+850" value="kp">North Korea (조선민주주의인민공화국) +850</option>
                            <option data-country-code="+47" value="no">Norway (Norge) +47</option>
                            <option data-country-code="+968" value="ro">Oman (‫عُمان‬‎) +968</option>
                            <option data-country-code="+92" value="pk">Pakistan (‫پاکستان‬‎) +92</option>
                            <option data-country-code="+680" value="pw">Palau +680</option>
                            <option data-country-code="+970" value="ps">Palestine (‫فلسطين‬‎) +970</option>
                            <option data-country-code="+507" value="pa">Panama (Panamá) +507</option>
                            <option data-country-code="+675" value="pg">Papua New Guinea +675</option>
                            <option data-country-code="+595" value="py">Paraguay +595</option>
                            <option data-country-code="+51" value="pe">Peru (Perú) +51</option>
                            <option data-country-code="+63" value="ph">Philippines +63</option>
                            <option data-country-code="+48" value="pl">Poland (Polska) +48</option>
                            <option data-country-code="+351" value="pt">Portugal +351</option>
                            <option data-country-code="+1787" value="pr">Puerto Rico +1787</option>
                            <option data-country-code="+974" value="qa">Qatar (‫قطر‬‎) +974</option>
                            <option data-country-code="+262" value="re">Réunion (La Réunion) +262</option>
                            <option data-country-code="+40" value="ro">Romania (România) +40</option>
                            <option data-country-code="+7" value="ru">Russia (Россия) +7</option>
                            <option data-country-code="+250" value="rw">Rwanda +250</option>
                            <option data-country-code="+685" value="ws">Samoa +685</option>
                            <option data-country-code="+378" value="sm">San Marino +378</option>
                            <option data-country-code="+239" value="st">São Tomé &amp; Príncipe (São Tomé e Príncipe) +239</option>
                            <option data-country-code="+966" value="sa">Saudi Arabia (‫المملكة العربية السعودية‬‎) +966</option>
                            <option data-country-code="+221" value="sn">Senegal +221</option>
                            <option data-country-code="+381" value="rs">Serbia (Србија) +381</option>
                            <option data-country-code="+248" value="sc">Seychelles +248</option>
                            <option data-country-code="+232" value="sl">Sierra Leone +232</option>
                            <option data-country-code="+65" value="sg">Singapore +65</option>
                            <option data-country-code="+1721" value="sx">Sint Maarten +1721</option>
                            <option data-country-code="+421" value="sk">Slovakia (Slovensko) +421</option>
                            <option data-country-code="+386" value="si">Slovenia (Slovenija) +386</option>
                            <option data-country-code="+677" value="sb">Solomon Islands +677</option>
                            <option data-country-code="+252" value="so">Somalia (Soomaaliya) +252</option>
                            <option data-country-code="+27" value="za">South Africa +27</option>
                            <option data-country-code="+82" value="kr">South Korea (대한민국) +82</option>
                            <option data-country-code="+211" value="ss">South Sudan (‫جنوب السودان‬‎) +211</option>
                            <option data-country-code="+34" value="es">Spain (España) +34</option>
                            <option data-country-code="+94" value="lk">Sri Lanka (ශ්‍රී ලංකාව) +94</option>
                            <option data-country-code="+590" value="bl">Saint Barthélemy (Saint-Barthélemy) +590</option>
                            <option data-country-code="+290" value="sh">Saint Helena, Ascension &amp; Tristan da Cunha +290</option>
                            <option data-country-code="+1869" value="kn">Saint Kitts &amp; Nevis +1869</option>
                            <option data-country-code="+1758" value="lc">Saint Lucia +1758</option>
                            <option data-country-code="+590" value="mf">Saint Martin (Saint-Martin) +590</option>
                            <option data-country-code="+508" value="pm">Saint Pierre &amp; Miquelon (Saint-Pierre-et-Miquelon) +508</option>
                            <option data-country-code="+1784" value="vc">Saint Vincent &amp; Grenadines +1784</option>
                            <option data-country-code="+249" value="sd">Sudan (‫السودان‬‎) +249</option>
                            <option data-country-code="+597" value="sr">Suriname +597</option>
                            <option data-country-code="+268" value="sz">Swaziland +268</option>
                            <option data-country-code="+46" value="se">Sweden (Sverige) +46</option>
                            <option data-country-code="+41" value="ch">Switzerland (Schweiz) +41</option>
                            <option data-country-code="+963" value="sy">Syria (‫سوريا‬‎) +963</option>
                            <option data-country-code="+886" value="tw">Taiwan (台灣) +886</option>
                            <option data-country-code="+992" value="tj">Tajikistan +992</option>
                            <option data-country-code="+255" value="tz">Tanzania +255</option>
                            <option data-country-code="+66" value="th">Thailand (ไทย) +66</option>
                            <option data-country-code="+670" value="tl">Timor-Leste +670</option>
                            <option data-country-code="+228" value="tg">Togo +228</option>
                            <option data-country-code="+690" value="tk">Tokelau +690</option>
                            <option data-country-code="+676" value="to">Tonga +676</option>
                            <option data-country-code="+1868" value="tt">Trinidad &amp; Tobago +1868</option>
                            <option data-country-code="+216" value="tn">Tunisia +216</option>
                            <option data-country-code="+90" value="tr">Turkey (Türkiye) +90</option>
                            <option data-country-code="+993" value="tm">Turkmenistan +993</option>
                            <option data-country-code="+1649" value="tc">Turks &amp; Caicos Islands +1649</option>
                            <option data-country-code="+688" value="tv">Tuvalu +688</option>
                            <option data-country-code="+1340" value="vi">U.S. Virgin Islands +1340</option>
                            <option data-country-code="+256" value="ug">Uganda +256</option>
                            <option data-country-code="+380" value="ua">Ukraine (Україна) +380</option>
                            <option data-country-code="+971" value="ae">United Arab Emirates (‫الإمارات العربية المتحدة‬‎) +971</option>
                            <option data-country-code="+44" value="gb">United Kingdom +44</option>
                            <option data-country-code="+1" value="us">United States +1</option>
                            <option data-country-code="+598" value="uy">Uruguay +598</option>
                            <option data-country-code="+998" value="uz">Uzbekistan (Oʻzbekiston) +998</option>
                            <option data-country-code="+678" value="vu">Vanuatu +678</option>
                            <option data-country-code="+379" value="va">Vatican City (Città del Vaticano) +379</option>
                            <option data-country-code="+58" value="ve">Venezuela +58</option>
                            <option data-country-code="+84" value="vn">Vietnam (Việt Nam) +84</option>
                            <option data-country-code="+681" value="wf">Wallis &amp; Futuna +681</option>
                            <option data-country-code="+967" value="ye">Yemen (‫اليمن‬‎) +967</option>
                            <option data-country-code="+260" value="zm">Zambia +260</option>
                            <option data-country-code="+263" value="zw">Zimbabwe +263</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input id="demo-select2-5-input" class="form-control" name="mobile"  type="text" value="<?php echo $response['user'][0]['otherInformation']['mobileNumber']?>" required>
                        <small class="help-block">Will be used for payments and contacting for progress</small>
                    </div>

                    <div class="form-group">
                        <label for="name-1" class="control-label">Home Town</label>
                        <input id="name-1" class="form-control" type="text" name="home_town" required value="<?php echo $response['user'][0]['otherInformation']['homeTown']?>" required>
                        <small class="help-block">Town where you were born</small>
                    </div>

                    <div class="form-group">
                        <label for="name-1" class="control-label">City</label>
                        <input id="name-1" class="form-control" type="text" name="city" required value="<?php echo $response['user'][0]['otherInformation']['city']?>" required>
                        <small class="help-block">City where you currently live</small>
                    </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include("footer.php") ?>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/demo.min.js"></script>
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