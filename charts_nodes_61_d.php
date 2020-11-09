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
    <title>Charts (Day) Node ID: 61| MySTAR GeoAlert</title>
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
Charts (Day) Node ID: 61</div>
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

<a href="charts_nodes_61_d.php" class="active">Day</a><a href="charts_nodes_61_w.php">Week</a><a href="charts_nodes_61_w.php" >Month</a>
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
		text: "[ 1 Day ]",
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
		text: "[ 1 Day ]",
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
        
        { label: "2020-11-08 12:00:00" , y: 0.3 },     
        
        { label: "2020-11-08 13:00:00" , y: 0.2 },     
        
        { label: "2020-11-08 14:00:00" , y: 0.3 },     
        
        { label: "2020-11-08 15:00:00" , y: 0.3 },     
        
        { label: "2020-11-08 16:00:00" , y: 0.3 },     
        
        { label: "2020-11-08 17:00:00" , y: 0.3 },     
        
        { label: "2020-11-08 18:00:00" , y: 0.3 },     
        
        { label: "2020-11-08 19:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 20:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 21:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 22:00:00" , y: 0.3 },     
        
        { label: "2020-11-08 23:00:00" , y: 0.2 },     
        
        { label: "2020-11-09 00:00:00" , y: 0.3 },     
        
        { label: "2020-11-09 01:00:00" , y: 0.3 },     
        
        { label: "2020-11-09 02:00:00" , y: 0.3 },     
        
        { label: "2020-11-09 03:00:00" , y: 0.3 },     
        
        { label: "2020-11-09 04:00:00" , y: 0.3 },     
        
        { label: "2020-11-09 05:00:00" , y: 0.3 },     
        
        { label: "2020-11-09 06:00:00" , y: 0.3 },     
        
        { label: "2020-11-09 07:00:00" , y: 0.3 },     
        
        { label: "2020-11-09 08:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 09:00:00" , y: 0.4 },     
        
        { label: "2020-11-09 10:00:00" , y: 0.3 },     
        
        { label: "2020-11-09 11:00:00" , y: 0.3 },     
        ]},

        {        
        type: "spline",
        name: "Axis B",lineThickness: 2,color: "brown",
        showInLegend: true,
        dataPoints: [        
        
        { label: "2020-11-08 12:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 13:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 14:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 15:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 16:00:00" , y: 0.4 },     
        
        { label: "2020-11-08 17:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 18:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 19:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 20:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 21:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 22:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 23:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 00:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 01:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 02:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 03:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 04:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 05:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 06:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 07:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 08:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 09:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 10:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 11:00:00" , y: 0.6 },     
        ]},

        {        
        type: "spline",
        name: "Total Movement",lineThickness: 2,color: "orange",
        showInLegend: true,
        dataPoints: [        
        
        { label: "2020-11-08 12:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 13:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 14:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 15:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 16:00:00" , y: 0.5 },     
        
        { label: "2020-11-08 17:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 18:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 19:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 20:00:00" , y: 0.6 },     
        
        { label: "2020-11-08 21:00:00" , y: 0.7 },     
        
        { label: "2020-11-08 22:00:00" , y: 0.7 },     
        
        { label: "2020-11-08 23:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 00:00:00" , y: 0.6 },     
        
        { label: "2020-11-09 01:00:00" , y: 0.7 },     
        
        { label: "2020-11-09 02:00:00" , y: 0.7 },     
        
        { label: "2020-11-09 03:00:00" , y: 0.7 },     
        
        { label: "2020-11-09 04:00:00" , y: 0.7 },     
        
        { label: "2020-11-09 05:00:00" , y: 0.7 },     
        
        { label: "2020-11-09 06:00:00" , y: 0.7 },     
        
        { label: "2020-11-09 07:00:00" , y: 0.7 },     
        
        { label: "2020-11-09 08:00:00" , y: 0.7 },     
        
        { label: "2020-11-09 09:00:00" , y: 0.7 },     
        
        { label: "2020-11-09 10:00:00" , y: 0.7 },     
        
        { label: "2020-11-09 11:00:00" , y: 0.7 },     
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
		text: "[ 1 Day ]",
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
            
                   {y: 24, label: "Normal"},            
            
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