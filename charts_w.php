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
    <title>Nodes 10 | MySTAR GeoAlert</title>
    <!-- Bootstrap -->

    <!-- add library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- navbar code -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" src="assets/css/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" src="assets/css/css/all.min.css">
    <link rel="stylesheet" type="text/css" src="assets/css/css/all.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>

    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/font-awesome.min.css" >
    <link href="/fontawesome-free-5.10.1-web/css/all.min.css" rel="stylesheet">
    <link href="C:/xampp/htdocs/GeoAlertSystem/fontawesome-free-5.15.1-web/css/font-awesome.min.css">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

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
                    <a href="#" class="list-items"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a>
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
                    <a href="" class="list-items"><i class="fas fa-file-alt"></i>&nbsp; Reports</a>
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
    
           <div> 
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">

            <div class="page-header pull-left">
                <div class="page-title">
                    Charts (week) Node ID: 10</div>
            </div>
            <div class="clearfix">
            </div>
        </div>
   

        <!--BEGIN CONTENT-->
        <div class="page-content">
            <div id="tab-general">
                <div class="row mbl">

                    <div class="col-lg-12">

                        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                        <link rel="stylesheet" type="text/css" href="chartmenu.css">
                        <title>Chart Menu</title>

                         <div class="topnav" style="display: flex;">

                                    <a href="charts_d.php?nodeID=10">Day</a>
                                    <a href="charts_w.php?nodeID=10" class="active">Week</a>
                                    <a href="charts_m.php?nodeID=10">Month</a>

                         </div>


                        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                        <script>
                            window.onload = function chartAngle() {


                                //BEGIN CHART ANGLE    
                                var chart = new CanvasJS.Chart("chartContainerAngle", {
                                    animationEnabled: true,
                                    exportEnabled: true,
                                    zoomEnabled: true,
                                    title: {
                                        text: "Hourly Readings: Axis Movements (Degree)",
                                        fontWeight: "normal",
                                        fontFamily: "arial",
                                        fontSize: 20
                                    },

                                    subtitles: [{
                                        text: "[ 1 Week ]",
                                        fontWeight: "normal",
                                        fontFamily: "arial",
                                        fontSize: 15
                                    }],

                                    axisY: {
                                        title: "Movements (Degree)",
                                        titleFontSize: 15,
                                        gridThickness: 0.3,
                                        maximum: 3,

                                        stripLines: [{
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
                                    axisX: {
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
                                    legend: {
                                        cursor: "pointer",
                                        itemclick: function(e) {
                                            //console.log("legend click: " + e.dataPointIndex);
                                            //console.log(e);
                                            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
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
                                            name: "Axis A",
                                            lineThickness: 2,
                                            color: "#36a2df",
                                            showInLegend: true,
                                            dataPoints: [

                                                {
                                                    label: "2020-11-05 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 19:00:00",
                                                    y: 0
                                                },
                                            ]
                                        },

                                        {
                                            type: "spline",
                                            name: "Axis B",
                                            lineThickness: 2,
                                            color: "brown",
                                            showInLegend: true,
                                            dataPoints: [

                                                {
                                                    label: "2020-11-05 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-06 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-06 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 12:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-08 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-10 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-11 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-11 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-11 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 12:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 13:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 19:00:00",
                                                    y: 0.1
                                                },
                                            ]
                                        },
                                    ]
                                });

                                chart.render();
                                //END CHART ANGLE    


                                //BEGIN CHART MM    
                                var chart = new CanvasJS.Chart("chartContainerMM", {
                                    animationEnabled: true,
                                    exportEnabled: true,
                                    zoomEnabled: true,
                                    title: {
                                        text: "Hourly Readings: Axis Movements (mm/m)",
                                        fontWeight: "normal",
                                        fontFamily: "arial",
                                        fontSize: 20
                                    },

                                    subtitles: [{
                                        text: "[ 1 Week ]",
                                        fontWeight: "normal",
                                        fontFamily: "arial",
                                        fontSize: 15
                                    }],

                                    axisY: {
                                        title: "Movements (mm/m)",
                                        titleFontSize: 15,
                                        gridThickness: 0.3,
                                        maximum: 100,
                                    },
                                    axisX: {
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
                                    legend: {
                                        cursor: "pointer",
                                        itemclick: function(e) {
                                            //console.log("legend click: " + e.dataPointIndex);
                                            //console.log(e);
                                            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
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
                                            name: "Axis A",
                                            lineThickness: 2,
                                            color: "#36a2df",
                                            showInLegend: true,
                                            dataPoints: [

                                                {
                                                    label: "2020-11-05 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-06 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-06 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-06 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-06 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-06 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-06 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-06 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-06 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-06 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-06 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-06 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-06 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-06 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-06 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-06 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-06 15:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-11-06 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-06 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-06 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-06 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-06 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 09:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-07 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-07 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-07 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-07 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-07 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 15:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-07 16:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-07 17:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-07 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-07 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-07 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-07 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-08 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-08 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-08 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-08 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-08 13:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-11-08 14:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-11-08 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-08 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-08 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-08 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-08 19:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-08 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-08 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-08 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-08 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-09 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 09:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-09 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-09 11:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-09 12:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 13:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 14:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-09 15:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-09 16:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-09 17:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-09 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-09 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-09 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-09 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-10 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-10 10:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-11-10 11:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-11-10 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-10 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-10 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-10 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-10 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-10 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-10 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-10 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-10 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-10 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-10 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-10 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-11 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-11 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-11 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-11 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-11 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-11 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-11 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-11 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-11 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-11 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-11 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-11 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-11 17:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-11 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-11 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-11 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-11 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-11 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-11 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-12 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-12 09:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-12 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-12 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-12 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-12 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-12 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-12 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-12 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-12 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-12 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-12 19:00:00",
                                                    y: 0.2
                                                },
                                            ]
                                        },

                                        {
                                            type: "spline",
                                            name: "Axis B",
                                            lineThickness: 2,
                                            color: "brown",
                                            showInLegend: true,
                                            dataPoints: [

                                                {
                                                    label: "2020-11-05 20:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-05 21:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-05 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-05 23:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-06 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 08:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-06 09:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-06 10:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 11:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-06 12:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-11-06 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-06 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 15:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 16:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 17:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 18:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 19:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-11-06 20:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-11-06 21:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-06 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-06 23:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-07 00:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-07 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 09:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-07 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-07 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-07 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 20:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 22:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 23:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 00:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 01:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 02:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 03:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 04:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 05:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-08 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-08 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-08 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-08 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-08 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-08 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-08 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-08 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-08 23:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-11-09 00:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-09 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-09 02:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-09 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 09:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-09 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 22:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-10 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-10 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 19:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 22:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-11 02:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-11 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-11 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 11:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-11-11 12:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-11 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 17:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 18:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 19:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-11 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-12 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-12 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-12 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 11:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-12 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-12 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-12 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-12 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 19:00:00",
                                                    y: 0.9
                                                },
                                            ]
                                        },

                                        {
                                            type: "spline",
                                            name: "Total Movement",
                                            lineThickness: 2,
                                            color: "orange",
                                            showInLegend: true,
                                            dataPoints: [

                                                {
                                                    label: "2020-11-05 20:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-05 21:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-05 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-05 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 08:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-06 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-06 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-06 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 12:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-06 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-06 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-06 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-06 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-06 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-06 18:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-06 19:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-11-06 20:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-11-06 21:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-06 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-06 23:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-07 00:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-07 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-07 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 09:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-07 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-07 12:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-07 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-07 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-07 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 20:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 22:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-07 23:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 00:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 01:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 02:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 03:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 04:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 05:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-08 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-08 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-08 11:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-08 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-08 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-08 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-08 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-08 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-08 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 20:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-08 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-08 23:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-11-09 00:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-09 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-09 02:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-09 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-09 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-09 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-09 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 22:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-09 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-10 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-10 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-10 11:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-10 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 22:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-10 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-11 02:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-11 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-11 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 11:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-11 12:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-11 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-11 19:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 22:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-11 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-12 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-12 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-12 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-12 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-12 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 12:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 13:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-12 19:00:00",
                                                    y: 1
                                                },
                                            ]
                                        },
                                    ]
                                });

                                chart.render();
                                //END CHART MM


                                //BEGIN ALARM STATISTICS
                                CanvasJS.addColorSet("alarmColors",
                                    [ //colorSet Array
                                        "green",
                                        "#36a2df",
                                        "orange",
                                        "red",
                                    ]);

                                var chart = new CanvasJS.Chart("chartContainerPie", {
                                    exportEnabled: true,
                                    animationEnabled: true,
                                    colorSet: "alarmColors",

                                    title: {
                                        text: "Alarm Statistics",
                                        fontWeight: "normal",
                                        fontFamily: "arial",
                                        fontSize: 20
                                    },

                                    subtitles: [{
                                        text: "[ 1 Week ]",
                                        fontWeight: "normal",
                                        fontFamily: "arial",
                                        fontSize: 15
                                    }],

                                    data: [{
                                        type: "pie",
                                        //showInLegend: true,
                                        startAngle: 240,
                                        yValueFormatString: "###0",
                                        indexLabel: "{label} ({y})",
                                        dataPoints: [


                                            {
                                                y: 168,
                                                label: "Normal"
                                            },

                                        ]
                                    }]
                                });
                                chart.render();

                                //END ALARM STATISTICS

                                function toggleDataSeries(e) {
                                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                        e.dataSeries.visible = false;
                                    } else {
                                        e.dataSeries.visible = true;
                                    }
                                    chart.render();
                                }

                                function toggleDataSeries1(e) {
                                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                        e.dataSeries.visible = false;
                                    } else {
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


                                    <div class="row">
                                    <div class="col-lg-12">

                                        <div class="portlet box">
                                            <div class="portlet-header">
                                                <div class="caption">Axis Movements (Degree)</div>
                                                <div class="tools">
                                                    <a href="#top"><i class="fa fa-chevron-up"></i></a> </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div id="chartContainerAngle" style="height: 450px; width: 100%;"> </div>
                                            </div>
                                        </div>

                                        <div class="portlet box">
                                            <div class="portlet-header">
                                                <div class="caption">Axis Movements (mm/m)</div>
                                                <div class="tools">
                                                    <a href="#top"><i class="fa fa-chevron-up"></i></a>
                                                </div>
                                            </div>
                                            <div class="portlet-body" align="center">
                                                <div id="chartContainerMM" style="height: 450px; width: 100%;"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="portlet22 box22">
                                        <div class="portlet-header">
                                            <div class="caption">Alarm Statistics</div>
                                            <div class="tools">
                                                <a href="#top"><i class="fa fa-chevron-up"></i></a>
                                            </div>
                                        </div>
                                        <div class="portlet-body" align="center">

                                        </div>

                                    </div>
                                    <!--end col-lg-12-->
                                    <div id="chartContainerPie" style="height: 450px; width: 100%;">
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                            <!--end col-lg-12-->
                        </div>
                        <!--end row mbl-->
                    </div>
                    <!--end tab general-->
                </div>
                <!--end page content-->

            </div>
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

    <span style="position: absolute; left: 0px; top: -20000px; padding: 0px; margin: 0px; border: none; white-space: pre; line-height: normal; font-family: &quot;Trebuchet MS&quot;, Helvetica, sans-serif; font-size: 14px; font-weight: normal; display: none;">Mpgyi</span>
</body>

</html>