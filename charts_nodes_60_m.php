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
    <title>Charts (month) Node ID: 60| MySTAR GeoAlert</title>
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
                    <a href="#" class="list-items"><i class="fas fa-file-alt"></i>&nbsp; Reports</a>
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
<!--first div-->
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

<!--<div id="wrapper">-->
<!--BEGIN SIDEBAR MENU-->
<!--END SIDEBAR MENU-->

<!--<div id="page-wrapper">-->

<!--BEGIN TITLE & BREADCRUMB PAGE-->
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">

<div class="page-header pull-left">
<div class="page-title">
Charts (Month) Node ID: 60</div>
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
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="chartmenu.css">
<title>Chart Menu</title>
</head>

<body>

<div class="topnav">

<a href="charts_nodes_60_d.php">Day</a><a href="charts_nodes_60_w.php">Week</a><a href="charts_nodes_60_m.php" class="active">Month</a>
</div>

</body>

</html>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>    
<!doctype html>
<html>
<head>
    <title>Line Chart</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <script src="script/utils.js"></script>
    <style>
    canvas{
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>

<script>
    
    
    
window.onload = function chartAngle() {

    
//BEGIN CHART ANGLE    
var chart = new CanvasJS.Chart("chartContainerAngle", {
	animationEnabled: true,
	exportEnabled: true,
	zoomEnabled: true,
	title:{
		text: "Hourly Readings: Axis Movements (Degree)",
        fontWeight: "normal",
        fontFamily: "arial",
        fontSize: 20
	}, 
    
	subtitles:[
        {
		text: "[ 1 Month ]",
        fontWeight: "normal",
        fontFamily: "arial",
        fontSize: 15
        }
        ],     
        
	axisY:{
		title: "Movements (Degree)",
        titleFontSize: 15,
        gridThickness: 0.3,
        maximum: 3,
        
        stripLines: [
        {
        value: 0.5,
        thickness: 1,
        label: "Advisory",
        color: "#36a2df",
        labelFontColor: "#36a2df",
        lineDashType: "longDash"
        },
        {
        value: 1,
        thickness: 1,
        label: "Watch",
        color: "orange",
        labelFontColor: "orange",
        lineDashType: "longDash"
        },
        {
        value: 1.5,
        thickness: 1,
        label: "Danger",
        color: "red",
        labelFontColor: "red",
        lineDashType: "longDash"
        }            
        ],  
          
	},
    axisX:{
		title: "Date/Time",
        titleFontSize: 15,
        labelAngle: 135,
        labelMaxWidth: 80,
        labelWrap: true,
        labelFontSize: 12,
	},
	toolTip: {
		shared: false
	},
	legend:{
		cursor:"pointer",
        itemclick: function (e) {
                //console.log("legend click: " + e.dataPointIndex);
                //console.log(e);
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
 
                e.chart.render();
            }
	},
	data: [
    
    

        {        
        type: "spline",
        name: "Axis A",lineThickness: 2,color: "#36a2df",
        showInLegend: true,
        dataPoints: [        
        
        { label: "2020-10-09 12:00:00" , y: 0 },     
        
        { label: "2020-10-09 13:00:00" , y: 0 },     
        
        { label: "2020-10-09 14:00:00" , y: 0 },     
        
        { label: "2020-10-09 15:00:00" , y: 0 },     
        
        { label: "2020-10-09 16:00:00" , y: 0 },     
        
        { label: "2020-10-09 17:00:00" , y: 0 },     
        
        { label: "2020-10-09 18:00:00" , y: 0 },     
        
        { label: "2020-10-09 19:00:00" , y: 0 },     
        
        { label: "2020-10-09 20:00:00" , y: 0 },     
        
        { label: "2020-10-09 21:00:00" , y: 0 },     
        
        { label: "2020-10-09 22:00:00" , y: 0 },     
        
        { label: "2020-10-09 23:00:00" , y: 0 },     
        
        { label: "2020-10-10 00:00:00" , y: 0 },     
        
        { label: "2020-10-10 01:00:00" , y: 0 },     
        
        { label: "2020-10-10 02:00:00" , y: 0 },     
        
        { label: "2020-10-10 03:00:00" , y: 0 },     
        
        { label: "2020-10-10 04:00:00" , y: 0 },     
        
        { label: "2020-10-10 05:00:00" , y: 0 },     
        
        { label: "2020-10-10 06:00:00" , y: 0 },     
        
        { label: "2020-10-10 07:00:00" , y: 0 },     
        
        { label: "2020-10-10 08:00:00" , y: 0 },     
        
        { label: "2020-10-10 09:00:00" , y: 0 },     
        
        { label: "2020-10-10 10:00:00" , y: 0 },     
        
        { label: "2020-10-10 11:00:00" , y: 0 },     
        
        { label: "2020-10-10 12:00:00" , y: 0 },     
        
        { label: "2020-10-10 13:00:00" , y: 0 },     
        
        { label: "2020-10-10 14:00:00" , y: 0 },     
        
        { label: "2020-10-10 15:00:00" , y: 0 },     
        
        { label: "2020-10-10 16:00:00" , y: 0 },     
        
        { label: "2020-10-10 17:00:00" , y: 0 },     
        
        { label: "2020-10-10 18:00:00" , y: 0 },     
        
        { label: "2020-10-10 19:00:00" , y: 0 },     
        
        { label: "2020-10-10 20:00:00" , y: 0 },     
        
        { label: "2020-10-10 21:00:00" , y: 0 },     
        
        { label: "2020-10-10 22:00:00" , y: 0 },     
        
        { label: "2020-10-10 23:00:00" , y: 0 },     
        
        { label: "2020-10-11 00:00:00" , y: 0 },     
        
        { label: "2020-10-11 01:00:00" , y: 0 },     
        
        { label: "2020-10-11 02:00:00" , y: 0 },     
        
        { label: "2020-10-11 03:00:00" , y: 0 },     
        
        { label: "2020-10-11 04:00:00" , y: 0 },     
        
        { label: "2020-10-11 05:00:00" , y: 0 },     
        
        { label: "2020-10-11 06:00:00" , y: 0 },     
        
        { label: "2020-10-11 07:00:00" , y: 0 },     
        
        { label: "2020-10-11 08:00:00" , y: 0 },     
        
        { label: "2020-10-11 09:00:00" , y: 0 },     
        
        { label: "2020-10-11 10:00:00" , y: 0 },     
        
        { label: "2020-10-11 11:00:00" , y: 0 },     
        
        { label: "2020-10-11 12:00:00" , y: 0 },     
        
        { label: "2020-10-11 13:00:00" , y: 0 },     
        
        { label: "2020-10-11 14:00:00" , y: 0 },     
        
        { label: "2020-10-11 15:00:00" , y: 0 },     
        
        { label: "2020-10-11 16:00:00" , y: 0 },     
        
        { label: "2020-10-11 17:00:00" , y: 0 },     
        
        { label: "2020-10-11 18:00:00" , y: 0 },     
        
        { label: "2020-10-11 19:00:00" , y: 0 },     
        
        { label: "2020-10-11 20:00:00" , y: 0 },     
        
        { label: "2020-10-11 21:00:00" , y: 0 },     
        
        { label: "2020-10-11 22:00:00" , y: 0 },     
        
        { label: "2020-10-11 23:00:00" , y: 0 },     
        
        { label: "2020-10-12 00:00:00" , y: 0 },     
        
        { label: "2020-10-12 01:00:00" , y: 0 },     
        
        { label: "2020-10-12 02:00:00" , y: 0 },     
        
        { label: "2020-10-12 03:00:00" , y: 0 },     
        
        { label: "2020-10-12 04:00:00" , y: 0 },     
        
        { label: "2020-10-12 05:00:00" , y: 0 },     
        
        { label: "2020-10-12 06:00:00" , y: 0 },     
        
        { label: "2020-10-12 07:00:00" , y: 0 },     
        
        { label: "2020-10-12 08:00:00" , y: 0 },     
        
        { label: "2020-10-12 09:00:00" , y: 0 },     
        
        { label: "2020-10-12 10:00:00" , y: 0 },     
        
        { label: "2020-10-12 11:00:00" , y: 0 },     
        
        { label: "2020-10-12 12:00:00" , y: 0 },     
        
        { label: "2020-10-12 13:00:00" , y: 0 },     
        
        { label: "2020-10-12 14:00:00" , y: 0 },     
        
        { label: "2020-10-12 15:00:00" , y: 0 },     
        
        { label: "2020-10-12 16:00:00" , y: 0 },     
        
        { label: "2020-10-12 17:00:00" , y: 0 },     
        
        { label: "2020-10-12 18:00:00" , y: 0 },     
        
        { label: "2020-10-12 19:00:00" , y: 0 },     
        
        { label: "2020-10-12 20:00:00" , y: 0 },     
        
        { label: "2020-10-12 21:00:00" , y: 0 },     
        
        { label: "2020-10-12 22:00:00" , y: 0 },     
        
        { label: "2020-10-12 23:00:00" , y: 0 },     
        
        { label: "2020-10-13 00:00:00" , y: 0 },     
        
        { label: "2020-10-13 01:00:00" , y: 0 },     
        
        { label: "2020-10-13 02:00:00" , y: 0 },     
        
        { label: "2020-10-13 03:00:00" , y: 0 },     
        
        { label: "2020-10-13 04:00:00" , y: 0 },     
        
        { label: "2020-10-13 05:00:00" , y: 0 },     
        
        { label: "2020-10-13 06:00:00" , y: 0 },     
        
        { label: "2020-10-13 07:00:00" , y: 0 },     
        
        { label: "2020-10-13 08:00:00" , y: 0 },     
        
        { label: "2020-10-13 09:00:00" , y: 0 },     
        
        { label: "2020-10-13 10:00:00" , y: 0 },     
        
        { label: "2020-10-13 11:00:00" , y: 0 },     
        
        { label: "2020-10-13 12:00:00" , y: 0 },     
        
        { label: "2020-10-13 13:00:00" , y: 0 },     
        
        { label: "2020-10-13 14:00:00" , y: 0 },     
        
        { label: "2020-10-13 15:00:00" , y: 0 },     
        
        { label: "2020-10-13 16:00:00" , y: 0 },     
        
        { label: "2020-10-13 17:00:00" , y: 0 },     
        
        { label: "2020-10-13 18:00:00" , y: 0 },     
        
        { label: "2020-10-13 19:00:00" , y: 0 },     
        
        { label: "2020-10-13 20:00:00" , y: 0 },     
        
        { label: "2020-10-13 21:00:00" , y: 0 },     
        
        { label: "2020-10-13 22:00:00" , y: 0 },     
        
        { label: "2020-10-13 23:00:00" , y: 0 },     
        
        { label: "2020-10-14 00:00:00" , y: 0 },     
        
        { label: "2020-10-14 01:00:00" , y: 0 },     
        
        { label: "2020-10-14 02:00:00" , y: 0 },     
        
        { label: "2020-10-14 03:00:00" , y: 0 },     
        
        { label: "2020-10-14 04:00:00" , y: 0 },     
        
        { label: "2020-10-14 05:00:00" , y: 0 },     
        
        { label: "2020-10-14 06:00:00" , y: 0 },     
        
        { label: "2020-10-14 07:00:00" , y: 0 },     
        
        { label: "2020-10-14 08:00:00" , y: 0 },     
        
        { label: "2020-10-14 09:00:00" , y: 0 },     
        
        { label: "2020-10-14 10:00:00" , y: 0 },     
        
        { label: "2020-10-14 11:00:00" , y: 0 },     
        
        { label: "2020-10-14 12:00:00" , y: 0 },     
        
        { label: "2020-10-14 13:00:00" , y: 0 },     
        
        { label: "2020-10-14 14:00:00" , y: 0 },     
        
        { label: "2020-10-14 15:00:00" , y: 0 },     
        
        { label: "2020-10-14 16:00:00" , y: 0 },     
        
        { label: "2020-10-14 17:00:00" , y: 0 },     
        
        { label: "2020-10-14 18:00:00" , y: 0 },     
        
        { label: "2020-10-14 19:00:00" , y: 0 },     
        
        { label: "2020-10-14 20:00:00" , y: 0 },     
        
        { label: "2020-10-14 21:00:00" , y: 0 },     
        
        { label: "2020-10-14 22:00:00" , y: 0 },     
        
        { label: "2020-10-14 23:00:00" , y: 0 },     
        
        { label: "2020-10-15 00:00:00" , y: 0 },     
        
        { label: "2020-10-15 01:00:00" , y: 0 },     
        
        { label: "2020-10-15 02:00:00" , y: 0 },     
        
        { label: "2020-10-15 03:00:00" , y: 0 },     
        
        { label: "2020-10-15 04:00:00" , y: 0 },     
        
        { label: "2020-10-15 05:00:00" , y: 0 },     
        
        { label: "2020-10-15 06:00:00" , y: 0 },     
        
        { label: "2020-10-15 07:00:00" , y: 0 },     
        
        { label: "2020-10-15 08:00:00" , y: 0 },     
        
        { label: "2020-10-15 09:00:00" , y: 0 },     
        
        { label: "2020-10-15 10:00:00" , y: 0 },     
        
        { label: "2020-10-15 11:00:00" , y: 0 },     
        
        { label: "2020-10-15 12:00:00" , y: 0 },     
        
        { label: "2020-10-15 13:00:00" , y: 0 },     
        
        { label: "2020-10-15 14:00:00" , y: 0 },     
        
        { label: "2020-10-15 15:00:00" , y: 0 },     
        
        { label: "2020-10-15 16:00:00" , y: 0 },     
        
        { label: "2020-10-15 17:00:00" , y: 0 },     
        
        { label: "2020-10-15 18:00:00" , y: 0 },     
        
        { label: "2020-10-15 19:00:00" , y: 0 },     
        
        { label: "2020-10-15 20:00:00" , y: 0 },     
        
        { label: "2020-10-15 21:00:00" , y: 0 },     
        
        { label: "2020-10-15 22:00:00" , y: 0 },     
        
        { label: "2020-10-15 23:00:00" , y: 0 },     
        
        { label: "2020-10-16 00:00:00" , y: 0 },     
        
        { label: "2020-10-16 01:00:00" , y: 0 },     
        
        { label: "2020-10-16 02:00:00" , y: 0 },     
        
        { label: "2020-10-16 03:00:00" , y: 0 },     
        
        { label: "2020-10-16 04:00:00" , y: 0 },     
        
        { label: "2020-10-16 05:00:00" , y: 0 },     
        
        { label: "2020-10-16 06:00:00" , y: 0 },     
        
        { label: "2020-10-16 07:00:00" , y: 0 },     
        
        { label: "2020-10-16 08:00:00" , y: 0 },     
        
        { label: "2020-10-16 09:00:00" , y: 0 },     
        
        { label: "2020-10-16 10:00:00" , y: 0 },     
        
        { label: "2020-10-16 11:00:00" , y: 0 },     
        
        { label: "2020-10-16 12:00:00" , y: 0 },     
        
        { label: "2020-10-16 13:00:00" , y: 0 },     
        
        { label: "2020-10-16 14:00:00" , y: 0 },     
        
        { label: "2020-10-16 15:00:00" , y: 0 },     
        
        { label: "2020-10-16 16:00:00" , y: 0 },     
        
        { label: "2020-10-16 17:00:00" , y: 0 },     
        
        { label: "2020-10-16 18:00:00" , y: 0 },     
        
        { label: "2020-10-16 19:00:00" , y: 0 },     
        
        { label: "2020-10-16 20:00:00" , y: 0 },     
        
        { label: "2020-10-16 21:00:00" , y: 0 },     
        
        { label: "2020-10-16 22:00:00" , y: 0 },     
        
        { label: "2020-10-16 23:00:00" , y: 0 },     
        
        { label: "2020-10-17 00:00:00" , y: 0 },     
        
        { label: "2020-10-17 01:00:00" , y: 0 },     
        
        { label: "2020-10-17 02:00:00" , y: 0 },     
        
        { label: "2020-10-17 03:00:00" , y: 0 },     
        
        { label: "2020-10-17 04:00:00" , y: 0 },     
        
        { label: "2020-10-17 05:00:00" , y: 0 },     
        
        { label: "2020-10-17 06:00:00" , y: 0 },     
        
        { label: "2020-10-17 07:00:00" , y: 0 },     
        
        { label: "2020-10-17 08:00:00" , y: 0 },     
        
        { label: "2020-10-17 09:00:00" , y: 0 },     
        
        { label: "2020-10-17 10:00:00" , y: 0 },     
        
        { label: "2020-10-17 11:00:00" , y: 0 },     
        
        { label: "2020-10-17 12:00:00" , y: 0 },     
        
        { label: "2020-10-17 13:00:00" , y: 0 },     
        
        { label: "2020-10-17 14:00:00" , y: 0 },     
        
        { label: "2020-10-17 15:00:00" , y: 0 },     
        
        { label: "2020-10-17 16:00:00" , y: 0 },     
        
        { label: "2020-10-17 17:00:00" , y: 0 },     
        
        { label: "2020-10-17 18:00:00" , y: 0 },     
        
        { label: "2020-10-17 19:00:00" , y: 0 },     
        
        { label: "2020-10-17 20:00:00" , y: 0 },     
        
        { label: "2020-10-17 21:00:00" , y: 0 },     
        
        { label: "2020-10-17 22:00:00" , y: 0 },     
        
        { label: "2020-10-17 23:00:00" , y: 0 },     
        
        { label: "2020-10-18 00:00:00" , y: 0 },     
        
        { label: "2020-10-18 01:00:00" , y: 0 },     
        
        { label: "2020-10-18 02:00:00" , y: 0 },     
        
        { label: "2020-10-18 03:00:00" , y: 0 },     
        
        { label: "2020-10-18 04:00:00" , y: 0 },     
        
        { label: "2020-10-18 05:00:00" , y: 0 },     
        
        { label: "2020-10-18 06:00:00" , y: 0 },     
        
        { label: "2020-10-18 07:00:00" , y: 0 },     
        
        { label: "2020-10-18 08:00:00" , y: 0 },     
        
        { label: "2020-10-18 09:00:00" , y: 0 },     
        
        { label: "2020-10-18 10:00:00" , y: 0 },     
        
        { label: "2020-10-18 11:00:00" , y: 0 },     
        
        { label: "2020-10-18 12:00:00" , y: 0 },     
        
        { label: "2020-10-18 13:00:00" , y: 0 },     
        
        { label: "2020-10-18 14:00:00" , y: 0 },     
        
        { label: "2020-10-18 15:00:00" , y: 0 },     
        
        { label: "2020-10-18 16:00:00" , y: 0 },     
        
        { label: "2020-10-18 17:00:00" , y: 0 },     
        
        { label: "2020-10-18 18:00:00" , y: 0 },     
        
        { label: "2020-10-18 19:00:00" , y: 0 },     
        
        { label: "2020-10-18 20:00:00" , y: 0 },     
        
        { label: "2020-10-18 21:00:00" , y: 0 },     
        
        { label: "2020-10-18 22:00:00" , y: 0 },     
        
        { label: "2020-10-18 23:00:00" , y: 0 },     
        
        { label: "2020-10-19 00:00:00" , y: 0 },     
        
        { label: "2020-10-19 01:00:00" , y: 0 },     
        
        { label: "2020-10-19 02:00:00" , y: 0 },     
        
        { label: "2020-10-19 03:00:00" , y: 0 },     
        
        { label: "2020-10-19 04:00:00" , y: 0 },     
        
        { label: "2020-10-19 05:00:00" , y: 0 },     
        
        { label: "2020-10-19 06:00:00" , y: 0 },     
        
        { label: "2020-10-19 07:00:00" , y: 0 },     
        
        { label: "2020-10-19 08:00:00" , y: 0 },     
        
        { label: "2020-10-19 09:00:00" , y: 0 },     
        
        { label: "2020-10-19 10:00:00" , y: 0 },     
        
        { label: "2020-10-19 11:00:00" , y: 0 },     
        
        { label: "2020-10-19 12:00:00" , y: 0 },     
        
        { label: "2020-10-19 13:00:00" , y: 0 },     
        
        { label: "2020-10-19 14:00:00" , y: 0 },     
        
        { label: "2020-10-19 15:00:00" , y: 0 },     
        
        { label: "2020-10-19 16:00:00" , y: 0 },     
        
        { label: "2020-10-19 17:00:00" , y: 0 },     
        
        { label: "2020-10-19 18:00:00" , y: 0 },     
        
        { label: "2020-10-19 19:00:00" , y: 0 },     
        
        { label: "2020-10-19 20:00:00" , y: 0 },     
        
        { label: "2020-10-19 21:00:00" , y: 0 },     
        
        { label: "2020-10-19 22:00:00" , y: 0 },     
        
        { label: "2020-10-19 23:00:00" , y: 0 },     
        
        { label: "2020-10-20 00:00:00" , y: 0 },     
        
        { label: "2020-10-20 01:00:00" , y: 0 },     
        
        { label: "2020-10-20 02:00:00" , y: 0 },     
        
        { label: "2020-10-20 03:00:00" , y: 0 },     
        
        { label: "2020-10-20 04:00:00" , y: 0 },     
        
        { label: "2020-10-20 05:00:00" , y: 0 },     
        
        { label: "2020-10-20 06:00:00" , y: 0 },     
        
        { label: "2020-10-20 07:00:00" , y: 0 },     
        
        { label: "2020-10-20 08:00:00" , y: 0 },     
        
        { label: "2020-10-20 09:00:00" , y: 0 },     
        
        { label: "2020-10-20 10:00:00" , y: 0 },     
        
        { label: "2020-10-20 11:00:00" , y: 0 },     
        
        { label: "2020-10-20 12:00:00" , y: 0 },     
        
        { label: "2020-10-20 13:00:00" , y: 0 },     
        
        { label: "2020-10-20 14:00:00" , y: 0 },     
        
        { label: "2020-10-20 15:00:00" , y: 0 },     
        
        { label: "2020-10-20 16:00:00" , y: 0 },     
        
        { label: "2020-10-20 17:00:00" , y: 0 },     
        
        { label: "2020-10-20 18:00:00" , y: 0 },     
        
        { label: "2020-10-20 19:00:00" , y: 0 },     
        
        { label: "2020-10-20 20:00:00" , y: 0 },     
        
        { label: "2020-10-20 21:00:00" , y: 0 },     
        
        { label: "2020-10-20 22:00:00" , y: 0 },     
        
        { label: "2020-10-20 23:00:00" , y: 0 },     
        
        { label: "2020-10-21 00:00:00" , y: 0 },     
        
        { label: "2020-10-21 01:00:00" , y: 0 },     
        
        { label: "2020-10-21 02:00:00" , y: 0 },     
        
        { label: "2020-10-21 03:00:00" , y: 0 },     
        
        { label: "2020-10-21 04:00:00" , y: 0 },     
        
        { label: "2020-10-21 05:00:00" , y: 0 },     
        
        { label: "2020-10-21 06:00:00" , y: 0 },     
        
        { label: "2020-10-21 07:00:00" , y: 0 },     
        
        { label: "2020-10-21 08:00:00" , y: 0 },     
        
        { label: "2020-10-21 09:00:00" , y: 0 },     
        
        { label: "2020-10-21 10:00:00" , y: 0 },     
        
        { label: "2020-10-21 11:00:00" , y: 0 },     
        
        { label: "2020-10-21 12:00:00" , y: 0 },     
        
        { label: "2020-10-21 13:00:00" , y: 0 },     
        
        { label: "2020-10-21 14:00:00" , y: 0 },     
        
        { label: "2020-10-21 15:00:00" , y: 0 },     
        
        { label: "2020-10-21 16:00:00" , y: 0 },     
        
        { label: "2020-10-21 17:00:00" , y: 0 },     
        
        { label: "2020-10-21 18:00:00" , y: 0 },     
        
        { label: "2020-10-21 19:00:00" , y: 0 },     
        
        { label: "2020-10-21 20:00:00" , y: 0 },     
        
        { label: "2020-10-21 21:00:00" , y: 0 },     
        
        { label: "2020-10-21 22:00:00" , y: 0 },     
        
        { label: "2020-10-21 23:00:00" , y: 0 },     
        
        { label: "2020-10-22 00:00:00" , y: 0 },     
        
        { label: "2020-10-22 01:00:00" , y: 0 },     
        
        { label: "2020-10-22 02:00:00" , y: 0 },     
        
        { label: "2020-10-22 03:00:00" , y: 0 },     
        
        { label: "2020-10-22 04:00:00" , y: 0 },     
        
        { label: "2020-10-22 05:00:00" , y: 0 },     
        
        { label: "2020-10-22 06:00:00" , y: 0 },     
        
        { label: "2020-10-22 07:00:00" , y: 0 },     
        
        { label: "2020-10-22 08:00:00" , y: 0 },     
        
        { label: "2020-10-22 09:00:00" , y: 0 },     
        
        { label: "2020-10-22 10:00:00" , y: 0 },     
        
        { label: "2020-10-22 11:00:00" , y: 0 },     
        
        { label: "2020-10-22 12:00:00" , y: 0 },     
        
        { label: "2020-10-22 13:00:00" , y: 0 },     
        
        { label: "2020-10-22 14:00:00" , y: 0 },     
        
        { label: "2020-10-22 15:00:00" , y: 0 },     
        
        { label: "2020-10-22 16:00:00" , y: 0 },     
        
        { label: "2020-10-22 17:00:00" , y: 0 },     
        
        { label: "2020-10-22 18:00:00" , y: 0 },     
        
        { label: "2020-10-22 19:00:00" , y: 0 },     
        
        { label: "2020-10-22 20:00:00" , y: 0 },     
        
        { label: "2020-10-22 21:00:00" , y: 0 },     
        
        { label: "2020-10-22 22:00:00" , y: 0 },     
        
        { label: "2020-10-22 23:00:00" , y: 0 },     
        
        { label: "2020-10-23 00:00:00" , y: 0 },     
        
        { label: "2020-10-23 01:00:00" , y: 0 },     
        
        { label: "2020-10-23 02:00:00" , y: 0 },     
        
        { label: "2020-10-23 03:00:00" , y: 0 },     
        
        { label: "2020-10-23 04:00:00" , y: 0 },     
        
        { label: "2020-10-23 05:00:00" , y: 0 },     
        
        { label: "2020-10-23 06:00:00" , y: 0 },     
        
        { label: "2020-10-23 07:00:00" , y: 0 },     
        
        { label: "2020-10-23 08:00:00" , y: 0 },     
        
        { label: "2020-10-23 09:00:00" , y: 0 },     
        
        { label: "2020-10-23 10:00:00" , y: 0 },     
        
        { label: "2020-10-23 11:00:00" , y: 0 },     
        
        { label: "2020-10-23 12:00:00" , y: 0 },     
        
        { label: "2020-10-23 13:00:00" , y: 0 },     
        
        { label: "2020-10-23 14:00:00" , y: 0 },     
        
        { label: "2020-10-23 15:00:00" , y: 0 },     
        
        { label: "2020-10-23 16:00:00" , y: 0 },     
        
        { label: "2020-10-23 17:00:00" , y: 0 },     
        
        { label: "2020-10-23 18:00:00" , y: 0 },     
        
        { label: "2020-10-23 19:00:00" , y: 0 },     
        
        { label: "2020-10-23 20:00:00" , y: 0 },     
        
        { label: "2020-10-23 21:00:00" , y: 0 },     
        
        { label: "2020-10-23 22:00:00" , y: 0 },     
        
        { label: "2020-10-23 23:00:00" , y: 0 },     
        
        { label: "2020-10-24 00:00:00" , y: 0 },     
        
        { label: "2020-10-24 01:00:00" , y: 0 },     
        
        { label: "2020-10-24 02:00:00" , y: 0 },     
        
        { label: "2020-10-24 03:00:00" , y: 0 },     
        
        { label: "2020-10-24 04:00:00" , y: 0 },     
        
        { label: "2020-10-24 05:00:00" , y: 0 },     
        
        { label: "2020-10-24 06:00:00" , y: 0 },     
        
        { label: "2020-10-24 07:00:00" , y: 0 },     
        
        { label: "2020-10-24 08:00:00" , y: 0 },     
        
        { label: "2020-10-24 09:00:00" , y: 0 },     
        
        { label: "2020-10-24 10:00:00" , y: 0 },     
        
        { label: "2020-10-24 11:00:00" , y: 0 },     
        
        { label: "2020-10-24 12:00:00" , y: 0 },     
        
        { label: "2020-10-24 13:00:00" , y: 0 },     
        
        { label: "2020-10-24 14:00:00" , y: 0 },     
        
        { label: "2020-10-24 15:00:00" , y: 0 },     
        
        { label: "2020-10-24 16:00:00" , y: 0 },     
        
        { label: "2020-10-24 17:00:00" , y: 0 },     
        
        { label: "2020-10-24 18:00:00" , y: 0 },     
        
        { label: "2020-10-24 19:00:00" , y: 0 },     
        
        { label: "2020-10-24 20:00:00" , y: 0 },     
        
        { label: "2020-10-24 21:00:00" , y: 0 },     
        
        { label: "2020-10-24 22:00:00" , y: 0 },     
        
        { label: "2020-10-24 23:00:00" , y: 0 },     
        
        { label: "2020-10-25 00:00:00" , y: 0 },     
        
        { label: "2020-10-25 01:00:00" , y: 0 },     
        
        { label: "2020-10-25 02:00:00" , y: 0 },     
        
        { label: "2020-10-25 03:00:00" , y: 0 },     
        
        { label: "2020-10-25 04:00:00" , y: 0 },     
        
        { label: "2020-10-25 05:00:00" , y: 0 },     
        
        { label: "2020-10-25 06:00:00" , y: 0 },     
        
        { label: "2020-10-25 07:00:00" , y: 0 },     
        
        { label: "2020-10-25 08:00:00" , y: 0 },     
        
        { label: "2020-10-25 09:00:00" , y: 0 },     
        
        { label: "2020-10-25 10:00:00" , y: 0 },     
        
        { label: "2020-10-25 11:00:00" , y: 0 },     
        
        { label: "2020-10-25 12:00:00" , y: 0 },     
        
        { label: "2020-10-25 13:00:00" , y: 0 },     
        
        { label: "2020-10-25 14:00:00" , y: 0 },     
        
        { label: "2020-10-25 15:00:00" , y: 0 },     
        
        { label: "2020-10-25 16:00:00" , y: 0 },     
        
        { label: "2020-10-25 17:00:00" , y: 0 },     
        
        { label: "2020-10-25 18:00:00" , y: 0 },     
        
        { label: "2020-10-25 19:00:00" , y: 0 },     
        
        { label: "2020-10-25 20:00:00" , y: 0 },     
        
        { label: "2020-10-25 21:00:00" , y: 0 },     
        
        { label: "2020-10-25 22:00:00" , y: 0 },     
        
        { label: "2020-10-25 23:00:00" , y: 0 },     
        
        { label: "2020-10-26 00:00:00" , y: 0 },     
        
        { label: "2020-10-26 01:00:00" , y: 0 },     
        
        { label: "2020-10-26 02:00:00" , y: 0 },     
        
        { label: "2020-10-26 03:00:00" , y: 0 },     
        
        { label: "2020-10-26 04:00:00" , y: 0 },     
        
        { label: "2020-10-26 05:00:00" , y: 0 },     
        
        { label: "2020-10-26 06:00:00" , y: 0 },     
        
        { label: "2020-10-26 07:00:00" , y: 0 },     
        
        { label: "2020-10-26 08:00:00" , y: 0 },     
        
        { label: "2020-10-26 09:00:00" , y: 0 },     
        
        { label: "2020-10-26 10:00:00" , y: 0 },     
        
        { label: "2020-10-26 11:00:00" , y: 0 },     
        
        { label: "2020-10-26 12:00:00" , y: 0 },     
        
        { label: "2020-10-26 13:00:00" , y: 0 },     
        
        { label: "2020-10-26 14:00:00" , y: 0 },     
        
        { label: "2020-10-26 15:00:00" , y: 0 },     
        
        { label: "2020-10-26 16:00:00" , y: 0 },     
        
        { label: "2020-10-26 17:00:00" , y: 0 },     
        
        { label: "2020-10-26 18:00:00" , y: 0 },     
        
        { label: "2020-10-26 19:00:00" , y: 0 },     
        
        { label: "2020-10-26 20:00:00" , y: 0 },     
        
        { label: "2020-10-26 21:00:00" , y: 0 },     
        
        { label: "2020-10-26 22:00:00" , y: 0 },     
        
        { label: "2020-10-26 23:00:00" , y: 0 },     
        
        { label: "2020-10-27 00:00:00" , y: 0 },     
        
        { label: "2020-10-27 01:00:00" , y: 0 },     
        
        { label: "2020-10-27 02:00:00" , y: 0 },     
        
        { label: "2020-10-27 03:00:00" , y: 0 },     
        
        { label: "2020-10-27 04:00:00" , y: 0 },     
        
        { label: "2020-10-27 05:00:00" , y: 0 },     
        
        { label: "2020-10-27 06:00:00" , y: 0 },     
        
        { label: "2020-10-27 07:00:00" , y: 0 },     
        
        { label: "2020-10-27 08:00:00" , y: 0 },     
        
        { label: "2020-10-27 09:00:00" , y: 0 },     
        
        { label: "2020-10-27 10:00:00" , y: 0 },     
        
        { label: "2020-10-27 11:00:00" , y: 0 },     
        
        { label: "2020-10-27 12:00:00" , y: 0 },     
        
        { label: "2020-10-27 13:00:00" , y: 0 },     
        
        { label: "2020-10-27 14:00:00" , y: 0 },     
        
        { label: "2020-10-27 15:00:00" , y: 0 },     
        
        { label: "2020-10-27 16:00:00" , y: 0 },     
        
        { label: "2020-10-27 17:00:00" , y: 0 },     
        
        { label: "2020-10-27 18:00:00" , y: 0 },     
        
        { label: "2020-10-27 19:00:00" , y: 0 },     
        
        { label: "2020-10-27 20:00:00" , y: 0 },     
        
        { label: "2020-10-27 21:00:00" , y: 0 },     
        
        { label: "2020-10-27 22:00:00" , y: 0 },     
        
        { label: "2020-10-27 23:00:00" , y: 0 },     
        
        { label: "2020-10-28 00:00:00" , y: 0 },     
        
        { label: "2020-10-28 01:00:00" , y: 0 },     
        
        { label: "2020-10-28 02:00:00" , y: 0 },     
        
        { label: "2020-10-28 03:00:00" , y: 0 },     
        
        { label: "2020-10-28 04:00:00" , y: 0 },     
        
        { label: "2020-10-28 05:00:00" , y: 0 },     
        
        { label: "2020-10-28 06:00:00" , y: 0 },     
        
        { label: "2020-10-28 07:00:00" , y: 0 },     
        
        { label: "2020-10-28 08:00:00" , y: 0 },     
        
        { label: "2020-10-28 09:00:00" , y: 0 },     
        
        { label: "2020-10-28 10:00:00" , y: 0 },     
        
        { label: "2020-10-28 11:00:00" , y: 0 },     
        
        { label: "2020-10-28 12:00:00" , y: 0 },     
        
        { label: "2020-10-28 13:00:00" , y: 0 },     
        
        { label: "2020-10-28 14:00:00" , y: 0 },     
        
        { label: "2020-10-28 15:00:00" , y: 0 },     
        
        { label: "2020-10-28 16:00:00" , y: 0 },     
        
        { label: "2020-10-28 17:00:00" , y: 0 },     
        
        { label: "2020-10-28 18:00:00" , y: 0 },     
        
        { label: "2020-10-28 19:00:00" , y: 0 },     
        
        { label: "2020-10-28 20:00:00" , y: 0 },     
        
        { label: "2020-10-28 21:00:00" , y: 0 },     
        
        { label: "2020-10-28 22:00:00" , y: 0 },     
        
        { label: "2020-10-28 23:00:00" , y: 0 },     
        
        { label: "2020-10-29 00:00:00" , y: 0 },     
        
        { label: "2020-10-29 01:00:00" , y: 0 },     
        
        { label: "2020-10-29 02:00:00" , y: 0 },     
        
        { label: "2020-10-29 03:00:00" , y: 0 },     
        
        { label: "2020-10-29 04:00:00" , y: 0 },     
        
        { label: "2020-10-29 05:00:00" , y: 0 },     
        
        { label: "2020-10-29 06:00:00" , y: 0 },     
        
        { label: "2020-10-29 07:00:00" , y: 0 },     
        
        { label: "2020-10-29 08:00:00" , y: 0 },     
        
        { label: "2020-10-29 09:00:00" , y: 0 },     
        
        { label: "2020-10-29 10:00:00" , y: 0 },     
        
        { label: "2020-10-29 11:00:00" , y: 0 },     
        
        { label: "2020-10-29 12:00:00" , y: 0 },     
        
        { label: "2020-10-29 13:00:00" , y: 0 },     
        
        { label: "2020-10-29 14:00:00" , y: 0 },     
        
        { label: "2020-10-29 15:00:00" , y: 0 },     
        
        { label: "2020-10-29 16:00:00" , y: 0 },     
        
        { label: "2020-10-29 17:00:00" , y: 0 },     
        
        { label: "2020-10-29 18:00:00" , y: 0 },     
        
        { label: "2020-10-29 19:00:00" , y: 0 },     
        
        { label: "2020-10-29 20:00:00" , y: 0 },     
        
        { label: "2020-10-29 21:00:00" , y: 0 },     
        
        { label: "2020-10-29 22:00:00" , y: 0 },     
        
        { label: "2020-10-29 23:00:00" , y: 0 },     
        
        { label: "2020-10-30 00:00:00" , y: 0 },     
        
        { label: "2020-10-30 01:00:00" , y: 0 },     
        
        { label: "2020-10-30 02:00:00" , y: 0 },     
        
        { label: "2020-10-30 03:00:00" , y: 0 },     
        
        { label: "2020-10-30 04:00:00" , y: 0 },     
        
        { label: "2020-10-30 05:00:00" , y: 0 },     
        
        { label: "2020-10-30 06:00:00" , y: 0 },     
        
        { label: "2020-10-30 07:00:00" , y: 0 },     
        
        { label: "2020-10-30 08:00:00" , y: 0 },     
        
        { label: "2020-10-30 09:00:00" , y: 0 },     
        
        { label: "2020-10-30 10:00:00" , y: 0 },     
        
        { label: "2020-10-30 11:00:00" , y: 0 },     
        
        { label: "2020-10-30 12:00:00" , y: 0 },     
        
        { label: "2020-10-30 13:00:00" , y: 0 },     
        
        { label: "2020-10-30 14:00:00" , y: 0 },     
        
        { label: "2020-10-30 15:00:00" , y: 0 },     
        
        { label: "2020-10-30 16:00:00" , y: 0 },     
        
        { label: "2020-10-30 17:00:00" , y: 0 },     
        
        { label: "2020-10-30 18:00:00" , y: 0 },     
        
        { label: "2020-10-30 19:00:00" , y: 0 },     
        
        { label: "2020-10-30 20:00:00" , y: 0 },     
        
        { label: "2020-10-30 21:00:00" , y: 0 },     
        
        { label: "2020-10-30 22:00:00" , y: 0 },     
        
        { label: "2020-10-30 23:00:00" , y: 0 },     
        
        { label: "2020-10-31 00:00:00" , y: 0 },     
        
        { label: "2020-10-31 01:00:00" , y: 0 },     
        
        { label: "2020-10-31 02:00:00" , y: 0 },     
        
        { label: "2020-10-31 03:00:00" , y: 0 },     
        
        { label: "2020-10-31 04:00:00" , y: 0 },     
        
        { label: "2020-10-31 05:00:00" , y: 0 },     
        
        { label: "2020-10-31 06:00:00" , y: 0 },     
        
        { label: "2020-10-31 07:00:00" , y: 0 },     
        
        { label: "2020-10-31 08:00:00" , y: 0 },     
        
        { label: "2020-10-31 09:00:00" , y: 0 },     
        
        { label: "2020-10-31 10:00:00" , y: 0 },     
        
        { label: "2020-10-31 11:00:00" , y: 0 },     
        
        { label: "2020-10-31 12:00:00" , y: 0 },     
        
        { label: "2020-10-31 13:00:00" , y: 0 },     
        
        { label: "2020-10-31 14:00:00" , y: 0 },     
        
        { label: "2020-10-31 15:00:00" , y: 0 },     
        
        { label: "2020-10-31 16:00:00" , y: 0 },     
        
        { label: "2020-10-31 17:00:00" , y: 0 },     
        
        { label: "2020-10-31 18:00:00" , y: 0 },     
        
        { label: "2020-10-31 19:00:00" , y: 0 },     
        
        { label: "2020-10-31 20:00:00" , y: 0 },     
        
        { label: "2020-10-31 21:00:00" , y: 0 },     
        
        { label: "2020-10-31 22:00:00" , y: 0 },     
        
        { label: "2020-10-31 23:00:00" , y: 0 },     
        
        { label: "2020-11-01 00:00:00" , y: 0 },     
        
        { label: "2020-11-01 01:00:00" , y: 0 },     
        
        { label: "2020-11-01 02:00:00" , y: 0 },     
        
        { label: "2020-11-01 03:00:00" , y: 0 },     
        
        { label: "2020-11-01 04:00:00" , y: 0 },     
        
        { label: "2020-11-01 05:00:00" , y: 0 },     
        
        { label: "2020-11-01 06:00:00" , y: 0 },     
        
        { label: "2020-11-01 07:00:00" , y: 0 },     
        
        { label: "2020-11-01 08:00:00" , y: 0 },     
        
        { label: "2020-11-01 09:00:00" , y: 0 },     
        
        { label: "2020-11-01 10:00:00" , y: 0 },     
        
        { label: "2020-11-01 11:00:00" , y: 0 },     
        
        { label: "2020-11-01 12:00:00" , y: 0 },     
        
        { label: "2020-11-01 13:00:00" , y: 0 },     
        
        { label: "2020-11-01 14:00:00" , y: 0 },     
        
        { label: "2020-11-01 15:00:00" , y: 0 },     
        
        { label: "2020-11-01 16:00:00" , y: 0 },     
        
        { label: "2020-11-01 17:00:00" , y: 0 },     
        
        { label: "2020-11-01 18:00:00" , y: 0 },     
        
        { label: "2020-11-01 19:00:00" , y: 0 },     
        
        { label: "2020-11-01 20:00:00" , y: 0 },     
        
        { label: "2020-11-01 21:00:00" , y: 0 },     
        
        { label: "2020-11-01 22:00:00" , y: 0 },     
        
        { label: "2020-11-01 23:00:00" , y: 0 },     
        
        { label: "2020-11-02 00:00:00" , y: 0 },     
        
        { label: "2020-11-02 01:00:00" , y: 0 },     
        
        { label: "2020-11-02 02:00:00" , y: 0 },     
        
        { label: "2020-11-02 03:00:00" , y: 0 },     
        
        { label: "2020-11-02 04:00:00" , y: 0 },     
        
        { label: "2020-11-02 05:00:00" , y: 0 },     
        
        { label: "2020-11-02 06:00:00" , y: 0 },     
        
        { label: "2020-11-02 07:00:00" , y: 0 },     
        
        { label: "2020-11-02 08:00:00" , y: 0 },     
        
        { label: "2020-11-02 09:00:00" , y: 0 },     
        
        { label: "2020-11-02 10:00:00" , y: 0 },     
        
        { label: "2020-11-02 11:00:00" , y: 0 },     
        
        { label: "2020-11-02 12:00:00" , y: 0 },     
        
        { label: "2020-11-02 13:00:00" , y: 0 },     
        
        { label: "2020-11-02 14:00:00" , y: 0 },     
        
        { label: "2020-11-02 15:00:00" , y: 0 },     
        
        { label: "2020-11-02 16:00:00" , y: 0 },     
        
        { label: "2020-11-02 17:00:00" , y: 0 },     
        
        { label: "2020-11-02 18:00:00" , y: 0 },     
        
        { label: "2020-11-02 19:00:00" , y: 0 },     
        
        { label: "2020-11-02 20:00:00" , y: 0 },     
        
        { label: "2020-11-02 21:00:00" , y: 0 },     
        
        { label: "2020-11-02 22:00:00" , y: 0 },     
        
        { label: "2020-11-02 23:00:00" , y: 0 },     
        
        { label: "2020-11-03 00:00:00" , y: 0 },     
        
        { label: "2020-11-03 01:00:00" , y: 0 },     
        
        { label: "2020-11-03 02:00:00" , y: 0 },     
        
        { label: "2020-11-03 03:00:00" , y: 0 },     
        
        { label: "2020-11-03 04:00:00" , y: 0 },     
        
        { label: "2020-11-03 05:00:00" , y: 0 },     
        
        { label: "2020-11-03 06:00:00" , y: 0 },     
        
        { label: "2020-11-03 07:00:00" , y: 0 },     
        
        { label: "2020-11-03 08:00:00" , y: 0 },     
        
        { label: "2020-11-03 09:00:00" , y: 0 },     
        
        { label: "2020-11-03 10:00:00" , y: 0 },     
        
        { label: "2020-11-03 11:00:00" , y: 0 },     
        
        { label: "2020-11-03 12:00:00" , y: 0 },     
        
        { label: "2020-11-03 13:00:00" , y: 0 },     
        
        { label: "2020-11-03 14:00:00" , y: 0 },     
        
        { label: "2020-11-03 15:00:00" , y: 0 },     
        
        { label: "2020-11-03 16:00:00" , y: 0 },     
        
        { label: "2020-11-03 17:00:00" , y: 0 },     
        
        { label: "2020-11-03 18:00:00" , y: 0 },     
        
        { label: "2020-11-03 19:00:00" , y: 0 },     
        
        { label: "2020-11-03 20:00:00" , y: 0 },     
        
        { label: "2020-11-03 21:00:00" , y: 0 },     
        
        { label: "2020-11-03 22:00:00" , y: 0 },     
        
        { label: "2020-11-03 23:00:00" , y: 0 },     
        
        { label: "2020-11-04 00:00:00" , y: 0 },     
        
        { label: "2020-11-04 01:00:00" , y: 0 },     
        
        { label: "2020-11-04 02:00:00" , y: 0 },     
        
        { label: "2020-11-04 03:00:00" , y: 0 },     
        
        { label: "2020-11-04 04:00:00" , y: 0 },     
        
        { label: "2020-11-04 05:00:00" , y: 0 },     
        
        { label: "2020-11-04 06:00:00" , y: 0 },     
        
        { label: "2020-11-04 07:00:00" , y: 0 },     
        
        { label: "2020-11-04 08:00:00" , y: 0 },     
        
        { label: "2020-11-04 09:00:00" , y: 0 },     
        
        { label: "2020-11-04 10:00:00" , y: 0 },     
        
        { label: "2020-11-04 11:00:00" , y: 0 },     
        
        { label: "2020-11-04 12:00:00" , y: 0 },     
        
        { label: "2020-11-04 13:00:00" , y: 0 },     
        
        { label: "2020-11-04 14:00:00" , y: 0 },     
        
        { label: "2020-11-04 15:00:00" , y: 0 },     
        
        { label: "2020-11-04 16:00:00" , y: 0 },     
        
        { label: "2020-11-04 17:00:00" , y: 0 },     
        
        { label: "2020-11-04 18:00:00" , y: 0 },     
        
        { label: "2020-11-04 19:00:00" , y: 0 },     
        
        { label: "2020-11-04 20:00:00" , y: 0 },     
        
        { label: "2020-11-04 21:00:00" , y: 0 },     
        
        { label: "2020-11-04 22:00:00" , y: 0 },     
        
        { label: "2020-11-04 23:00:00" , y: 0 },     
        
        { label: "2020-11-05 00:00:00" , y: 0 },     
        
        { label: "2020-11-05 01:00:00" , y: 0 },     
        
        { label: "2020-11-05 02:00:00" , y: 0 },     
        
        { label: "2020-11-05 03:00:00" , y: 0 },     
        
        { label: "2020-11-05 04:00:00" , y: 0 },     
        
        { label: "2020-11-05 05:00:00" , y: 0 },     
        
        { label: "2020-11-05 06:00:00" , y: 0 },     
        
        { label: "2020-11-05 07:00:00" , y: 0 },     
        
        { label: "2020-11-05 08:00:00" , y: 0 },     
        
        { label: "2020-11-05 09:00:00" , y: 0 },     
        
        { label: "2020-11-05 10:00:00" , y: 0 },     
        
        { label: "2020-11-05 11:00:00" , y: 0 },     
        
        { label: "2020-11-05 12:00:00" , y: 0 },     
        
        { label: "2020-11-05 13:00:00" , y: 0 },     
        
        { label: "2020-11-05 14:00:00" , y: 0 },     
        
        { label: "2020-11-05 15:00:00" , y: 0 },     
        
        { label: "2020-11-05 16:00:00" , y: 0 },     
        
        { label: "2020-11-05 17:00:00" , y: 0 },     
        
        { label: "2020-11-05 18:00:00" , y: 0 },     
        
        { label: "2020-11-05 19:00:00" , y: 0 },     
        
        { label: "2020-11-05 20:00:00" , y: 0 },     
        
        { label: "2020-11-05 21:00:00" , y: 0 },     
        
        { label: "2020-11-05 22:00:00" , y: 0 },     
        
        { label: "2020-11-05 23:00:00" , y: 0 },     
        
        { label: "2020-11-06 00:00:00" , y: 0 },     
        
        { label: "2020-11-06 01:00:00" , y: 0 },     
        
        { label: "2020-11-06 02:00:00" , y: 0 },     
        
        { label: "2020-11-06 03:00:00" , y: 0 },     
        
        { label: "2020-11-06 04:00:00" , y: 0 },     
        
        { label: "2020-11-06 05:00:00" , y: 0 },     
        
        { label: "2020-11-06 06:00:00" , y: 0 },     
        
        { label: "2020-11-06 07:00:00" , y: 0 },     
        
        { label: "2020-11-06 08:00:00" , y: 0 },     
        
        { label: "2020-11-06 09:00:00" , y: 0 },     
        
        { label: "2020-11-06 10:00:00" , y: 0 },     
        
        { label: "2020-11-06 11:00:00" , y: 0 },     
        
        { label: "2020-11-06 12:00:00" , y: 0 },     
        
        { label: "2020-11-06 13:00:00" , y: 0 },     
        
        { label: "2020-11-06 14:00:00" , y: 0 },     
        
        { label: "2020-11-06 15:00:00" , y: 0 },     
        
        { label: "2020-11-06 16:00:00" , y: 0 },     
        
        { label: "2020-11-06 17:00:00" , y: 0 },     
        
        { label: "2020-11-06 18:00:00" , y: 0 },     
        
        { label: "2020-11-06 19:00:00" , y: 0 },     
        
        { label: "2020-11-06 20:00:00" , y: 0 },     
        
        { label: "2020-11-06 21:00:00" , y: 0 },     
        
        { label: "2020-11-06 22:00:00" , y: 0 },     
        
        { label: "2020-11-06 23:00:00" , y: 0 },     
        
        { label: "2020-11-07 00:00:00" , y: 0 },     
        
        { label: "2020-11-07 01:00:00" , y: 0 },     
        
        { label: "2020-11-07 02:00:00" , y: 0 },     
        
        { label: "2020-11-07 03:00:00" , y: 0 },     
        
        { label: "2020-11-07 04:00:00" , y: 0 },     
        
        { label: "2020-11-07 05:00:00" , y: 0 },     
        
        { label: "2020-11-07 06:00:00" , y: 0 },     
        
        { label: "2020-11-07 07:00:00" , y: 0 },     
        
        { label: "2020-11-07 08:00:00" , y: 0 },     
        
        { label: "2020-11-07 09:00:00" , y: 0 },     
        
        { label: "2020-11-07 10:00:00" , y: 0 },     
        
        { label: "2020-11-07 11:00:00" , y: 0 },     
        
        { label: "2020-11-07 12:00:00" , y: 0 },     
        
        { label: "2020-11-07 13:00:00" , y: 0 },     
        
        { label: "2020-11-07 14:00:00" , y: 0 },     
        
        { label: "2020-11-07 15:00:00" , y: 0 },     
        
        { label: "2020-11-07 16:00:00" , y: 0 },     
        
        { label: "2020-11-07 17:00:00" , y: 0 },     
        
        { label: "2020-11-07 18:00:00" , y: 0 },     
        
        { label: "2020-11-07 19:00:00" , y: 0 },     
        
        { label: "2020-11-07 20:00:00" , y: 0 },     
        
        { label: "2020-11-07 21:00:00" , y: 0 },     
        
        { label: "2020-11-07 22:00:00" , y: 0 },     
        
        { label: "2020-11-07 23:00:00" , y: 0 },     
        
        { label: "2020-11-08 00:00:00" , y: 0 },     
        
        { label: "2020-11-08 01:00:00" , y: 0 },     
        
        { label: "2020-11-08 02:00:00" , y: 0 },     
        
        { label: "2020-11-08 03:00:00" , y: 0 },     
        
        { label: "2020-11-08 04:00:00" , y: 0 },     
        
        { label: "2020-11-08 05:00:00" , y: 0 },     
        
        { label: "2020-11-08 06:00:00" , y: 0 },     
        
        { label: "2020-11-08 07:00:00" , y: 0 },     
        
        { label: "2020-11-08 08:00:00" , y: 0 },     
        
        { label: "2020-11-08 09:00:00" , y: 0 },     
        
        { label: "2020-11-08 10:00:00" , y: 0 },     
        
        { label: "2020-11-08 11:00:00" , y: 0 },     
        
        { label: "2020-11-08 12:00:00" , y: 0 },     
        
        { label: "2020-11-08 13:00:00" , y: 0 },     
        
        { label: "2020-11-08 14:00:00" , y: 0 },     
        
        { label: "2020-11-08 15:00:00" , y: 0 },     
        
        { label: "2020-11-08 16:00:00" , y: 0 },     
        
        { label: "2020-11-08 17:00:00" , y: 0 },     
        
        { label: "2020-11-08 18:00:00" , y: 0 },     
        
        { label: "2020-11-08 19:00:00" , y: 0 },     
        
        { label: "2020-11-08 20:00:00" , y: 0 },     
        
        { label: "2020-11-08 21:00:00" , y: 0 },     
        
        { label: "2020-11-08 22:00:00" , y: 0 },     
        
        { label: "2020-11-08 23:00:00" , y: 0 },     
        
        { label: "2020-11-09 00:00:00" , y: 0 },     
        
        { label: "2020-11-09 01:00:00" , y: 0 },     
        
        { label: "2020-11-09 02:00:00" , y: 0 },     
        
        { label: "2020-11-09 03:00:00" , y: 0 },     
        
        { label: "2020-11-09 04:00:00" , y: 0 },     
        
        { label: "2020-11-09 05:00:00" , y: 0 },     
        
        { label: "2020-11-09 06:00:00" , y: 0 },     
        
        { label: "2020-11-09 07:00:00" , y: 0 },     
        
        { label: "2020-11-09 08:00:00" , y: 0 },     
        
        { label: "2020-11-09 09:00:00" , y: 0 },     
        
        { label: "2020-11-09 10:00:00" , y: 0 },     
        
        { label: "2020-11-09 11:00:00" , y: 0 },     
        ]},

        {        
        type: "spline",
        name: "Axis B",lineThickness: 2,color: "brown",
        showInLegend: true,
        dataPoints: [        
        
        { label: "2020-10-09 12:00:00" , y: 0 },     
        
        { label: "2020-10-09 13:00:00" , y: 0 },     
        
        { label: "2020-10-09 14:00:00" , y: 0 },     
        
        { label: "2020-10-09 15:00:00" , y: 0 },     
        
        { label: "2020-10-09 16:00:00" , y: 0 },     
        
        { label: "2020-10-09 17:00:00" , y: 0 },     
        
        { label: "2020-10-09 18:00:00" , y: 0 },     
        
        { label: "2020-10-09 19:00:00" , y: 0 },     
        
        { label: "2020-10-09 20:00:00" , y: 0 },     
        
        { label: "2020-10-09 21:00:00" , y: 0 },     
        
        { label: "2020-10-09 22:00:00" , y: 0 },     
        
        { label: "2020-10-09 23:00:00" , y: 0 },     
        
        { label: "2020-10-10 00:00:00" , y: 0 },     
        
        { label: "2020-10-10 01:00:00" , y: 0 },     
        
        { label: "2020-10-10 02:00:00" , y: 0 },     
        
        { label: "2020-10-10 03:00:00" , y: 0 },     
        
        { label: "2020-10-10 04:00:00" , y: 0 },     
        
        { label: "2020-10-10 05:00:00" , y: 0 },     
        
        { label: "2020-10-10 06:00:00" , y: 0 },     
        
        { label: "2020-10-10 07:00:00" , y: 0 },     
        
        { label: "2020-10-10 08:00:00" , y: 0 },     
        
        { label: "2020-10-10 09:00:00" , y: 0 },     
        
        { label: "2020-10-10 10:00:00" , y: 0 },     
        
        { label: "2020-10-10 11:00:00" , y: 0 },     
        
        { label: "2020-10-10 12:00:00" , y: 0 },     
        
        { label: "2020-10-10 13:00:00" , y: 0 },     
        
        { label: "2020-10-10 14:00:00" , y: 0 },     
        
        { label: "2020-10-10 15:00:00" , y: 0 },     
        
        { label: "2020-10-10 16:00:00" , y: 0 },     
        
        { label: "2020-10-10 17:00:00" , y: 0 },     
        
        { label: "2020-10-10 18:00:00" , y: 0 },     
        
        { label: "2020-10-10 19:00:00" , y: 0 },     
        
        { label: "2020-10-10 20:00:00" , y: 0 },     
        
        { label: "2020-10-10 21:00:00" , y: 0 },     
        
        { label: "2020-10-10 22:00:00" , y: 0 },     
        
        { label: "2020-10-10 23:00:00" , y: 0 },     
        
        { label: "2020-10-11 00:00:00" , y: 0 },     
        
        { label: "2020-10-11 01:00:00" , y: 0 },     
        
        { label: "2020-10-11 02:00:00" , y: 0 },     
        
        { label: "2020-10-11 03:00:00" , y: 0 },     
        
        { label: "2020-10-11 04:00:00" , y: 0 },     
        
        { label: "2020-10-11 05:00:00" , y: 0 },     
        
        { label: "2020-10-11 06:00:00" , y: 0 },     
        
        { label: "2020-10-11 07:00:00" , y: 0 },     
        
        { label: "2020-10-11 08:00:00" , y: 0 },     
        
        { label: "2020-10-11 09:00:00" , y: 0 },     
        
        { label: "2020-10-11 10:00:00" , y: 0 },     
        
        { label: "2020-10-11 11:00:00" , y: 0 },     
        
        { label: "2020-10-11 12:00:00" , y: 0 },     
        
        { label: "2020-10-11 13:00:00" , y: 0 },     
        
        { label: "2020-10-11 14:00:00" , y: 0 },     
        
        { label: "2020-10-11 15:00:00" , y: 0 },     
        
        { label: "2020-10-11 16:00:00" , y: 0 },     
        
        { label: "2020-10-11 17:00:00" , y: 0 },     
        
        { label: "2020-10-11 18:00:00" , y: 0 },     
        
        { label: "2020-10-11 19:00:00" , y: 0 },     
        
        { label: "2020-10-11 20:00:00" , y: 0 },     
        
        { label: "2020-10-11 21:00:00" , y: 0 },     
        
        { label: "2020-10-11 22:00:00" , y: 0 },     
        
        { label: "2020-10-11 23:00:00" , y: 0 },     
        
        { label: "2020-10-12 00:00:00" , y: 0 },     
        
        { label: "2020-10-12 01:00:00" , y: 0 },     
        
        { label: "2020-10-12 02:00:00" , y: 0 },     
        
        { label: "2020-10-12 03:00:00" , y: 0 },     
        
        { label: "2020-10-12 04:00:00" , y: 0 },     
        
        { label: "2020-10-12 05:00:00" , y: 0 },     
        
        { label: "2020-10-12 06:00:00" , y: 0 },     
        
        { label: "2020-10-12 07:00:00" , y: 0 },     
        
        { label: "2020-10-12 08:00:00" , y: 0 },     
        
        { label: "2020-10-12 09:00:00" , y: 0 },     
        
        { label: "2020-10-12 10:00:00" , y: 0 },     
        
        { label: "2020-10-12 11:00:00" , y: 0 },     
        
        { label: "2020-10-12 12:00:00" , y: 0 },     
        
        { label: "2020-10-12 13:00:00" , y: 0 },     
        
        { label: "2020-10-12 14:00:00" , y: 0 },     
        
        { label: "2020-10-12 15:00:00" , y: 0 },     
        
        { label: "2020-10-12 16:00:00" , y: 0 },     
        
        { label: "2020-10-12 17:00:00" , y: 0 },     
        
        { label: "2020-10-12 18:00:00" , y: 0 },     
        
        { label: "2020-10-12 19:00:00" , y: 0 },     
        
        { label: "2020-10-12 20:00:00" , y: 0 },     
        
        { label: "2020-10-12 21:00:00" , y: 0 },     
        
        { label: "2020-10-12 22:00:00" , y: 0 },     
        
        { label: "2020-10-12 23:00:00" , y: 0 },     
        
        { label: "2020-10-13 00:00:00" , y: 0 },     
        
        { label: "2020-10-13 01:00:00" , y: 0 },     
        
        { label: "2020-10-13 02:00:00" , y: 0 },     
        
        { label: "2020-10-13 03:00:00" , y: 0 },     
        
        { label: "2020-10-13 04:00:00" , y: 0 },     
        
        { label: "2020-10-13 05:00:00" , y: 0 },     
        
        { label: "2020-10-13 06:00:00" , y: 0 },     
        
        { label: "2020-10-13 07:00:00" , y: 0 },     
        
        { label: "2020-10-13 08:00:00" , y: 0 },     
        
        { label: "2020-10-13 09:00:00" , y: 0 },     
        
        { label: "2020-10-13 10:00:00" , y: 0 },     
        
        { label: "2020-10-13 11:00:00" , y: 0 },     
        
        { label: "2020-10-13 12:00:00" , y: 0 },     
        
        { label: "2020-10-13 13:00:00" , y: 0 },     
        
        { label: "2020-10-13 14:00:00" , y: 0 },     
        
        { label: "2020-10-13 15:00:00" , y: 0 },     
        
        { label: "2020-10-13 16:00:00" , y: 0 },     
        
        { label: "2020-10-13 17:00:00" , y: 0 },     
        
        { label: "2020-10-13 18:00:00" , y: 0 },     
        
        { label: "2020-10-13 19:00:00" , y: 0 },     
        
        { label: "2020-10-13 20:00:00" , y: 0 },     
        
        { label: "2020-10-13 21:00:00" , y: 0 },     
        
        { label: "2020-10-13 22:00:00" , y: 0 },     
        
        { label: "2020-10-13 23:00:00" , y: 0 },     
        
        { label: "2020-10-14 00:00:00" , y: 0 },     
        
        { label: "2020-10-14 01:00:00" , y: 0 },     
        
        { label: "2020-10-14 02:00:00" , y: 0 },     
        
        { label: "2020-10-14 03:00:00" , y: 0 },     
        
        { label: "2020-10-14 04:00:00" , y: 0 },     
        
        { label: "2020-10-14 05:00:00" , y: 0 },     
        
        { label: "2020-10-14 06:00:00" , y: 0 },     
        
        { label: "2020-10-14 07:00:00" , y: 0 },     
        
        { label: "2020-10-14 08:00:00" , y: 0 },     
        
        { label: "2020-10-14 09:00:00" , y: 0 },     
        
        { label: "2020-10-14 10:00:00" , y: 0 },     
        
        { label: "2020-10-14 11:00:00" , y: 0 },     
        
        { label: "2020-10-14 12:00:00" , y: 0 },     
        
        { label: "2020-10-14 13:00:00" , y: 0 },     
        
        { label: "2020-10-14 14:00:00" , y: 0 },     
        
        { label: "2020-10-14 15:00:00" , y: 0 },     
        
        { label: "2020-10-14 16:00:00" , y: 0 },     
        
        { label: "2020-10-14 17:00:00" , y: 0 },     
        
        { label: "2020-10-14 18:00:00" , y: 0 },     
        
        { label: "2020-10-14 19:00:00" , y: 0 },     
        
        { label: "2020-10-14 20:00:00" , y: 0 },     
        
        { label: "2020-10-14 21:00:00" , y: 0 },     
        
        { label: "2020-10-14 22:00:00" , y: 0 },     
        
        { label: "2020-10-14 23:00:00" , y: 0 },     
        
        { label: "2020-10-15 00:00:00" , y: 0 },     
        
        { label: "2020-10-15 01:00:00" , y: 0 },     
        
        { label: "2020-10-15 02:00:00" , y: 0 },     
        
        { label: "2020-10-15 03:00:00" , y: 0 },     
        
        { label: "2020-10-15 04:00:00" , y: 0 },     
        
        { label: "2020-10-15 05:00:00" , y: 0 },     
        
        { label: "2020-10-15 06:00:00" , y: 0 },     
        
        { label: "2020-10-15 07:00:00" , y: 0 },     
        
        { label: "2020-10-15 08:00:00" , y: 0 },     
        
        { label: "2020-10-15 09:00:00" , y: 0 },     
        
        { label: "2020-10-15 10:00:00" , y: 0 },     
        
        { label: "2020-10-15 11:00:00" , y: 0 },     
        
        { label: "2020-10-15 12:00:00" , y: 0 },     
        
        { label: "2020-10-15 13:00:00" , y: 0 },     
        
        { label: "2020-10-15 14:00:00" , y: 0 },     
        
        { label: "2020-10-15 15:00:00" , y: 0 },     
        
        { label: "2020-10-15 16:00:00" , y: 0 },     
        
        { label: "2020-10-15 17:00:00" , y: 0 },     
        
        { label: "2020-10-15 18:00:00" , y: 0 },     
        
        { label: "2020-10-15 19:00:00" , y: 0 },     
        
        { label: "2020-10-15 20:00:00" , y: 0 },     
        
        { label: "2020-10-15 21:00:00" , y: 0 },     
        
        { label: "2020-10-15 22:00:00" , y: 0 },     
        
        { label: "2020-10-15 23:00:00" , y: 0 },     
        
        { label: "2020-10-16 00:00:00" , y: 0 },     
        
        { label: "2020-10-16 01:00:00" , y: 0 },     
        
        { label: "2020-10-16 02:00:00" , y: 0 },     
        
        { label: "2020-10-16 03:00:00" , y: 0 },     
        
        { label: "2020-10-16 04:00:00" , y: 0 },     
        
        { label: "2020-10-16 05:00:00" , y: 0 },     
        
        { label: "2020-10-16 06:00:00" , y: 0 },     
        
        { label: "2020-10-16 07:00:00" , y: 0 },     
        
        { label: "2020-10-16 08:00:00" , y: 0 },     
        
        { label: "2020-10-16 09:00:00" , y: 0 },     
        
        { label: "2020-10-16 10:00:00" , y: 0 },     
        
        { label: "2020-10-16 11:00:00" , y: 0 },     
        
        { label: "2020-10-16 12:00:00" , y: 0 },     
        
        { label: "2020-10-16 13:00:00" , y: 0 },     
        
        { label: "2020-10-16 14:00:00" , y: 0 },     
        
        { label: "2020-10-16 15:00:00" , y: 0 },     
        
        { label: "2020-10-16 16:00:00" , y: 0 },     
        
        { label: "2020-10-16 17:00:00" , y: 0 },     
        
        { label: "2020-10-16 18:00:00" , y: 0 },     
        
        { label: "2020-10-16 19:00:00" , y: 0 },     
        
        { label: "2020-10-16 20:00:00" , y: 0 },     
        
        { label: "2020-10-16 21:00:00" , y: 0 },     
        
        { label: "2020-10-16 22:00:00" , y: 0 },     
        
        { label: "2020-10-16 23:00:00" , y: 0 },     
        
        { label: "2020-10-17 00:00:00" , y: 0 },     
        
        { label: "2020-10-17 01:00:00" , y: 0 },     
        
        { label: "2020-10-17 02:00:00" , y: 0 },     
        
        { label: "2020-10-17 03:00:00" , y: 0 },     
        
        { label: "2020-10-17 04:00:00" , y: 0 },     
        
        { label: "2020-10-17 05:00:00" , y: 0 },     
        
        { label: "2020-10-17 06:00:00" , y: 0 },     
        
        { label: "2020-10-17 07:00:00" , y: 0 },     
        
        { label: "2020-10-17 08:00:00" , y: 0 },     
        
        { label: "2020-10-17 09:00:00" , y: 0 },     
        
        { label: "2020-10-17 10:00:00" , y: 0 },     
        
        { label: "2020-10-17 11:00:00" , y: 0 },     
        
        { label: "2020-10-17 12:00:00" , y: 0 },     
        
        { label: "2020-10-17 13:00:00" , y: 0 },     
        
        { label: "2020-10-17 14:00:00" , y: 0 },     
        
        { label: "2020-10-17 15:00:00" , y: 0 },     
        
        { label: "2020-10-17 16:00:00" , y: 0 },     
        
        { label: "2020-10-17 17:00:00" , y: 0 },     
        
        { label: "2020-10-17 18:00:00" , y: 0 },     
        
        { label: "2020-10-17 19:00:00" , y: 0 },     
        
        { label: "2020-10-17 20:00:00" , y: 0 },     
        
        { label: "2020-10-17 21:00:00" , y: 0 },     
        
        { label: "2020-10-17 22:00:00" , y: 0 },     
        
        { label: "2020-10-17 23:00:00" , y: 0 },     
        
        { label: "2020-10-18 00:00:00" , y: 0 },     
        
        { label: "2020-10-18 01:00:00" , y: 0 },     
        
        { label: "2020-10-18 02:00:00" , y: 0 },     
        
        { label: "2020-10-18 03:00:00" , y: 0 },     
        
        { label: "2020-10-18 04:00:00" , y: 0 },     
        
        { label: "2020-10-18 05:00:00" , y: 0 },     
        
        { label: "2020-10-18 06:00:00" , y: 0 },     
        
        { label: "2020-10-18 07:00:00" , y: 0 },     
        
        { label: "2020-10-18 08:00:00" , y: 0 },     
        
        { label: "2020-10-18 09:00:00" , y: 0 },     
        
        { label: "2020-10-18 10:00:00" , y: 0 },     
        
        { label: "2020-10-18 11:00:00" , y: 0 },     
        
        { label: "2020-10-18 12:00:00" , y: 0 },     
        
        { label: "2020-10-18 13:00:00" , y: 0 },     
        
        { label: "2020-10-18 14:00:00" , y: 0 },     
        
        { label: "2020-10-18 15:00:00" , y: 0 },     
        
        { label: "2020-10-18 16:00:00" , y: 0 },     
        
        { label: "2020-10-18 17:00:00" , y: 0 },     
        
        { label: "2020-10-18 18:00:00" , y: 0 },     
        
        { label: "2020-10-18 19:00:00" , y: 0 },     
        
        { label: "2020-10-18 20:00:00" , y: 0 },     
        
        { label: "2020-10-18 21:00:00" , y: 0 },     
        
        { label: "2020-10-18 22:00:00" , y: 0 },     
        
        { label: "2020-10-18 23:00:00" , y: 0 },     
        
        { label: "2020-10-19 00:00:00" , y: 0 },     
        
        { label: "2020-10-19 01:00:00" , y: 0 },     
        
        { label: "2020-10-19 02:00:00" , y: 0 },     
        
        { label: "2020-10-19 03:00:00" , y: 0 },     
        
        { label: "2020-10-19 04:00:00" , y: 0 },     
        
        { label: "2020-10-19 05:00:00" , y: 0 },     
        
        { label: "2020-10-19 06:00:00" , y: 0 },     
        
        { label: "2020-10-19 07:00:00" , y: 0 },     
        
        { label: "2020-10-19 08:00:00" , y: 0 },     
        
        { label: "2020-10-19 09:00:00" , y: 0 },     
        
        { label: "2020-10-19 10:00:00" , y: 0 },     
        
        { label: "2020-10-19 11:00:00" , y: 0 },     
        
        { label: "2020-10-19 12:00:00" , y: 0 },     
        
        { label: "2020-10-19 13:00:00" , y: 0 },     
        
        { label: "2020-10-19 14:00:00" , y: 0 },     
        
        { label: "2020-10-19 15:00:00" , y: 0 },     
        
        { label: "2020-10-19 16:00:00" , y: 0 },     
        
        { label: "2020-10-19 17:00:00" , y: 0 },     
        
        { label: "2020-10-19 18:00:00" , y: 0 },     
        
        { label: "2020-10-19 19:00:00" , y: 0 },     
        
        { label: "2020-10-19 20:00:00" , y: 0 },     
        
        { label: "2020-10-19 21:00:00" , y: 0 },     
        
        { label: "2020-10-19 22:00:00" , y: 0 },     
        
        { label: "2020-10-19 23:00:00" , y: 0 },     
        
        { label: "2020-10-20 00:00:00" , y: 0 },     
        
        { label: "2020-10-20 01:00:00" , y: 0 },     
        
        { label: "2020-10-20 02:00:00" , y: 0 },     
        
        { label: "2020-10-20 03:00:00" , y: 0 },     
        
        { label: "2020-10-20 04:00:00" , y: 0 },     
        
        { label: "2020-10-20 05:00:00" , y: 0 },     
        
        { label: "2020-10-20 06:00:00" , y: 0 },     
        
        { label: "2020-10-20 07:00:00" , y: 0 },     
        
        { label: "2020-10-20 08:00:00" , y: 0 },     
        
        { label: "2020-10-20 09:00:00" , y: 0 },     
        
        { label: "2020-10-20 10:00:00" , y: 0 },     
        
        { label: "2020-10-20 11:00:00" , y: 0 },     
        
        { label: "2020-10-20 12:00:00" , y: 0 },     
        
        { label: "2020-10-20 13:00:00" , y: 0 },     
        
        { label: "2020-10-20 14:00:00" , y: 0 },     
        
        { label: "2020-10-20 15:00:00" , y: 0 },     
        
        { label: "2020-10-20 16:00:00" , y: 0 },     
        
        { label: "2020-10-20 17:00:00" , y: 0 },     
        
        { label: "2020-10-20 18:00:00" , y: 0 },     
        
        { label: "2020-10-20 19:00:00" , y: 0 },     
        
        { label: "2020-10-20 20:00:00" , y: 0 },     
        
        { label: "2020-10-20 21:00:00" , y: 0 },     
        
        { label: "2020-10-20 22:00:00" , y: 0 },     
        
        { label: "2020-10-20 23:00:00" , y: 0 },     
        
        { label: "2020-10-21 00:00:00" , y: 0 },     
        
        { label: "2020-10-21 01:00:00" , y: 0 },     
        
        { label: "2020-10-21 02:00:00" , y: 0 },     
        
        { label: "2020-10-21 03:00:00" , y: 0 },     
        
        { label: "2020-10-21 04:00:00" , y: 0 },     
        
        { label: "2020-10-21 05:00:00" , y: 0 },     
        
        { label: "2020-10-21 06:00:00" , y: 0 },     
        
        { label: "2020-10-21 07:00:00" , y: 0 },     
        
        { label: "2020-10-21 08:00:00" , y: 0 },     
        
        { label: "2020-10-21 09:00:00" , y: 0 },     
        
        { label: "2020-10-21 10:00:00" , y: 0 },     
        
        { label: "2020-10-21 11:00:00" , y: 0 },     
        
        { label: "2020-10-21 12:00:00" , y: 0 },     
        
        { label: "2020-10-21 13:00:00" , y: 0 },     
        
        { label: "2020-10-21 14:00:00" , y: 0 },     
        
        { label: "2020-10-21 15:00:00" , y: 0 },     
        
        { label: "2020-10-21 16:00:00" , y: 0 },     
        
        { label: "2020-10-21 17:00:00" , y: 0 },     
        
        { label: "2020-10-21 18:00:00" , y: 0 },     
        
        { label: "2020-10-21 19:00:00" , y: 0 },     
        
        { label: "2020-10-21 20:00:00" , y: 0 },     
        
        { label: "2020-10-21 21:00:00" , y: 0 },     
        
        { label: "2020-10-21 22:00:00" , y: 0 },     
        
        { label: "2020-10-21 23:00:00" , y: 0 },     
        
        { label: "2020-10-22 00:00:00" , y: 0 },     
        
        { label: "2020-10-22 01:00:00" , y: 0 },     
        
        { label: "2020-10-22 02:00:00" , y: 0 },     
        
        { label: "2020-10-22 03:00:00" , y: 0 },     
        
        { label: "2020-10-22 04:00:00" , y: 0 },     
        
        { label: "2020-10-22 05:00:00" , y: 0 },     
        
        { label: "2020-10-22 06:00:00" , y: 0 },     
        
        { label: "2020-10-22 07:00:00" , y: 0 },     
        
        { label: "2020-10-22 08:00:00" , y: 0 },     
        
        { label: "2020-10-22 09:00:00" , y: 0 },     
        
        { label: "2020-10-22 10:00:00" , y: 0 },     
        
        { label: "2020-10-22 11:00:00" , y: 0 },     
        
        { label: "2020-10-22 12:00:00" , y: 0 },     
        
        { label: "2020-10-22 13:00:00" , y: 0 },     
        
        { label: "2020-10-22 14:00:00" , y: 0 },     
        
        { label: "2020-10-22 15:00:00" , y: 0 },     
        
        { label: "2020-10-22 16:00:00" , y: 0 },     
        
        { label: "2020-10-22 17:00:00" , y: 0 },     
        
        { label: "2020-10-22 18:00:00" , y: 0 },     
        
        { label: "2020-10-22 19:00:00" , y: 0 },     
        
        { label: "2020-10-22 20:00:00" , y: 0 },     
        
        { label: "2020-10-22 21:00:00" , y: 0 },     
        
        { label: "2020-10-22 22:00:00" , y: 0 },     
        
        { label: "2020-10-22 23:00:00" , y: 0 },     
        
        { label: "2020-10-23 00:00:00" , y: 0 },     
        
        { label: "2020-10-23 01:00:00" , y: 0 },     
        
        { label: "2020-10-23 02:00:00" , y: 0 },     
        
        { label: "2020-10-23 03:00:00" , y: 0 },     
        
        { label: "2020-10-23 04:00:00" , y: 0 },     
        
        { label: "2020-10-23 05:00:00" , y: 0 },     
        
        { label: "2020-10-23 06:00:00" , y: 0 },     
        
        { label: "2020-10-23 07:00:00" , y: 0 },     
        
        { label: "2020-10-23 08:00:00" , y: 0 },     
        
        { label: "2020-10-23 09:00:00" , y: 0 },     
        
        { label: "2020-10-23 10:00:00" , y: 0 },     
        
        { label: "2020-10-23 11:00:00" , y: 0 },     
        
        { label: "2020-10-23 12:00:00" , y: 0 },     
        
        { label: "2020-10-23 13:00:00" , y: 0 },     
        
        { label: "2020-10-23 14:00:00" , y: 0 },     
        
        { label: "2020-10-23 15:00:00" , y: 0 },     
        
        { label: "2020-10-23 16:00:00" , y: 0 },     
        
        { label: "2020-10-23 17:00:00" , y: 0 },     
        
        { label: "2020-10-23 18:00:00" , y: 0 },     
        
        { label: "2020-10-23 19:00:00" , y: 0 },     
        
        { label: "2020-10-23 20:00:00" , y: 0 },     
        
        { label: "2020-10-23 21:00:00" , y: 0 },     
        
        { label: "2020-10-23 22:00:00" , y: 0 },     
        
        { label: "2020-10-23 23:00:00" , y: 0 },     
        
        { label: "2020-10-24 00:00:00" , y: 0 },     
        
        { label: "2020-10-24 01:00:00" , y: 0 },     
        
        { label: "2020-10-24 02:00:00" , y: 0 },     
        
        { label: "2020-10-24 03:00:00" , y: 0 },     
        
        { label: "2020-10-24 04:00:00" , y: 0 },     
        
        { label: "2020-10-24 05:00:00" , y: 0 },     
        
        { label: "2020-10-24 06:00:00" , y: 0 },     
        
        { label: "2020-10-24 07:00:00" , y: 0 },     
        
        { label: "2020-10-24 08:00:00" , y: 0 },     
        
        { label: "2020-10-24 09:00:00" , y: 0 },     
        
        { label: "2020-10-24 10:00:00" , y: 0 },     
        
        { label: "2020-10-24 11:00:00" , y: 0 },     
        
        { label: "2020-10-24 12:00:00" , y: 0 },     
        
        { label: "2020-10-24 13:00:00" , y: 0 },     
        
        { label: "2020-10-24 14:00:00" , y: 0 },     
        
        { label: "2020-10-24 15:00:00" , y: 0 },     
        
        { label: "2020-10-24 16:00:00" , y: 0 },     
        
        { label: "2020-10-24 17:00:00" , y: 0 },     
        
        { label: "2020-10-24 18:00:00" , y: 0 },     
        
        { label: "2020-10-24 19:00:00" , y: 0 },     
        
        { label: "2020-10-24 20:00:00" , y: 0 },     
        
        { label: "2020-10-24 21:00:00" , y: 0 },     
        
        { label: "2020-10-24 22:00:00" , y: 0 },     
        
        { label: "2020-10-24 23:00:00" , y: 0 },     
        
        { label: "2020-10-25 00:00:00" , y: 0 },     
        
        { label: "2020-10-25 01:00:00" , y: 0 },     
        
        { label: "2020-10-25 02:00:00" , y: 0 },     
        
        { label: "2020-10-25 03:00:00" , y: 0 },     
        
        { label: "2020-10-25 04:00:00" , y: 0 },     
        
        { label: "2020-10-25 05:00:00" , y: 0 },     
        
        { label: "2020-10-25 06:00:00" , y: 0 },     
        
        { label: "2020-10-25 07:00:00" , y: 0 },     
        
        { label: "2020-10-25 08:00:00" , y: 0 },     
        
        { label: "2020-10-25 09:00:00" , y: 0 },     
        
        { label: "2020-10-25 10:00:00" , y: 0 },     
        
        { label: "2020-10-25 11:00:00" , y: 0 },     
        
        { label: "2020-10-25 12:00:00" , y: 0 },     
        
        { label: "2020-10-25 13:00:00" , y: 0 },     
        
        { label: "2020-10-25 14:00:00" , y: 0 },     
        
        { label: "2020-10-25 15:00:00" , y: 0 },     
        
        { label: "2020-10-25 16:00:00" , y: 0 },     
        
        { label: "2020-10-25 17:00:00" , y: 0 },     
        
        { label: "2020-10-25 18:00:00" , y: 0 },     
        
        { label: "2020-10-25 19:00:00" , y: 0 },     
        
        { label: "2020-10-25 20:00:00" , y: 0 },     
        
        { label: "2020-10-25 21:00:00" , y: 0 },     
        
        { label: "2020-10-25 22:00:00" , y: 0 },     
        
        { label: "2020-10-25 23:00:00" , y: 0 },     
        
        { label: "2020-10-26 00:00:00" , y: 0 },     
        
        { label: "2020-10-26 01:00:00" , y: 0 },     
        
        { label: "2020-10-26 02:00:00" , y: 0 },     
        
        { label: "2020-10-26 03:00:00" , y: 0 },     
        
        { label: "2020-10-26 04:00:00" , y: 0 },     
        
        { label: "2020-10-26 05:00:00" , y: 0 },     
        
        { label: "2020-10-26 06:00:00" , y: 0 },     
        
        { label: "2020-10-26 07:00:00" , y: 0 },     
        
        { label: "2020-10-26 08:00:00" , y: 0 },     
        
        { label: "2020-10-26 09:00:00" , y: 0 },     
        
        { label: "2020-10-26 10:00:00" , y: 0 },     
        
        { label: "2020-10-26 11:00:00" , y: 0 },     
        
        { label: "2020-10-26 12:00:00" , y: 0 },     
        
        { label: "2020-10-26 13:00:00" , y: 0 },     
        
        { label: "2020-10-26 14:00:00" , y: 0 },     
        
        { label: "2020-10-26 15:00:00" , y: 0 },     
        
        { label: "2020-10-26 16:00:00" , y: 0 },     
        
        { label: "2020-10-26 17:00:00" , y: 0 },     
        
        { label: "2020-10-26 18:00:00" , y: 0 },     
        
        { label: "2020-10-26 19:00:00" , y: 0 },     
        
        { label: "2020-10-26 20:00:00" , y: 0 },     
        
        { label: "2020-10-26 21:00:00" , y: 0 },     
        
        { label: "2020-10-26 22:00:00" , y: 0 },     
        
        { label: "2020-10-26 23:00:00" , y: 0 },     
        
        { label: "2020-10-27 00:00:00" , y: 0 },     
        
        { label: "2020-10-27 01:00:00" , y: 0 },     
        
        { label: "2020-10-27 02:00:00" , y: 0 },     
        
        { label: "2020-10-27 03:00:00" , y: 0 },     
        
        { label: "2020-10-27 04:00:00" , y: 0 },     
        
        { label: "2020-10-27 05:00:00" , y: 0 },     
        
        { label: "2020-10-27 06:00:00" , y: 0 },     
        
        { label: "2020-10-27 07:00:00" , y: 0 },     
        
        { label: "2020-10-27 08:00:00" , y: 0 },     
        
        { label: "2020-10-27 09:00:00" , y: 0 },     
        
        { label: "2020-10-27 10:00:00" , y: 0 },     
        
        { label: "2020-10-27 11:00:00" , y: 0 },     
        
        { label: "2020-10-27 12:00:00" , y: 0 },     
        
        { label: "2020-10-27 13:00:00" , y: 0 },     
        
        { label: "2020-10-27 14:00:00" , y: 0 },     
        
        { label: "2020-10-27 15:00:00" , y: 0 },     
        
        { label: "2020-10-27 16:00:00" , y: 0 },     
        
        { label: "2020-10-27 17:00:00" , y: 0 },     
        
        { label: "2020-10-27 18:00:00" , y: 0 },     
        
        { label: "2020-10-27 19:00:00" , y: 0 },     
        
        { label: "2020-10-27 20:00:00" , y: 0 },     
        
        { label: "2020-10-27 21:00:00" , y: 0 },     
        
        { label: "2020-10-27 22:00:00" , y: 0 },     
        
        { label: "2020-10-27 23:00:00" , y: 0 },     
        
        { label: "2020-10-28 00:00:00" , y: 0 },     
        
        { label: "2020-10-28 01:00:00" , y: 0 },     
        
        { label: "2020-10-28 02:00:00" , y: 0 },     
        
        { label: "2020-10-28 03:00:00" , y: 0 },     
        
        { label: "2020-10-28 04:00:00" , y: 0 },     
        
        { label: "2020-10-28 05:00:00" , y: 0 },     
        
        { label: "2020-10-28 06:00:00" , y: 0 },     
        
        { label: "2020-10-28 07:00:00" , y: 0 },     
        
        { label: "2020-10-28 08:00:00" , y: 0 },     
        
        { label: "2020-10-28 09:00:00" , y: 0 },     
        
        { label: "2020-10-28 10:00:00" , y: 0 },     
        
        { label: "2020-10-28 11:00:00" , y: 0 },     
        
        { label: "2020-10-28 12:00:00" , y: 0 },     
        
        { label: "2020-10-28 13:00:00" , y: 0 },     
        
        { label: "2020-10-28 14:00:00" , y: 0 },     
        
        { label: "2020-10-28 15:00:00" , y: 0 },     
        
        { label: "2020-10-28 16:00:00" , y: 0 },     
        
        { label: "2020-10-28 17:00:00" , y: 0 },     
        
        { label: "2020-10-28 18:00:00" , y: 0 },     
        
        { label: "2020-10-28 19:00:00" , y: 0 },     
        
        { label: "2020-10-28 20:00:00" , y: 0 },     
        
        { label: "2020-10-28 21:00:00" , y: 0 },     
        
        { label: "2020-10-28 22:00:00" , y: 0 },     
        
        { label: "2020-10-28 23:00:00" , y: 0 },     
        
        { label: "2020-10-29 00:00:00" , y: 0 },     
        
        { label: "2020-10-29 01:00:00" , y: 0 },     
        
        { label: "2020-10-29 02:00:00" , y: 0 },     
        
        { label: "2020-10-29 03:00:00" , y: 0 },     
        
        { label: "2020-10-29 04:00:00" , y: 0 },     
        
        { label: "2020-10-29 05:00:00" , y: 0 },     
        
        { label: "2020-10-29 06:00:00" , y: 0 },     
        
        { label: "2020-10-29 07:00:00" , y: 0 },     
        
        { label: "2020-10-29 08:00:00" , y: 0 },     
        
        { label: "2020-10-29 09:00:00" , y: 0 },     
        
        { label: "2020-10-29 10:00:00" , y: 0 },     
        
        { label: "2020-10-29 11:00:00" , y: 0 },     
        
        { label: "2020-10-29 12:00:00" , y: 0 },     
        
        { label: "2020-10-29 13:00:00" , y: 0 },     
        
        { label: "2020-10-29 14:00:00" , y: 0 },     
        
        { label: "2020-10-29 15:00:00" , y: 0 },     
        
        { label: "2020-10-29 16:00:00" , y: 0 },     
        
        { label: "2020-10-29 17:00:00" , y: 0 },     
        
        { label: "2020-10-29 18:00:00" , y: 0 },     
        
        { label: "2020-10-29 19:00:00" , y: 0 },     
        
        { label: "2020-10-29 20:00:00" , y: 0 },     
        
        { label: "2020-10-29 21:00:00" , y: 0 },     
        
        { label: "2020-10-29 22:00:00" , y: 0 },     
        
        { label: "2020-10-29 23:00:00" , y: 0 },     
        
        { label: "2020-10-30 00:00:00" , y: 0 },     
        
        { label: "2020-10-30 01:00:00" , y: 0 },     
        
        { label: "2020-10-30 02:00:00" , y: 0 },     
        
        { label: "2020-10-30 03:00:00" , y: 0 },     
        
        { label: "2020-10-30 04:00:00" , y: 0 },     
        
        { label: "2020-10-30 05:00:00" , y: 0 },     
        
        { label: "2020-10-30 06:00:00" , y: 0 },     
        
        { label: "2020-10-30 07:00:00" , y: 0 },     
        
        { label: "2020-10-30 08:00:00" , y: 0 },     
        
        { label: "2020-10-30 09:00:00" , y: 0 },     
        
        { label: "2020-10-30 10:00:00" , y: 0 },     
        
        { label: "2020-10-30 11:00:00" , y: 0 },     
        
        { label: "2020-10-30 12:00:00" , y: 0 },     
        
        { label: "2020-10-30 13:00:00" , y: 0 },     
        
        { label: "2020-10-30 14:00:00" , y: 0 },     
        
        { label: "2020-10-30 15:00:00" , y: 0 },     
        
        { label: "2020-10-30 16:00:00" , y: 0 },     
        
        { label: "2020-10-30 17:00:00" , y: 0 },     
        
        { label: "2020-10-30 18:00:00" , y: 0 },     
        
        { label: "2020-10-30 19:00:00" , y: 0 },     
        
        { label: "2020-10-30 20:00:00" , y: 0 },     
        
        { label: "2020-10-30 21:00:00" , y: 0 },     
        
        { label: "2020-10-30 22:00:00" , y: 0 },     
        
        { label: "2020-10-30 23:00:00" , y: 0 },     
        
        { label: "2020-10-31 00:00:00" , y: 0 },     
        
        { label: "2020-10-31 01:00:00" , y: 0 },     
        
        { label: "2020-10-31 02:00:00" , y: 0 },     
        
        { label: "2020-10-31 03:00:00" , y: 0 },     
        
        { label: "2020-10-31 04:00:00" , y: 0 },     
        
        { label: "2020-10-31 05:00:00" , y: 0 },     
        
        { label: "2020-10-31 06:00:00" , y: 0 },     
        
        { label: "2020-10-31 07:00:00" , y: 0 },     
        
        { label: "2020-10-31 08:00:00" , y: 0 },     
        
        { label: "2020-10-31 09:00:00" , y: 0 },     
        
        { label: "2020-10-31 10:00:00" , y: 0 },     
        
        { label: "2020-10-31 11:00:00" , y: 0 },     
        
        { label: "2020-10-31 12:00:00" , y: 0 },     
        
        { label: "2020-10-31 13:00:00" , y: 0 },     
        
        { label: "2020-10-31 14:00:00" , y: 0 },     
        
        { label: "2020-10-31 15:00:00" , y: 0 },     
        
        { label: "2020-10-31 16:00:00" , y: 0 },     
        
        { label: "2020-10-31 17:00:00" , y: 0 },     
        
        { label: "2020-10-31 18:00:00" , y: 0 },     
        
        { label: "2020-10-31 19:00:00" , y: 0 },     
        
        { label: "2020-10-31 20:00:00" , y: 0 },     
        
        { label: "2020-10-31 21:00:00" , y: 0 },     
        
        { label: "2020-10-31 22:00:00" , y: 0 },     
        
        { label: "2020-10-31 23:00:00" , y: 0 },     
        
        { label: "2020-11-01 00:00:00" , y: 0 },     
        
        { label: "2020-11-01 01:00:00" , y: 0 },     
        
        { label: "2020-11-01 02:00:00" , y: 0 },     
        
        { label: "2020-11-01 03:00:00" , y: 0 },     
        
        { label: "2020-11-01 04:00:00" , y: 0 },     
        
        { label: "2020-11-01 05:00:00" , y: 0 },     
        
        { label: "2020-11-01 06:00:00" , y: 0 },     
        
        { label: "2020-11-01 07:00:00" , y: 0 },     
        
        { label: "2020-11-01 08:00:00" , y: 0 },     
        
        { label: "2020-11-01 09:00:00" , y: 0 },     
        
        { label: "2020-11-01 10:00:00" , y: 0 },     
        
        { label: "2020-11-01 11:00:00" , y: 0 },     
        
        { label: "2020-11-01 12:00:00" , y: 0 },     
        
        { label: "2020-11-01 13:00:00" , y: 0 },     
        
        { label: "2020-11-01 14:00:00" , y: 0 },     
        
        { label: "2020-11-01 15:00:00" , y: 0 },     
        
        { label: "2020-11-01 16:00:00" , y: 0 },     
        
        { label: "2020-11-01 17:00:00" , y: 0 },     
        
        { label: "2020-11-01 18:00:00" , y: 0 },     
        
        { label: "2020-11-01 19:00:00" , y: 0 },     
        
        { label: "2020-11-01 20:00:00" , y: 0 },     
        
        { label: "2020-11-01 21:00:00" , y: 0 },     
        
        { label: "2020-11-01 22:00:00" , y: 0 },     
        
        { label: "2020-11-01 23:00:00" , y: 0 },     
        
        { label: "2020-11-02 00:00:00" , y: 0 },     
        
        { label: "2020-11-02 01:00:00" , y: 0 },     
        
        { label: "2020-11-02 02:00:00" , y: 0 },     
        
        { label: "2020-11-02 03:00:00" , y: 0 },     
        
        { label: "2020-11-02 04:00:00" , y: 0 },     
        
        { label: "2020-11-02 05:00:00" , y: 0 },     
        
        { label: "2020-11-02 06:00:00" , y: 0 },     
        
        { label: "2020-11-02 07:00:00" , y: 0 },     
        
        { label: "2020-11-02 08:00:00" , y: 0 },     
        
        { label: "2020-11-02 09:00:00" , y: 0 },     
        
        { label: "2020-11-02 10:00:00" , y: 0 },     
        
        { label: "2020-11-02 11:00:00" , y: 0 },     
        
        { label: "2020-11-02 12:00:00" , y: 0 },     
        
        { label: "2020-11-02 13:00:00" , y: 0 },     
        
        { label: "2020-11-02 14:00:00" , y: 0 },     
        
        { label: "2020-11-02 15:00:00" , y: 0 },     
        
        { label: "2020-11-02 16:00:00" , y: 0 },     
        
        { label: "2020-11-02 17:00:00" , y: 0 },     
        
        { label: "2020-11-02 18:00:00" , y: 0 },     
        
        { label: "2020-11-02 19:00:00" , y: 0 },     
        
        { label: "2020-11-02 20:00:00" , y: 0 },     
        
        { label: "2020-11-02 21:00:00" , y: 0 },     
        
        { label: "2020-11-02 22:00:00" , y: 0 },     
        
        { label: "2020-11-02 23:00:00" , y: 0 },     
        
        { label: "2020-11-03 00:00:00" , y: 0 },     
        
        { label: "2020-11-03 01:00:00" , y: 0 },     
        
        { label: "2020-11-03 02:00:00" , y: 0 },     
        
        { label: "2020-11-03 03:00:00" , y: 0 },     
        
        { label: "2020-11-03 04:00:00" , y: 0 },     
        
        { label: "2020-11-03 05:00:00" , y: 0 },     
        
        { label: "2020-11-03 06:00:00" , y: 0 },     
        
        { label: "2020-11-03 07:00:00" , y: 0 },     
        
        { label: "2020-11-03 08:00:00" , y: 0 },     
        
        { label: "2020-11-03 09:00:00" , y: 0 },     
        
        { label: "2020-11-03 10:00:00" , y: 0 },     
        
        { label: "2020-11-03 11:00:00" , y: 0 },     
        
        { label: "2020-11-03 12:00:00" , y: 0 },     
        
        { label: "2020-11-03 13:00:00" , y: 0 },     
        
        { label: "2020-11-03 14:00:00" , y: 0 },     
        
        { label: "2020-11-03 15:00:00" , y: 0 },     
        
        { label: "2020-11-03 16:00:00" , y: 0 },     
        
        { label: "2020-11-03 17:00:00" , y: 0 },     
        
        { label: "2020-11-03 18:00:00" , y: 0 },     
        
        { label: "2020-11-03 19:00:00" , y: 0 },     
        
        { label: "2020-11-03 20:00:00" , y: 0 },     
        
        { label: "2020-11-03 21:00:00" , y: 0 },     
        
        { label: "2020-11-03 22:00:00" , y: 0 },     
        
        { label: "2020-11-03 23:00:00" , y: 0 },     
        
        { label: "2020-11-04 00:00:00" , y: 0 },     
        
        { label: "2020-11-04 01:00:00" , y: 0 },     
        
        { label: "2020-11-04 02:00:00" , y: 0 },     
        
        { label: "2020-11-04 03:00:00" , y: 0 },     
        
        { label: "2020-11-04 04:00:00" , y: 0 },     
        
        { label: "2020-11-04 05:00:00" , y: 0 },     
        
        { label: "2020-11-04 06:00:00" , y: 0 },     
        
        { label: "2020-11-04 07:00:00" , y: 0 },     
        
        { label: "2020-11-04 08:00:00" , y: 0 },     
        
        { label: "2020-11-04 09:00:00" , y: 0 },     
        
        { label: "2020-11-04 10:00:00" , y: 0 },     
        
        { label: "2020-11-04 11:00:00" , y: 0 },     
        
        { label: "2020-11-04 12:00:00" , y: 0 },     
        
        { label: "2020-11-04 13:00:00" , y: 0 },     
        
        { label: "2020-11-04 14:00:00" , y: 0 },     
        
        { label: "2020-11-04 15:00:00" , y: 0 },     
        
        { label: "2020-11-04 16:00:00" , y: 0 },     
        
        { label: "2020-11-04 17:00:00" , y: 0 },     
        
        { label: "2020-11-04 18:00:00" , y: 0 },     
        
        { label: "2020-11-04 19:00:00" , y: 0 },     
        
        { label: "2020-11-04 20:00:00" , y: 0 },     
        
        { label: "2020-11-04 21:00:00" , y: 0 },     
        
        { label: "2020-11-04 22:00:00" , y: 0 },     
        
        { label: "2020-11-04 23:00:00" , y: 0 },     
        
        { label: "2020-11-05 00:00:00" , y: 0 },     
        
        { label: "2020-11-05 01:00:00" , y: 0 },     
        
        { label: "2020-11-05 02:00:00" , y: 0 },     
        
        { label: "2020-11-05 03:00:00" , y: 0 },     
        
        { label: "2020-11-05 04:00:00" , y: 0 },     
        
        { label: "2020-11-05 05:00:00" , y: 0 },     
        
        { label: "2020-11-05 06:00:00" , y: 0 },     
        
        { label: "2020-11-05 07:00:00" , y: 0 },     
        
        { label: "2020-11-05 08:00:00" , y: 0 },     
        
        { label: "2020-11-05 09:00:00" , y: 0 },     
        
        { label: "2020-11-05 10:00:00" , y: 0 },     
        
        { label: "2020-11-05 11:00:00" , y: 0 },     
        
        { label: "2020-11-05 12:00:00" , y: 0 },     
        
        { label: "2020-11-05 13:00:00" , y: 0 },     
        
        { label: "2020-11-05 14:00:00" , y: 0 },     
        
        { label: "2020-11-05 15:00:00" , y: 0 },     
        
        { label: "2020-11-05 16:00:00" , y: 0 },     
        
        { label: "2020-11-05 17:00:00" , y: 0 },     
        
        { label: "2020-11-05 18:00:00" , y: 0 },     
        
        { label: "2020-11-05 19:00:00" , y: 0 },     
        
        { label: "2020-11-05 20:00:00" , y: 0 },     
        
        { label: "2020-11-05 21:00:00" , y: 0 },     
        
        { label: "2020-11-05 22:00:00" , y: 0 },     
        
        { label: "2020-11-05 23:00:00" , y: 0 },     
        
        { label: "2020-11-06 00:00:00" , y: 0 },     
        
        { label: "2020-11-06 01:00:00" , y: 0 },     
        
        { label: "2020-11-06 02:00:00" , y: 0 },     
        
        { label: "2020-11-06 03:00:00" , y: 0 },     
        
        { label: "2020-11-06 04:00:00" , y: 0 },     
        
        { label: "2020-11-06 05:00:00" , y: 0 },     
        
        { label: "2020-11-06 06:00:00" , y: 0 },     
        
        { label: "2020-11-06 07:00:00" , y: 0 },     
        
        { label: "2020-11-06 08:00:00" , y: 0 },     
        
        { label: "2020-11-06 09:00:00" , y: 0 },     
        
        { label: "2020-11-06 10:00:00" , y: 0 },     
        
        { label: "2020-11-06 11:00:00" , y: 0 },     
        
        { label: "2020-11-06 12:00:00" , y: 0 },     
        
        { label: "2020-11-06 13:00:00" , y: 0 },     
        
        { label: "2020-11-06 14:00:00" , y: 0 },     
        
        { label: "2020-11-06 15:00:00" , y: 0 },     
        
        { label: "2020-11-06 16:00:00" , y: 0 },     
        
        { label: "2020-11-06 17:00:00" , y: 0 },     
        
        { label: "2020-11-06 18:00:00" , y: 0 },     
        
        { label: "2020-11-06 19:00:00" , y: 0 },     
        
        { label: "2020-11-06 20:00:00" , y: 0 },     
        
        { label: "2020-11-06 21:00:00" , y: 0 },     
        
        { label: "2020-11-06 22:00:00" , y: 0 },     
        
        { label: "2020-11-06 23:00:00" , y: 0 },     
        
        { label: "2020-11-07 00:00:00" , y: 0 },     
        
        { label: "2020-11-07 01:00:00" , y: 0 },     
        
        { label: "2020-11-07 02:00:00" , y: 0 },     
        
        { label: "2020-11-07 03:00:00" , y: 0 },     
        
        { label: "2020-11-07 04:00:00" , y: 0 },     
        
        { label: "2020-11-07 05:00:00" , y: 0 },     
        
        { label: "2020-11-07 06:00:00" , y: 0 },     
        
        { label: "2020-11-07 07:00:00" , y: 0 },     
        
        { label: "2020-11-07 08:00:00" , y: 0 },     
        
        { label: "2020-11-07 09:00:00" , y: 0 },     
        
        { label: "2020-11-07 10:00:00" , y: 0 },     
        
        { label: "2020-11-07 11:00:00" , y: 0 },     
        
        { label: "2020-11-07 12:00:00" , y: 0 },     
        
        { label: "2020-11-07 13:00:00" , y: 0 },     
        
        { label: "2020-11-07 14:00:00" , y: 0 },     
        
        { label: "2020-11-07 15:00:00" , y: 0 },     
        
        { label: "2020-11-07 16:00:00" , y: 0 },     
        
        { label: "2020-11-07 17:00:00" , y: 0 },     
        
        { label: "2020-11-07 18:00:00" , y: 0 },     
        
        { label: "2020-11-07 19:00:00" , y: 0 },     
        
        { label: "2020-11-07 20:00:00" , y: 0 },     
        
        { label: "2020-11-07 21:00:00" , y: 0 },     
        
        { label: "2020-11-07 22:00:00" , y: 0 },     
        
        { label: "2020-11-07 23:00:00" , y: 0 },     
        
        { label: "2020-11-08 00:00:00" , y: 0 },     
        
        { label: "2020-11-08 01:00:00" , y: 0 },     
        
        { label: "2020-11-08 02:00:00" , y: 0 },     
        
        { label: "2020-11-08 03:00:00" , y: 0 },     
        
        { label: "2020-11-08 04:00:00" , y: 0 },     
        
        { label: "2020-11-08 05:00:00" , y: 0 },     
        
        { label: "2020-11-08 06:00:00" , y: 0 },     
        
        { label: "2020-11-08 07:00:00" , y: 0 },     
        
        { label: "2020-11-08 08:00:00" , y: 0 },     
        
        { label: "2020-11-08 09:00:00" , y: 0 },     
        
        { label: "2020-11-08 10:00:00" , y: 0 },     
        
        { label: "2020-11-08 11:00:00" , y: 0 },     
        
        { label: "2020-11-08 12:00:00" , y: 0 },     
        
        { label: "2020-11-08 13:00:00" , y: 0 },     
        
        { label: "2020-11-08 14:00:00" , y: 0 },     
        
        { label: "2020-11-08 15:00:00" , y: 0 },     
        
        { label: "2020-11-08 16:00:00" , y: 0 },     
        
        { label: "2020-11-08 17:00:00" , y: 0 },     
        
        { label: "2020-11-08 18:00:00" , y: 0 },     
        
        { label: "2020-11-08 19:00:00" , y: 0 },     
        
        { label: "2020-11-08 20:00:00" , y: 0 },     
        
        { label: "2020-11-08 21:00:00" , y: 0 },     
        
        { label: "2020-11-08 22:00:00" , y: 0 },     
        
        { label: "2020-11-08 23:00:00" , y: 0 },     
        
        { label: "2020-11-09 00:00:00" , y: 0 },     
        
        { label: "2020-11-09 01:00:00" , y: 0 },     
        
        { label: "2020-11-09 02:00:00" , y: 0 },     
        
        { label: "2020-11-09 03:00:00" , y: 0 },     
        
        { label: "2020-11-09 04:00:00" , y: 0 },     
        
        { label: "2020-11-09 05:00:00" , y: 0 },     
        
        { label: "2020-11-09 06:00:00" , y: 0 },     
        
        { label: "2020-11-09 07:00:00" , y: 0 },     
        
        { label: "2020-11-09 08:00:00" , y: 0 },     
        
        { label: "2020-11-09 09:00:00" , y: 0 },     
        
        { label: "2020-11-09 10:00:00" , y: 0 },     
        
        { label: "2020-11-09 11:00:00" , y: 0 },     
        ]},    
    ]
});

chart.render();
//END CHART ANGLE    

    
//BEGIN CHART MM    
var chart = new CanvasJS.Chart("chartContainerMM", {
	animationEnabled: true,
	exportEnabled: true,
	zoomEnabled: true,
	title:{
		text: "Hourly Readings: Axis Movements (mm/m)",
        fontWeight: "normal",
        fontFamily: "arial",
        fontSize: 20
	}, 
    
	subtitles:[
        {
		text: "[ 1 Month ]",
        fontWeight: "normal",
        fontFamily: "arial",
        fontSize: 15
        }
        ],      
    
	axisY:{
		title: "Movements (mm/m)",
            titleFontSize: 15,
            gridThickness: 0.3,
            maximum: 100,
	},
    axisX:{
		title: "Date/Time",
        titleFontSize: 15,
        labelAngle: 135,
        labelMaxWidth: 80,
        labelWrap: true,
        labelFontSize: 12,
	},
	toolTip: {
		shared: false
	},
	legend:{
		cursor:"pointer",
            itemclick: function (e) {
                //console.log("legend click: " + e.dataPointIndex);
                //console.log(e);
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
 
                e.chart.render();
            }
	},
	data: [
    
    

        {        
        type: "spline",
        name: "Axis A",lineThickness: 2,color: "#36a2df",
        showInLegend: true,
        dataPoints: [        
        
        { label: "2020-10-09 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 19:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 20:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 21:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 22:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 23:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 00:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 01:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 04:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 06:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 07:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 08:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 09:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 16:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 09:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-11 11:00:00" , y: 0.6 },     
        
        { label: "2020-10-11 12:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 13:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 14:00:00" , y: 0.3 },     
        
        { label: "2020-10-11 15:00:00" , y: 0.3 },     
        
        { label: "2020-10-11 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 20:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 21:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 22:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 23:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 04:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 05:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 06:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 07:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 08:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 09:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 10:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-12 12:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 13:00:00" , y: 0.1 },     
        
        { label: "2020-10-12 14:00:00" , y: 0.1 },     
        
        { label: "2020-10-12 15:00:00" , y: 0.2 },     
        
        { label: "2020-10-12 16:00:00" , y: 0.2 },     
        
        { label: "2020-10-12 17:00:00" , y: 0.2 },     
        
        { label: "2020-10-12 18:00:00" , y: 0.2 },     
        
        { label: "2020-10-12 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-12 20:00:00" , y: 0.1 },     
        
        { label: "2020-10-12 21:00:00" , y: 0.1 },     
        
        { label: "2020-10-12 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-12 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-13 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-13 01:00:00" , y: 0.2 },     
        
        { label: "2020-10-13 02:00:00" , y: 0.2 },     
        
        { label: "2020-10-13 03:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 04:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 05:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 06:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 07:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 08:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 09:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 10:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 11:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 12:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 13:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 14:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 15:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 16:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 17:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 18:00:00" , y: 0 },     
        
        { label: "2020-10-13 19:00:00" , y: 0 },     
        
        { label: "2020-10-13 20:00:00" , y: 0 },     
        
        { label: "2020-10-13 21:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 22:00:00" , y: 0.1 },     
        
        { label: "2020-10-13 23:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 00:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 01:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 02:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 03:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 04:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 05:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 06:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 07:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 08:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 09:00:00" , y: 0 },     
        
        { label: "2020-10-14 10:00:00" , y: 0.2 },     
        
        { label: "2020-10-14 11:00:00" , y: 0.2 },     
        
        { label: "2020-10-14 12:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 13:00:00" , y: 0 },     
        
        { label: "2020-10-14 14:00:00" , y: 0 },     
        
        { label: "2020-10-14 15:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 16:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 17:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 18:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 19:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 20:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 21:00:00" , y: 0 },     
        
        { label: "2020-10-14 22:00:00" , y: 0 },     
        
        { label: "2020-10-14 23:00:00" , y: 0 },     
        
        { label: "2020-10-15 00:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 01:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 02:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 03:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 04:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 05:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 06:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 07:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 08:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 09:00:00" , y: 0.2 },     
        
        { label: "2020-10-15 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 13:00:00" , y: 0.3 },     
        
        { label: "2020-10-15 14:00:00" , y: 0.3 },     
        
        { label: "2020-10-15 15:00:00" , y: 0 },     
        
        { label: "2020-10-15 16:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 17:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 18:00:00" , y: 0.2 },     
        
        { label: "2020-10-15 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-15 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-15 21:00:00" , y: 0.2 },     
        
        { label: "2020-10-15 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-15 23:00:00" , y: 0.3 },     
        
        { label: "2020-10-16 00:00:00" , y: 0.3 },     
        
        { label: "2020-10-16 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 05:00:00" , y: 0.3 },     
        
        { label: "2020-10-16 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 07:00:00" , y: 0.3 },     
        
        { label: "2020-10-16 08:00:00" , y: 0.3 },     
        
        { label: "2020-10-16 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 11:00:00" , y: 0.7 },     
        
        { label: "2020-10-16 12:00:00" , y: 0.7 },     
        
        { label: "2020-10-16 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 15:00:00" , y: 0.3 },     
        
        { label: "2020-10-16 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 18:00:00" , y: 0.3 },     
        
        { label: "2020-10-16 19:00:00" , y: 0.3 },     
        
        { label: "2020-10-16 20:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 21:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 08:00:00" , y: 0.6 },     
        
        { label: "2020-10-17 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-17 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 11:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 12:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 13:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-17 15:00:00" , y: 0.4 },     
        
        { label: "2020-10-17 16:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-17 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-17 19:00:00" , y: 0.6 },     
        
        { label: "2020-10-17 20:00:00" , y: 0.6 },     
        
        { label: "2020-10-17 21:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 22:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 23:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 00:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 01:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 02:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 03:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 04:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 05:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 06:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 07:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 08:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 11:00:00" , y: 0.4 },     
        
        { label: "2020-10-18 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 19:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 20:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 21:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 22:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 23:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 00:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 01:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 02:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 03:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 04:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 05:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 06:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 07:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 09:00:00" , y: 0.3 },     
        
        { label: "2020-10-19 10:00:00" , y: 0.3 },     
        
        { label: "2020-10-19 11:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 12:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 13:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 17:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 21:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 22:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 23:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 08:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 09:00:00" , y: 0.1 },     
        
        { label: "2020-10-20 10:00:00" , y: 0.1 },     
        
        { label: "2020-10-20 11:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 12:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 13:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 14:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 15:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 18:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 21:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 01:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 02:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 03:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 04:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 05:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 06:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 07:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 08:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 09:00:00" , y: 0 },     
        
        { label: "2020-10-21 10:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 11:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 12:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 13:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 14:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 15:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 16:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 17:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 18:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 19:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 20:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 21:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 22:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 23:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 00:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 01:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 02:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 03:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 04:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 05:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 06:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 07:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 08:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 09:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 10:00:00" , y: 0 },     
        
        { label: "2020-10-22 11:00:00" , y: 0 },     
        
        { label: "2020-10-22 12:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 13:00:00" , y: 0.4 },     
        
        { label: "2020-10-22 14:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 15:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 16:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 17:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 18:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 20:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 21:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 22:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 23:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 00:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 01:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 02:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 03:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 04:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 05:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 08:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 09:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 10:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 11:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 12:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 13:00:00" , y: 0.5 },     
        
        { label: "2020-10-23 14:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 15:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-23 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-23 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-23 22:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 23:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 08:00:00" , y: 0.3 },     
        
        { label: "2020-10-24 09:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 10:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 11:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 13:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 15:00:00" , y: 0.3 },     
        
        { label: "2020-10-24 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 20:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 21:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 22:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 23:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 10:00:00" , y: 0.1 },     
        
        { label: "2020-10-25 11:00:00" , y: 0.3 },     
        
        { label: "2020-10-25 12:00:00" , y: 0.3 },     
        
        { label: "2020-10-25 13:00:00" , y: 0.2 },     
        
        { label: "2020-10-25 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-25 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 16:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 17:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 23:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 09:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 13:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 14:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 16:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 17:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-27 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-27 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-27 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 22:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 23:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 00:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 01:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 02:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 03:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 04:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 05:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 06:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 07:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 08:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 09:00:00" , y: 0.3 },     
        
        { label: "2020-10-28 10:00:00" , y: 0.3 },     
        
        { label: "2020-10-28 11:00:00" , y: 0.4 },     
        
        { label: "2020-10-28 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-28 13:00:00" , y: 0.5 },     
        
        { label: "2020-10-28 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-28 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 19:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-28 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-28 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-28 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 10:00:00" , y: 0.3 },     
        
        { label: "2020-10-29 11:00:00" , y: 0.3 },     
        
        { label: "2020-10-29 12:00:00" , y: 0.2 },     
        
        { label: "2020-10-29 13:00:00" , y: 0.3 },     
        
        { label: "2020-10-29 14:00:00" , y: 0.3 },     
        
        { label: "2020-10-29 15:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 20:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 21:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 22:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 23:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 09:00:00" , y: 0.2 },     
        
        { label: "2020-10-30 10:00:00" , y: 0.1 },     
        
        { label: "2020-10-30 11:00:00" , y: 0.2 },     
        
        { label: "2020-10-30 12:00:00" , y: 0.2 },     
        
        { label: "2020-10-30 13:00:00" , y: 0.5 },     
        
        { label: "2020-10-30 14:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 15:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 18:00:00" , y: 0.3 },     
        
        { label: "2020-10-30 19:00:00" , y: 0.3 },     
        
        { label: "2020-10-30 20:00:00" , y: 0.3 },     
        
        { label: "2020-10-30 21:00:00" , y: 0.3 },     
        
        { label: "2020-10-30 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-30 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 01:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 02:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 03:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 04:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 05:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 06:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 07:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 08:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 09:00:00" , y: 0.1 },     
        
        { label: "2020-10-31 10:00:00" , y: 0.1 },     
        
        { label: "2020-10-31 11:00:00" , y: 0.1 },     
        
        { label: "2020-10-31 12:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 13:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 14:00:00" , y: 0.3 },     
        
        { label: "2020-10-31 15:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 16:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 17:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 18:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 21:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 23:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 00:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 01:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 02:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 03:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 04:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 05:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 06:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 07:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 08:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 09:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 10:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 11:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 12:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 13:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 14:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 15:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 16:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 17:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 18:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 19:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 20:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 21:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 22:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 23:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 00:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 01:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 02:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 03:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 04:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 05:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 06:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 07:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 08:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 09:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 10:00:00" , y: 0.1 },     
        
        { label: "2020-11-02 11:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 12:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 13:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 14:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 15:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 16:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 17:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 18:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 19:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 20:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 21:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 22:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 23:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 00:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 01:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 02:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 03:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 04:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 05:00:00" , y: 0.4 },     
        
        { label: "2020-11-03 06:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 07:00:00" , y: 0.4 },     
        
        { label: "2020-11-03 08:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 09:00:00" , y: 0.2 },     
        
        { label: "2020-11-03 10:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 11:00:00" , y: 0.4 },     
        
        { label: "2020-11-03 12:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 13:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 14:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 15:00:00" , y: 0.4 },     
        
        { label: "2020-11-03 16:00:00" , y: 0.4 },     
        
        { label: "2020-11-03 17:00:00" , y: 0.4 },     
        
        { label: "2020-11-03 18:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 22:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 23:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 00:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 01:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 02:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 03:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 04:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 05:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 06:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 07:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 08:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 09:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 10:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 11:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 12:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 13:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 14:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 15:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 16:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 17:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 18:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 22:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 23:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 00:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 01:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 02:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 03:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 04:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 05:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 06:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 07:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 08:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 09:00:00" , y: 0.4 },     
        
        { label: "2020-11-05 10:00:00" , y: 0.4 },     
        
        { label: "2020-11-05 11:00:00" , y: 0.4 },     
        
        { label: "2020-11-05 12:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 13:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 14:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 15:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 16:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 17:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 18:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 22:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 23:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 00:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 01:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 02:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 03:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 04:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 05:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 06:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 07:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 08:00:00" , y: 0.3 },     
        
        { label: "2020-11-06 09:00:00" , y: 0.2 },     
        
        { label: "2020-11-06 10:00:00" , y: 0.2 },     
        
        { label: "2020-11-06 11:00:00" , y: 0.2 },     
        
        { label: "2020-11-06 12:00:00" , y: 0.3 },     
        
        { label: "2020-11-06 13:00:00" , y: 0.4 },     
        
        { label: "2020-11-06 14:00:00" , y: 0.3 },     
        
        { label: "2020-11-06 15:00:00" , y: 0.3 },     
        
        { label: "2020-11-06 16:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 17:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 18:00:00" , y: 0.4 },     
        
        { label: "2020-11-06 19:00:00" , y: 0.4 },     
        
        { label: "2020-11-06 20:00:00" , y: 0.4 },     
        
        { label: "2020-11-06 21:00:00" , y: 0.3 },     
        
        { label: "2020-11-06 22:00:00" , y: 0.3 },     
        
        { label: "2020-11-06 23:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 00:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 01:00:00" , y: 0.2 },     
        
        { label: "2020-11-07 02:00:00" , y: 0.2 },     
        
        { label: "2020-11-07 03:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 04:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 05:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 06:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 07:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 08:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 09:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 10:00:00" , y: 0.2 },     
        
        { label: "2020-11-07 11:00:00" , y: 0.2 },     
        
        { label: "2020-11-07 12:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 13:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 14:00:00" , y: 0.4 },     
        
        { label: "2020-11-07 15:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 16:00:00" , y: 0.4 },     
        
        { label: "2020-11-07 17:00:00" , y: 0.4 },     
        
        { label: "2020-11-07 18:00:00" , y: 0.4 },     
        
        { label: "2020-11-07 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 22:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 23:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 00:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 01:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 02:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 03:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 04:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 05:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 06:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 07:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 08:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 09:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 10:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 11:00:00" , y: 0.3 },     
        
        { label: "2020-11-08 12:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 13:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 14:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 15:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 16:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 17:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 18:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 22:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 23:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 00:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 01:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 02:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 03:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 04:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 05:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 06:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 07:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 08:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 09:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 10:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 11:00:00" , y: 0.5 },     
        ]},

        {        
        type: "spline",
        name: "Axis B",lineThickness: 2,color: "brown",
        showInLegend: true,
        dataPoints: [        
        
        { label: "2020-10-09 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-09 13:00:00" , y: 0.5 },     
        
        { label: "2020-10-09 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-09 15:00:00" , y: 0.4 },     
        
        { label: "2020-10-09 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-09 17:00:00" , y: 0.1 },     
        
        { label: "2020-10-09 18:00:00" , y: 0 },     
        
        { label: "2020-10-09 19:00:00" , y: 0.1 },     
        
        { label: "2020-10-09 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-09 21:00:00" , y: 0.2 },     
        
        { label: "2020-10-09 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-09 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 01:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 02:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 03:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 04:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 05:00:00" , y: 0.3 },     
        
        { label: "2020-10-10 06:00:00" , y: 0.3 },     
        
        { label: "2020-10-10 07:00:00" , y: 0.3 },     
        
        { label: "2020-10-10 08:00:00" , y: 0.3 },     
        
        { label: "2020-10-10 09:00:00" , y: 0.3 },     
        
        { label: "2020-10-10 10:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 11:00:00" , y: 0 },     
        
        { label: "2020-10-10 12:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 13:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 14:00:00" , y: 0 },     
        
        { label: "2020-10-10 15:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 16:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 17:00:00" , y: 0.1 },     
        
        { label: "2020-10-10 18:00:00" , y: 0.1 },     
        
        { label: "2020-10-10 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 21:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-10 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 01:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 02:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 03:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 04:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 05:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 06:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 07:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 08:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 09:00:00" , y: 0.1 },     
        
        { label: "2020-10-11 10:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 11:00:00" , y: 0.3 },     
        
        { label: "2020-10-11 12:00:00" , y: 0 },     
        
        { label: "2020-10-11 13:00:00" , y: 0.1 },     
        
        { label: "2020-10-11 14:00:00" , y: 0.3 },     
        
        { label: "2020-10-11 15:00:00" , y: 0.3 },     
        
        { label: "2020-10-11 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-11 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-11 18:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-11 20:00:00" , y: 0.3 },     
        
        { label: "2020-10-11 21:00:00" , y: 0.3 },     
        
        { label: "2020-10-11 22:00:00" , y: 0.3 },     
        
        { label: "2020-10-11 23:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 00:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 01:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 02:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 03:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 04:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 05:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 06:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 07:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 08:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 09:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 10:00:00" , y: 0.1 },     
        
        { label: "2020-10-12 11:00:00" , y: 0.1 },     
        
        { label: "2020-10-12 12:00:00" , y: 0 },     
        
        { label: "2020-10-12 13:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 14:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 15:00:00" , y: 0.2 },     
        
        { label: "2020-10-12 16:00:00" , y: 0.2 },     
        
        { label: "2020-10-12 17:00:00" , y: 0.2 },     
        
        { label: "2020-10-12 18:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 19:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 20:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 21:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 22:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 23:00:00" , y: 0.3 },     
        
        { label: "2020-10-13 00:00:00" , y: 0.3 },     
        
        { label: "2020-10-13 01:00:00" , y: 0.3 },     
        
        { label: "2020-10-13 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 10:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 11:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 12:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 13:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 14:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 15:00:00" , y: 0.3 },     
        
        { label: "2020-10-13 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-13 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-13 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 20:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 21:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 22:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 23:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 10:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 11:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 12:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 13:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 14:00:00" , y: 0 },     
        
        { label: "2020-10-14 15:00:00" , y: 0.2 },     
        
        { label: "2020-10-14 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-14 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-14 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 09:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 10:00:00" , y: 0.3 },     
        
        { label: "2020-10-15 11:00:00" , y: 0.2 },     
        
        { label: "2020-10-15 12:00:00" , y: 0 },     
        
        { label: "2020-10-15 13:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 14:00:00" , y: 0.1 },     
        
        { label: "2020-10-15 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-15 17:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 08:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 09:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 11:00:00" , y: 0.1 },     
        
        { label: "2020-10-16 12:00:00" , y: 0 },     
        
        { label: "2020-10-16 13:00:00" , y: 0 },     
        
        { label: "2020-10-16 14:00:00" , y: 0 },     
        
        { label: "2020-10-16 15:00:00" , y: 0.2 },     
        
        { label: "2020-10-16 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-16 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-16 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 09:00:00" , y: 0 },     
        
        { label: "2020-10-17 10:00:00" , y: 0.3 },     
        
        { label: "2020-10-17 11:00:00" , y: 0.2 },     
        
        { label: "2020-10-17 12:00:00" , y: 0.2 },     
        
        { label: "2020-10-17 13:00:00" , y: 0.3 },     
        
        { label: "2020-10-17 14:00:00" , y: 0 },     
        
        { label: "2020-10-17 15:00:00" , y: 0.3 },     
        
        { label: "2020-10-17 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-17 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-17 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-17 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-17 20:00:00" , y: 0.4 },     
        
        { label: "2020-10-17 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-18 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-18 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-18 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-18 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-18 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-18 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-18 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-18 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-18 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-18 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-18 10:00:00" , y: 0.2 },     
        
        { label: "2020-10-18 11:00:00" , y: 0.3 },     
        
        { label: "2020-10-18 12:00:00" , y: 0.3 },     
        
        { label: "2020-10-18 13:00:00" , y: 0.1 },     
        
        { label: "2020-10-18 14:00:00" , y: 0.1 },     
        
        { label: "2020-10-18 15:00:00" , y: 0.1 },     
        
        { label: "2020-10-18 16:00:00" , y: 0.2 },     
        
        { label: "2020-10-18 17:00:00" , y: 0.2 },     
        
        { label: "2020-10-18 18:00:00" , y: 0.3 },     
        
        { label: "2020-10-18 19:00:00" , y: 0.3 },     
        
        { label: "2020-10-18 20:00:00" , y: 0.4 },     
        
        { label: "2020-10-18 21:00:00" , y: 0.4 },     
        
        { label: "2020-10-18 22:00:00" , y: 0.4 },     
        
        { label: "2020-10-18 23:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 09:00:00" , y: 0.2 },     
        
        { label: "2020-10-19 10:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 13:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 14:00:00" , y: 0.4 },     
        
        { label: "2020-10-19 15:00:00" , y: 0 },     
        
        { label: "2020-10-19 16:00:00" , y: 0 },     
        
        { label: "2020-10-19 17:00:00" , y: 0.1 },     
        
        { label: "2020-10-19 18:00:00" , y: 0.1 },     
        
        { label: "2020-10-19 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-19 20:00:00" , y: 0.3 },     
        
        { label: "2020-10-19 21:00:00" , y: 0.3 },     
        
        { label: "2020-10-19 22:00:00" , y: 0.3 },     
        
        { label: "2020-10-19 23:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 00:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 01:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 02:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 03:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 04:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 05:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 06:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 07:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 08:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 13:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 15:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 16:00:00" , y: 0 },     
        
        { label: "2020-10-20 17:00:00" , y: 0.1 },     
        
        { label: "2020-10-20 18:00:00" , y: 0.1 },     
        
        { label: "2020-10-20 19:00:00" , y: 0 },     
        
        { label: "2020-10-20 20:00:00" , y: 0.1 },     
        
        { label: "2020-10-20 21:00:00" , y: 0.1 },     
        
        { label: "2020-10-20 22:00:00" , y: 0.1 },     
        
        { label: "2020-10-20 23:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 00:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 01:00:00" , y: 0 },     
        
        { label: "2020-10-21 02:00:00" , y: 0 },     
        
        { label: "2020-10-21 03:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 04:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 05:00:00" , y: 0 },     
        
        { label: "2020-10-21 06:00:00" , y: 0 },     
        
        { label: "2020-10-21 07:00:00" , y: 0 },     
        
        { label: "2020-10-21 08:00:00" , y: 0.3 },     
        
        { label: "2020-10-21 09:00:00" , y: 0.5 },     
        
        { label: "2020-10-21 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-21 11:00:00" , y: 0.6 },     
        
        { label: "2020-10-21 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-21 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-21 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-21 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-21 16:00:00" , y: 0.5 },     
        
        { label: "2020-10-21 17:00:00" , y: 0.5 },     
        
        { label: "2020-10-21 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-21 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 20:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 21:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 22:00:00" , y: 0.1 },     
        
        { label: "2020-10-21 23:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 01:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 02:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 03:00:00" , y: 0 },     
        
        { label: "2020-10-22 04:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 05:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 06:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 07:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 08:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 09:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-22 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-22 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-22 13:00:00" , y: 0 },     
        
        { label: "2020-10-22 14:00:00" , y: 0 },     
        
        { label: "2020-10-22 15:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 16:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 17:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 18:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 21:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 01:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 02:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 03:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 04:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 05:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 06:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 07:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-23 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-23 11:00:00" , y: 0.6 },     
        
        { label: "2020-10-23 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-23 13:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-23 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-23 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-23 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-23 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-23 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 20:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 21:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-23 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 01:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 02:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 03:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 04:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 05:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 06:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 07:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 08:00:00" , y: 0.3 },     
        
        { label: "2020-10-24 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-24 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-24 13:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 14:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 16:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 21:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-24 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-25 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-25 01:00:00" , y: 0.2 },     
        
        { label: "2020-10-25 02:00:00" , y: 0.2 },     
        
        { label: "2020-10-25 03:00:00" , y: 0.2 },     
        
        { label: "2020-10-25 04:00:00" , y: 0.1 },     
        
        { label: "2020-10-25 05:00:00" , y: 0.1 },     
        
        { label: "2020-10-25 06:00:00" , y: 0 },     
        
        { label: "2020-10-25 07:00:00" , y: 0 },     
        
        { label: "2020-10-25 08:00:00" , y: 0.1 },     
        
        { label: "2020-10-25 09:00:00" , y: 0.2 },     
        
        { label: "2020-10-25 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 11:00:00" , y: 0.6 },     
        
        { label: "2020-10-25 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-25 13:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-25 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-25 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 18:00:00" , y: 0.3 },     
        
        { label: "2020-10-25 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-25 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-25 21:00:00" , y: 0.1 },     
        
        { label: "2020-10-25 22:00:00" , y: 0.1 },     
        
        { label: "2020-10-25 23:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 00:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 01:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 02:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 03:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 04:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 05:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 06:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 07:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 08:00:00" , y: 0 },     
        
        { label: "2020-10-26 09:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 10:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 11:00:00" , y: 0 },     
        
        { label: "2020-10-26 12:00:00" , y: 0 },     
        
        { label: "2020-10-26 13:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 14:00:00" , y: 0.2 },     
        
        { label: "2020-10-26 15:00:00" , y: 0.3 },     
        
        { label: "2020-10-26 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-26 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 18:00:00" , y: 0.3 },     
        
        { label: "2020-10-26 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-26 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-26 21:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 22:00:00" , y: 0.1 },     
        
        { label: "2020-10-26 23:00:00" , y: 0.1 },     
        
        { label: "2020-10-27 00:00:00" , y: 0.1 },     
        
        { label: "2020-10-27 01:00:00" , y: 0.1 },     
        
        { label: "2020-10-27 02:00:00" , y: 0.1 },     
        
        { label: "2020-10-27 03:00:00" , y: 0 },     
        
        { label: "2020-10-27 04:00:00" , y: 0 },     
        
        { label: "2020-10-27 05:00:00" , y: 0 },     
        
        { label: "2020-10-27 06:00:00" , y: 0 },     
        
        { label: "2020-10-27 07:00:00" , y: 0 },     
        
        { label: "2020-10-27 08:00:00" , y: 0.3 },     
        
        { label: "2020-10-27 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-27 10:00:00" , y: 0.4 },     
        
        { label: "2020-10-27 11:00:00" , y: 0.3 },     
        
        { label: "2020-10-27 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-27 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-27 18:00:00" , y: 0.2 },     
        
        { label: "2020-10-27 19:00:00" , y: 0.1 },     
        
        { label: "2020-10-27 20:00:00" , y: 0 },     
        
        { label: "2020-10-27 21:00:00" , y: 0 },     
        
        { label: "2020-10-27 22:00:00" , y: 0 },     
        
        { label: "2020-10-27 23:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 00:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 01:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 02:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 03:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 04:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 05:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 06:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 07:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 08:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 09:00:00" , y: 0.5 },     
        
        { label: "2020-10-28 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-28 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-28 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-28 17:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 18:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 19:00:00" , y: 0 },     
        
        { label: "2020-10-28 20:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 21:00:00" , y: 0.2 },     
        
        { label: "2020-10-28 22:00:00" , y: 0.1 },     
        
        { label: "2020-10-28 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-29 00:00:00" , y: 0.3 },     
        
        { label: "2020-10-29 01:00:00" , y: 0.3 },     
        
        { label: "2020-10-29 02:00:00" , y: 0.3 },     
        
        { label: "2020-10-29 03:00:00" , y: 0.3 },     
        
        { label: "2020-10-29 04:00:00" , y: 0.2 },     
        
        { label: "2020-10-29 05:00:00" , y: 0.2 },     
        
        { label: "2020-10-29 06:00:00" , y: 0.2 },     
        
        { label: "2020-10-29 07:00:00" , y: 0.2 },     
        
        { label: "2020-10-29 08:00:00" , y: 0.2 },     
        
        { label: "2020-10-29 09:00:00" , y: 0.1 },     
        
        { label: "2020-10-29 10:00:00" , y: 0.1 },     
        
        { label: "2020-10-29 11:00:00" , y: 0.3 },     
        
        { label: "2020-10-29 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-29 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-29 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-29 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-29 18:00:00" , y: 0.2 },     
        
        { label: "2020-10-29 19:00:00" , y: 0.1 },     
        
        { label: "2020-10-29 20:00:00" , y: 0 },     
        
        { label: "2020-10-29 21:00:00" , y: 0 },     
        
        { label: "2020-10-29 22:00:00" , y: 0 },     
        
        { label: "2020-10-29 23:00:00" , y: 0 },     
        
        { label: "2020-10-30 00:00:00" , y: 0 },     
        
        { label: "2020-10-30 01:00:00" , y: 0 },     
        
        { label: "2020-10-30 02:00:00" , y: 0 },     
        
        { label: "2020-10-30 03:00:00" , y: 0 },     
        
        { label: "2020-10-30 04:00:00" , y: 0 },     
        
        { label: "2020-10-30 05:00:00" , y: 0 },     
        
        { label: "2020-10-30 06:00:00" , y: 0 },     
        
        { label: "2020-10-30 07:00:00" , y: 0 },     
        
        { label: "2020-10-30 08:00:00" , y: 0 },     
        
        { label: "2020-10-30 09:00:00" , y: 0.5 },     
        
        { label: "2020-10-30 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-30 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-30 12:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-30 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-30 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-30 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-30 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-30 18:00:00" , y: 0.3 },     
        
        { label: "2020-10-30 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-30 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-30 21:00:00" , y: 0.1 },     
        
        { label: "2020-10-30 22:00:00" , y: 0.1 },     
        
        { label: "2020-10-30 23:00:00" , y: 0.1 },     
        
        { label: "2020-10-31 00:00:00" , y: 0.1 },     
        
        { label: "2020-10-31 01:00:00" , y: 0.1 },     
        
        { label: "2020-10-31 02:00:00" , y: 0.1 },     
        
        { label: "2020-10-31 03:00:00" , y: 0.1 },     
        
        { label: "2020-10-31 04:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 05:00:00" , y: 0.1 },     
        
        { label: "2020-10-31 06:00:00" , y: 0.1 },     
        
        { label: "2020-10-31 07:00:00" , y: 0.1 },     
        
        { label: "2020-10-31 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-31 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-31 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-31 12:00:00" , y: 0.7 },     
        
        { label: "2020-10-31 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-31 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-31 20:00:00" , y: 0.3 },     
        
        { label: "2020-10-31 21:00:00" , y: 0.3 },     
        
        { label: "2020-10-31 22:00:00" , y: 0.3 },     
        
        { label: "2020-10-31 23:00:00" , y: 0.3 },     
        
        { label: "2020-11-01 00:00:00" , y: 0.3 },     
        
        { label: "2020-11-01 01:00:00" , y: 0.3 },     
        
        { label: "2020-11-01 02:00:00" , y: 0.3 },     
        
        { label: "2020-11-01 03:00:00" , y: 0 },     
        
        { label: "2020-11-01 04:00:00" , y: 0 },     
        
        { label: "2020-11-01 05:00:00" , y: 0 },     
        
        { label: "2020-11-01 06:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 07:00:00" , y: 0.1 },     
        
        { label: "2020-11-01 08:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 09:00:00" , y: 0.3 },     
        
        { label: "2020-11-01 10:00:00" , y: 0.5 },     
        
        { label: "2020-11-01 11:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 12:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 13:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 14:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 15:00:00" , y: 0.7 },     
        
        { label: "2020-11-01 16:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 17:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 18:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-01 20:00:00" , y: 0.4 },     
        
        { label: "2020-11-01 21:00:00" , y: 0.4 },     
        
        { label: "2020-11-01 22:00:00" , y: 0.4 },     
        
        { label: "2020-11-01 23:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 00:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 01:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 02:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 03:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 04:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 05:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 06:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 07:00:00" , y: 0.2 },     
        
        { label: "2020-11-02 08:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 09:00:00" , y: 0.5 },     
        
        { label: "2020-11-02 10:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 11:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 12:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 13:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 14:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 15:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 16:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 17:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 18:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-02 20:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 21:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 22:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 23:00:00" , y: 0.4 },     
        
        { label: "2020-11-03 00:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 01:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 02:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 03:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 04:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 05:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 06:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 07:00:00" , y: 0.3 },     
        
        { label: "2020-11-03 08:00:00" , y: 0.4 },     
        
        { label: "2020-11-03 09:00:00" , y: 0.6 },     
        
        { label: "2020-11-03 10:00:00" , y: 0.6 },     
        
        { label: "2020-11-03 11:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 12:00:00" , y: 0.6 },     
        
        { label: "2020-11-03 13:00:00" , y: 0.6 },     
        
        { label: "2020-11-03 14:00:00" , y: 0.6 },     
        
        { label: "2020-11-03 15:00:00" , y: 0.6 },     
        
        { label: "2020-11-03 16:00:00" , y: 0.6 },     
        
        { label: "2020-11-03 17:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 18:00:00" , y: 0.2 },     
        
        { label: "2020-11-03 19:00:00" , y: 0.1 },     
        
        { label: "2020-11-03 20:00:00" , y: 0.1 },     
        
        { label: "2020-11-03 21:00:00" , y: 0.1 },     
        
        { label: "2020-11-03 22:00:00" , y: 0.1 },     
        
        { label: "2020-11-03 23:00:00" , y: 0.1 },     
        
        { label: "2020-11-04 00:00:00" , y: 0.1 },     
        
        { label: "2020-11-04 01:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 02:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 03:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 04:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 05:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 06:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 07:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 08:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 09:00:00" , y: 0.1 },     
        
        { label: "2020-11-04 10:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 11:00:00" , y: 0.3 },     
        
        { label: "2020-11-04 12:00:00" , y: 0.4 },     
        
        { label: "2020-11-04 13:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 14:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 15:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 16:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 17:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 18:00:00" , y: 0.4 },     
        
        { label: "2020-11-04 19:00:00" , y: 0.3 },     
        
        { label: "2020-11-04 20:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 21:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 22:00:00" , y: 0.2 },     
        
        { label: "2020-11-04 23:00:00" , y: 0.2 },     
        
        { label: "2020-11-05 00:00:00" , y: 0.2 },     
        
        { label: "2020-11-05 01:00:00" , y: 0.2 },     
        
        { label: "2020-11-05 02:00:00" , y: 0.1 },     
        
        { label: "2020-11-05 03:00:00" , y: 0.1 },     
        
        { label: "2020-11-05 04:00:00" , y: 0.1 },     
        
        { label: "2020-11-05 05:00:00" , y: 0.1 },     
        
        { label: "2020-11-05 06:00:00" , y: 0.1 },     
        
        { label: "2020-11-05 07:00:00" , y: 0.1 },     
        
        { label: "2020-11-05 08:00:00" , y: 0.4 },     
        
        { label: "2020-11-05 09:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 10:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 11:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 12:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 13:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 14:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 15:00:00" , y: 0.7 },     
        
        { label: "2020-11-05 16:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 17:00:00" , y: 0.2 },     
        
        { label: "2020-11-05 18:00:00" , y: 0 },     
        
        { label: "2020-11-05 19:00:00" , y: 0.1 },     
        
        { label: "2020-11-05 20:00:00" , y: 0.1 },     
        
        { label: "2020-11-05 21:00:00" , y: 0.1 },     
        
        { label: "2020-11-05 22:00:00" , y: 0.1 },     
        
        { label: "2020-11-05 23:00:00" , y: 0.1 },     
        
        { label: "2020-11-06 00:00:00" , y: 0.1 },     
        
        { label: "2020-11-06 01:00:00" , y: 0 },     
        
        { label: "2020-11-06 02:00:00" , y: 0 },     
        
        { label: "2020-11-06 03:00:00" , y: 0 },     
        
        { label: "2020-11-06 04:00:00" , y: 0 },     
        
        { label: "2020-11-06 05:00:00" , y: 0 },     
        
        { label: "2020-11-06 06:00:00" , y: 0 },     
        
        { label: "2020-11-06 07:00:00" , y: 0 },     
        
        { label: "2020-11-06 08:00:00" , y: 0.3 },     
        
        { label: "2020-11-06 09:00:00" , y: 0.6 },     
        
        { label: "2020-11-06 10:00:00" , y: 0.6 },     
        
        { label: "2020-11-06 11:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 12:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 13:00:00" , y: 0.6 },     
        
        { label: "2020-11-06 14:00:00" , y: 0.6 },     
        
        { label: "2020-11-06 15:00:00" , y: 0.7 },     
        
        { label: "2020-11-06 16:00:00" , y: 0.4 },     
        
        { label: "2020-11-06 17:00:00" , y: 0.3 },     
        
        { label: "2020-11-06 18:00:00" , y: 0.2 },     
        
        { label: "2020-11-06 19:00:00" , y: 0 },     
        
        { label: "2020-11-06 20:00:00" , y: 0 },     
        
        { label: "2020-11-06 21:00:00" , y: 0 },     
        
        { label: "2020-11-06 22:00:00" , y: 0 },     
        
        { label: "2020-11-06 23:00:00" , y: 0 },     
        
        { label: "2020-11-07 00:00:00" , y: 0 },     
        
        { label: "2020-11-07 01:00:00" , y: 0.1 },     
        
        { label: "2020-11-07 02:00:00" , y: 0.1 },     
        
        { label: "2020-11-07 03:00:00" , y: 0.1 },     
        
        { label: "2020-11-07 04:00:00" , y: 0.1 },     
        
        { label: "2020-11-07 05:00:00" , y: 0.1 },     
        
        { label: "2020-11-07 06:00:00" , y: 0.1 },     
        
        { label: "2020-11-07 07:00:00" , y: 0.1 },     
        
        { label: "2020-11-07 08:00:00" , y: 0.2 },     
        
        { label: "2020-11-07 09:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 10:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 11:00:00" , y: 0.6 },     
        
        { label: "2020-11-07 12:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 13:00:00" , y: 0 },     
        
        { label: "2020-11-07 14:00:00" , y: 0.1 },     
        
        { label: "2020-11-07 15:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 16:00:00" , y: 0.4 },     
        
        { label: "2020-11-07 17:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 18:00:00" , y: 0.2 },     
        
        { label: "2020-11-07 19:00:00" , y: 0.2 },     
        
        { label: "2020-11-07 20:00:00" , y: 0.2 },     
        
        { label: "2020-11-07 21:00:00" , y: 0.2 },     
        
        { label: "2020-11-07 22:00:00" , y: 0.2 },     
        
        { label: "2020-11-07 23:00:00" , y: 0.2 },     
        
        { label: "2020-11-08 00:00:00" , y: 0.1 },     
        
        { label: "2020-11-08 01:00:00" , y: 0.1 },     
        
        { label: "2020-11-08 02:00:00" , y: 0.1 },     
        
        { label: "2020-11-08 03:00:00" , y: 0.1 },     
        
        { label: "2020-11-08 04:00:00" , y: 0.2 },     
        
        { label: "2020-11-08 05:00:00" , y: 0.2 },     
        
        { label: "2020-11-08 06:00:00" , y: 0.2 },     
        
        { label: "2020-11-08 07:00:00" , y: 0.2 },     
        
        { label: "2020-11-08 08:00:00" , y: 0.2 },     
        
        { label: "2020-11-08 09:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 10:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 11:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 12:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 13:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 14:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 15:00:00" , y: 0.7 },     
        
        { label: "2020-11-08 16:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 17:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 18:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 19:00:00" , y: 0.3 },     
        
        { label: "2020-11-08 20:00:00" , y: 0.2 },     
        
        { label: "2020-11-08 21:00:00" , y: 0.2 },     
        
        { label: "2020-11-08 22:00:00" , y: 0 },     
        
        { label: "2020-11-08 23:00:00" , y: 0.2 },     
        
        { label: "2020-11-09 00:00:00" , y: 0.1 },     
        
        { label: "2020-11-09 01:00:00" , y: 0.1 },     
        
        { label: "2020-11-09 02:00:00" , y: 0 },     
        
        { label: "2020-11-09 03:00:00" , y: 0 },     
        
        { label: "2020-11-09 04:00:00" , y: 0 },     
        
        { label: "2020-11-09 05:00:00" , y: 0 },     
        
        { label: "2020-11-09 06:00:00" , y: 0 },     
        
        { label: "2020-11-09 07:00:00" , y: 0 },     
        
        { label: "2020-11-09 08:00:00" , y: 0.1 },     
        
        { label: "2020-11-09 09:00:00" , y: 0.3 },     
        
        { label: "2020-11-09 10:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 11:00:00" , y: 0.3 },     
        ]},

        {        
        type: "spline",
        name: "Total Movement",lineThickness: 2,color: "orange",
        showInLegend: true,
        dataPoints: [        
        
        { label: "2020-10-09 12:00:00" , y: 0.8 },     
        
        { label: "2020-10-09 13:00:00" , y: 0.8 },     
        
        { label: "2020-10-09 14:00:00" , y: 0.8 },     
        
        { label: "2020-10-09 15:00:00" , y: 0.7 },     
        
        { label: "2020-10-09 16:00:00" , y: 0.7 },     
        
        { label: "2020-10-09 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 19:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 20:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 21:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 22:00:00" , y: 0.6 },     
        
        { label: "2020-10-09 23:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 00:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 01:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 02:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 03:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 04:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 05:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 06:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 07:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 08:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-10 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 19:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 20:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 21:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 22:00:00" , y: 0.6 },     
        
        { label: "2020-10-10 23:00:00" , y: 0.6 },     
        
        { label: "2020-10-11 00:00:00" , y: 0.6 },     
        
        { label: "2020-10-11 01:00:00" , y: 0.6 },     
        
        { label: "2020-10-11 02:00:00" , y: 0.6 },     
        
        { label: "2020-10-11 03:00:00" , y: 0.6 },     
        
        { label: "2020-10-11 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-11 10:00:00" , y: 0.7 },     
        
        { label: "2020-10-11 11:00:00" , y: 0.7 },     
        
        { label: "2020-10-11 12:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 13:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 14:00:00" , y: 0.4 },     
        
        { label: "2020-10-11 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 16:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 17:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-11 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-12 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-12 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-12 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-12 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-12 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-12 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 10:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-12 12:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 13:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 14:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 15:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 18:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 19:00:00" , y: 0.3 },     
        
        { label: "2020-10-12 20:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 21:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 22:00:00" , y: 0.4 },     
        
        { label: "2020-10-12 23:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-13 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 10:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 11:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 12:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 13:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 14:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 15:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-13 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-13 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 20:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 21:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 22:00:00" , y: 0.4 },     
        
        { label: "2020-10-13 23:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 10:00:00" , y: 0.2 },     
        
        { label: "2020-10-14 11:00:00" , y: 0.2 },     
        
        { label: "2020-10-14 12:00:00" , y: 0.2 },     
        
        { label: "2020-10-14 13:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 14:00:00" , y: 0.1 },     
        
        { label: "2020-10-14 15:00:00" , y: 0.3 },     
        
        { label: "2020-10-14 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-14 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-14 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-14 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 09:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-15 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 13:00:00" , y: 0.3 },     
        
        { label: "2020-10-15 14:00:00" , y: 0.3 },     
        
        { label: "2020-10-15 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-15 17:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-15 21:00:00" , y: 0.6 },     
        
        { label: "2020-10-15 22:00:00" , y: 0.6 },     
        
        { label: "2020-10-15 23:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 00:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 01:00:00" , y: 0.7 },     
        
        { label: "2020-10-16 02:00:00" , y: 0.7 },     
        
        { label: "2020-10-16 03:00:00" , y: 0.7 },     
        
        { label: "2020-10-16 04:00:00" , y: 0.7 },     
        
        { label: "2020-10-16 05:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 06:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 07:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 08:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 09:00:00" , y: 0.7 },     
        
        { label: "2020-10-16 10:00:00" , y: 0.7 },     
        
        { label: "2020-10-16 11:00:00" , y: 0.7 },     
        
        { label: "2020-10-16 12:00:00" , y: 0.7 },     
        
        { label: "2020-10-16 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 15:00:00" , y: 0.4 },     
        
        { label: "2020-10-16 16:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 17:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-16 19:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 20:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 21:00:00" , y: 0.6 },     
        
        { label: "2020-10-16 22:00:00" , y: 0.7 },     
        
        { label: "2020-10-16 23:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 00:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 01:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 02:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 03:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 04:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 05:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 06:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 07:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 08:00:00" , y: 0.8 },     
        
        { label: "2020-10-17 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-17 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-17 11:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 12:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 13:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-17 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-17 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-17 17:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 18:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 19:00:00" , y: 0.7 },     
        
        { label: "2020-10-17 20:00:00" , y: 0.8 },     
        
        { label: "2020-10-17 21:00:00" , y: 0.8 },     
        
        { label: "2020-10-17 22:00:00" , y: 0.8 },     
        
        { label: "2020-10-17 23:00:00" , y: 0.8 },     
        
        { label: "2020-10-18 00:00:00" , y: 0.8 },     
        
        { label: "2020-10-18 01:00:00" , y: 0.8 },     
        
        { label: "2020-10-18 02:00:00" , y: 0.8 },     
        
        { label: "2020-10-18 03:00:00" , y: 0.8 },     
        
        { label: "2020-10-18 04:00:00" , y: 0.8 },     
        
        { label: "2020-10-18 05:00:00" , y: 0.8 },     
        
        { label: "2020-10-18 06:00:00" , y: 0.8 },     
        
        { label: "2020-10-18 07:00:00" , y: 0.8 },     
        
        { label: "2020-10-18 08:00:00" , y: 0.8 },     
        
        { label: "2020-10-18 09:00:00" , y: 0.8 },     
        
        { label: "2020-10-18 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-18 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 13:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-18 16:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 17:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 18:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 19:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 20:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 21:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 22:00:00" , y: 0.7 },     
        
        { label: "2020-10-18 23:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 00:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 01:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 02:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 03:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 04:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 05:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 06:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 07:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 08:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 09:00:00" , y: 0.3 },     
        
        { label: "2020-10-19 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 11:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 13:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 14:00:00" , y: 0.7 },     
        
        { label: "2020-10-19 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-19 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-19 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-20 11:00:00" , y: 0.6 },     
        
        { label: "2020-10-20 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-20 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-20 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-20 15:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 16:00:00" , y: 0.4 },     
        
        { label: "2020-10-20 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 18:00:00" , y: 0.3 },     
        
        { label: "2020-10-20 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 21:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-20 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 01:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 02:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 03:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 04:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 05:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 06:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 07:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 08:00:00" , y: 0.3 },     
        
        { label: "2020-10-21 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-21 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-21 11:00:00" , y: 0.6 },     
        
        { label: "2020-10-21 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-21 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-21 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-21 15:00:00" , y: 0.7 },     
        
        { label: "2020-10-21 16:00:00" , y: 0.5 },     
        
        { label: "2020-10-21 17:00:00" , y: 0.5 },     
        
        { label: "2020-10-21 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-21 19:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 20:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 21:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 22:00:00" , y: 0.2 },     
        
        { label: "2020-10-21 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 01:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 02:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 03:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 04:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 05:00:00" , y: 0.1 },     
        
        { label: "2020-10-22 06:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 07:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 08:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 09:00:00" , y: 0.2 },     
        
        { label: "2020-10-22 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-22 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-22 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-22 13:00:00" , y: 0.4 },     
        
        { label: "2020-10-22 14:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 15:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 16:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 17:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 18:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 19:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 20:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 21:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 22:00:00" , y: 0.3 },     
        
        { label: "2020-10-22 23:00:00" , y: 0.3 },     
        
        { label: "2020-10-23 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-23 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-23 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-23 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-23 11:00:00" , y: 0.7 },     
        
        { label: "2020-10-23 12:00:00" , y: 0.7 },     
        
        { label: "2020-10-23 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-23 14:00:00" , y: 0.7 },     
        
        { label: "2020-10-23 15:00:00" , y: 0.7 },     
        
        { label: "2020-10-23 16:00:00" , y: 0.7 },     
        
        { label: "2020-10-23 17:00:00" , y: 0.7 },     
        
        { label: "2020-10-23 18:00:00" , y: 0.7 },     
        
        { label: "2020-10-23 19:00:00" , y: 0.6 },     
        
        { label: "2020-10-23 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-23 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-23 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-23 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-24 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-24 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 12:00:00" , y: 0.8 },     
        
        { label: "2020-10-24 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-24 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-24 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-24 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-24 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-24 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-24 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-25 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 11:00:00" , y: 0.6 },     
        
        { label: "2020-10-25 12:00:00" , y: 0.7 },     
        
        { label: "2020-10-25 13:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 14:00:00" , y: 0.8 },     
        
        { label: "2020-10-25 15:00:00" , y: 0.7 },     
        
        { label: "2020-10-25 16:00:00" , y: 0.7 },     
        
        { label: "2020-10-25 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-25 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-25 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-25 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-26 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 09:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 13:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 14:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 15:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-26 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-26 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-26 19:00:00" , y: 0.6 },     
        
        { label: "2020-10-26 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-26 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 00:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 08:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 09:00:00" , y: 0.7 },     
        
        { label: "2020-10-27 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 11:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 12:00:00" , y: 0.8 },     
        
        { label: "2020-10-27 13:00:00" , y: 0.8 },     
        
        { label: "2020-10-27 14:00:00" , y: 0.8 },     
        
        { label: "2020-10-27 15:00:00" , y: 0.8 },     
        
        { label: "2020-10-27 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 17:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 20:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-27 22:00:00" , y: 0.6 },     
        
        { label: "2020-10-27 23:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 00:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 01:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 02:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 03:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 04:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 05:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 06:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 07:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 08:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 11:00:00" , y: 0.7 },     
        
        { label: "2020-10-28 12:00:00" , y: 0.8 },     
        
        { label: "2020-10-28 13:00:00" , y: 0.8 },     
        
        { label: "2020-10-28 14:00:00" , y: 0.8 },     
        
        { label: "2020-10-28 15:00:00" , y: 0.9 },     
        
        { label: "2020-10-28 16:00:00" , y: 0.7 },     
        
        { label: "2020-10-28 17:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 19:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 20:00:00" , y: 0.6 },     
        
        { label: "2020-10-28 21:00:00" , y: 0.5 },     
        
        { label: "2020-10-28 22:00:00" , y: 0.5 },     
        
        { label: "2020-10-28 23:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 00:00:00" , y: 0.6 },     
        
        { label: "2020-10-29 01:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 02:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 03:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 04:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 05:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 06:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 07:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 08:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 09:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 10:00:00" , y: 0.3 },     
        
        { label: "2020-10-29 11:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 12:00:00" , y: 0.6 },     
        
        { label: "2020-10-29 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-29 14:00:00" , y: 0.7 },     
        
        { label: "2020-10-29 15:00:00" , y: 0.6 },     
        
        { label: "2020-10-29 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-29 17:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 18:00:00" , y: 0.5 },     
        
        { label: "2020-10-29 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 20:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 21:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 22:00:00" , y: 0.4 },     
        
        { label: "2020-10-29 23:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 00:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 01:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 02:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 03:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 04:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 05:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 06:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 07:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 09:00:00" , y: 0.5 },     
        
        { label: "2020-10-30 10:00:00" , y: 0.6 },     
        
        { label: "2020-10-30 11:00:00" , y: 0.5 },     
        
        { label: "2020-10-30 12:00:00" , y: 0.5 },     
        
        { label: "2020-10-30 13:00:00" , y: 0.8 },     
        
        { label: "2020-10-30 14:00:00" , y: 0.8 },     
        
        { label: "2020-10-30 15:00:00" , y: 0.7 },     
        
        { label: "2020-10-30 16:00:00" , y: 0.5 },     
        
        { label: "2020-10-30 17:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 18:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 19:00:00" , y: 0.4 },     
        
        { label: "2020-10-30 20:00:00" , y: 0.3 },     
        
        { label: "2020-10-30 21:00:00" , y: 0.3 },     
        
        { label: "2020-10-30 22:00:00" , y: 0.3 },     
        
        { label: "2020-10-30 23:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 00:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 01:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 02:00:00" , y: 0.2 },     
        
        { label: "2020-10-31 03:00:00" , y: 0.3 },     
        
        { label: "2020-10-31 04:00:00" , y: 0.3 },     
        
        { label: "2020-10-31 05:00:00" , y: 0.3 },     
        
        { label: "2020-10-31 06:00:00" , y: 0.3 },     
        
        { label: "2020-10-31 07:00:00" , y: 0.3 },     
        
        { label: "2020-10-31 08:00:00" , y: 0.4 },     
        
        { label: "2020-10-31 09:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 10:00:00" , y: 0.5 },     
        
        { label: "2020-10-31 11:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 12:00:00" , y: 0.7 },     
        
        { label: "2020-10-31 13:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 14:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 15:00:00" , y: 0.7 },     
        
        { label: "2020-10-31 16:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 17:00:00" , y: 0.7 },     
        
        { label: "2020-10-31 18:00:00" , y: 0.6 },     
        
        { label: "2020-10-31 19:00:00" , y: 0.5 },     
        
        { label: "2020-10-31 20:00:00" , y: 0.4 },     
        
        { label: "2020-10-31 21:00:00" , y: 0.4 },     
        
        { label: "2020-10-31 22:00:00" , y: 0.4 },     
        
        { label: "2020-10-31 23:00:00" , y: 0.4 },     
        
        { label: "2020-11-01 00:00:00" , y: 0.3 },     
        
        { label: "2020-11-01 01:00:00" , y: 0.3 },     
        
        { label: "2020-11-01 02:00:00" , y: 0.4 },     
        
        { label: "2020-11-01 03:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 04:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 05:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 06:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 07:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 08:00:00" , y: 0.2 },     
        
        { label: "2020-11-01 09:00:00" , y: 0.3 },     
        
        { label: "2020-11-01 10:00:00" , y: 0.5 },     
        
        { label: "2020-11-01 11:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 12:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 13:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 14:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 15:00:00" , y: 0.7 },     
        
        { label: "2020-11-01 16:00:00" , y: 0.7 },     
        
        { label: "2020-11-01 17:00:00" , y: 0.7 },     
        
        { label: "2020-11-01 18:00:00" , y: 0.6 },     
        
        { label: "2020-11-01 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-01 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-01 21:00:00" , y: 0.4 },     
        
        { label: "2020-11-01 22:00:00" , y: 0.4 },     
        
        { label: "2020-11-01 23:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 00:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 01:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 02:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 03:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 04:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 05:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 06:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 07:00:00" , y: 0.3 },     
        
        { label: "2020-11-02 08:00:00" , y: 0.4 },     
        
        { label: "2020-11-02 09:00:00" , y: 0.5 },     
        
        { label: "2020-11-02 10:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 11:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 12:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 13:00:00" , y: 0.7 },     
        
        { label: "2020-11-02 14:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 15:00:00" , y: 0.7 },     
        
        { label: "2020-11-02 16:00:00" , y: 0.7 },     
        
        { label: "2020-11-02 17:00:00" , y: 0.7 },     
        
        { label: "2020-11-02 18:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 19:00:00" , y: 0.6 },     
        
        { label: "2020-11-02 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-02 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-02 22:00:00" , y: 0.5 },     
        
        { label: "2020-11-02 23:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 00:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 01:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 02:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 03:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 04:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 05:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 06:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 07:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 08:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 09:00:00" , y: 0.7 },     
        
        { label: "2020-11-03 10:00:00" , y: 0.7 },     
        
        { label: "2020-11-03 11:00:00" , y: 0.6 },     
        
        { label: "2020-11-03 12:00:00" , y: 0.7 },     
        
        { label: "2020-11-03 13:00:00" , y: 0.7 },     
        
        { label: "2020-11-03 14:00:00" , y: 0.7 },     
        
        { label: "2020-11-03 15:00:00" , y: 0.7 },     
        
        { label: "2020-11-03 16:00:00" , y: 0.7 },     
        
        { label: "2020-11-03 17:00:00" , y: 0.7 },     
        
        { label: "2020-11-03 18:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 22:00:00" , y: 0.5 },     
        
        { label: "2020-11-03 23:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 00:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 01:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 02:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 03:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 04:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 05:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 06:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 07:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 08:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 09:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 10:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 11:00:00" , y: 0.6 },     
        
        { label: "2020-11-04 12:00:00" , y: 0.6 },     
        
        { label: "2020-11-04 13:00:00" , y: 0.7 },     
        
        { label: "2020-11-04 14:00:00" , y: 0.7 },     
        
        { label: "2020-11-04 15:00:00" , y: 0.7 },     
        
        { label: "2020-11-04 16:00:00" , y: 0.7 },     
        
        { label: "2020-11-04 17:00:00" , y: 0.7 },     
        
        { label: "2020-11-04 18:00:00" , y: 0.7 },     
        
        { label: "2020-11-04 19:00:00" , y: 0.6 },     
        
        { label: "2020-11-04 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 22:00:00" , y: 0.5 },     
        
        { label: "2020-11-04 23:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 00:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 01:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 02:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 03:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 04:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 05:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 06:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 07:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 08:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 09:00:00" , y: 0.7 },     
        
        { label: "2020-11-05 10:00:00" , y: 0.7 },     
        
        { label: "2020-11-05 11:00:00" , y: 0.7 },     
        
        { label: "2020-11-05 12:00:00" , y: 0.8 },     
        
        { label: "2020-11-05 13:00:00" , y: 0.8 },     
        
        { label: "2020-11-05 14:00:00" , y: 0.8 },     
        
        { label: "2020-11-05 15:00:00" , y: 0.9 },     
        
        { label: "2020-11-05 16:00:00" , y: 0.7 },     
        
        { label: "2020-11-05 17:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 18:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 20:00:00" , y: 0.6 },     
        
        { label: "2020-11-05 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 22:00:00" , y: 0.5 },     
        
        { label: "2020-11-05 23:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 00:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 01:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 02:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 03:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 04:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 05:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 06:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 07:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 08:00:00" , y: 0.4 },     
        
        { label: "2020-11-06 09:00:00" , y: 0.6 },     
        
        { label: "2020-11-06 10:00:00" , y: 0.6 },     
        
        { label: "2020-11-06 11:00:00" , y: 0.6 },     
        
        { label: "2020-11-06 12:00:00" , y: 0.6 },     
        
        { label: "2020-11-06 13:00:00" , y: 0.8 },     
        
        { label: "2020-11-06 14:00:00" , y: 0.7 },     
        
        { label: "2020-11-06 15:00:00" , y: 0.8 },     
        
        { label: "2020-11-06 16:00:00" , y: 0.6 },     
        
        { label: "2020-11-06 17:00:00" , y: 0.5 },     
        
        { label: "2020-11-06 18:00:00" , y: 0.4 },     
        
        { label: "2020-11-06 19:00:00" , y: 0.4 },     
        
        { label: "2020-11-06 20:00:00" , y: 0.4 },     
        
        { label: "2020-11-06 21:00:00" , y: 0.3 },     
        
        { label: "2020-11-06 22:00:00" , y: 0.3 },     
        
        { label: "2020-11-06 23:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 00:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 01:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 02:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 03:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 04:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 05:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 06:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 07:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 08:00:00" , y: 0.3 },     
        
        { label: "2020-11-07 09:00:00" , y: 0.4 },     
        
        { label: "2020-11-07 10:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 11:00:00" , y: 0.6 },     
        
        { label: "2020-11-07 12:00:00" , y: 0.6 },     
        
        { label: "2020-11-07 13:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 14:00:00" , y: 0.4 },     
        
        { label: "2020-11-07 15:00:00" , y: 0.6 },     
        
        { label: "2020-11-07 16:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 17:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 18:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 22:00:00" , y: 0.5 },     
        
        { label: "2020-11-07 23:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 00:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 01:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 02:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 03:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 04:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 05:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 06:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 07:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 08:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 09:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 10:00:00" , y: 0.7 },     
        
        { label: "2020-11-08 11:00:00" , y: 0.7 },     
        
        { label: "2020-11-08 12:00:00" , y: 0.7 },     
        
        { label: "2020-11-08 13:00:00" , y: 0.7 },     
        
        { label: "2020-11-08 14:00:00" , y: 0.7 },     
        
        { label: "2020-11-08 15:00:00" , y: 0.9 },     
        
        { label: "2020-11-08 16:00:00" , y: 0.7 },     
        
        { label: "2020-11-08 17:00:00" , y: 0.7 },     
        
        { label: "2020-11-08 18:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 19:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 22:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 23:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 00:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 01:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 02:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 03:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 04:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 05:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 06:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 07:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 08:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 09:00:00" , y: 0.5 },     
        
        { label: "2020-11-09 10:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 11:00:00" , y: 0.6 },     
        ]},    
    ]
});

chart.render();    
//END CHART MM
    
    
//BEGIN ALARM STATISTICS
CanvasJS.addColorSet("alarmColors",
    [//colorSet Array
        "green",
        "#36a2df",
        "orange",
        "red",               
    ]);    
    
var chart = new CanvasJS.Chart("chartContainerPie", {
	exportEnabled: true,
    animationEnabled: true,
    colorSet: "alarmColors",
    
	title:{
		text: "Alarm Statistics",
        fontWeight: "normal",
        fontFamily: "arial",
        fontSize: 20
	},    

	subtitles:[
        {
		text: "[ 1 Month ]",
        fontWeight: "normal",
        fontFamily: "arial",
        fontSize: 15
        }
        ],      
    
	data: [{
		type: "pie",
        //showInLegend: true,
		startAngle: 240,
		yValueFormatString: "###0",
		indexLabel: "{label} ({y})",
		dataPoints: [
            
            
                   {y: 744, label: "Normal"},            
            
		]
	}]
});
chart.render();    
    
//END ALARM STATISTICS
    
function toggleDataSeries(e) {
	if(typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;            
	}
	chart.render();
}
    
function toggleDataSeries1(e) {
	if(typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;            
	}
	chart.render();
}

}

/*
function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();

}
*/

</script>
</head>
<body>

</body>
</html>
    
    
<div class="row">
<div class="col-lg-12">

<div class="portlet box">
<div class="portlet-header">
<div class="caption">Axis Movements (Degree)</div>
<div class="tools">
<a href="#top"><i class="fa fa-chevron-up"></i></a>
<!--
<i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i>
<i class="fa fa-refresh"></i>
<i class="fa fa-times"></i>
-->
</div>                                    
</div>
    
<div class="portlet-body" align="center">
<div style="width: 100%;">
<div id="chartContainerAngle" style="height: 450px; width: 100%;"></div>
</div>

</div>
</div>

<div class="portlet box">
<div class="portlet-header">
<div class="caption">Axis Movements (mm/m)</div>
<div class="tools">
<a href="#top"><i class="fa fa-chevron-up"></i></a>
<!--
<i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i>
<i class="fa fa-refresh"></i>
<i class="fa fa-times"></i>
-->
</div>
</div>
    
<div class="portlet-body" align="center">
<div id="chartContainerMM" style="height: 450px; width: 100%;"></div>
</div>
    
</div>
</div>

<div class="portlet box">
<div class="portlet-header">
<div class="caption">Alarm Statistics</div>
<div class="tools">
<a href="#top"><i class="fa fa-chevron-up"></i></a>
<!--
<i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i>
<i class="fa fa-refresh"></i>
<i class="fa fa-times"></i>
-->
</div>
</div>
    
<div class="portlet-body" align="center">
<div id="chartContainerPie" style="height: 450px; width: 100%;"></div>
</div>


</div><!--end col-lg-12-->

</div><!--end row-->

</div><!--end col-lg-12-->

</div><!--end row mbl-->
</div><!--end tab general-->
</div><!--end page content-->

<!--BEGIN FOOTER-->
<div id="footer">
    <div class="copyright">
        <a href="" target="_blank" style="color:#999999; text-decoration:none;">2020 © Powered by Bahagian Kejuruteraan Cerun, JKR</a>
    </div>
</div>
<!--END FOOTER-->

<!--</div>end page wrapper-->

<!--</div>end wrapper-->

</div>
<!--end first div-->

          
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