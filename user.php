<?php
    // initialize the session
    session_start();
    
    // check if the user is logged in, if not then redirect to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: login.php");
        exit;
    }
    
    // include config file
    require_once "assets/connection.php";
    
    // define variables and initialize with empty values
    $new_password = $confirm_password = "";
    $new_password_err = $confirm_password_err = "";
    
    // processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    
        // validate new password
        if(empty(trim($_POST["new_password"])))
        {
            $new_password_err = '<p class="text-danger">Please enter the new password.</p>';     
        } 
        elseif(strlen(trim($_POST["new_password"])) < 6)
        {
            $new_password_err = '<p class="text-danger">Password must have atleast 6 characters.</p>';
        } 
        else
        {
            $new_password = trim($_POST["new_password"]);
        }
        
        // validate confirm password
        if(empty(trim($_POST["confirm_password"])))
        {
            $confirm_password_err = '<p class="text-danger">Please confirm the password.</p>';
        } 
        else
        {
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($new_password_err) && ($new_password != $confirm_password))
            {
                $confirm_password_err = '<p class="text-danger">Password did not match.</p>';
            }
        }
            
        // check input errors before updating the database
        if(empty($new_password_err) && empty($confirm_password_err))
        {
            // prepare an update statement
            $sql = "UPDATE users SET password = ? WHERE id = ?";
            
            if($stmt = mysqli_prepare($link, $sql))
            {
                // bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
                
                // set parameters
                $param_password = password_hash($new_password, PASSWORD_DEFAULT);
                $param_id = $_SESSION["id"];
                
                // attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt))
                {
                    // password updated successfully. Destroy the session, and redirect to login page
                    session_destroy();
                    header("location: login.php");
                    exit();
                } 
                else
                {
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            
            // close statement
            mysqli_stmt_close($stmt);
        }
        
        // close connection
        mysqli_close($connection);
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>

    <!-- add library -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">
    <!-- add styles css -->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

</head>
<body>
<div>
        <!--BEGIN THEME SETTING
        <div id="theme-setting">
            <a href="#" data-toggle="dropdown" data-step="1" data-intro="&lt;b&gt;Many styles&lt;/b&gt; and &lt;b&gt;colors&lt;/b&gt; be created for you. Let choose one and enjoy it!"
                data-position="left" class="btn-theme-setting"><i class="fa fa-cog"></i></a>
            <div class="content-theme-setting">
                <select id="list-style" class="form-control">
                    <option value="style1">Flat Squared style</option>
                    <option value="style2">Flat Rounded style</option>
                    <option value="style3" selected="selected">Flat Border style</option>
                </select>
            </div>
        </div>
        END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        
<!--BEGIN BACK TO TOP-->
<!--<a id="totop" href="#"><i class="fa fa-angle-up"></i></a>-->
<a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
<!--END BACK TO TOP-->

        <!--END TOPBAR-->
        <!--<div id="wrapper">-->
            <!--BEGIN SIDEBAR MENU-->
                        <!--END SIDEBAR MENU-->

            <!--<div id="page-wrapper">-->
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
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
                    <div class="col-md-12"><h2>Profile: MySTAR Admin</h2>

                        <div class="row mtl">
                            <div class="col-md-3">
                              <!--
                                <div class="form-group">
                                    <div class="text-center mbl"><img src="http://lorempixel.com/640/480/business/1/" alt="" class="img-responsive"/></div>
                                    <div class="text-center mbl"><a href="#" class="btn btn-green"><i class="fa fa-upload"></i>&nbsp;
                                        Upload</a></div>
                                </div>
                              -->
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
                                <div style='background-color:#3C3C3C;padding:2px;padding-left:15px;width:auto;color:white'><h4>Edit Profile</h4></div></li>
                                <div align="center"><br></div>
                                  <div id="generalTabContent" class="tab-content">
                                    <div id="tab-edit" class="tab-pane fade in active">
                            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-horizontal"> 

                                            <h3>Account Setting</h3>

                                            <div class="form-group"><label class="col-sm-3 control-label">Username</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                            <input readonly="true" name="user" type="text" value="mystar" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group"><label class="col-sm-3 control-label">Password</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <input id="password1" name="password1" type="password" placeholder="password" required class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Confirm Password</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><input oninput="comparePass()" id="password2" name="password2" type="password" placeholder="password" required class="form-control"/>
                                                          <p id="demo"></p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
<!--
                                            <h3>Contact Setting</h3>

                                            <div class="form-group"><label class="col-sm-3 control-label">Email</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name="email" type="email" value="shashie@mystar-msc.com" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group"><label class="col-sm-3 control-label">Mobile Phone <br>(eg. 60123456789)</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name="mobile" type="text" value="60196691515" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
-->
                                            <hr/>
                                            <button type="submit" style="background-color:#36a2df;color:white" class="btn btn-block">Save</button>

                                        </form>
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
         
<script src="script/jquery-1.10.2.min.js"></script>
    <script src="script/jquery-migrate-1.2.1.min.js"></script>
    <script src="script/jquery-ui.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/bootstrap-hover-dropdown.js"></script>
    <script src="script/html5shiv.js"></script>
    <script src="script/respond.min.js"></script>
    <script src="script/jquery.metisMenu.js"></script>
    <script src="script/jquery.slimscroll.js"></script>
    <script src="script/jquery.cookie.js"></script>
    <script src="script/icheck.min.js"></script>
    <script src="script/custom.min.js"></script>
    <script src="script/jquery.news-ticker.js"></script>
    <script src="script/jquery.menu.js"></script>
    <script src="script/pace.min.js"></script>
    <script src="script/holder.js"></script>
    <script src="script/responsive-tabs.js"></script>
    <script src="script/jquery.flot.js"></script>
    <script src="script/jquery.flot.categories.js"></script>
    <script src="script/jquery.flot.pie.js"></script>
    <script src="script/jquery.flot.tooltip.js"></script>
    <script src="script/jquery.flot.resize.js"></script>
    <script src="script/jquery.flot.fillbetween.js"></script>
    <script src="script/jquery.flot.stack.js"></script>
    <script src="script/jquery.flot.spline.js"></script>
    <script src="script/zabuto_calendar.min.js"></script>

    <script src="script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="script/highcharts.js"></script>
    <script src="script/data.js"></script>
    <script src="script/drilldown.js"></script>
    <script src="script/exporting.js"></script>
    <script src="script/highcharts-more.js"></script>
    <script src="script/charts-highchart-pie.js"></script>
    <script src="script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>

    <!-- <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <div class="wrapper">
                            <h2 class="text-center">Reset Password</h2>
                            <p class="text-center">Please fill out this form to reset your password.</p>
                            <hr>
                            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                                <div class="form-group <?= (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                                    <label>New Password</label>
                                    <input type="password" name="new_password" class="form-control" placeholder="Enter new password" value="<?= $new_password; ?>">
                                    <span class="help-block"><?= $new_password_err; ?></span>
                                </div>
                                <div class="form-group <?= (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control" placeholder="Enter confirm password">
                                    <span class="help-block"><?= $confirm_password_err; ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline-success" value="Submit">
                                    <a class="btn btn-link" href="index.php">Cancel</a>
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</body>
</html>
