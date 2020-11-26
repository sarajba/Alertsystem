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


    <h4 style="text-align:center">GeoAlert<br>Summary Report</h4>
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
            <tr style="background-color:rgb(48,24,81);color:white;">
                <td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80"><?php echo $nodeid ?></a></td>
                <td>Residence</td>
                <td>Up</td>
                <td>2020-11-24 15:00:00</td>
                <td>Normal</td>
            </tr>
            <tr style="background-color:rgb(48,24,81);color:white;">
                <td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80"><?php echo $nodeid ?></a></td>
                <td>Residence</td>
                <td>Up</td>
                <td>2020-11-24 15:00:00</td>
                <td>Normal</td>
            </tr>
            <tr style="background-color:rgb(48,24,81);color:white;">
                <td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80"><?php echo $nodeid ?></a></td>
                <td>Residence</td>
                <td>Up</td>
                <td>2020-11-24 15:00:00</td>
                <td>Normal</td>
            </tr>
            <tr style="background-color:rgb(48,24,81);color:white;">
                <td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80"><?php echo $nodeid ?></a></td>
                <td>Residence</td>
                <td>Up</td>
                <td>2020-11-24 15:00:00</td>
                <td>Normal</td>
            </tr>
            <tr style="background-color:rgb(48,24,81);color:white;">
                <td><a style="color:white" target="_blank" href="charts_d.php?nodeID=80"><?php echo $nodeid ?></a></td>
                <td>Residence</td>
                <td>Up</td>
                <td>2020-11-24 15:00:00</td>
                <td>Normal</td>
            </tr>
        </tbody>
    </table>




</body>

</html>