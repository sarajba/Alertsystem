<?php
/*
********************** Resources *******************

https://dev.mysql.com/doc/refman/8.0/en/date-and-time-functions.html

https://stackoverflow.com/questions/15633653/mysql-date-subnow-interval-1-day-24-hours-or-weekday

http://sqlfiddle.com/#!9/823380e/8

*/

// initialize the session
session_start();

// check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
$connect = mysqli_connect("localhost", "root", "", "geoalertsystem");

$id = $_GET['nodeID'];
$getNode = "
SELECT * FROM `node_$id`
WHERE Date_and_time BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 8 DAY)) AND DATE(NOW())
ORDER BY Date_and_time DESC;
    ";


$DateTime = [];
$Avariation = [];
$Bvariation = [];
$Aaxix= [];
// Run the query
$query = $connect->query($getNode);
foreach ($query as $data) // using foreach  to display each element of array
{
    if ($id == 10) {
        $dt = $data['Date_and_time'];
        $av = $data['AaxisVariation_10_Ch1'];
        $bv = $data['BaxisVariation_10_Ch1'];
        $aaxix= $data['Aaxix_10_Ch1'];
        array_push($DateTime, $dt);
        array_push($Avariation, $av);
        array_push($Bvariation, $bv);
        array_push($Aaxix, $aaxix);

    }
    if ($id == 20) {
        $dt = $data['Date_and_time'];
        $av = $data['AaxisVariation_20_Ch1'];
        $bv = $data['BaxisVariation_20_Ch1'];
        array_push($DateTime, $dt);
        array_push($Avariation, $av);
        array_push($Bvariation, $bv);
    }
    if ($id == 21) {
        $dt = $data['Date_and_time'];
        $av = $data['AaxisVariation_21_Ch1'];
        $bv = $data['BaxisVariation_21_Ch1'];
        array_push($DateTime, $dt);
        array_push($Avariation, $av);
        array_push($Bvariation, $bv);
    }
    if ($id == 30) {
        $dt = $data['Date_and_time'];
        $av = $data['AaxisVariation_30_Ch1'];
        $bv = $data['BaxisVariation_30_Ch1'];
        array_push($DateTime, $dt);
        array_push($Avariation, $av);
        array_push($Bvariation, $bv);
    }
    if ($id == 40) {
        $dt = $data['Date_and_time'];
        $av = $data['AaxisVariation_40_Ch1'];
        $bv = $data['BaxisVariation_40_Ch1'];
        array_push($DateTime, $dt);
        array_push($Avariation, $av);
        array_push($Bvariation, $bv);
    }
    if ($id == 50) {
        $dt = $data['Date_and_time'];
        $av = $data['AaxisVariation_50_Ch1'];
        $bv = $data['BaxisVariation_50_Ch1'];
        array_push($DateTime, $dt);
        array_push($Avariation, $av);
        array_push($Bvariation, $bv);
    }
    if ($id == 60) {
        $dt = $data['Date_and_time'];
        $av = $data['AaxisVariation_60_Ch1'];
        $bv = $data['BaxisVariation_60_Ch1'];
        array_push($DateTime, $dt);
        array_push($Avariation, $av);
        array_push($Bvariation, $bv);
    }
    if ($id == 61) {
        $dt = $data['Date_and_time'];
        $av = $data['AaxisVariation_61_Ch1'];
        $bv = $data['BaxisVariation_61_Ch1'];
        array_push($DateTime, $dt);
        array_push($Avariation, $av);
        array_push($Bvariation, $bv);
    }
    if ($id == 70) {
        $dt = $data['Date_and_time'];
        $av = $data['AaxisVariation_70_Ch1'];
        $bv = $data['BaxisVariation_70_Ch1'];
        array_push($DateTime, $dt);
        array_push($Avariation, $av);
        array_push($Bvariation, $bv);
    }
    if ($id == 80) {
        $dt = $data['Date_and_time'];
        $av = $data['AaxisVariation_80_Ch1'];
        $bv = $data['BaxisVariation_80_Ch1'];
        array_push($DateTime, $dt);
        array_push($Avariation, $av);
        array_push($Bvariation, $bv);
    }
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
            <div>
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">

                    <div class="page-header pull-left">
                        <div class="page-title">
                            Charts (week) Node ID:<?php echo $id ?>
                        </div>
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

                                    <a href="charts_d.php?nodeID=<?php echo $id ?>">Day</a>
                                    <a href="charts_w.php?nodeID=<?php echo $id ?>" class="active">Week</a>
                                    <a href="charts_m.php?nodeID=<?php echo $id ?>">Month</a>

                                </div>


                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                                <script>
                                    window.onload = function chartAngle() {


                                        // **********************************************************       NEW JS       ******************************************************************************



                                        var dateTime = <?php echo json_encode(array_values($DateTime)); ?>;
                                        var aVar = <?php echo json_encode(array_values($Avariation)); ?>;
                                        // this how u should change it
                                        var bVar = <?php echo json_encode(array_values($Bvariation)); ?>;
                                        var aAxix = <?php echo json_encode(array_values($Aaxix)); ?>;

                                        var dps = []; //dataPoints. 
                                        var dpsbv = []; //data point for b variation
                                        var aaAxix=[]; // here we will add total movement
                                        var chart = new CanvasJS.Chart("chartContainer_w", {
                                            title: {
                                                text: "Hourly Readings: Axis Movements(Degree)"
                                            },
                                            axisX: {
                                                // title: "Axis A Axis B",
                                                titleFontColor: "#4F81BC",
                                                lineColor: "#4F81BC",
                                                //labelFontColor: "#4F81BC",
                                                tickColor: "#4F81BC"
                                            },
                                            axisY: {
                                                title: "Movements(Degree)"
                                            },
                                            data: [{
                                                type: "line",
                                                name: "A variation",
                                                markerSize: 0,
                                                toolTipContent: "Avar: {x}<br>{name}: {y} ",
                                                showInLegend: true,
                                                dataPoints: dps
                                            }, {
                                                type: "line",
                                                axisYType: "secondary",
                                                name: "B Variation",
                                                markerSize: 0,
                                                toolTipContent: "Bvar: {x}<br>{name}: {y}",
                                                showInLegend: true,
                                                dataPoints: dpsbv
                                            }]
                                        });


                                        function parseDataPoints() {
                                            for (var i = dps.length; i < dateTime.length; i++) {
                                                dps.push({
                                                    x: new Date(dateTime[i]),
                                                    y: parseFloat(aVar[i])
                                                });
                                                dpsbv.push({
                                                    x: new Date(dateTime[i]),
                                                    y: parseFloat(bVar[i])
                                                });
                                                aaAxix.push({
                                                    x: new Date(dateTime[i]),
                                                    y: parseFloat(aAxix[i])
                                                });

                                            }
                                        };

                                        function addDataPoints() {
                                            parseDataPoints();
                                            chart.options.data[0].dataPoints = dps;
                                            chart.render();
                                        }
                                        addDataPoints();
                                        chart.render();
                                        // ******************************************************8 grpah 2 *****************************

                                        var chart = new CanvasJS.Chart("chartContainer_withTotalm", {
                                            title: {
                                                text: "Hourly Readings: Axis Movements(MM/M)"
                                            },
                                            axisX: {
                                                // title: "Axis A Axis B",
                                                titleFontColor: "#4F81BC",
                                                lineColor: "#4F81BC",
                                                //labelFontColor: "#4F81BC",
                                                tickColor: "#4F81BC"
                                            },
                                            axisY: {
                                                title: "Movements(mm/m)"
                                            },
                                            data: [{
                                                type: "line",
                                                name: "A variation",
                                                markerSize: 0,
                                                toolTipContent: "Avar: {x}<br>{name}: {y} ",
                                                showInLegend: true,
                                                dataPoints: dps
                                            }, {
                                                type: "line",
                                                axisYType: "secondary",
                                                name: "B Variation",
                                                markerSize: 0,
                                                toolTipContent: "Bvar: {x}<br>{name}: {y}",
                                                showInLegend: true,
                                                dataPoints: dpsbv
                                            },
                                            {
                                                type: "line",
                                                axisYType: "secondary",
                                                name: "Total Movement",
                                                markerSize: 0,
                                                toolTipContent: "Bvar: {x}<br>{name}: {y}",
                                                showInLegend: true,
                                                dataPoints: aaAxix
                                            }]
                                        });

                                        addDataPoints();
                                        chart.render();

                                        // ****************************************************************************************************************************************

                                        var chart = new CanvasJS.Chart("chartContainerPie", {
                                            title: {
                                                text: "Alarm Statistics"
                                            },
                                            data: [{
                                                type: "pie",
                                                startAngle: 25,
                                                toolTipContent: "<b>{label}</b>: {y}%",
                                                showInLegend: "true",
                                                legendText: "{label}",
                                                indexLabelFontSize: 16,
                                                indexLabel: "{label} - {y}%",
                                                dataPoints: [{
                                                        y: 51.08,
                                                        label: "Normal"
                                                    },
                                                    {
                                                        y: 27.34,
                                                        label: "Advisory"
                                                    },
                                                    {
                                                        y: 10.62,
                                                        label: "Watch"
                                                    },
                                                    {
                                                        y: 5.02,
                                                        label: "Danger"
                                                    },
                                                  
                                                ]
                                            }]
                                        });
                                        addDataPoints();
                                        chart.render();


                                        //BEGIN CHART ANGLE    


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
                                    <div id="chartContainer_w" style="height: 450px; width: 100%;"> </div>

                                        <!-- <div class="portlet box">
                                            <div class="portlet-header">
                                                <div class="caption">Axis Movements (Degree)</div>
                                                <div class="tools">
                                                    <a href="#top"><i class="fa fa-chevron-up"></i></a> </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div id="chartContainerAngle" style="height: 450px; width: 100%;"> </div>
                                            </div>
                                        </div> -->

                                        <!-- <div class="portlet box">
                                            <div class="portlet-header">
                                                <div class="caption">Axis Movements (mm/m)</div>
                                                <div class="tools">
                                                    <a href="#top"><i class="fa fa-chevron-up"></i></a>
                                                </div>
                                            </div>
                                            <div class="portlet-body" align="center">
                                                <div id="chartContainerMM" style="height: 450px; width: 100%;"> </div>
                                            </div>
                                        </div> -->
                                        <div id="chartContainer_withTotalm" style="height: 450px; width: 100%;"> </div>

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