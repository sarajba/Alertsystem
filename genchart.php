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
<div class="page-content">
            <div id="tab-general">
                <div class="row mbl">
                    <div class="col-lg-12">
                        <div class="page-content">
                            <div class="row">

                                <!--Filter nodes-->
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-body">
                                                                                        <div class = "noprint">
                                                <form action="/genchart.php" method="post" name="chartform">
                                                    <h4>Residence</h4><input type="checkbox" onClick="toggle_res(this)" /> Select All<br/><label><input type="checkbox" name="10" value="10" class="residence"> Node 10&nbsp;&nbsp;</label><label><input type="checkbox" name="20" value="20" class="residence"> Node 20&nbsp;&nbsp;</label><label><input type="checkbox" name="21" value="21" class="residence"> Node 21&nbsp;&nbsp;</label><label><input type="checkbox" name="30" value="30" class="residence"> Node 30&nbsp;&nbsp;</label><label><input type="checkbox" name="40" value="40" class="residence"> Node 40&nbsp;&nbsp;</label><label><input type="checkbox" name="50" value="50" class="residence"> Node 50&nbsp;&nbsp;</label><label><input type="checkbox" name="60" value="60" class="residence"> Node 60&nbsp;&nbsp;</label><label><input type="checkbox" name="61" value="61" class="residence"> Node 61&nbsp;&nbsp;</label><label><input type="checkbox" name="70" value="70" class="residence"> Node 70&nbsp;&nbsp;</label><label><input type="checkbox" name="80" value="80" class="residence"> Node 80&nbsp;&nbsp;</label>                                                    <br>
                        
                                                    <h4>Reading Period</h4>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <select class="form-control" id="interval" name="interval" required="true">
                                                                    <option value="1 DAY">1 Day</option>    
                                                                    <option value="1 WEEK">1 Week</option>
                                                                    <option value="1 MONTH">1 Month</option>
                                                                    <option value="set">Set Dates</option>
                                                                </select>
                                                            </div>       
                                                        </div>
                                                    </div>
        
                                                    <script>
                                                        $(document).ready(function(){    
                                                        $('#theDates').hide();
                                                        });
                                                            
                                                        $('#interval').on('change', function() {
                                                        if(this.value!='set')
                                                        {
                                                        //alert( this.value );
                                                        $("#theDates").hide(500); 
                                                        }
                                                        else
                                                        {
                                                        //alert( this.value );
                                                        $("#theDates").show(500);
                                                        }
                                                        })  
                                                    </script>
            
                                                    <div id="theDates">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="fromDate">From Date</label>
                                                                    <input type="date" class="form-control" id="fromDate" name="fromDate">
                                                                </div>       
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="toDate">To Date</label>
                                                                    <input type="date" class="form-control" id="toDate" name="toDate">
                                                                </div>       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- end panel-body class div -->
                                    </div>
                                    <!-- end panel class div -->
                                </div>
                                <!-- end col-lg-12 -->
                                
                                <!DOCTYPE HTML>
<html>
<head>  
  

    <script>
    window.onload = function () {

    CanvasJS.addColorSet("customColorSet",
    [//colorSet Array

        "#4661EE",
        "#EC5657",
        "#1BCDD1",
        "#8FAABB",
        "#B08BEB",
        "#3EA0DD",
        "#F5A52A",
        "#23BFAA"          
    ]);    var chart = new CanvasJS.Chart("chart1", {
    colorSet: "customColorSet",
	animationEnabled: true,
    exportEnabled: true,
    zoomEnabled: true, 

	title:{
        text: "Axis A Variations (Degree), Axis B Variations (Degree) and Total Movements (mm/m)",
        fontWeight: "bold",
        fontFamily: "arial",
        fontSize: 20 
    },
    
	subtitles:[
        {
		text: "[ 1 DAY ]",
        fontWeight: "normal",
        fontFamily: "arial",
        fontSize: 15
        }
        ],  

        axisX: {
		title:"Axis B Reading (Degree)",
        titleFontSize: 15,
        <!-- labelAngle: 135, -->
        interval: 1,
        intervalType: "number",
        stripLines:[
			{                
				value:0,
                thickness:3,
                color:"#82CAFF"                
			}
			]
	},
	axisY: {
		title:"Axis A Reading (Degree)",
        titleFontSize: 15,
        interval: 1,
        stripLines:[
        {                
				value:0,
                thickness:3,
                color:"#82CAFF"                  
        }
        ]    

	},
	legend:{
		horizontalAlign: "center",
        
        itemclick: function (e) {
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
            type: 'bubble',
            showInLegend: true,
            legendText: '{name}',
            legendMarkerType: 'circle',
            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                    dataPoints: [
                    { x: -0.0173, y: -0.0562, z: 1.0263, name: 'Node 10', datetime: '2020-11-09 10:00:00' },
                    ]
            },
            
            {
            type: 'bubble',
            showInLegend: true,
            legendText: '{name}',
            legendMarkerType: 'circle',
            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                    dataPoints: [
                    { x: 0.0233, y: -0.025, z: 0.5965, name: 'Node 20', datetime: '2020-11-09 02:00:00' },
                    ]
            },
            
            {
            type: 'bubble',
            showInLegend: true,
            legendText: '{name}',
            legendMarkerType: 'circle',
            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                    dataPoints: [
                    { x: -0.0269, y: 0.0569, z: 1.0985, name: 'Node 21', datetime: '2020-11-09 02:00:00' },
                    ]
            },
            
            {
            type: 'bubble',
            showInLegend: true,
            legendText: '{name}',
            legendMarkerType: 'circle',
            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                    dataPoints: [
                    { x: -0.0901, y: -0.0346, z: 1.6845, name: 'Node 30', datetime: '2020-11-09 02:00:00' },
                    ]
            },
            
            {
            type: 'bubble',
            showInLegend: true,
            legendText: '{name}',
            legendMarkerType: 'circle',
            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                    dataPoints: [
                    { x: -0.0322, y: 0.0779, z: 1.4712, name: 'Node 40', datetime: '2020-11-09 02:00:00' },
                    ]
            },
            
            {
            type: 'bubble',
            showInLegend: true,
            legendText: '{name}',
            legendMarkerType: 'circle',
            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                    dataPoints: [
                    { x: -0.1071, y: -0.0462, z: 2.0358, name: 'Node 50', datetime: '2020-11-09 02:00:00' },
                    ]
            },
            
            {
            type: 'bubble',
            showInLegend: true,
            legendText: '{name}',
            legendMarkerType: 'circle',
            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                    dataPoints: [
                    { x: 0.0216, y: 0.0288, z: 0.6283, name: 'Node 60', datetime: '2020-11-09 10:00:00' },
                    ]
            },
            
            {
            type: 'bubble',
            showInLegend: true,
            legendText: '{name}',
            legendMarkerType: 'circle',
            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                    dataPoints: [
                    { x: -0.0193, y: 0.0358, z: 0.7098, name: 'Node 61', datetime: '2020-11-09 06:00:00' },
                    ]
            },
            
            {
            type: 'bubble',
            showInLegend: true,
            legendText: '{name}',
            legendMarkerType: 'circle',
            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                    dataPoints: [
                    { x: -0.0214, y: 0.0225, z: 0.542, name: 'Node 70', datetime: '2020-11-09 02:00:00' },
                    ]
            },
            
            {
            type: 'bubble',
            showInLegend: true,
            legendText: '{name}',
            legendMarkerType: 'circle',
            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                    dataPoints: [
                    { x: -0.1427, y: -0.0647, z: 2.7346, name: 'Node 80', datetime: '2020-11-09 02:00:00' },
                    ]
            },
                ]
});
chart.render();
var chart = new CanvasJS.Chart("chart2", 
	{
    colorSet: "customColorSet",
    animationEnabled: true,  
    exportEnabled: true,
    zoomEnabled: true, 


	title:{
        text: "Total Movements (mm/m)",
        fontWeight: "bold",
        fontFamily: "arial",
        fontSize: 20   
	},

	subtitles:[
        {
		text: "[ 1 DAY ]",
        fontWeight: "normal",
        fontFamily: "arial",
        fontSize: 15
        }
        ], 


	axisY: {
		title: "Movements (mm/m)",
		// valueFormatString: "#0,,.",
		// suffix: "mn",
		// stripLines: [{
		// 	value: 3366500,
		// 	label: "Average"
		// }]
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
		shared: false,
		content: "{name}<br/>DateTime: {label}</br>Movement: {y} mm/m"
	},
	legend:{
		cursor:"pointer",
            itemclick: function (e) {
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
    type: "line",
    name: "Node 10",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0.7 },{ label: "2020-11-09 03:00:00", y: 0.8 },{ label: "2020-11-09 04:00:00", y: 0.8 },{ label: "2020-11-09 05:00:00", y: 0.8 },{ label: "2020-11-09 06:00:00", y: 0.8 },{ label: "2020-11-09 07:00:00", y: 0.8 },{ label: "2020-11-09 08:00:00", y: 0.9 },{ label: "2020-11-09 09:00:00", y: 1 },{ label: "2020-11-09 10:00:00", y: 1 },{ label: "2020-11-09 11:00:00", y: 0.8 },{ label: "2020-11-09 12:00:00", y: 0.8 },{ label: "2020-11-09 13:00:00", y: 0.8 },{ label: "2020-11-09 14:00:00", y: 0.9 },{ label: "2020-11-09 15:00:00", y: 0.9 },{ label: "2020-11-09 16:00:00", y: 0.9 },{ label: "2020-11-09 17:00:00", y: 0.9 },{ label: "2020-11-09 18:00:00", y: 0.9 },{ label: "2020-11-09 19:00:00", y: 0.9 },{ label: "2020-11-09 20:00:00", y: 0.8 },{ label: "2020-11-09 21:00:00", y: 0.8 },{ label: "2020-11-09 22:00:00", y: 0.8 },{ label: "2020-11-09 23:00:00", y: 0.8 },{ label: "2020-11-10 00:00:00", y: 0.8 },{ label: "2020-11-10 01:00:00", y: 0.8 },
    ]
    },
    
    {
    type: "line",
    name: "Node 20",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0.6 },{ label: "2020-11-09 03:00:00", y: 0.6 },{ label: "2020-11-09 04:00:00", y: 0.6 },{ label: "2020-11-09 05:00:00", y: 0.6 },{ label: "2020-11-09 06:00:00", y: 0.6 },{ label: "2020-11-09 07:00:00", y: 0.6 },{ label: "2020-11-09 08:00:00", y: 0.5 },{ label: "2020-11-09 09:00:00", y: 0.5 },{ label: "2020-11-09 10:00:00", y: 0.4 },{ label: "2020-11-09 11:00:00", y: 0.5 },{ label: "2020-11-09 12:00:00", y: 0.5 },{ label: "2020-11-09 13:00:00", y: 0.5 },{ label: "2020-11-09 14:00:00", y: 0.5 },{ label: "2020-11-09 15:00:00", y: 0.5 },{ label: "2020-11-09 16:00:00", y: 0.5 },{ label: "2020-11-09 17:00:00", y: 0.5 },{ label: "2020-11-09 18:00:00", y: 0.5 },{ label: "2020-11-09 19:00:00", y: 0.5 },{ label: "2020-11-09 20:00:00", y: 0.5 },{ label: "2020-11-09 21:00:00", y: 0.5 },{ label: "2020-11-09 22:00:00", y: 0.5 },{ label: "2020-11-09 23:00:00", y: 0.5 },{ label: "2020-11-10 00:00:00", y: 0.5 },{ label: "2020-11-10 01:00:00", y: 0.5 },
    ]
    },
    
    {
    type: "line",
    name: "Node 21",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 1.1 },{ label: "2020-11-09 03:00:00", y: 1 },{ label: "2020-11-09 04:00:00", y: 1 },{ label: "2020-11-09 05:00:00", y: 0.9 },{ label: "2020-11-09 06:00:00", y: 0.9 },{ label: "2020-11-09 07:00:00", y: 0.9 },{ label: "2020-11-09 08:00:00", y: 0.7 },{ label: "2020-11-09 09:00:00", y: 0.4 },{ label: "2020-11-09 10:00:00", y: 0.3 },{ label: "2020-11-09 11:00:00", y: 0.4 },{ label: "2020-11-09 12:00:00", y: 0.6 },{ label: "2020-11-09 13:00:00", y: 0.8 },{ label: "2020-11-09 14:00:00", y: 0.5 },{ label: "2020-11-09 15:00:00", y: 0.5 },{ label: "2020-11-09 16:00:00", y: 0.3 },{ label: "2020-11-09 17:00:00", y: 0.3 },{ label: "2020-11-09 18:00:00", y: 0.3 },{ label: "2020-11-09 19:00:00", y: 0.5 },{ label: "2020-11-09 20:00:00", y: 0.7 },{ label: "2020-11-09 21:00:00", y: 0.7 },{ label: "2020-11-09 22:00:00", y: 0.7 },{ label: "2020-11-09 23:00:00", y: 0.7 },{ label: "2020-11-10 00:00:00", y: 0.7 },{ label: "2020-11-10 01:00:00", y: 0.8 },
    ]
    },
    
    {
    type: "line",
    name: "Node 30",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 1.7 },{ label: "2020-11-09 03:00:00", y: 1.7 },{ label: "2020-11-09 04:00:00", y: 1.7 },{ label: "2020-11-09 05:00:00", y: 1.7 },{ label: "2020-11-09 06:00:00", y: 1.6 },{ label: "2020-11-09 07:00:00", y: 1.6 },{ label: "2020-11-09 08:00:00", y: 1.5 },{ label: "2020-11-09 09:00:00", y: 1.4 },{ label: "2020-11-09 10:00:00", y: 1 },{ label: "2020-11-09 11:00:00", y: 1.4 },{ label: "2020-11-09 12:00:00", y: 1.4 },{ label: "2020-11-09 13:00:00", y: 1.5 },{ label: "2020-11-09 14:00:00", y: 1.4 },{ label: "2020-11-09 15:00:00", y: 1.4 },{ label: "2020-11-09 16:00:00", y: 1.4 },{ label: "2020-11-09 17:00:00", y: 1.4 },{ label: "2020-11-09 18:00:00", y: 1.3 },{ label: "2020-11-09 19:00:00", y: 1.4 },{ label: "2020-11-09 20:00:00", y: 1.5 },{ label: "2020-11-09 21:00:00", y: 1.5 },{ label: "2020-11-09 22:00:00", y: 1.5 },{ label: "2020-11-09 23:00:00", y: 1.5 },{ label: "2020-11-10 00:00:00", y: 1.5 },{ label: "2020-11-10 01:00:00", y: 1.5 },
    ]
    },
    
    {
    type: "line",
    name: "Node 40",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 1.5 },{ label: "2020-11-09 03:00:00", y: 1.5 },{ label: "2020-11-09 04:00:00", y: 1.4 },{ label: "2020-11-09 05:00:00", y: 1.4 },{ label: "2020-11-09 06:00:00", y: 1.4 },{ label: "2020-11-09 07:00:00", y: 1.4 },{ label: "2020-11-09 08:00:00", y: 1.3 },{ label: "2020-11-09 09:00:00", y: 1.2 },{ label: "2020-11-09 10:00:00", y: 0.9 },{ label: "2020-11-09 11:00:00", y: 1.3 },{ label: "2020-11-09 12:00:00", y: 1.3 },{ label: "2020-11-09 13:00:00", y: 1.3 },{ label: "2020-11-09 14:00:00", y: 1.3 },{ label: "2020-11-09 15:00:00", y: 1.3 },{ label: "2020-11-09 16:00:00", y: 1.2 },{ label: "2020-11-09 17:00:00", y: 1.2 },{ label: "2020-11-09 18:00:00", y: 1.2 },{ label: "2020-11-09 19:00:00", y: 1.3 },{ label: "2020-11-09 20:00:00", y: 1.3 },{ label: "2020-11-09 21:00:00", y: 1.3 },{ label: "2020-11-09 22:00:00", y: 1.3 },{ label: "2020-11-09 23:00:00", y: 1.3 },{ label: "2020-11-10 00:00:00", y: 1.3 },{ label: "2020-11-10 01:00:00", y: 1.3 },
    ]
    },
    
    {
    type: "line",
    name: "Node 50",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 2 },{ label: "2020-11-09 03:00:00", y: 2 },{ label: "2020-11-09 04:00:00", y: 2 },{ label: "2020-11-09 05:00:00", y: 2 },{ label: "2020-11-09 06:00:00", y: 1.9 },{ label: "2020-11-09 07:00:00", y: 2 },{ label: "2020-11-09 08:00:00", y: 1.8 },{ label: "2020-11-09 09:00:00", y: 1.6 },{ label: "2020-11-09 10:00:00", y: 1.2 },{ label: "2020-11-09 11:00:00", y: 1.6 },{ label: "2020-11-09 12:00:00", y: 1.8 },{ label: "2020-11-09 13:00:00", y: 1.8 },{ label: "2020-11-09 14:00:00", y: 1.7 },{ label: "2020-11-09 15:00:00", y: 1.8 },{ label: "2020-11-09 16:00:00", y: 1.7 },{ label: "2020-11-09 17:00:00", y: 1.7 },{ label: "2020-11-09 18:00:00", y: 1.7 },{ label: "2020-11-09 19:00:00", y: 1.8 },{ label: "2020-11-09 20:00:00", y: 1.9 },{ label: "2020-11-09 21:00:00", y: 2 },{ label: "2020-11-09 22:00:00", y: 2 },{ label: "2020-11-09 23:00:00", y: 2 },{ label: "2020-11-10 00:00:00", y: 2 },{ label: "2020-11-10 01:00:00", y: 2 },
    ]
    },
    
    {
    type: "line",
    name: "Node 60",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0.4 },{ label: "2020-11-09 03:00:00", y: 0.4 },{ label: "2020-11-09 04:00:00", y: 0.4 },{ label: "2020-11-09 05:00:00", y: 0.5 },{ label: "2020-11-09 06:00:00", y: 0.5 },{ label: "2020-11-09 07:00:00", y: 0.5 },{ label: "2020-11-09 08:00:00", y: 0.4 },{ label: "2020-11-09 09:00:00", y: 0.5 },{ label: "2020-11-09 10:00:00", y: 0.6 },{ label: "2020-11-09 11:00:00", y: 0.6 },{ label: "2020-11-09 12:00:00", y: 0.5 },{ label: "2020-11-09 13:00:00", y: 0.5 },{ label: "2020-11-09 14:00:00", y: 0.6 },{ label: "2020-11-09 15:00:00", y: 0.6 },{ label: "2020-11-09 16:00:00", y: 0.6 },{ label: "2020-11-09 17:00:00", y: 0.6 },{ label: "2020-11-09 18:00:00", y: 0.6 },{ label: "2020-11-09 19:00:00", y: 0.6 },{ label: "2020-11-09 20:00:00", y: 0.5 },{ label: "2020-11-09 21:00:00", y: 0.5 },{ label: "2020-11-09 22:00:00", y: 0.5 },{ label: "2020-11-09 23:00:00", y: 0.5 },{ label: "2020-11-10 00:00:00", y: 0.5 },{ label: "2020-11-10 01:00:00", y: 0.5 },
    ]
    },
    
    {
    type: "line",
    name: "Node 61",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0.7 },{ label: "2020-11-09 03:00:00", y: 0.7 },{ label: "2020-11-09 04:00:00", y: 0.7 },{ label: "2020-11-09 05:00:00", y: 0.7 },{ label: "2020-11-09 06:00:00", y: 0.7 },{ label: "2020-11-09 07:00:00", y: 0.7 },{ label: "2020-11-09 08:00:00", y: 0.7 },{ label: "2020-11-09 09:00:00", y: 0.7 },{ label: "2020-11-09 10:00:00", y: 0.7 },{ label: "2020-11-09 11:00:00", y: 0.7 },{ label: "2020-11-09 12:00:00", y: 0.7 },{ label: "2020-11-09 13:00:00", y: 0.7 },{ label: "2020-11-09 14:00:00", y: 0.6 },{ label: "2020-11-09 15:00:00", y: 0.7 },{ label: "2020-11-09 16:00:00", y: 0.6 },{ label: "2020-11-09 17:00:00", y: 0.6 },{ label: "2020-11-09 18:00:00", y: 0.7 },{ label: "2020-11-09 19:00:00", y: 0.7 },{ label: "2020-11-09 20:00:00", y: 0.7 },{ label: "2020-11-09 21:00:00", y: 0.7 },{ label: "2020-11-09 22:00:00", y: 0.7 },{ label: "2020-11-09 23:00:00", y: 0.7 },{ label: "2020-11-10 00:00:00", y: 0.7 },{ label: "2020-11-10 01:00:00", y: 0.7 },
    ]
    },
    
    {
    type: "line",
    name: "Node 70",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0.5 },{ label: "2020-11-09 03:00:00", y: 0.5 },{ label: "2020-11-09 04:00:00", y: 0.5 },{ label: "2020-11-09 05:00:00", y: 0.5 },{ label: "2020-11-09 06:00:00", y: 0.5 },{ label: "2020-11-09 07:00:00", y: 0.5 },{ label: "2020-11-09 08:00:00", y: 0.4 },{ label: "2020-11-09 09:00:00", y: 0.3 },{ label: "2020-11-09 10:00:00", y: 0.1 },{ label: "2020-11-09 11:00:00", y: 0.3 },{ label: "2020-11-09 12:00:00", y: 0.4 },{ label: "2020-11-09 13:00:00", y: 0.4 },{ label: "2020-11-09 14:00:00", y: 0.3 },{ label: "2020-11-09 15:00:00", y: 0.4 },{ label: "2020-11-09 16:00:00", y: 0.4 },{ label: "2020-11-09 17:00:00", y: 0.4 },{ label: "2020-11-09 18:00:00", y: 0.4 },{ label: "2020-11-09 19:00:00", y: 0.4 },{ label: "2020-11-09 20:00:00", y: 0.5 },{ label: "2020-11-09 21:00:00", y: 0.5 },{ label: "2020-11-09 22:00:00", y: 0.5 },{ label: "2020-11-09 23:00:00", y: 0.5 },{ label: "2020-11-10 00:00:00", y: 0.5 },{ label: "2020-11-10 01:00:00", y: 0.5 },
    ]
    },
    
    {
    type: "line",
    name: "Node 80",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 2.7 },{ label: "2020-11-09 03:00:00", y: 2.7 },{ label: "2020-11-09 04:00:00", y: 2.7 },{ label: "2020-11-09 05:00:00", y: 2.7 },{ label: "2020-11-09 06:00:00", y: 2.6 },{ label: "2020-11-09 07:00:00", y: 2.7 },{ label: "2020-11-09 08:00:00", y: 2.5 },{ label: "2020-11-09 09:00:00", y: 2.2 },{ label: "2020-11-09 10:00:00", y: 1.6 },{ label: "2020-11-09 11:00:00", y: 2.2 },{ label: "2020-11-09 12:00:00", y: 2.4 },{ label: "2020-11-09 13:00:00", y: 2.4 },{ label: "2020-11-09 14:00:00", y: 2.2 },{ label: "2020-11-09 15:00:00", y: 2.2 },{ label: "2020-11-09 16:00:00", y: 2.1 },{ label: "2020-11-09 17:00:00", y: 2.2 },{ label: "2020-11-09 18:00:00", y: 2.1 },{ label: "2020-11-09 19:00:00", y: 2.3 },{ label: "2020-11-09 20:00:00", y: 2.5 },{ label: "2020-11-09 21:00:00", y: 2.5 },{ label: "2020-11-09 22:00:00", y: 2.5 },{ label: "2020-11-09 23:00:00", y: 2.5 },{ label: "2020-11-10 00:00:00", y: 2.5 },{ label: "2020-11-10 01:00:00", y: 2.5 },
    ]
    },
    	]
});
chart.render();

var chart = new CanvasJS.Chart("chart3", 
	{
    colorSet: "customColorSet",
    animationEnabled: true,  
    exportEnabled: true,
    zoomEnabled: true, 


	title:{
        text: "Axis A Angle Variations (Degree)",
        fontWeight: "bold",
        fontFamily: "arial",
        fontSize: 20   
	},

	subtitles:[
        {
		text: "[ 1 DAY ]",
        fontWeight: "normal",
        fontFamily: "arial",
        fontSize: 15
        }
        ], 


	axisY: {
		title: "Movements (Degree)",
		// valueFormatString: "#0,,.",
		// suffix: "mn",
		// stripLines: [{
		// 	value: 3366500,
		// 	label: "Average"
		// }]
		titleFontSize: 15,
		gridThickness: 0.3,
        maximum: 3,
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
		shared: false,
		content: "{name}<br/>DateTime: {label}</br>Axis A Variation: {y} degree"
	},
	legend:{
		cursor:"pointer",
            itemclick: function (e) {
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
    type: "line",
    name: "Node 10",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 20",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 21",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 30",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0.1 },{ label: "2020-11-09 03:00:00", y: 0.1 },{ label: "2020-11-09 04:00:00", y: 0.1 },{ label: "2020-11-09 05:00:00", y: 0.1 },{ label: "2020-11-09 06:00:00", y: 0.1 },{ label: "2020-11-09 07:00:00", y: 0.1 },{ label: "2020-11-09 08:00:00", y: 0.1 },{ label: "2020-11-09 09:00:00", y: 0.1 },{ label: "2020-11-09 10:00:00", y: 0.1 },{ label: "2020-11-09 11:00:00", y: 0.1 },{ label: "2020-11-09 12:00:00", y: 0.1 },{ label: "2020-11-09 13:00:00", y: 0.1 },{ label: "2020-11-09 14:00:00", y: 0.1 },{ label: "2020-11-09 15:00:00", y: 0.1 },{ label: "2020-11-09 16:00:00", y: 0.1 },{ label: "2020-11-09 17:00:00", y: 0.1 },{ label: "2020-11-09 18:00:00", y: 0.1 },{ label: "2020-11-09 19:00:00", y: 0.1 },{ label: "2020-11-09 20:00:00", y: 0.1 },{ label: "2020-11-09 21:00:00", y: 0.1 },{ label: "2020-11-09 22:00:00", y: 0.1 },{ label: "2020-11-09 23:00:00", y: 0.1 },{ label: "2020-11-10 00:00:00", y: 0.1 },{ label: "2020-11-10 01:00:00", y: 0.1 },
    ]
    },
    
    {
    type: "line",
    name: "Node 40",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 50",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0.1 },{ label: "2020-11-09 03:00:00", y: 0.1 },{ label: "2020-11-09 04:00:00", y: 0.1 },{ label: "2020-11-09 05:00:00", y: 0.1 },{ label: "2020-11-09 06:00:00", y: 0.1 },{ label: "2020-11-09 07:00:00", y: 0.1 },{ label: "2020-11-09 08:00:00", y: 0.1 },{ label: "2020-11-09 09:00:00", y: 0.1 },{ label: "2020-11-09 10:00:00", y: 0.1 },{ label: "2020-11-09 11:00:00", y: 0.1 },{ label: "2020-11-09 12:00:00", y: 0.1 },{ label: "2020-11-09 13:00:00", y: 0.1 },{ label: "2020-11-09 14:00:00", y: 0.1 },{ label: "2020-11-09 15:00:00", y: 0.1 },{ label: "2020-11-09 16:00:00", y: 0.1 },{ label: "2020-11-09 17:00:00", y: 0.1 },{ label: "2020-11-09 18:00:00", y: 0.1 },{ label: "2020-11-09 19:00:00", y: 0.1 },{ label: "2020-11-09 20:00:00", y: 0.1 },{ label: "2020-11-09 21:00:00", y: 0.1 },{ label: "2020-11-09 22:00:00", y: 0.1 },{ label: "2020-11-09 23:00:00", y: 0.1 },{ label: "2020-11-10 00:00:00", y: 0.1 },{ label: "2020-11-10 01:00:00", y: 0.1 },
    ]
    },
    
    {
    type: "line",
    name: "Node 60",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 61",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 70",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 80",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0.1 },{ label: "2020-11-09 03:00:00", y: 0.1 },{ label: "2020-11-09 04:00:00", y: 0.1 },{ label: "2020-11-09 05:00:00", y: 0.1 },{ label: "2020-11-09 06:00:00", y: 0.1 },{ label: "2020-11-09 07:00:00", y: 0.1 },{ label: "2020-11-09 08:00:00", y: 0.1 },{ label: "2020-11-09 09:00:00", y: 0.1 },{ label: "2020-11-09 10:00:00", y: 0.1 },{ label: "2020-11-09 11:00:00", y: 0.1 },{ label: "2020-11-09 12:00:00", y: 0.1 },{ label: "2020-11-09 13:00:00", y: 0.1 },{ label: "2020-11-09 14:00:00", y: 0.1 },{ label: "2020-11-09 15:00:00", y: 0.1 },{ label: "2020-11-09 16:00:00", y: 0.1 },{ label: "2020-11-09 17:00:00", y: 0.1 },{ label: "2020-11-09 18:00:00", y: 0.1 },{ label: "2020-11-09 19:00:00", y: 0.1 },{ label: "2020-11-09 20:00:00", y: 0.1 },{ label: "2020-11-09 21:00:00", y: 0.1 },{ label: "2020-11-09 22:00:00", y: 0.1 },{ label: "2020-11-09 23:00:00", y: 0.1 },{ label: "2020-11-10 00:00:00", y: 0.1 },{ label: "2020-11-10 01:00:00", y: 0.1 },
    ]
    },
    	]
});
chart.render();

var chart = new CanvasJS.Chart("chart4", 
	{
    colorSet: "customColorSet",
    animationEnabled: true,  
    exportEnabled: true,
    zoomEnabled: true, 


	title:{
        text: "Axis B Angle Variations (Degree)",
        fontWeight: "bold",
        fontFamily: "arial",
        fontSize: 20   
	},

	subtitles:[
        {
		text: "[ 1 DAY ]",
        fontWeight: "normal",
        fontFamily: "arial",
        fontSize: 15
        }
        ], 


	axisY: {
        title: "Movements (Degree)",
        titleFontSize: 15,
        gridThickness: 0.3,
        maximum: 3,
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
		shared: false,
		content: "<b>{name}</b><br/>DateTime: {label}<br/>Axis B Variation: {y} degree<br/>"
	},
	legend: {
            cursor: "pointer",
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
    type: "line",
    name: "Node 10",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0.1 },{ label: "2020-11-09 09:00:00", y: 0.1 },{ label: "2020-11-09 10:00:00", y: 0.1 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0.1 },{ label: "2020-11-09 17:00:00", y: 0.1 },{ label: "2020-11-09 18:00:00", y: 0.1 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 20",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 21",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0.1 },{ label: "2020-11-09 03:00:00", y: 0.1 },{ label: "2020-11-09 04:00:00", y: 0.1 },{ label: "2020-11-09 05:00:00", y: 0.1 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 30",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 40",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0.1 },{ label: "2020-11-09 03:00:00", y: 0.1 },{ label: "2020-11-09 04:00:00", y: 0.1 },{ label: "2020-11-09 05:00:00", y: 0.1 },{ label: "2020-11-09 06:00:00", y: 0.1 },{ label: "2020-11-09 07:00:00", y: 0.1 },{ label: "2020-11-09 08:00:00", y: 0.1 },{ label: "2020-11-09 09:00:00", y: 0.1 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0.1 },{ label: "2020-11-09 12:00:00", y: 0.1 },{ label: "2020-11-09 13:00:00", y: 0.1 },{ label: "2020-11-09 14:00:00", y: 0.1 },{ label: "2020-11-09 15:00:00", y: 0.1 },{ label: "2020-11-09 16:00:00", y: 0.1 },{ label: "2020-11-09 17:00:00", y: 0.1 },{ label: "2020-11-09 18:00:00", y: 0.1 },{ label: "2020-11-09 19:00:00", y: 0.1 },{ label: "2020-11-09 20:00:00", y: 0.1 },{ label: "2020-11-09 21:00:00", y: 0.1 },{ label: "2020-11-09 22:00:00", y: 0.1 },{ label: "2020-11-09 23:00:00", y: 0.1 },{ label: "2020-11-10 00:00:00", y: 0.1 },{ label: "2020-11-10 01:00:00", y: 0.1 },
    ]
    },
    
    {
    type: "line",
    name: "Node 50",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0.1 },{ label: "2020-11-09 21:00:00", y: 0.1 },{ label: "2020-11-09 22:00:00", y: 0.1 },{ label: "2020-11-09 23:00:00", y: 0.1 },{ label: "2020-11-10 00:00:00", y: 0.1 },{ label: "2020-11-10 01:00:00", y: 0.1 },
    ]
    },
    
    {
    type: "line",
    name: "Node 60",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 61",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 70",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0 },{ label: "2020-11-09 03:00:00", y: 0 },{ label: "2020-11-09 04:00:00", y: 0 },{ label: "2020-11-09 05:00:00", y: 0 },{ label: "2020-11-09 06:00:00", y: 0 },{ label: "2020-11-09 07:00:00", y: 0 },{ label: "2020-11-09 08:00:00", y: 0 },{ label: "2020-11-09 09:00:00", y: 0 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0 },{ label: "2020-11-09 12:00:00", y: 0 },{ label: "2020-11-09 13:00:00", y: 0 },{ label: "2020-11-09 14:00:00", y: 0 },{ label: "2020-11-09 15:00:00", y: 0 },{ label: "2020-11-09 16:00:00", y: 0 },{ label: "2020-11-09 17:00:00", y: 0 },{ label: "2020-11-09 18:00:00", y: 0 },{ label: "2020-11-09 19:00:00", y: 0 },{ label: "2020-11-09 20:00:00", y: 0 },{ label: "2020-11-09 21:00:00", y: 0 },{ label: "2020-11-09 22:00:00", y: 0 },{ label: "2020-11-09 23:00:00", y: 0 },{ label: "2020-11-10 00:00:00", y: 0 },{ label: "2020-11-10 01:00:00", y: 0 },
    ]
    },
    
    {
    type: "line",
    name: "Node 80",    
    showInLegend: true,
    dataPoints: [
    { label: "2020-11-09 02:00:00", y: 0.1 },{ label: "2020-11-09 03:00:00", y: 0.1 },{ label: "2020-11-09 04:00:00", y: 0.1 },{ label: "2020-11-09 05:00:00", y: 0.1 },{ label: "2020-11-09 06:00:00", y: 0.1 },{ label: "2020-11-09 07:00:00", y: 0.1 },{ label: "2020-11-09 08:00:00", y: 0.1 },{ label: "2020-11-09 09:00:00", y: 0.1 },{ label: "2020-11-09 10:00:00", y: 0 },{ label: "2020-11-09 11:00:00", y: 0.1 },{ label: "2020-11-09 12:00:00", y: 0.1 },{ label: "2020-11-09 13:00:00", y: 0.1 },{ label: "2020-11-09 14:00:00", y: 0.1 },{ label: "2020-11-09 15:00:00", y: 0.1 },{ label: "2020-11-09 16:00:00", y: 0.1 },{ label: "2020-11-09 17:00:00", y: 0.1 },{ label: "2020-11-09 18:00:00", y: 0.1 },{ label: "2020-11-09 19:00:00", y: 0.1 },{ label: "2020-11-09 20:00:00", y: 0.1 },{ label: "2020-11-09 21:00:00", y: 0.1 },{ label: "2020-11-09 22:00:00", y: 0.1 },{ label: "2020-11-09 23:00:00", y: 0.1 },{ label: "2020-11-10 00:00:00", y: 0.1 },{ label: "2020-11-10 01:00:00", y: 0.1 },
    ]
    },
    	]
});
chart.render();

    }
    </script>

    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>    
</body>
</html>
                                <!--Chart 1 Total Move-->
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <h4 class="mbm" align="center"></h4>      
                                            <div align="center">
                                                <div id="chart1" style="height: 450px; width: 100%;">
                                                </div>        
                                            </div>    
                                        </div>
                                    </div>
                                </div>        
            
                                <!--Chart 2 Total Movements Chart-->    
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <h4 class="mbm" align="center"></h4> 
                                            <div align="center">
                                                <div id="chart2" style="height: 450px; width: 100%;">
                                                </div>        
                                            </div>    
                                        </div>
                                    </div>
                                </div>
            
                                <!--Chart 3 Axis A-->    
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <h4 class="mbm" align="center"></h4>  
                                            <div align="center">
                                                <div id="chart3" style="height: 450px; width: 100%;">
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                </div>

                                <!--Chart 4 Axis B-->   
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <h4 class="mbm" align="center"></h4>         
                                            <div align="center">
                                                <div id="chart4" style="height: 450px; width: 100%;">
                                                </div>    
                                            </div>
                                        </div>
                                    </div>        
                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end page-content -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row mbl -->
            </div>
            <!-- end tab-general -->
        </div>
        <!--END CONTENT-->
    </div>
    <!--End Main-->
    <!--BEGIN FOOTER-->
    <div id="footer">
    <div class="copyright">
        <a href="" target="_blank" style="color:#999999; text-decoration:none;">2020 © Powered by Bahagian Kejuruteraan Cerun, JKR</a>
    </div>
</div>
    <!--END FOOTER-->
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