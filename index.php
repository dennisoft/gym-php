<?php
session_start();
if ( isset( $_SESSION['id'] ) ) {
    require_once ('app/account/fetch-details-api.php');
    require_once ('app/reports/fetch-details-api.php');
    $response = getUser( $_SESSION['id']);
    $report = getReports($_SESSION['id']);
}
else {header("Location: login.php");}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elephant Template &middot; The fastest way to build Modern Admin APPS for any platform, browser, or device.</title>
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
                <h1 style="font-size: 25px; color: white; margin-top: -5px">GYM</h1>
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
                        <a class="dropdown-toggle" href="index.html#" role="button" data-toggle="dropdown" aria-haspopup="true">
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
                            <div class="dropdown-footer">
                                <a class="dropdown-btn" href="index.html#">See All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="index.html#" role="button" data-toggle="dropdown" aria-haspopup="true">
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
                                <a class="dropdown-link" href="index.html#">Mark all as read</a>
                                <h5 class="dropdown-heading">Recent Notifications</h5>
                            </div>
                            <div class="dropdown-body">
                                <div class="list-group list-group-divided custom-scrollbar">
                                    <a class="list-group-item" href="index.html#">
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
                                    <a class="list-group-item" href="index.html#">
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
                                    <a class="list-group-item" href="index.html#">
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
                                    <a class="list-group-item" href="index.html#">
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
                                    <a class="list-group-item" href="index.html#">
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
                                    <a class="list-group-item" href="index.html#">
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
                                    <a class="list-group-item" href="index.html#">
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
                                <a class="dropdown-btn" href="index.html#">See All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown hidden-xs">
                        <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                            <img class="circle" width="36" height="36" src="img/0180441436.jpg" alt="Teddy Wilson"> <?php echo $response['user'][0]['name']. ' '.$response['user'][0]['lastName']?>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="app/login/logout.php">Sign out</a></li>
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
                        <span class="d-ib">Dashboard</span>
                        <span class="d-ib">
                  <a class="title-bar-shortcut" href="index.html#" title="Add to shortcut list" data-container="body" data-toggle-text="Remove from shortcut list" data-trigger="hover" data-placement="right" data-toggle="tooltip">
                    <span class="sr-only">Add to shortcut list</span>
                  </a>
                </span>
                    </h1>
                    <p class="title-bar-description">
                        <small>You can personalize your dashboard by using <a href="widgets.html">widgets</a>.</small>
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
                <nav id="sidenav" class="sidenav-collapse collapse">
                    <ul class="sidenav level-1">
                        <li class="sidenav-search">
                            <form class="sidenav-form" action="http://demo.madebytilde.com/">
                                <div class="form-group form-group-sm">
                                    <div class="input-with-icon">
                                        <input class="form-control" type="text" placeholder="Search…">
                                        <span class="icon icon-search input-icon"></span>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li class="sidenav-heading">Navigation</li>
                        <li class="sidenav-item has-subnav open">
                            <a href="index.html#multi-level-menu">
                                <span class="sidenav-icon icon icon-works">&#103;</span>
                                <span class="sidenav-label">Account Manager</span>
                            </a>
                            <ul class="sidenav level-2">
                                <li class="sidenav-heading">With Icons</li>
                                <li class="sidenav-item">
                                    <a href="account">
                                        <span class="icon icon-works">&#80;</span>View Profile
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="account">
                                        <span class="icon icon-works">&#70;</span>Change Information
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item has-subnav open">
                            <a href="index.html#multi-level-menu" >
                                <span class="sidenav-icon icon icon-works">&#103;</span>
                                <span class="sidenav-label">Payment Manager</span>
                            </a>
                            <ul class="sidenav level-2">
                                <li class="sidenav-heading">With Icons</li>
                                <li class="sidenav-item">
                                    <a href="payments">
                                        <span class="icon icon-works">&#80;</span>View Payments
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="payments">
                                        <span class="icon icon-works">&#70;</span>Make Payment
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item has-subnav open">
                            <a href="index.html#multi-level-menu" >
                                <span class="sidenav-icon icon icon-works">&#103;</span>
                                <span class="sidenav-label">WorkOut Manager</span>
                            </a>
                            <ul class="sidenav level-2">
                                <li class="sidenav-heading">With Icons</li>
                                <li class="sidenav-item">
                                    <a href="payments">
                                        <span class="icon icon-works">&#80;</span>View Schedule
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="payments">
                                        <span class="icon icon-works">&#70;</span>Add WorkOut
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="layout-content-body">
            <br>
            <div class="row gutter-xs">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row gutter-xs">
                        <div class="col-xs-12 col-sm-4">
                            <div style="background-color: #1c90fb; color: white" class="panel panel-body text-center" data-toggle="match-height">
                                <span style="font-size:45px" class="icon icon-pie-chart"></span>
                                <h2>Height Report</h2>
                                <h3>Current Height - <?php echo $report['reports'][0]['height']?> CM</h3>
                                <p>
                                    <small>Previous Height - <?php echo $report['reports'][1]['height']?> CM</small>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div style="background: linear-gradient(45deg,#2ed8b6,#59e0c5);color: white" class="panel panel-body text-center" data-toggle="match-height">
                                <span style="font-size:45px" class="icon icon-pie-chart"></span>
                                <h2>Fat Report</h2>
                                <h3>Current Fat - <?php echo $report['reports'][0]['fat']?> KG</h3>
                                <p>
                                    <small>Previous Fat - <?php echo $report['reports'][1]['fat']?> KG</small>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div style="background: linear-gradient(45deg,#ff5370,#ff869a); color: white;" class="panel panel-body text-center" data-toggle="match-height">
                                <span style="font-size:45px" class="icon icon-pie-chart"></span>
                                <h2>Weight Report</h2>
                                <h3>Current Height - <?php echo $report['reports'][0]['weight']?> KG</h3>
                                <p>
                                    <small>Previous Height - <?php echo $report['reports'][1]['weight']?> KG</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row gutter-xs">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row gutter-xs">
                        <div class="col-xs-12 col-sm-4">
                            <div style="background-color: purple;color: white" class="panel panel-body text-center" data-toggle="match-height">
                                <span style="font-size:45px" class="icon icon-pie-chart"></span>
                                <h2>Thigh Report</h2>
                                <h3>Current Height - <?php echo $report['reports'][0]['thigh']?> CM</h3>
                                <p>
                                    <small>Previous Height - <?php echo $report['reports'][1]['thigh']?> CM</small>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div style="background-color: black; color: white;" class="panel panel-body text-center" data-toggle="match-height">
                                <span style="font-size:45px" class="icon icon-pie-chart"></span>
                                <h2>Waist Report</h2>
                                <h3>Current Height - <?php echo $report['reports'][0]['waist']?> CM</h3>
                                <p>
                                    <small>Previous Height - <?php echo $report['reports'][1]['waist']?> CM</small>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div style="background-color: #aea6ec;color: white" class="panel panel-body text-center" data-toggle="match-height">
                                <span style="font-size:45px" class="icon icon-pie-chart"></span>
                                <h2>Arms Report</h2>
                                <h3>Current Height - <?php echo $report['reports'][0]['arms']?> CM</h3>
                                <p>
                                    <small>Previous Height - <?php echo $report['reports'][1]['arms']?> CM</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center m-b">
                    <br>
                    <br>
                    <h4>
                        <a class="label label-info" href="http://goo.gl/1yz6JT" target="_blank">
                            <span>Account Details</span>
                        </a>
                        <span class="label label-info">
                            <span>Manage all your account information here!</span>
                        </span>
                    </h4>
                <br>
            </div>

            <div class="row gutter-xs">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row gutter-xs">
                        <div class="col-xs-12 col-sm-4">
                            <div class="pricing-card">
                                <div class="pricing-card-body">
                                    <h1 class="pricing-card-price">
                                        Account Manager
                                    </h1>
                                    <ul class="pricing-card-details">
                                        <li>Edit your account deatils</li>
                                    </ul>
                                    <a class="btn btn-primary btn-pill" href="account">Take me there</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="pricing-card">
                                <div class="pricing-card-body">
                                    <h1 class="pricing-card-price">
                                        Payment Manager
                                    </h1>
                                    <ul class="pricing-card-details">
                                        <li>View and make payments</li>
                                    </ul>
                                    <a class="btn btn-primary btn-pill" href="payments">Take me there</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="pricing-card">
                                <div class="pricing-card-body">
                                    <h1 class="pricing-card-price">
                                        WorkOut Manager
                                    </h1>
                                    <ul class="pricing-card-details">
                                        <li>Manage what you do at the gym and view schedules</li>
                                    </ul>
                                    <a class="btn btn-primary btn-pill" href="workouts">Take me there</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="layout-footer">
        <div class="layout-footer-body">
            <small class="version">Version 1.4.0</small>
            <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
        </div>
    </div>
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