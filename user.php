<?php
// initialize the session
session_start();

// check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Charts (Day) Node ID: 10| MySTAR GeoAlert</title>
    <!-- Bootstrap -->

    <!-- add library -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->

    <!-- navbar code -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS CDN -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/css/all.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/bootstrap.min.css">

    <link type="text/css" rel="stylesheet" href="assets/css/css/animate.css">
    <!-- <link type="text/css" rel="stylesheet" href="web/styles1/all.css"> -->
    <link type="text/css" rel="stylesheet" href="assets/css/css/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/pace.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/jquery.news-ticker.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/jplist-custom.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="index.php">
                    <h3>GeoAlertSystem</h3>
                </a>
            </div>

            <ul class="list-unstyled components">
        <li>
          <a href="index.php" class="list-items"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a>
        </li>
        <li>
          <a href="nodes.php" class="list-items"><i class="fas fa-map-marker-alt"></i>&nbsp; Nodes</a>
        </li>
        <li>
          <a href="Alarms.php" class="list-items"><i class="fas fa-bell fa fw"></i>&nbsp; Alarms</a>
        </li>
        <li>
          <a href="genchart.php" class="list-items"><i class="fas fa-chart-bar fa fw"></i>&nbsp; Charts</a>
        </li>
        <li>
          <a href="reports.php" class="list-items"><i class="fas fa-file-alt"></i>&nbsp; Reports</a>
        </li>
        <li>
          <a href="user.php" class="list-items"><i class="fas fa-user"></i>&nbsp; User</a>
        </li>
        <li>
          <a target="_blank" href="/geoalertmanual.pdf"  class="list-items"><i class="fa fa-life-ring fa-fw"></i>&nbsp; Manual</a>
        </li>
        <li>
          <a href="reset-password.php" class="list-items"> <i class="fa fa-key"></i>&nbsp; Reset Password</a>
        </li>
        <li>
          <a href="logout.php" class="list-items"><i class="fas fa-sign-out-alt"></i>&nbsp; Sign Out </a>
        </li>
      </ul>
        </nav>
        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="navbar navbar-light amber lighten-4 mb-4">
                        <a class="animated-icon1" href="Alarms.php"><span></span><span></span><span></span></a>
                    </div>
                </div>
            </nav>
            <div>
                <script>
                    var auto_refresh = setInterval(
                        function() {
                            location.reload();
                        }, 1200000); // refreshing after every 15000 milliseconds
                </script>

                <style>
                    canvas {
                        -moz-user-select: none;
                        -webkit-user-select: none;
                        -ms-user-select: none;
                        width: 100% !important;
                        max-width: 1920px;
                        height: auto !important;
                    }
                </style>
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            User</div>
                    </div>

                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">

                                <div class="col-md-12">
                                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Profile: MySTAR Admin</h2>
                                        
                                        <div class="row mtl">
                                            <div class="col-md-3">
                                                <table class="table table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Username</td>
                                                            <td>mystar</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Full Name</td>
                                                            <td>MySTAR Admin</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td>shashie@mystar-msc.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mobile No</td>
                                                            <td>60196691515</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-9">
                                                <div>
                                                    <div style="background-color:#3C3C3C;padding:7px;padding-left:5px;width:auto;color:white">
                                                        <h5>Edit Profile</h5>
                                                    </div>
                                                    <form action="" method="post" class="form-horizontal">
                                                        <h3>Account Setting</h3>

                                                        <div class="form-group"><label class="col-sm-3 control-label">Username</label>

                                                            <div class="col-sm-9 controls">
                                                                <div class="row">
                                                                    <div class="col-xs-9"><input readonly="true" name="user" type="text" value="mystar" class="form-control" /></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group"><label class="col-sm-3 control-label">Password</label>

                                                            <div class="col-sm-9 controls">
                                                                <div class="row">
                                                                    <div class="col-xs-4"><input id="password1" name="password1" type="password" placeholder="password" required class="form-control" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label class="col-sm-3 control-label">Confirm Password</label>

                                                            <div class="col-sm-9 controls">
                                                                <div class="row">
                                                                    <div class="col-xs-4"><input oninput="comparePass()" id="password2" name="password2" type="password" placeholder="password" required class="form-control" />
                                                                        <p id="demo"></p>
                                                                    </div>


                                                                    <script>
                                                                        function comparePass() {
                                                                            var password1 = document.getElementById("password1").value;
                                                                            var password2 = document.getElementById("password2").value;

                                                                            if (password1 == password2)
                                                                                document.getElementById("demo").innerHTML = "Passwords match";
                                                                            else
                                                                                document.getElementById("demo").innerHTML = "Passwords mismatch. Try again.";
                                                                        }
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button type="submit" style="background-color:#36a2df;color:white" class="btn btn-block">Save</button>

                                                    </form>
                                                    <div align="center"><br></div>
                                                    <div id="generalTabContent" class="tab-content">
                                                        <div id="tab-edit" class="tab-pane fade in active">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END CONTENT-->
                    <!--BEGIN FOOTER-->
                    <div id="footer">
                        <div class="copyright">
                            <a href="" target="_blank" style="color:#999999; text-decoration:none;">2020 © Powered by Bahagian Kejuruteraan Cerun, JKR</a>
                        </div>
                    </div>

                </div>
                <!-- jQuery CDN - Slim version (=without AJAX) -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <!-- Popper.JS -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
                <!-- Bootstrap JS -->
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#sidebarCollapse').on('click', function() {
                            $('#sidebar').toggleClass('active');
                            $(this).toggleClass('active');
                        });
                    });
                </script>
                <script src="assets/script1/jquery-1.10.2.min.js"></script>
                <script src="assets/script1/jquery-migrate-1.2.1.min.js"></script>
                <script src="assets/script1/jquery-ui.js"></script>
                <script src="assets/script1/bootstrap.min.js"></script>
                <script src="assets/script1/bootstrap-hover-dropdown.js"></script>
                <script src="assets/script1/html5shiv.js"></script>
                <script src="assets/script1/respond.min.js"></script>
                <script src="assets/script1/jquery.metisMenu.js"></script>
                <script src="assets/script1/jquery.slimscroll.js"></script>
                <script src="assets/script1/jquery.cookie.js"></script>
                <script src="assets/script1/icheck.min.js"></script>
                <script src="assets/script1/custom.min.js"></script>
                <script src="assets/script1/jquery.news-ticker.js"></script>
                <script src="assets/script1/jquery.menu.js"></script>
                <script src="assets/script1/pace.min.js"></script>
                <script src="assets/script1/holder.js"></script>
                <script src="assets/script1/responsive-tabs.js"></script>
                <script src="assets/script1/jquery.flot.js"></script>
                <script src="assets/script1/jquery.flot.categories.js"></script>
                <script src="assets/script1/jquery.flot.pie.js"></script>
                <script src="assets/script1/jquery.flot.tooltip.js"></script>
                <script src="assets/script1/jquery.flot.resize.js"></script>
                <script src="assets/script1/jquery.flot.fillbetween.js"></script>
                <script src="assets/script1/jquery.flot.stack.js"></script>
                <script src="assets/script1/jquery.flot.spline.js"></script>
                <script src="assets/script1/zabuto_calendar.min.js"></script>
                <script src="assets/script1/index.js"></script>
                <!--LOADING SCRIPTS FOR CHARTS-->
                <script src="assets/script1/highcharts.js"></script>
                <script src="assets/script1/data.js"></script>
                <script src="assets/script1/drilldown.js"></script>
                <script src="assets/script1/exporting.js"></script>
                <script src="assets/script1/highcharts-more.js"></script>
                <script src="assets/script1/charts-highchart-pie.js"></script>
                <script src="assets/script1/charts-highchart-more.js"></script>
                <script src="assets/script1/charts-flotchart.js"></script>

                <!--CORE JAVASCRIPT-->
                <script src="script/main.js"></script>

</body>

</html>