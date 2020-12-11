<?php
$connect = mysqli_connect("localhost", "root", "", "geoalertsystem");
// initialize the session
session_start();

// check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$AllNodes = "
SELECT  *
FROM nodes
ORDER BY Createdtime DESC
";
// *** Here we declare the default values for our Nodes ****
$Aaxix = 0.231;
$Baxix = 0.3242;
$totalMov = 1.242;
$Temp = 27.32;
$nodeStatus = "Up";
$alarStatus = "Normal";

// SELECT  *
// FROM nodes
// LEFT JOIN (
//   SELECT DISTINCT  nodeId, Temp_10_Ch1,Aaxix_10_Ch1
//   FROM node_10
//   LIMIT 2

//   UNION ALL 
//   SELECT DISTINCT  nodeId, Temp_20_Ch1,Aaxix_20_Ch1
//   FROM node_20
//   LIMIT 2

// ) tempnode ON tempnode.nodeId = nodes.NodeID
// ORDER BY Createdtime DESC

// -------------------------------

// $AllNodes = "SELECT NodeId
// FROM nodes
// LEFT JOIN node_10 ON node_10.nodeId = nodes.NodeId
// LEFT JOIN node_20 ON node_20.nodeId = nodes.NodeId
// ";

$AllNodes = "
WITH tempnode AS (
    SELECT  nodeId, Temp_10_Ch1 as tem, Aaxix_10_Ch1 as Aaxix,Baxix_10_Ch1 as Baxix, node_10.Date_and_time as cts
    FROM node_10
    UNION ALL 
    SELECT   nodeId, Temp_20_Ch1 as tem ,Aaxix_20_Ch1 as Aaxix,Baxix_20_Ch1 as Baxix, node_20.Date_and_time as cts
    FROM node_20
    UNION ALL 
    SELECT   nodeId, Temp_21_Ch1 as tem ,Aaxix_21_Ch1 as Aaxix,Baxix_21_Ch1 as Baxix, node_21.Date_and_time as cts
    FROM node_21
    UNION ALL 
    SELECT   nodeId, Temp_30_Ch1 as tem ,Aaxix_30_Ch1 as Aaxix,Baxix_30_Ch1 as Baxix, node_30.Date_and_time as cts
    FROM node_30
    UNION ALL 
    SELECT   nodeId, Temp_40_Ch1 as tem ,Aaxix_40_Ch1 as Aaxix,Baxix_40_Ch1 as Baxix, node_40.Date_and_time as cts
    FROM node_40
    UNION ALL 
    SELECT   nodeId, Temp_50_Ch1 as tem ,Aaxix_50_Ch1 as Aaxix,Baxix_50_Ch1 as Baxix, node_50.Date_and_time as cts
    FROM node_50
    UNION ALL
    SELECT   nodeId, Temp_60_Ch1 as tem ,Aaxix_60_Ch1 as Aaxix,Baxix_60_Ch1 as Baxix, node_60.Date_and_time as cts
    FROM node_60
    UNION ALL
    SELECT   nodeId, Temp_61_Ch1 as tem ,Aaxix_61_Ch1 as Aaxix,Baxix_61_Ch1 as Baxix, node_61.Date_and_time as cts
    FROM node_61
    UNION ALL
    SELECT   nodeId, Temp_70_Ch1 as tem ,Aaxix_70_Ch1 as Aaxix,Baxix_70_Ch1 as Baxix, node_70.Date_and_time as cts
    FROM node_70
    UNION ALL
    SELECT   nodeId, Temp_80_Ch1 as tem ,Aaxix_80_Ch1 as Aaxix,Baxix_80_Ch1 as Baxix, node_80.Date_and_time as cts
    FROM node_80
), latest AS (
  SELECT tempnode.*, ROW_NUMBER() OVER (
  PARTITION BY tempnode.nodeId 
  ORDER BY tempnode.cts DESC) myrank
  FROM tempnode 
)
SELECT nodes.NodeId, tempnode.*
FROM nodes
LEFT JOIN latest as tempnode ON tempnode.nodeId = nodes.NodeID AND tempnode.myrank = 1
GROUP BY nodes.NodeID
ORDER BY nodes.NodeID, tempnode.cts desc
";
// Run the query
$query = $connect->query($AllNodes);

















$AllNodesResult = mysqli_query($connect, $AllNodes);

$query2 = "SELECT *
FROM nodes
LEFT JOIN node_10 ON node_10.nodeId = nodes.NodeId";
$result2 = mysqli_query($connect, $query2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nodes | MySTAR GeoAlert</title>
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

                                <div class="page-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <div id="grid-layout-table-1" class="box jplist">
                                                        <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                                        <div class="jplist-panel box panel-top">
                                                            <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i class="fa fa-share mls"></i></button>

                                                            <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                                                <ul class="dropdown-menu">
                                                                    <li><span data-number="3"> 3 per page</span></li>
                                                                    <li><span data-number="5"> 5 per page</span></li>
                                                                    <li><span data-number="10"> 10 per page</span></li>
                                                                    <li><span data-number="all" data-default="true"> view all</span></li>
                                                                </ul>
                                                            </div>


                                                            <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                                <ul class="dropdown-menu">
                                                                    <li><span data-path="default">Sort by</span></li>
                                                                    <li><span data-path=".title" data-order="asc" data-type="text" data-default="true">Node ID A-Z</span></li>
                                                                    <li><span data-path=".title" data-order="desc" data-type="text">Node ID Z-A</span></li>
                                                                    <!--<li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>-->
                                                                    <li><span data-path=".like" data-order="asc" data-type="text">Alarm</span></li>
                                                                    <!--<li><span data-path=".like" data-order="desc" data-type="text"> desc</span></li>
                                                <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>-->
                                                                </ul>
                                                            </div>

                                                            <div style="display:inline-block">
                                                                <div class="text-filter-box">
                                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span>
                                                                        <input data-path=".title" type="text" value="" placeholder="Filter by Node ID" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                <div class="text-filter-box">
                                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".desc" type="text" value="" placeholder="Filter by Description" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control" /></div>
                                                                </div>
                                                                <div class="text-filter-box">
                                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".like" type="text" value="" placeholder="Filter by Alarm" data-control-type="textbox" data-control-name="like-filter" data-control-action="filter" class="form-control" /></div>
                                                                </div>
                                                            </div>

                                                            <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                            <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>

                                                        </div>

                                                        <div class="box text-shadow">
                                                            <table class="demo-tbl">
                                                                <!--<item>1</item>-->
                                                                <?php

                                                                while ($row2 = mysqli_fetch_array($AllNodesResult)) {

                                                                ?>

                                                                    <tr class="tbl-item">
                                                                        <!--<img/>-->
                                                                        <td class="td-block">
                                                                            <p style="text-align:right">Data Last Received</p>
                                                                            <p class="date"><?php echo $row2["cts"] ?></p>
                                                                            <p class="title">Node <?php echo $row2["NodeId"] ?></p>
                                                                            <p class="desc">Location: Residence</p>
                                                                            <p> Axis A movement (mm/m): <?php echo $row2["Aaxix"] ?> </p>
                                                                            <p> Axis B movement (mm/m): <?php echo $row2["Baxix"]  ?> </p>
                                                                            <p> Total movement (mm/m): <?php echo $totalMov ?> </p>
                                                                            <p> Device Temperature (Celcius):<?php echo $row2["tem"] ?></p>
                                                                            <p> Node Status: <?php echo $nodeStatus ?> </p>
                                                                            </p>
                                                                            <p class="like">Latest Alarm: <?php echo $alarStatus ?></p>
                                                                            <p style="color:green">[ <a style="color:green" href="charts_d.php?nodeID=<?php echo $row2["NodeId"] ?>" target="_blank">View Charts</a> ]</p>

                                                                        </td>
                                                                    </tr>

                                                                <?php

                                                                }
                                                                ?>

                                                            </table>

                                                        </div>
                                                        <div class="box jplist-no-results text-shadow align-center">
                                                            <p>No results found</p>
                                                        </div>
                                                        <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                                        <div class="jplist-panel box panel-bottom">
                                                            <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">
                                                                <ul class="dropdown-menu">
                                                                    <li><span data-number="3"> 3 per page</span></li>
                                                                    <li><span data-number="5"> 5 per page</span></li>
                                                                    <li><span data-number="10"> 10 per page</span></li>
                                                                    <li><span data-number="all" data-default="true"> view all</span></li>
                                                                </ul>
                                                            </div>
                                                            <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{year}/{month}/{day}" class="jplist-drop-down form-control">
                                                                <ul class="dropdown-menu">
                                                                    <li><span data-path="default">Sort by</span></li>
                                                                    <li><span data-path=".title" data-order="asc" data-type="text" data-default="true">Node ID A-Z</span></li>
                                                                    <li><span data-path=".title" data-order="desc" data-type="text">Node ID Z-A</span></li>
                                                                    <li><span data-path=".like" data-order="asc" data-type="text">Alarm</span></li>
                                                                </ul>
                                                            </div>
                                                            <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                            <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
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
                </div>
                <!--END CONTENT-->

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
            <script src="assets/script1/highcharts.js"></script>
            <script src="assets/script1/data.js"></script>
            <script src="assets/script1/drilldown.js"></script>
            <script src="assets/script1/exporting.js"></script>
            <script src="assets/script1/highcharts-more.js"></script>
            <script src="assets/script1/charts-highchart-pie.js"></script>
            <script src="assets/script1/charts-highchart-more.js"></script>
            <script src="assets/script1/modernizr.min.js"></script>
            <script src="assets/script1/jplist.min.js"></script>
            <script src="assets/script1/jplist.js"></script>

            <!--CORE JAVASCRIPT-->
            <script src="script/main.js"></script>
            <script>

            </script>
</body>

</html>