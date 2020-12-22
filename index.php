<?php
// initialize the session
session_start();

// check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}
$connect = mysqli_connect("localhost", "root", "", "geoalertsystem");

$nodesUp = 0;
$nodesDown = 0;
// here we get the total number of nodes
$getAllNodes = $connect->query("SELECT * FROM nodes WHERE NodeID IS NOT NULL;");
$countNodes = $getAllNodes->num_rows;
$nodesUp = $countNodes;
$AllNodes_data = "
WITH tempnode AS ( 
  SELECT nodeId, Temp_10_Ch1 as tem, Aaxix_10_Ch1 as Aaxix,Baxix_10_Ch1 as Baxix, node_10.Date_and_time as cts 
  FROM node_10 
  UNION ALL 
  SELECT nodeId, Temp_20_Ch1 as tem ,Aaxix_20_Ch1 as Aaxix,Baxix_20_Ch1 as Baxix, node_20.Date_and_time as cts 
  FROM node_20 
  UNION ALL 
  SELECT nodeId, Temp_30_Ch1 as tem ,Aaxix_30_Ch1 as Aaxix,Baxix_30_Ch1 as Baxix, node_30.Date_and_time as cts 
  FROM node_30 
  UNION ALL 
  SELECT nodeId, Temp_21_Ch1 as tem ,Aaxix_21_Ch1 as Aaxix,Baxix_21_Ch1 as Baxix, node_21.Date_and_time as cts 
  FROM node_21 
  UNION ALL
  SELECT nodeId, Temp_40_Ch1 as tem ,Aaxix_40_Ch1 as Aaxix,Baxix_40_Ch1 as Baxix, node_40.Date_and_time as cts 
  FROM node_40 
  UNION ALL 
  SELECT nodeId, Temp_50_Ch1 as tem ,Aaxix_50_Ch1 as Aaxix,Baxix_50_Ch1 as Baxix, node_50.Date_and_time as cts 
  FROM node_50 
  UNION ALL 
  SELECT nodeId, Temp_60_Ch1 as tem ,Aaxix_60_Ch1 as Aaxix,Baxix_60_Ch1 as Baxix, node_60.Date_and_time as cts 
  FROM node_60
  UNION ALL 
  SELECT nodeId, Temp_61_Ch1 as tem ,Aaxix_61_Ch1 as Aaxix,Baxix_61_Ch1 as Baxix, node_61.Date_and_time as cts 
  FROM node_61
  UNION ALL 
  SELECT nodeId, Temp_70_Ch1 as tem ,Aaxix_70_Ch1 as Aaxix,Baxix_70_Ch1 as Baxix, node_70.Date_and_time as cts 
  FROM node_70
  UNION ALL 
  SELECT nodeId, Temp_80_Ch1 as tem ,Aaxix_80_Ch1 as Aaxix,Baxix_80_Ch1 as Baxix, node_80.Date_and_time as cts 
  FROM node_80
    
),
     latest AS ( 
         SELECT tempnode.*, ROW_NUMBER() OVER ( PARTITION BY tempnode.nodeId ORDER BY tempnode.cts DESC) myrank FROM tempnode ) 
         SELECT nodes.NodeId, tempnode.* 
         FROM nodes 
         LEFT JOIN latest as tempnode ON tempnode.nodeId = nodes.NodeID AND tempnode.myrank = 1
          GROUP BY nodes.NodeID ORDER BY nodes.NodeID, tempnode.cts desc
";

$AllNodesResult = mysqli_query($connect, $AllNodes_data);
$AllNodesResult_data2 = mysqli_query($connect, $AllNodes_data);
$countNodes2 = $AllNodesResult_data2->num_rows;


$normal_nodes = 0; //below 0.5 
$advisery_nodes = 0; //bellow 1
$watch_nodes = 0;    // bellow 1.5
$danger_nodes = 0;  // more than 1.5 

if (mysqli_num_rows($AllNodesResult_data2) > 0) {
  // output data of each row
  while ($row = mysqli_fetch_array($AllNodesResult_data2)) {

    $aaxix = $row["Aaxix"];
    $getnodesDown = 0;
    if ($aaxix != null) {
      $getnodesDown += 1;
      $nodesDown = $nodesUp - $aaxix;
    }
    //print_r($aaxix, "\n");
    if ($aaxix <= 0.5 && $aaxix > -2) {
      // Return the number of rows in result set
      // $rowcount=mysqli_num_rows($AllNodesResult_data);
      // echo "number of rows: ",$rowcount;
      // Free result set
      //mysqli_free_result($result);
      $normal_nodes += 1;
    } elseif ($aaxix > 0.5 && $aaxix <= 1) {
      $advisery_nodes += 1;
    } elseif ($aaxix > 1.5 && $aaxix <= 1.5) {
      $watch_node += 1;
    } elseif ($aaxix > 1.5) {
      $danger_nodes += 1;
    }
  }
} else {
  echo "0 results";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Home | MySTAR GeoAlert</title>
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

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .map {
      margin: 0px;
      border: 5px solid lightgrey;
      position: relative;
      display: inline-block;
    }

    .map img {
      max-width: 100%;
      display: block;
    }

    @-webkit-keyframes blink {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    @keyframes blink {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    .box-normal {
      width: 5%;
      height: 5%;
      background-image: url(assets/images/pin-normal.png);
      background-position: top center;
      background-repeat: no-repeat;
      background-size: contain;
      position: absolute;
    }

    .box-normal:hover>.pin-text {
      display: block;
    }

    .box-advisory {
      width: 5%;
      height: 5%;
      background-image: url(img/pin-advisory.png);
      background-position: top center;
      background-repeat: no-repeat;
      background-size: contain;
      position: absolute;
    }

    .box-advisory:hover>.pin-text {
      display: block;
    }

    .box-watch {
      width: 5%;
      height: 5%;
      background-image: url(img/pin-watch.png);
      background-position: top center;
      background-repeat: no-repeat;
      background-size: contain;
      position: absolute;
    }

    .box-watch:hover>.pin-text {
      display: block;
    }


    .box-warning {
      width: 5%;
      height: 5%;
      background-image: url(img/pin-warning.png);
      background-position: top center;
      background-repeat: no-repeat;
      background-size: contain;
      position: absolute;
      -webkit-animation: blink 1s;
      -webkit-animation-iteration-count: infinite;
      animation: blink 1s;
      animation-iteration-count: infinite;
    }

    .box-warning:hover>.pin-text {
      display: block;
    }

    .box-down {
      width: 5%;
      height: 5%;
      background-image: url(img/pin-down.png);
      background-position: top center;
      background-repeat: no-repeat;
      background-size: contain;
      position: absolute;
    }

    .box-down:hover>.pin-text {
      display: block;
    }

    div#bottomText {
      position: relative;
      text-align: center;
      bottom: -100%;
      color: white;
      text-shadow: 1px 1px 1px #000;
    }

    #pin-1 {
      top: 30%;
      right: 20%;
    }

    .pin-text {
      position: absolute;
      top: 200%;
      transform: translateY(-50%);
      right: 60%;
      white-space: nowrap;
      display: none;
      /*background-color:#7D1935;*/
      background: rgba(76, 175, 80, 0.8);
      padding: 10px;
      border-radius: 5px;
    }

    .pin-text h3 {
      color: white;
      text-shadow: 1px 1px 1px #000;
    }

    .pin-whitetext {
      color: white;
      text-shadow: 1px 1px 1px #000;
      z-index: 100;
    }

    .a {
      color: white;
      text-decoration: none;
    }
  </style>
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
        <img class="bg-pic" src="assets/images/mainpic.png" alt="image">
      </div> -->
      <div class="map">
        <img src="assets/images/mainpic.png" alt="" />

        <!--Formula to pin locations-->

        <!--Add nodes here-->

        <!--Node 10-->
        <a href="charts_d.php?nodeID=10" target="_blank" id="a1">
          <div id="$nodeID" style="top:60%; left:12%;" class="box-normal">
            <div id="bottomText">10</div>
            <div class="pin-text pin-whitetext">
              <p>Node 10<br>2020-12-09 15:00:00<br>Axis A: -0.31mm<br>Axis B: -0.93mm</p>
            </div>
          </div>
        </a>
        <!--End Node 10-->

        <!-- Node 11-->
        <!-- End Node 11 -->

        <!--Node 20-->
        <a href="charts_d.php?nodeID=20" target="_blank" id="a1">
          <div id="$nodeID" style="top:59%; left:26%;" class="box-normal">
            <div id="bottomText">20</div>
            <div class="pin-text pin-whitetext">
              <p>Node 20<br>2020-12-09 15:00:00<br>Axis A: 0.06mm<br>Axis B: -0.57mm</p>
            </div>
          </div>
        </a>
        <!--End Node 20-->

        <!--Node 21-->

        <a href="charts_d.php?nodeID=21" target="_blank" id="a1">
          <div id="$nodeID" style="top:88%; left:21%;" class="box-normal">
            <div id="bottomText">21</div>
            <div class="pin-text pin-whitetext">
              <p>Node 21<br>2020-12-09 15:00:00<br>Axis A: 0.5mm<br>Axis B: -0.8mm</p>
            </div>
          </div>
        </a>
        <!--End Node 21-->

        <!--Node 22-->


        <!--End Node 22-->

        <!--Node 30-->

        <a href="charts_d.php?nodeID=30" target="_blank" id="a1">
          <div id="$nodeID" style="top:58%; left:41%;" class="box-normal">
            <div id="bottomText">30</div>
            <div class="pin-text pin-whitetext">
              <p>Node 30<br>2020-12-09 15:00:00<br>Axis A: -0.89mm<br>Axis B: -0.34mm</p>
            </div>
          </div>
        </a>
        <!--End Node 30-->

        <!--Node 31-->


        <!--End Node 31-->


        <!--Node 40-->

        <a href="charts_d.php?nodeID=40" target="_blank" id="a1">
          <div id="$nodeID" style="top:58%; left:48%;" class="box-normal">
            <div id="bottomText">40</div>
            <div class="pin-text pin-whitetext">
              <p>Node 40<br>2020-12-09 15:00:00<br>Axis A: -0.37mm<br>Axis B: 0.48mm</p>
            </div>
          </div>
        </a>
        <!--End Node 40-->

        <!--Node 41-->


        <!--End Node 41-->

        <!--Node 42-->


        <!--End Node 42-->

        <!--Node 50-->

        <a href="charts_d.php?nodeID=50" target="_blank" id="a1">
          <div id="$nodeID" style="top:58%; left:57%;" class="box-normal">
            <div id="bottomText">50</div>
            <div class="pin-text pin-whitetext">
              <p>Node 50<br>2020-12-09 15:00:00<br>Axis A: -0.61mm<br>Axis B: 0.16mm</p>
            </div>
          </div>
        </a>
        <!--End Node 50-->

        <!--Node 51-->

        <a href="charts_d.php?nodeID=61" target="_blank" id="a1">
          <div id="$nodeID" style="top:74%; left:64%;" class="box-normal">
            <div id="bottomText">61</div>
            <div class="pin-text pin-whitetext">
              <p>Node 61<br>2020-12-09 15:00:00<br>Axis A: -0.41mm<br>Axis B: 0.47mm</p>
            </div>
          </div>
        </a>
        <!--End Node 51-->

        <!--Node 52-->


        <!--End Node 52-->

        <!--Node 60-->

        <a href="charts_d.php?nodeID=60" target="_blank" id="a1">
          <div id="$nodeID" style="top:58%; left:64%;" class="box-normal">
            <div id="bottomText">60</div>
            <div class="pin-text pin-whitetext">
              <p>Node 60<br>2020-12-09 15:00:00<br>Axis A: 0.04mm<br>Axis B: 0.6mm</p>
            </div>
          </div>
        </a>
        <!--End Node 60-->

        <!--Node 61-->


        <!--End Node 61-->

        <!--Node 70-->

        <a href="charts_d.php?nodeID=70" target="_blank" id="a1">
          <div id="$nodeID" style="top:60%; left:79%;" class="box-normal">
            <div id="bottomText">70</div>
            <div class="pin-text pin-whitetext">
              <p>Node 70<br>2020-12-09 15:00:00<br>Axis A: 0.01mm<br>Axis B: 0.06mm</p>
            </div>
          </div>
        </a>
        <!--End Node 70-->

        <!--Node 71-->


        <!--End Node 71-->

        <!--Node 81-->

        <a href="charts_d.php?nodeID=80" target="_blank" id="a1">
          <div id="$nodeID" style="top:60%; left:91%;" class="box-normal">
            <div id="bottomText">80</div>
            <div class="pin-text pin-whitetext">
              <p>Node 80<br>2020-12-09 15:00:00<br>Axis A: -0.59mm<br>Axis B: -0.31mm</p>
            </div>
          </div>
        </a>
        <!--End Node 81-->

        <!--Node 82-->


        <!--End Node 82-->

        <!--Node 83-->


        <!--End Node 83-->

      </div>

      <br>

      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!-- Card -->
          <div class="card gradient-card card-normal ">
            <!-- Data -->
            <div class="third-content ml-auto mr-4 mb-2">
              <p class="text">Normal</p>
              <h4 class="font-weight-bold number"><?php echo $normal_nodes ?></h4>
            </div>
            <!-- Content -->
            <div class="card-body white">
              <div class="progress md-progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $normal_nodes ?>0%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <!--Grid column-->


        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!-- Card -->
          <div class="card gradient-card card-advisory ">
            <!-- Data -->
            <div class="third-content  ml-auto mr-4 mb-2">
              <p class="text">Advisory</p>
              <h4 class="font-weight-bold number"><?php echo $advisery_nodes ?></h4>
            </div>
            <!-- Content -->
            <div class="card-body white">
              <div class="progress md-progress">
                <div class="progress-bar purple lighten-2" role="progressbar" style="width: <?php echo $advisery_nodes ?>0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>

        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!-- Card -->
          <div class="card gradient-card card-watch">
            <!-- Data -->
            <div class="third-content  ml-auto mr-4 mb-2">
              <p class="text">Watch</p>
              <h4 class="font-weight-bold number"><?php echo $watch_nodes ?></h4>
            </div>
            <!-- Content -->
            <div class="card-body white">
              <div class="progress md-progress">
                <div class="progress-bar purple lighten-2" role="progressbar" style="width: <?php echo $watch_nodes ?>0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>

        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!-- Card -->
          <div class="card gradient-card card-danger">
            <!-- Data -->
            <div class="third-content  ml-auto mr-4 mb-2">
              <p class="text">Danger</p>
              <h4 class="font-weight-bold number"><?php echo $danger_nodes ?></h4>
            </div>
            <!-- Content -->
            <div class="card-body white">
              <div class="progress md-progress">
                <div class="progress-bar purple lighten-2" role="progressbar" style="width: <?php echo $danger_nodes ?>0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="gua-chart">
          <div class="col-md-5 mb-4">
            <div id="chartdiv"></div>
            <span class="nodes">Nodes Up <br> <?php echo $nodesUp ?> Nodes (100%)</span>
          </div>
          <div class="col-md-5 mb-4">
            <div id="chartdiv2"></div>
            <span class="nodes"> Nodes Down <br> <?php echo(10-$nodesUp) ?> Ndoes (0%)</span>
          </div>
        </div>

        <!-- circle percentage -->
        <div class="col-md-12 mb-8">
          <!-- table -->
          <h2>Summary Details of Nodes</h2>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>Node ID</th>
                <th>Location</th>
                <th>Status</th>
                <th>Last Data Time</th>
                <th>Alarm</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (mysqli_num_rows($AllNodesResult) > 0) {
                // output data of each row
                while ($row2 = mysqli_fetch_array($AllNodesResult)) {
              ?>
                  <tr style="background-color:rgb(48,24,81);color:white;">
                    <td><a target="_blank" href="charts_d.php?nodeID=<?php echo $row2["NodeId"] ?>"><?php echo $row2["NodeId"] ?></a></td>
                    <td>Residence</td>
                    <td>Up</td>
                    <td><?php echo $row2['cts'] ?></td>
                    <td>Normal</td>
                  </tr>
              <?php  }
              } else {
                echo "0 results";
              }

              ?>
            </tbody>
          </table>
          <!--// table -->
        </div>
      </div>
      <!--Grid column-->
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

  <!-- Resources -->
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

  <!-- Chart code -->
  <script>
    am4core.ready(function() {
      var getnodesUp = <?= $nodesUp ?>;
      var nodesUp = (getnodesUp * 100) / getnodesUp;
      // Themes begin
      am4core.useTheme(am4themes_animated);
      // Themes end

      // create chart
      var chart = am4core.create("chartdiv", am4charts.GaugeChart);
      chart.innerRadius = -15;

      var axis = chart.xAxes.push(new am4charts.ValueAxis());
      axis.min = 0;
      axis.max = 100;
      axis.strictMinMax = true;

      var colorSet = new am4core.ColorSet();

      var gradient = new am4core.LinearGradient();
      gradient.stops.push({
        color: am4core.color("red")
      })
      gradient.stops.push({
        color: am4core.color("yellow")
      })
      gradient.stops.push({
        color: am4core.color("green")
      })

      axis.renderer.line.stroke = gradient;
      axis.renderer.line.strokeWidth = 15;
      axis.renderer.line.strokeOpacity = 1;

      axis.renderer.grid.template.disabled = true;

      var hand = chart.hands.push(new am4charts.ClockHand());
      hand.radius = am4core.percent(97);

      setInterval(function() {
        hand.showValue(nodesUp);
      }, 2000);


    }); // end am4core.ready()
  </script>
  <!-- Chart code -->
  <script>
    am4core.ready(function() {
      var getnodesDown = <?= $nodesDown ?>;
      var getnodesUp = <?= $nodesUp ?>;
       var nodesDown=10-getnodesUp;
     // var nodesDown = (nodedif * 100) / getnodesUp;
      console.log(getnodesDown)
      // Themes begin
      am4core.useTheme(am4themes_animated);
      // Themes end

      // create chart
      var chart = am4core.create("chartdiv2", am4charts.GaugeChart);
      chart.innerRadius = -15;

      var axis = chart.xAxes.push(new am4charts.ValueAxis());
      axis.min = 0;
      axis.max = 100;
      axis.strictMinMax = true;

      var colorSet = new am4core.ColorSet();

      var gradient = new am4core.LinearGradient();
      gradient.stops.push({
        color: am4core.color("red")
      })
      gradient.stops.push({
        color: am4core.color("yellow")
      })
      gradient.stops.push({
        color: am4core.color("green")
      })

      axis.renderer.line.stroke = gradient;
      axis.renderer.line.strokeWidth = 15;
      axis.renderer.line.strokeOpacity = 1;

      axis.renderer.grid.template.disabled = true;

      var hand = chart.hands.push(new am4charts.ClockHand());
      hand.radius = am4core.percent(97);

      setInterval(function() {
        hand.showValue(nodesDown);
      }, 2000);


    }); // end am4core.ready()
  </script>

</body>