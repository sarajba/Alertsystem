<?php
// initialize the session
session_start();

// check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// include config file
require_once "assets/connection.php";

// define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = '<p class="text-danger">Please enter username.</p>';
    } else {
        $username = trim($_POST["username"]);
    }

    // check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = '<p class="text-danger">Please enter your password.</p>';
    } else {
        $password = trim($_POST["password"]);
    }

    // validate credentials
    if (empty($username_err) && empty($password_err)) {
        // prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($connection, $sql)) {
            // bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // set parameters
            $param_username = $username;

            // attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // store result
                mysqli_stmt_store_result($stmt);

                // check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // password is correct, so start a new session
                            session_start();

                            // store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // redirect user to welcome page
                            header("location: index.php");
                        } else {
                            // display an error message if password is not valid
                            $password_err = '<p class="text-danger">The password you entered was not valid.</p>';
                        }
                    }
                } else {
                    // display an error message if username doesn't exist
                    $username_err = '<p class="text-danger">No account found with that username.</p>';
                }
            } else {
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
<html>

<head>
    <title>Home | MySTAR GeoAlert</title>
    <!-- Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    	<![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <style type="text/css">
        .outer {
            display: table;
            position: absolute;
            height: 100%;
            width: 100%;
        }

        .middle {
            display: table-cell;
            vertical-align: middle;
        }

        .inner {
            margin-left: auto;
            margin-right: auto;
            /*width: 400px; whatever width you want*/
        }


        .auto-style23 {
            text-align: center;
        }

        .auto-style24 {
            color: #FFFFFF;
        }

        .auto-style25 {
            text-decoration: none;
        }

        .auto-style26 {
            font-family: Calibri;
        }

        .auto-style27 {
            background-color: #FFFFFF;
        }

        body {
            font-family: Calibri;
        }


        .border1 {
            border-radius: 5px;
            padding: 5px 10px;
            background-color: #337AB7;
            color: white;
            width: 50%;
        }

        .border2 {
            border-radius: 5px;
            padding: 5px 10px;
            color: #337AB7;
            width: 50%;
        }


        .zoom-icon,
        .glow-icon,
        .color-icon {
            -moz-transition: all .4s ease-out;
            -webkit-transition: all .4s ease-out;
            transition: all .4s ease-out;
        }

        .glow-icon:hover {
            text-shadow: 0 0 40px rgba(150, 200, 0, 0.5);
        }

        .zoom-icon {
            display: inline-block;
        }

        .zoom-icon:hover {
            -webkit-transform: scale3d(1.3, 1.3, 1.3);
        }

        .color-icon:hover {
            color: rgba(200, 100, 100, 1);
        }

        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            width: 100%;
        }

        .img1 {
            width: 100%;
        }

        .bgcolor {

            background-color: #282c34;

        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
    </style>

</head>
<body id="login" class="bgcolor">

    <video autoplay muted loop id="myVideo">
        <source src="assets/images/video.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="outer">
        <div class="middle">
            <div class="inner">
                <div class="container">
                    <!--<div style="background:transparent !important" class="jumbotron">-->
                    <div class="jumbotron" style="">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-6" align="center">
                                        <img src="assets/images/tldm_logo.png" width="200px">
                                        <h2><strong>SISTEM PEMANTAUAN REAL-TIME<br>TLDM LANGKAWI</strong></h2>
                                    </div>
                                    <div class="col-md-6" style="border-left: 10px ridge">
                                        <h2>Sign In</h2>
                                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input type="text" class="form-control" placeholder="Username" value="<?= $username; ?>" name="username"  />
                                                <span class="help-block"><?= $username_err; ?></span>

                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input type="password" class="form-control" placeholder="Password" name="password"/>
                                                <span class="help-block"><?= $password_err; ?></span>

                                            </div>
                                            <br>
                                            <button class="btn btn-large btn-success input-block-level form-control" type="submit" name="btn-login"><span style="font-size:medium;">SIGN IN</span></button>

                                        </form>
                                        <br>

                                        <div class="col-md-6" align="center">
                                            <strong>GeoAlert Powered by</strong>
                                            <br>
                                            <img src="assets/images/bkcguymain.png" width="140px">
                                            <br><br>
                                        </div>

                                        <div class="col-md-6" align="center">
                                            <strong>A Project by</strong>
                                            <br>
                                            <img src="assets/images/jkrlangkawi.png" width="120px">
                                            <br>
                                            <br>
                                            <strong>System Integration by</strong>
                                            <img src="assets/images/logo_front.png" width="120px">
                                            <br>
                                        </div>
                                    </div>
                                    <div style="text-align:right">
                                        <!--<a href="fpass.php" class="auto-style25">[ Lost your Password? ] </a>-->
                                    </div>
                                </div>
                                <!--end inner Row-->
                            </div>
                            <!--end Column-->
                        </div>
                        <!--end Row-->
                    </div>
                    <!--end jumbotron-->
                </div>
                <!--end container-->
                <div class="footer">
                </div>
            </div>
        </div>
    </div>
</body>
</html>