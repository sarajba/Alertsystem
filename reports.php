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
                    <a href="#" class="list-items"><i class="fas fa-chart-bar fa fw"></i>&nbsp; Charts</a>
                </li>
                <li>
                    <a href="reports.php" class="list-items"><i class="fas fa-file-alt"></i>&nbsp; Reports</a>
                </li>
                <li>
                    <a href="#" class="list-items"><i class="fas fa-user"></i>&nbsp; User</a>
                </li>
                <li>
                    <a href="#" class="list-items"><i class="fa fa-life-ring fa-fw"></i>&nbsp; Manual</a>
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
            <!-- <div class="slide-pic">
                <h1>Content will be here</h1>
            </div> -->
            <div>
                <script>
var auto_refresh = setInterval(
function() {
location.reload();
}, 1200000); // refreshing after every 15000 milliseconds
</script>

<style>
canvas{
-moz-user-select: none;
-webkit-user-select: none;
-ms-user-select: none;
width: 100% !important;
max-width: 1920px;
height: auto !important;
}
</style>
           <!--END TOPBAR-->

    <!--BEGIN DIV ID wrapper-->
    <!--<div id="wrapper">-->

      <!--BEGIN SIDEBAR MENU-->
      <div class="noprint">
            </div>
      <!--END SIDEBAR MENU-->

      <!--BEGIN DIV ID page-wrapper-->
        
      <!--<div id="page-wrapper">-->

        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div class="noprint">
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    Report
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
        <div class="page-content">
        <div id="tab-general">
        <div class="row mbl">
            
        <!------------------------------------------------------------->

        <div class="col-lg-12">
        <div class="page-content">
        <div class="row">
        <div class="col-lg-12">
        <div class="panel">
        <div class="panel-body">

<!------------------------------------------------------------->

                                
<div class = "noprint">
    
<form action="openreport.php" method="post" target="_blank">
    
    <div class="form-group">
      <label for="nodeID">Node</label>
      <select class="form-control" id="nodeID" name="nodeID" required="true">
        <option></option>
        <option value="All">All</option>
        
        <option value="10">Node 10</option><option value="20">Node 20</option><option value="21">Node 21</option><option value="30">Node 30</option><option value="40">Node 40</option><option value="50">Node 50</option><option value="60">Node 60</option><option value="61">Node 61</option><option value="70">Node 70</option><option value="80">Node 80</option>        
      </select>
    </div>

    <div class="form-group">
      <label for="alarm">Alarm</label>
      <select class="form-control" id="alarm" name="alarm" required="true">
        <option></option>
        <option value="All">All</option>
        <option value="Normal">Normal</option>
        <option value="Advisory">Advisory</option>
        <option value="Watch">Watch</option>
        <option value="Danger">Danger</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="fromDate">From Date</label>
      <input type="date" class="form-control" id="fromDate" placeholder="Enter from date" name="fromDate" required="true">
    </div>

    <div class="form-group">
      <label for="toDate">To Date</label>
      <input type="date" class="form-control" id="toDate" placeholder="Enter to date" name="toDate" required="true">
    </div>
      

    <button type="submit" class="btn btn-default">Submit</button>
    
</form>
                           
</div>


<table class="table table-bordered">
    <thead>
    <tr>
        <th style="text-align:center;background-color:rgb(33,37,41);color:white;">Node ID</th>
        <th style="text-align:center;background-color:rgb(33,37,41);color:white;">Location</th>
        <th style="text-align:center;background-color:rgb(33,37,41);color:white;">Status</th>
        <th style="text-align:center;background-color:rgb(33,37,41);color:white;">Data Time</th>
        <th style="text-align:center;background-color:rgb(33,37,41);color:white;">Alarm</th>
    </tr>
    </thead>
    <tbody>
<h4 style="text-align:center">GeoAlert Summary Report Latest 100 Records</h4>
<tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=61">61</a></td><td>Residence</td><td>Up</td><td>2020-11-15 19:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=21">21</a></td><td>Residence</td><td>Up</td><td>2020-11-15 19:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80">80</a></td><td>Residence</td><td>Up</td><td>2020-11-15 19:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=60">60</a></td><td>Residence</td><td>Up</td><td>2020-11-15 19:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=50">50</a></td><td>Residence</td><td>Up</td><td>2020-11-15 19:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=40">40</a></td><td>Residence</td><td>Up</td><td>2020-11-15 19:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=30">30</a></td><td>Residence</td><td>Up</td><td>2020-11-15 19:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=20">20</a></td><td>Residence</td><td>Up</td><td>2020-11-15 19:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=70">70</a></td><td>Residence</td><td>Up</td><td>2020-11-15 19:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=10">10</a></td><td>Residence</td><td>Up</td><td>2020-11-15 19:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=21">21</a></td><td>Residence</td><td>Up</td><td>2020-11-15 18:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80">80</a></td><td>Residence</td><td>Up</td><td>2020-11-15 18:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=60">60</a></td><td>Residence</td><td>Up</td><td>2020-11-15 18:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=50">50</a></td><td>Residence</td><td>Up</td><td>2020-11-15 18:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=40">40</a></td><td>Residence</td><td>Up</td><td>2020-11-15 18:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=30">30</a></td><td>Residence</td><td>Up</td><td>2020-11-15 18:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=10">10</a></td><td>Residence</td><td>Up</td><td>2020-11-15 18:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=70">70</a></td><td>Residence</td><td>Up</td><td>2020-11-15 18:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=61">61</a></td><td>Residence</td><td>Up</td><td>2020-11-15 18:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=20">20</a></td><td>Residence</td><td>Up</td><td>2020-11-15 18:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=21">21</a></td><td>Residence</td><td>Up</td><td>2020-11-15 17:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=61">61</a></td><td>Residence</td><td>Up</td><td>2020-11-15 17:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=50">50</a></td><td>Residence</td><td>Up</td><td>2020-11-15 17:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=30">30</a></td><td>Residence</td><td>Up</td><td>2020-11-15 17:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=20">20</a></td><td>Residence</td><td>Up</td><td>2020-11-15 17:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80">80</a></td><td>Residence</td><td>Up</td><td>2020-11-15 17:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=70">70</a></td><td>Residence</td><td>Up</td><td>2020-11-15 17:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=60">60</a></td><td>Residence</td><td>Up</td><td>2020-11-15 17:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=40">40</a></td><td>Residence</td><td>Up</td><td>2020-11-15 17:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=10">10</a></td><td>Residence</td><td>Up</td><td>2020-11-15 17:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=61">61</a></td><td>Residence</td><td>Up</td><td>2020-11-15 16:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=30">30</a></td><td>Residence</td><td>Up</td><td>2020-11-15 16:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=21">21</a></td><td>Residence</td><td>Up</td><td>2020-11-15 16:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=20">20</a></td><td>Residence</td><td>Up</td><td>2020-11-15 16:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=10">10</a></td><td>Residence</td><td>Up</td><td>2020-11-15 16:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80">80</a></td><td>Residence</td><td>Up</td><td>2020-11-15 16:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=70">70</a></td><td>Residence</td><td>Up</td><td>2020-11-15 16:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=60">60</a></td><td>Residence</td><td>Up</td><td>2020-11-15 16:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=50">50</a></td><td>Residence</td><td>Up</td><td>2020-11-15 16:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=40">40</a></td><td>Residence</td><td>Up</td><td>2020-11-15 16:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=61">61</a></td><td>Residence</td><td>Up</td><td>2020-11-15 15:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80">80</a></td><td>Residence</td><td>Up</td><td>2020-11-15 15:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=70">70</a></td><td>Residence</td><td>Up</td><td>2020-11-15 15:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=60">60</a></td><td>Residence</td><td>Up</td><td>2020-11-15 15:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=50">50</a></td><td>Residence</td><td>Up</td><td>2020-11-15 15:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=40">40</a></td><td>Residence</td><td>Up</td><td>2020-11-15 15:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=30">30</a></td><td>Residence</td><td>Up</td><td>2020-11-15 15:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=21">21</a></td><td>Residence</td><td>Up</td><td>2020-11-15 15:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=20">20</a></td><td>Residence</td><td>Up</td><td>2020-11-15 15:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=10">10</a></td><td>Residence</td><td>Up</td><td>2020-11-15 15:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=61">61</a></td><td>Residence</td><td>Up</td><td>2020-11-15 14:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80">80</a></td><td>Residence</td><td>Up</td><td>2020-11-15 14:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=70">70</a></td><td>Residence</td><td>Up</td><td>2020-11-15 14:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=60">60</a></td><td>Residence</td><td>Up</td><td>2020-11-15 14:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=50">50</a></td><td>Residence</td><td>Up</td><td>2020-11-15 14:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=40">40</a></td><td>Residence</td><td>Up</td><td>2020-11-15 14:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=30">30</a></td><td>Residence</td><td>Up</td><td>2020-11-15 14:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=21">21</a></td><td>Residence</td><td>Up</td><td>2020-11-15 14:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=20">20</a></td><td>Residence</td><td>Up</td><td>2020-11-15 14:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=10">10</a></td><td>Residence</td><td>Up</td><td>2020-11-15 14:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=21">21</a></td><td>Residence</td><td>Up</td><td>2020-11-15 13:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80">80</a></td><td>Residence</td><td>Up</td><td>2020-11-15 13:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=61">61</a></td><td>Residence</td><td>Up</td><td>2020-11-15 13:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=50">50</a></td><td>Residence</td><td>Up</td><td>2020-11-15 13:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=40">40</a></td><td>Residence</td><td>Up</td><td>2020-11-15 13:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=30">30</a></td><td>Residence</td><td>Up</td><td>2020-11-15 13:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=20">20</a></td><td>Residence</td><td>Up</td><td>2020-11-15 13:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=10">10</a></td><td>Residence</td><td>Up</td><td>2020-11-15 13:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=70">70</a></td><td>Residence</td><td>Up</td><td>2020-11-15 13:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=60">60</a></td><td>Residence</td><td>Up</td><td>2020-11-15 13:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=61">61</a></td><td>Residence</td><td>Up</td><td>2020-11-15 12:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=50">50</a></td><td>Residence</td><td>Up</td><td>2020-11-15 12:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=30">30</a></td><td>Residence</td><td>Up</td><td>2020-11-15 12:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=21">21</a></td><td>Residence</td><td>Up</td><td>2020-11-15 12:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=20">20</a></td><td>Residence</td><td>Up</td><td>2020-11-15 12:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=10">10</a></td><td>Residence</td><td>Up</td><td>2020-11-15 12:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80">80</a></td><td>Residence</td><td>Up</td><td>2020-11-15 12:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=70">70</a></td><td>Residence</td><td>Up</td><td>2020-11-15 12:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=60">60</a></td><td>Residence</td><td>Up</td><td>2020-11-15 12:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=40">40</a></td><td>Residence</td><td>Up</td><td>2020-11-15 12:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80">80</a></td><td>Residence</td><td>Up</td><td>2020-11-15 11:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=50">50</a></td><td>Residence</td><td>Up</td><td>2020-11-15 11:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=40">40</a></td><td>Residence</td><td>Up</td><td>2020-11-15 11:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=30">30</a></td><td>Residence</td><td>Up</td><td>2020-11-15 11:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=21">21</a></td><td>Residence</td><td>Up</td><td>2020-11-15 11:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=20">20</a></td><td>Residence</td><td>Up</td><td>2020-11-15 11:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=10">10</a></td><td>Residence</td><td>Up</td><td>2020-11-15 11:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=70">70</a></td><td>Residence</td><td>Up</td><td>2020-11-15 11:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=61">61</a></td><td>Residence</td><td>Up</td><td>2020-11-15 11:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=60">60</a></td><td>Residence</td><td>Up</td><td>2020-11-15 11:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=61">61</a></td><td>Residence</td><td>Up</td><td>2020-11-15 10:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=21">21</a></td><td>Residence</td><td>Up</td><td>2020-11-15 10:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=70">70</a></td><td>Residence</td><td>Up</td><td>2020-11-15 10:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=60">60</a></td><td>Residence</td><td>Up</td><td>2020-11-15 10:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=50">50</a></td><td>Residence</td><td>Up</td><td>2020-11-15 10:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=40">40</a></td><td>Residence</td><td>Up</td><td>2020-11-15 10:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=30">30</a></td><td>Residence</td><td>Up</td><td>2020-11-15 10:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=20">20</a></td><td>Residence</td><td>Up</td><td>2020-11-15 10:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=10">10</a></td><td>Residence</td><td>Up</td><td>2020-11-15 10:00:00</td><td>Normal</td></tr><tr style="background-color:rgb(48,24,81);color:white;"><td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80">80</a></td><td>Residence</td><td>Up</td><td>2020-11-15 10:00:00</td><td>Normal</td></tr>
      </tbody>
      </table>

<!------------------------------------------------------------->
                                
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>

                <!------------------------------------------------------------->
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
        <!--END FOOTER-->

      <!--</div> page wrapper-->
      <!--END DIV ID page-wrapper-->

    <!--</div> wrapper-->
    <!--END DIV ID wrapper-->

</div>
<!--End Main div-->
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
            <script src="script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script> 
</body>
</html>