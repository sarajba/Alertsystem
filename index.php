<?php
// initialize the session
session_start();

// check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}

$connect = mysqli_connect("localhost", "root", "", "geoalertsystem");


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


$AllNodesResult = mysqli_query($connect, $AllNodes);



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
          <a target="_blank" href="/geoalertmanual.pdf"  class="list-items"><i class="fa fa-life-ring fa-fw"></i>&nbsp; Manual</a>
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
      <div class="slide-pic">
        <img class="bg-pic" src="assets/images/mainpic.png" alt="image">
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
              <h4 class="font-weight-bold number">10</h4>
            </div>
            <!-- Content -->
            <div class="card-body white">
              <div class="progress md-progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 0%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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
              <h4 class="font-weight-bold number">0</h4>
            </div>
            <!-- Content -->
            <div class="card-body white">
              <div class="progress md-progress">
                <div class="progress-bar purple lighten-2" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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
              <h4 class="font-weight-bold number">0</h4>
            </div>
            <!-- Content -->
            <div class="card-body white">
              <div class="progress md-progress">
                <div class="progress-bar purple lighten-2" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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
              <h4 class="font-weight-bold number">0</h4>
            </div>
            <!-- Content -->
            <div class="card-body white">
              <div class="progress md-progress">
                <div class="progress-bar purple lighten-2" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
       <div class="gua-chart">
       <div class="col-md-5 mb-4">
          <div id="chartdiv"></div>
          <span class="nodes">Nodes Up <br> 10 Nodes (100%)</span>
        </div>
        <div class="col-md-5 mb-4">
          <div id="chartdiv2"></div>
          <span class="nodes"> Nodes Down <br> 0 Ndoes (0%)</span>
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
                <th>Data Time</th>
                <th>Alarm</th>
            </tr>
    </thead>
    <tbody>
<!-- <style>
tbody tr:nth-child(odd){
  background-color: #4C8BF5;
  color: #fff;
}
tbody tr:nth-child(even){
  background-color: #4C8925;
  color: #fff;
}
 </style> -->
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
        hand.showValue(99);
      }, 2000);


    }); // end am4core.ready()
  </script>
  <!-- Chart code -->
  <script>
    am4core.ready(function() {

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
        hand.showValue(1);
      }, 2000);


    }); // end am4core.ready()
  </script>

</body>
</html>