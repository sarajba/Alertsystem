<?php
// initialize the session
session_start();

// check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$connect = mysqli_connect("localhost", "root", "", "geoalertsystem");

$id = 10;
$getNode = "
WITH tempnode AS ( 
    SELECT nodeId, Temp_10_Ch1 as tem, Aaxix_10_Ch1 as Aaxix,Baxix_10_Ch1 as Baxix, node_10.Date_and_time as cts 
    FROM node_10 
    UNION ALL 
    SELECT nodeId, Temp_20_Ch1 as tem ,Aaxix_20_Ch1 as Aaxix,Baxix_20_Ch1 as Baxix, node_20.Date_and_time as cts 
    FROM node_20 
    UNION ALL 
    SELECT nodeId, Temp_30_Ch1 as tem ,Aaxix_30_Ch1 as Aaxix,Baxix_30_Ch1 as Baxix, node_30.Date_and_time as cts 
    FROM node_30 
),
     latest AS ( 
         SELECT tempnode.*, ROW_NUMBER() OVER ( PARTITION BY tempnode.nodeId ORDER BY tempnode.cts DESC) myrank FROM tempnode ) 
         SELECT nodes.NodeId, tempnode.* 
         FROM nodes 
         LEFT JOIN latest as tempnode ON tempnode.nodeId = nodes.NodeID AND tempnode.myrank <= 30
          GROUP BY nodes.NodeID ORDER BY nodes.NodeID, tempnode.cts desc";

$DateTime10 = [];
$Avariation10 = [];
$Bvariation10 = [];
$totalMove10 = [];

$DateTime20 = [];
$Avariation20 = [];
$Bvariation20 = [];
$totalMove20 = [];

$DateTime21 = [];
$Avariation21 = [];
$Bvariation21 = [];
$totalMove21 = [];

$DateTime30 = [];
$Avariation30 = [];
$Bvariation30 = [];
$totalMove30 = [];

$DateTime40 = [];
$Avariation40 = [];
$Bvariation40 = [];
$totalMove40 = [];

$DateTime50 = [];
$Avariation50 = [];
$Bvariation50 = [];
$totalMove50 = [];

$DateTime60 = [];
$Avariation60 = [];
$Bvariation60 = [];
$totalMove60 = [];

$DateTime61 = [];
$Avariation61 = [];
$Bvariation61 = [];
$totalMove61 = [];

$DateTime70 = [];
$Avariation70 = [];
$Bvariation70 = [];
$totalMove70 = [];

$DateTime80 = [];
$Avariation80 = [];
$Bvariation80 = [];
$totalMove80 = [];


// Run the query
$query = $connect->query($getNode);
foreach ($query as $data) // using foreach  to display each element of array
{
    $myid = $data['NodeId'];
    if ($myid == 10) {
        $dt = $data['cts'];
        $av = $data['Aaxix'];
        $bv = $data['Baxix'];
        $axixAV = tan($av * 3.14 / 180) * 1000;
        $axixBV = tan($bv * 3.14 / 180) * 1000;
        $totalMov = sqrt($axixAV ** 2 + $axixBV ** 2);
        $roundOffIt = round($totalMov, 1, PHP_ROUND_HALF_ODD);
        array_push($DateTime10, $dt);
        array_push($Avariation10, $av);
        array_push($Bvariation10, $bv);
        array_push($totalMove10, $roundOffIt);
    }
    if ($myid == 20) {
        $dt = $data['cts'];
        $av = $data['Aaxix'];
        $bv = $data['Baxix'];
        $axixAV = tan($av * 3.14 / 180) * 1000;
        $axixBV = tan($bv * 3.14 / 180) * 1000;
        $totalMov = sqrt($axixAV ** 2 + $axixBV ** 2);
        $roundOffIt = round($totalMov, 1, PHP_ROUND_HALF_ODD);
        array_push($DateTime20, $dt);
        array_push($Avariation20, $av);
        array_push($Bvariation20, $bv);
        array_push($totalMove20, $roundOffIt);
    }
    if ($myid == 21) {
        $dt = $data['cts'];
        $av = $data['Aaxix'];
        $bv = $data['Baxix'];
        $axixAV = tan($av * 3.14 / 180) * 1000;
        $axixBV = tan($bv * 3.14 / 180) * 1000;
        $totalMov = sqrt($axixAV ** 2 + $axixBV ** 2);
        $roundOffIt = round($totalMov, 1, PHP_ROUND_HALF_ODD);
        array_push($DateTime21, $dt);
        array_push($Avariation21, $av);
        array_push($Bvariation21, $bv);
        array_push($totalMove21, $roundOffIt);
    }
    if ($myid == 30) {
        $dt = $data['cts'];
        $av = $data['Aaxix'];
        $bv = $data['Baxix'];
        $axixAV = tan($av * 3.14 / 180) * 1000;
        $axixBV = tan($bv * 3.14 / 180) * 1000;
        $totalMov = sqrt($axixAV ** 2 + $axixBV ** 2);
        $roundOffIt = round($totalMov, 1, PHP_ROUND_HALF_ODD);
        array_push($DateTime30, $dt);
        array_push($Avariation30, $av);
        array_push($Bvariation30, $bv);
        array_push($totalMove30, $roundOffIt);
    }
    if ($myid == 40) {
        $dt = $data['cts'];
        $av = $data['Aaxix'];
        $bv = $data['Baxix'];
        $axixAV = tan($av * 3.14 / 180) * 1000;
        $axixBV = tan($bv * 3.14 / 180) * 1000;
        $totalMov = sqrt($axixAV ** 2 + $axixBV ** 2);
        $roundOffIt = round($totalMov, 1, PHP_ROUND_HALF_ODD);
        array_push($DateTime40, $dt);
        array_push($Avariation40, $av);
        array_push($Bvariation40, $bv);
        array_push($totalMove40, $roundOffIt);
    }
    if ($myid == 50) {
        $dt = $data['cts'];
        $av = $data['Aaxix'];
        $bv = $data['Baxix'];
        $axixAV = tan($av * 3.14 / 180) * 1000;
        $axixBV = tan($bv * 3.14 / 180) * 1000;
        $totalMov = sqrt($axixAV ** 2 + $axixBV ** 2);
        $roundOffIt = round($totalMov, 1, PHP_ROUND_HALF_ODD);
        array_push($DateTime50, $dt);
        array_push($Avariation50, $av);
        array_push($Bvariation50, $bv);
        array_push($totalMove50, $roundOffIt);
    }
    if ($myid == 60) {
        $dt = $data['cts'];
        $av = $data['Aaxix'];
        $bv = $data['Baxix'];
        $axixAV = tan($av * 3.14 / 180) * 1000;
        $axixBV = tan($bv * 3.14 / 180) * 1000;
        $totalMov = sqrt($axixAV ** 2 + $axixBV ** 2);
        $roundOffIt = round($totalMov, 1, PHP_ROUND_HALF_ODD);
        array_push($DateTime60, $dt);
        array_push($Avariation60, $av);
        array_push($Bvariation60, $bv);
        array_push($totalMove60, $roundOffIt);
    }
    if ($myid == 61) {
        $dt = $data['cts'];
        $av = $data['Aaxix'];
        $bv = $data['Baxix'];
        $axixAV = tan($av * 3.14 / 180) * 1000;
        $axixBV = tan($bv * 3.14 / 180) * 1000;
        $totalMov = sqrt($axixAV ** 2 + $axixBV ** 2);
        $roundOffIt = round($totalMov, 1, PHP_ROUND_HALF_ODD);
        array_push($DateTime61, $dt);
        array_push($Avariation61, $av);
        array_push($Bvariation61, $bv);
        array_push($totalMove61, $roundOffIt);
    }
    if ($myid == 70) {
        $dt = $data['cts'];
        $av = $data['Aaxix'];
        $bv = $data['Baxix'];
        $axixAV = tan($av * 3.14 / 180) * 1000;
        $axixBV = tan($bv * 3.14 / 180) * 1000;
        $totalMov = sqrt($axixAV ** 2 + $axixBV ** 2);
        $roundOffIt = round($totalMov, 1, PHP_ROUND_HALF_ODD);
        array_push($DateTime70, $dt);
        array_push($Avariation70, $av);
        array_push($Bvariation70, $bv);
        array_push($totalMove70, $roundOffIt);
    }
    if ($myid == 80) {
        $dt = $data['cts'];
        $av = $data['Aaxix'];
        $bv = $data['Baxix'];
        $axixAV = tan($av * 3.14 / 180) * 1000;
        $axixBV = tan($bv * 3.14 / 180) * 1000;
        $totalMov = sqrt($axixAV ** 2 + $axixBV ** 2);
        $roundOffIt = round($totalMov, 1, PHP_ROUND_HALF_ODD);
        array_push($DateTime80, $dt);
        array_push($Avariation80, $av);
        array_push($Bvariation80, $bv);
        array_push($totalMove80, $roundOffIt);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Charts| MySTAR GeoAlert</title>
    <!-- Bootstrap -->

    <!-- add library -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>  -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->

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
                    <a target="_blank" href="/geoalertmanual.pdf" class="list-items"><i class="fa fa-life-ring fa-fw"></i>&nbsp; Manual</a>
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
                    canvas {
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
                                                    <div class="noprint">
                                                        <form action="/genchart.php" method="post" name="chartform">
                                                            <h3>Residence</h3><input type="checkbox" onClick="toggle_res(this)" /> Select All<br />
                                                            <label><input type="checkbox" name="10" value="10" class="residence"> Node 10&nbsp;&nbsp;
                                                            </label><label><input type="checkbox" name="20" value="20" class="residence"> Node 20&nbsp;&nbsp;
                                                            </label><label><input type="checkbox" name="21" value="21" class="residence"> Node 21&nbsp;&nbsp;
                                                            </label><label><input type="checkbox" name="30" value="30" class="residence"> Node 30&nbsp;&nbsp;</label><label>
                                                                <input type="checkbox" name="40" value="40" class="residence"> Node 40&nbsp;&nbsp;
                                                            </label><label>
                                                                <input type="checkbox" name="50" value="50" class="residence"> Node 50&nbsp;&nbsp;</label>
                                                            <label><input type="checkbox" name="60" value="60" class="residence"> Node 60&nbsp;&nbsp;
                                                            </label><label><input type="checkbox" name="61" value="61" class="residence"> Node 61&nbsp;&nbsp;</label><label>
                                                                <input type="checkbox" name="70" value="70" class="residence"> Node 70&nbsp;&nbsp;</label><label>
                                                                <input type="checkbox" name="80" value="80" class="residence"> Node 80&nbsp;&nbsp;</label> <br>

                                                            <h3>Reading Period</h3>
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
                                                                $(document).ready(function() {
                                                                    $('#theDates').hide();
                                                                });

                                                                $('#interval').on('change', function() {
                                                                    if (this.value != 'set') {
                                                                        //alert( this.value );
                                                                        $("#theDates").hide(500);
                                                                    } else {
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
                                    </div>
                                    <div class="row">
                                        <!--Chart 1 Total Move-->
                                        <div class="col-lg-12">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <h3 class="mbm" align="center"></h3>
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
                                                    <h3 class="mbm" align="center"></h3>
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
                                                    <h3 class="mbm" align="center"></h3>
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
                                                    <h3 class="mbm" align="center"></h3>
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
        <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

        <script>
            window.onload = function() {
                //  here we get node 10 data 
                var dateTime10 = <?php echo json_encode(array_values($DateTime10)); ?>;
                var aVar10 = <?php echo json_encode(array_values($Avariation10)); ?>;
                var bVar10 = <?php echo json_encode(array_values($Bvariation10)); ?>;
                var tm10 = <?php echo json_encode(array_values($totalMove10)); ?>;

                var dpsn10 = []; //dataPoints. 
                var dpsav10 = []; //data point for a variation
                var dpsbv10 = []; //data point for b variation
                var dpstm10 = []; // here we will add total movement

                //  here we get node 20 data 
                var dateTime20 = <?php echo json_encode(array_values($DateTime20)); ?>;
                var aVar20 = <?php echo json_encode(array_values($Avariation20)); ?>;
                var bVar20 = <?php echo json_encode(array_values($Bvariation20)); ?>;
                var tm20 = <?php echo json_encode(array_values($totalMove20)); ?>;

                var dpsn20 = []; //dataPoints. 
                var dpsav20 = []; //data point for a variation
                var dpsbv20 = []; //data point for b variation
                var dpstm20 = []; // here we will add total movement

                //  here we get node 21 data 
                var dateTime21 = <?php echo json_encode(array_values($DateTime21)); ?>;
                var aVar21 = <?php echo json_encode(array_values($Avariation21)); ?>;
                var bVar21 = <?php echo json_encode(array_values($Bvariation21)); ?>;
                var tm21 = <?php echo json_encode(array_values($totalMove21)); ?>;

                var dpsn21 = []; //dataPoints. 
                var dpsav21 = []; //data point for a variation
                var dpsbv21 = []; //data point for b variation
                var dpstm21 = []; // here we will add total movement

                //  here we get node 30 data 
                var dateTime30 = <?php echo json_encode(array_values($DateTime30)); ?>;
                var aVar30 = <?php echo json_encode(array_values($Avariation30)); ?>;
                var bVar30 = <?php echo json_encode(array_values($Bvariation30)); ?>;
                var tm30 = <?php echo json_encode(array_values($totalMove30)); ?>;

                var dpsn30 = []; //dataPoints. 
                var dpsav30 = []; //data point for a variation
                var dpsbv30 = []; //data point for b variation
                var dpstm30 = []; // here we will add total movement

                //  here we get node 40 data 
                var dateTime40 = <?php echo json_encode(array_values($DateTime40)); ?>;
                var aVar40 = <?php echo json_encode(array_values($Avariation40)); ?>;
                var bVar40 = <?php echo json_encode(array_values($Bvariation40)); ?>;
                var tm40 = <?php echo json_encode(array_values($totalMove40)); ?>;

                var dpsn40 = []; //dataPoints. 
                var dpsav40 = []; //data point for a variation
                var dpsbv40 = []; //data point for b variation
                var dpstm40 = []; // here we will add total movement

                //  here we get node 50 data 
                var dateTime50 = <?php echo json_encode(array_values($DateTime50)); ?>;
                var aVar50 = <?php echo json_encode(array_values($Avariation50)); ?>;
                var bVar50 = <?php echo json_encode(array_values($Bvariation50)); ?>;
                var tm50 = <?php echo json_encode(array_values($totalMove50)); ?>;

                var dpsn50 = []; //dataPoints. 
                var dpsav50 = []; //data point for a variation
                var dpsbv50 = []; //data point for b variation
                var dpstm50 = []; // here we will add total movement

                //  here we get node 60 data 
                var dateTime60 = <?php echo json_encode(array_values($DateTime60)); ?>;
                var aVar60 = <?php echo json_encode(array_values($Avariation60)); ?>;
                var bVar60 = <?php echo json_encode(array_values($Bvariation60)); ?>;
                var tm60 = <?php echo json_encode(array_values($totalMove60)); ?>;

                var dpsn60 = []; //dataPoints. 
                var dpsav60 = []; //data point for a variation
                var dpsbv60 = []; //data point for b variation
                var dpstm60 = []; // here we will add total movement

                //  here we get node 61 data 
                var dateTime61 = <?php echo json_encode(array_values($DateTime61)); ?>;
                var aVar61 = <?php echo json_encode(array_values($Avariation61)); ?>;
                var bVar61 = <?php echo json_encode(array_values($Bvariation61)); ?>;
                var tm61 = <?php echo json_encode(array_values($totalMove61)); ?>;

                var dpsn61 = []; //dataPoints. 
                var dpsav61 = []; //data point for a variation
                var dpsbv61 = []; //data point for b variation
                var dpstm61 = []; // here we will add total movement

                //  here we get node 70 data 
                var dateTime70 = <?php echo json_encode(array_values($DateTime70)); ?>;
                var aVar70 = <?php echo json_encode(array_values($Avariation70)); ?>;
                var bVar70 = <?php echo json_encode(array_values($Bvariation70)); ?>;
                var tm70 = <?php echo json_encode(array_values($totalMove70)); ?>;

                var dpsn70 = []; //dataPoints. 
                var dpsav70 = []; //data point for a variation
                var dpsbv70 = []; //data point for b variation
                var dpstm70 = []; // here we will add total movement

                //  here we get node 80 data 
                var dateTime80 = <?php echo json_encode(array_values($DateTime80)); ?>;
                var aVar80 = <?php echo json_encode(array_values($Avariation80)); ?>;
                var bVar80 = <?php echo json_encode(array_values($Bvariation80)); ?>;
                var tm80 = <?php echo json_encode(array_values($totalMove80)); ?>;

                var dpsn80 = []; //dataPoints. 
                var dpsav80 = []; //data point for a variation
                var dpsbv80 = []; //data point for b variation
                var dpstm80 = []; // here we will add total movement

                CanvasJS.addColorSet("customColorSet",
                    [ //colorSet Array
                        "#4661EE",
                        "#EC5657",
                        "#1BCDD1",
                        "#8FAABB",
                        "#B08BEB",
                        "#3EA0DD",
                        "#F5A52A",
                        "#23BFAA"
                    ]);
                var chart = new CanvasJS.Chart("chart1", {
                    colorSet: "customColorSet",
                    animationEnabled: true,
                    exportEnabled: true,
                    zoomEnabled: true,

                    title: {
                        text: "Axis A Variations (Degree), Axis B Variations (Degree) and Total Movements (mm/m)",
                        fontWeight: "bold",
                        fontFamily: "arial",
                        fontSize: 20
                    },

                    subtitles: [{
                        text: "[ 1 DAY ]",
                        fontWeight: "normal",
                        fontFamily: "arial",
                        fontSize: 15
                    }],

                    axisX: {
                        title: "Axis B Reading (Degree)",
                        titleFontSize: 15,
                        interval: 1,
                        intervalType: "number",
                        stripLines: [{
                            value: 0,
                            thickness: 3,
                            color: "#82CAFF"
                        }]
                    },
                    axisY: {
                        title: "Axis A Reading (Degree)",
                        titleFontSize: 15,
                        interval: 1,
                        stripLines: [{
                            value: 0,
                            thickness: 3,
                            color: "#82CAFF"
                        }]

                    },
                    legend: {
                        horizontalAlign: "center",

                        itemclick: function(e) {
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
                            type: 'bubble',
                            showInLegend: true,
                            legendText: '{name}',
                            legendMarkerType: 'circle',
                            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                            dataPoints: dpsn10
                        },
                        {
                            type: 'bubble',
                            showInLegend: true,
                            legendText: '{name}',
                            legendMarkerType: 'circle',
                            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                            dataPoints: dpsn20
                        },
                        {
                            type: 'bubble',
                            showInLegend: true,
                            legendText: '{name}',
                            legendMarkerType: 'circle',
                            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                            dataPoints: dpsn21
                        },
                        {
                            type: 'bubble',
                            showInLegend: true,
                            legendText: '{name}',
                            legendMarkerType: 'circle',
                            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                            dataPoints: dpsn30
                        },
                        {
                            type: 'bubble',
                            showInLegend: true,
                            legendText: '{name}',
                            legendMarkerType: 'circle',
                            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                            dataPoints: dpsn40
                        },
                        {
                            type: 'bubble',
                            showInLegend: true,
                            legendText: '{name}',
                            legendMarkerType: 'circle',
                            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                            dataPoints: dpsn50
                        },
                        {
                            type: 'bubble',
                            showInLegend: true,
                            legendText: '{name}',
                            legendMarkerType: 'circle',
                            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                            dataPoints: dpsn60
                        },
                        {
                            type: 'bubble',
                            showInLegend: true,
                            legendText: '{name}',
                            legendMarkerType: 'circle',
                            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                            dataPoints: dpsn61
                        },
                        {
                            type: 'bubble',
                            showInLegend: true,
                            legendText: '{name}',
                            legendMarkerType: 'circle',
                            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                            dataPoints: dpsn70
                        },
                        {
                            type: 'bubble',
                            showInLegend: true,
                            legendText: '{name}',
                            legendMarkerType: 'circle',
                            toolTipContent: '<b>{name}</b><br/>Axis A: {y} degree<br/> Axis B: {x} degree<br/> Total Movement: {z} mm/m<br/> DateTime: {datetime}',
                            dataPoints: dpsn80
                        },

                    ]
                });

                function parseDataPoints() {
                    for (var i = dpsn10.length; i < dateTime10.length; i++) {
                        dpsn10.push({
                            x: parseFloat(aVar10[i]),
                            y: parseFloat(bVar10[i]),
                            z: parseFloat(tm10[i]),
                            name: 'Node 10',
                            datetime: new Date(dateTime10[i]),
                        });

                        dpstm10.push({
                            label: new Date(dateTime10[i]),
                            y: parseFloat(tm10[i]),
                        })

                        dpsav10.push({
                            label: new Date(dateTime10[i]),
                            y: parseFloat(aVar10[i]),
                        })

                        dpsbv10.push({
                            label: new Date(dateTime10[i]),
                            y: parseFloat(bVar10[i]),
                        })


                        dpsn20.push({
                            x: parseFloat(aVar20[i]),
                            y: parseFloat(bVar20[i]),
                            z: parseFloat(tm20[i]),
                            name: 'Node 20',
                            datetime: new Date(dateTime20[i]),
                        });
                        dpstm20.push({
                            label: new Date(dateTime20[i]),
                            y: parseFloat(tm20[i]),
                        })

                        dpsav20.push({
                            label: new Date(dateTime20[i]),
                            y: parseFloat(aVar20[i]),
                        })
                        
                        dpsbv20.push({
                            label: new Date(dateTime20[i]),
                            y: parseFloat(bVar20[i]),
                        })


                        dpsn21.push({
                            x: parseFloat(aVar21[i]),
                            y: parseFloat(bVar21[i]),
                            z: parseFloat(tm21[i]),
                            name: 'Node 21',
                            datetime: new Date(dateTime21[i]),
                        });
                        dpstm21.push({
                            label: new Date(dateTime21[i]),
                            y: parseFloat(tm21[i]),
                        })

                        dpsav21.push({
                            label: new Date(dateTime21[i]),
                            y: parseFloat(aVar21[i]),
                        })
                        
                        dpsbv21.push({
                            label: new Date(dateTime21[i]),
                            y: parseFloat(bVar21[i]),
                        })


                        dpsn30.push({
                            x: parseFloat(aVar30[i]),
                            y: parseFloat(bVar30[i]),
                            z: parseFloat(tm30[i]),
                            name: 'Node 30',
                            datetime: new Date(dateTime30[i]),
                        });
                        dpstm30.push({
                            label: new Date(dateTime30[i]),
                            y: parseFloat(tm30[i]),
                        })

                        dpsav30.push({
                            label: new Date(dateTime30[i]),
                            y: parseFloat(aVar30[i]),
                        })
                        
                        dpsbv30.push({
                            label: new Date(dateTime30[i]),
                            y: parseFloat(bVar30[i]),
                        })

                        
                        dpsn40.push({
                            x: parseFloat(aVar40[i]),
                            y: parseFloat(bVar40[i]),
                            z: parseFloat(tm40[i]),
                            name: 'Node 40',
                            datetime: new Date(dateTime40[i]),
                        });
                        dpstm40.push({
                            label: new Date(dateTime40[i]),
                            y: parseFloat(tm40[i]),
                        })

                        dpsav40.push({
                            label: new Date(dateTime40[i]),
                            y: parseFloat(aVar40[i]),
                        })
                        
                        dpsbv40.push({
                            label: new Date(dateTime40[i]),
                            y: parseFloat(bVar40[i]),
                        })


                        dpsn50.push({
                            x: parseFloat(aVar50[i]),
                            y: parseFloat(bVar50[i]),
                            z: parseFloat(tm50[i]),
                            name: 'Node 50',
                            datetime: new Date(dateTime50[i]),
                        });
                        dpstm50.push({
                            label: new Date(dateTime50[i]),
                            y: parseFloat(tm50[i]),
                        })

                        dpsav50.push({
                            label: new Date(dateTime50[i]),
                            y: parseFloat(aVar50[i]),
                        })
                        
                        dpsbv50.push({
                            label: new Date(dateTime50[i]),
                            y: parseFloat(bVar50[i]),
                        })


                        dpsn60.push({
                            x: parseFloat(aVar60[i]),
                            y: parseFloat(bVar60[i]),
                            z: parseFloat(tm60[i]),
                            name: 'Node 60',
                            datetime: new Date(dateTime60[i]),
                        });
                        dpstm60.push({
                            label: new Date(dateTime60[i]),
                            y: parseFloat(tm60[i]),
                        })

                        dpsav60.push({
                            label: new Date(dateTime60[i]),
                            y: parseFloat(aVar60[i]),
                        })
                        
                        dpsbv60.push({
                            label: new Date(dateTime60[i]),
                            y: parseFloat(bVar60[i]),
                        })


                        dpsn61.push({
                            x: parseFloat(aVar61[i]),
                            y: parseFloat(bVar61[i]),
                            z: parseFloat(tm61[i]),
                            name: 'Node 61',
                            datetime: new Date(dateTime61[i]),
                        });
                        dpstm61.push({
                            label: new Date(dateTime61[i]),
                            y: parseFloat(tm61[i]),
                        })

                        dpsav61.push({
                            label: new Date(dateTime61[i]),
                            y: parseFloat(aVar61[i]),
                        })
                        
                        dpsbv61.push({
                            label: new Date(dateTime61[i]),
                            y: parseFloat(bVar61[i]),
                        })


                        dpsn70.push({
                            x: parseFloat(aVar70[i]),
                            y: parseFloat(bVar70[i]),
                            z: parseFloat(tm70[i]),
                            name: 'Node 70',
                            datetime: new Date(dateTime70[i]),
                        });
                        dpstm70.push({
                            label: new Date(dateTime70[i]),
                            y: parseFloat(tm70[i]),
                        })

                        dpsav70.push({
                            label: new Date(dateTime70[i]),
                            y: parseFloat(aVar70[i]),
                        })
                        
                        dpsbv70.push({
                            label: new Date(dateTime70[i]),
                            y: parseFloat(bVar70[i]),
                        })


                        dpsn80.push({
                            x: parseFloat(aVar80[i]),
                            y: parseFloat(bVar80[i]),
                            z: parseFloat(tm80[i]),
                            name: 'Node 80',
                            datetime: new Date(dateTime80[i]),
                        });
                        dpstm80.push({
                            label: new Date(dateTime80[i]),
                            y: parseFloat(tm80[i]),
                        })

                        dpsav80.push({
                            label: new Date(dateTime80[i]),
                            y: parseFloat(aVar80[i]),
                        })
                        
                        dpsbv80.push({
                            label: new Date(dateTime80[i]),
                            y: parseFloat(bVar80[i]),
                        })

                    }
                };

                function addDataPoints() {
                    parseDataPoints();
                    // chart.options.data[0].dataPoints = dpsn10;
                    chart.render();
                }

                addDataPoints();
                chart.render();




                var chart = new CanvasJS.Chart("chart2", {
                    colorSet: "customColorSet",
                    animationEnabled: true,
                    exportEnabled: true,
                    zoomEnabled: true,


                    title: {
                        text: "Total Movements (mm/m)",
                        fontWeight: "bold",
                        fontFamily: "arial",
                        fontSize: 20
                    },

                    subtitles: [{
                        text: "[ 1 DAY ]",
                        fontWeight: "normal",
                        fontFamily: "arial",
                        fontSize: 15
                    }],


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

                    axisX: {
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
                    legend: {
                        cursor: "pointer",
                        itemclick: function(e) {
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
                            type: "line",
                            name: "Node 10",
                            showInLegend: true,
                            dataPoints: dpstm10
                        },

                        {
                            type: "line",
                            name: "Node 20",
                            showInLegend: true,
                            dataPoints: dpstm20
                        },

                        {
                            type: "line",
                            name: "Node 21",
                            showInLegend: true,
                            dataPoints: dpstm21
                        },

                        {
                            type: "line",
                            name: "Node 30",
                            showInLegend: true,
                            dataPoints: dpstm30
                        },

                        {
                            type: "line",
                            name: "Node 40",
                            showInLegend: true,
                            dataPoints: dpstm40
                        },

                        {
                            type: "line",
                            name: "Node 50",
                            showInLegend: true,
                            dataPoints: dpstm50
                        },

                        {
                            type: "line",
                            name: "Node 60",
                            showInLegend: true,
                            dataPoints: dpstm60
                        },

                        {
                            type: "line",
                            name: "Node 61",
                            showInLegend: true,
                            dataPoints: dpstm61
                        },

                        {
                            type: "line",
                            name: "Node 70",
                            showInLegend: true,
                            dataPoints: dpstm70
                        },

                        {
                            type: "line",
                            name: "Node 80",
                            showInLegend: true,
                            dataPoints: dpstm80
                        },
                    ]
                });
                chart.render();

                var chart = new CanvasJS.Chart("chart3", {
                    colorSet: "customColorSet",
                    animationEnabled: true,
                    exportEnabled: true,
                    zoomEnabled: true,


                    title: {
                        text: "Axis A Angle Variations (Degree)",
                        fontWeight: "bold",
                        fontFamily: "arial",
                        fontSize: 20
                    },

                    subtitles: [{
                        text: "[ 1 DAY ]",
                        fontWeight: "normal",
                        fontFamily: "arial",
                        fontSize: 15
                    }],


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

                    axisX: {
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
                    legend: {
                        cursor: "pointer",
                        itemclick: function(e) {
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
                            type: "line",
                            name: "Node 10",
                            showInLegend: true,
                            dataPoints: dpstm10
                        },

                        {
                            type: "line",
                            name: "Node 20",
                            showInLegend: true,
                            dataPoints: dpstm20
                        },

                        {
                            type: "line",
                            name: "Node 21",
                            showInLegend: true,
                            dataPoints: dpstm21
                        },

                        {
                            type: "line",
                            name: "Node 30",
                            showInLegend: true,
                            dataPoints: dpstm30
                        },

                        {
                            type: "line",
                            name: "Node 40",
                            showInLegend: true,
                            dataPoints: dpstm40
                        },

                        {
                            type: "line",
                            name: "Node 50",
                            showInLegend: true,
                            dataPoints: dpstm50
                        },

                        {
                            type: "line",
                            name: "Node 60",
                            showInLegend: true,
                            dataPoints: dpstm60
                        },

                        {
                            type: "line",
                            name: "Node 61",
                            showInLegend: true,
                            dataPoints: dpstm61
                        },

                        {
                            type: "line",
                            name: "Node 70",
                            showInLegend: true,
                            dataPoints: dpstm70
                        },

                        {
                            type: "line",
                            name: "Node 80",
                            showInLegend: true,
                            dataPoints: dpstm80
                        },
                    ]
                });
                chart.render();

                var chart = new CanvasJS.Chart("chart4", {
                    colorSet: "customColorSet",
                    animationEnabled: true,
                    exportEnabled: true,
                    zoomEnabled: true,


                    title: {
                        text: "Axis B Angle Variations (Degree)",
                        fontWeight: "bold",
                        fontFamily: "arial",
                        fontSize: 20
                    },

                    subtitles: [{
                        text: "[ 1 DAY ]",
                        fontWeight: "normal",
                        fontFamily: "arial",
                        fontSize: 15
                    }],


                    axisY: {
                        title: "Movements (Degree)",
                        titleFontSize: 15,
                        gridThickness: 0.3,
                        maximum: 3,
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
                        shared: false,
                        content: "<b>{name}</b><br/>DateTime: {label}<br/>Axis B Variation: {y} degree<br/>"
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
                            type: "line",
                            name: "Node 10",
                            showInLegend: true,
                            dataPoints: dpstm10
                        },

                        {
                            type: "line",
                            name: "Node 20",
                            showInLegend: true,
                            dataPoints: dpstm20
                        },

                        {
                            type: "line",
                            name: "Node 21",
                            showInLegend: true,
                            dataPoints: dpstm21
                        },

                        {
                            type: "line",
                            name: "Node 30",
                            showInLegend: true,
                            dataPoints: dpstm30
                        },

                        {
                            type: "line",
                            name: "Node 40",
                            showInLegend: true,
                            dataPoints: dpstm40
                        },

                        {
                            type: "line",
                            name: "Node 50",
                            showInLegend: true,
                            dataPoints: dpstm50
                        },

                        {
                            type: "line",
                            name: "Node 60",
                            showInLegend: true,
                            dataPoints: dpstm60
                        },

                        {
                            type: "line",
                            name: "Node 61",
                            showInLegend: true,
                            dataPoints: dpstm61
                        },

                        {
                            type: "line",
                            name: "Node 70",
                            showInLegend: true,
                            dataPoints: dpstm70
                        },

                        {
                            type: "line",
                            name: "Node 80",
                            showInLegend: true,
                            dataPoints: dpstm80
                        },
                    ]
                });
                chart.render();

            }
        </script>
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