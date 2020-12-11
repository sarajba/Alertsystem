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

<html lang="en">

<head>
    <title>GeoAlert Report</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/main.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/pace.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/jquery.news-ticker.css">
    <link type="text/css" rel="stylesheet" href="assets/css/css/jplist-custom.css">

    <link rel="stylesheet" type="text/css" src="assets/css/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" src="assets/css/css/all.min.css">
    <link rel="stylesheet" type="text/css" src="assets/css/css/all.css">
    <link rel="stylesheet" type="text/css" src="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>

    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/font-awesome.min.css" >
    <link href="/fontawesome-free-5.10.1-web/css/all.min.css" rel="stylesheet">
    <link href="C:/xampp/htdocs/GeoAlertSystem/fontawesome-free-5.15.1-web/css/font-awesome.min.css">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->


    <style>
        td {
            text-align: center;
        }

        < !-- @media print {
            .noprint {
                display: none;
            }

            a:link:after,
            a:visited:after {
                content: "";
            }

            .page-content,
            .panel,
            .panel-body,
            .tab-general {
                border: none !important;
            }
        }

        @media screen {
            ...
        }

        -->@page {
            /* size: auto;
            margin:0 -8cm; this affects the margin in the printer settings */

        }
    </style>

    <style>
    </style>
    <script>
        window.AG_AdblockGlobalEnabled = true;
    </script>
    <?php
    $nodeid = $_POST['nodeID'];
    $alarm = $_POST['alarm'];
    $fromDate = $_POST['fromDate'];
    $toDate = $_POST['toDate']
    ?>
</head>

<body>


    <div class="noprint">
        <br>
        <a href="javascript:window.print()"><i class="fa fa-print" aria-hidden="true" style="float:right;color:black;font-size:xx-large"></i></a>
        <br>
    </div>


    <h4 style="text-align:center">GeoAlert Summary Report</h4>
    <p style="text-align:center">NodeID:<?php echo $nodeid ?> | Alarm: <?php echo $alarm ?> | From Date: <?php echo $fromDate ?> | To Date: <?php echo $toDate ?></p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="text-align:center;background-color:rgb(33,37,41);color:white">Node ID</th>
                <th style="text-align:center;background-color:rgb(33,37,41);color:white">Location</th>
                <th style="text-align:center;background-color:rgb(33,37,41);color:white">Status</th>
                <th style="text-align:center;background-color:rgb(33,37,41);color:white">Data Time</th>
                <th style="text-align:center;background-color:rgb(33,37,41);color:white">Alarm</th>
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




</body>

</html>