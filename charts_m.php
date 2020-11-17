<html lang="en">

<head>
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <style></style>
    <script>
        window.AG_AdblockGlobalEnabled = true;
    </script>
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <style id="holderjs-style" type="text/css"></style>
</head>

<body class="  pace-done" style="">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div><a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--END BACK TO TOP-->

    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">

        <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">





            <meta name="viewport" content="width=device-width, initial-scale=1">

            <style>
                body {
                    font-family: "Lato", sans-serif;
                }

                .sidenav {
                    height: 100%;
                    width: 0;
                    position: fixed;
                    z-index: 1;
                    top: 0;
                    left: 0;
                    background-color: #111;
                    overflow-x: hidden;
                    transition: 0.5s;
                    padding-top: 60px;
                }

                .sidenav a {
                    padding: 8px 8px 8px 32px;
                    text-decoration: none;
                    font-size: 16px;
                    color: #818181;
                    display: block;
                    transition: 0.3s;
                }

                .sidenav a:hover {
                    color: #f1f1f1;
                }

                .sidenav .closebtn {
                    position: absolute;
                    top: 0;
                    right: 25px;
                    font-size: 36px;
                    margin-left: 50px;
                }

                .menupad {
                    padding-right: 25px;
                }

                @media screen and (max-height: 450px) {
                    .sidenav {
                        padding-top: 15px;
                    }

                    .sidenav a {
                        font-size: 18px;
                    }
                }
            </style>

            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><span onclick="openNav()"><i class="  fa fa-bars"></i></span></a>

                <script>
                    function openNav() {
                        document.getElementById("mySidenav").style.width = "250px";
                    }

                    function closeNav() {
                        document.getElementById("mySidenav").style.width = "0";
                    }
                </script>

            </div>
        </nav>

    </div>
    <!--END TOPBAR-->


    <title>Charts | Charts</title>
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
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">

    <script type="text/javascript" src="fusioncharts/js/fusioncharts.js"></script>
    <script type="text/javascript" src="fusioncharts/js/themes/fusioncharts.theme.fint.js"></script>
    <script type="text/javascript" src="fusioncharts/themes/fusioncharts.theme.ocean.js"></script>
    <script type="text/javascript" src="fusioncharts/themes/fusioncharts.theme.carbon.js"></script>
    <script type="text/javascript" src="fusioncharts/themes/fusioncharts.theme.zune.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

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
        <!--first div-->
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
                    Charts (Month) Node ID: 10</div>
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




                        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                        <link rel="stylesheet" type="text/css" href="chartmenu.css">
                        <title>Chart Menu</title>




                        <div class="topnav">

                            <a href="charts_d.php?nodeID=10">Day</a><a href="charts_w.php?nodeID=10">Week</a><a href="charts_m.php?nodeID=10" class="active">Month</a>
                        </div>





                        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



                        <title>Line Chart</title>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
                        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
                        <script src="script/utils.js"></script>
                        <style>
                            canvas {
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
                                    title: {
                                        text: "Hourly Readings: Axis Movements (Degree)",
                                        fontWeight: "normal",
                                        fontFamily: "arial",
                                        fontSize: 20
                                    },

                                    subtitles: [{
                                        text: "[ 1 Month ]",
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
                                                    label: "2020-10-12 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-12 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-12 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-12 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-23 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-02 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-03 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-04 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 19:00:00",
                                                    y: 0
                                                },

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
                                                    label: "2020-10-12 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-12 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-12 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-12 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-14 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-14 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 13:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-14 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-17 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-18 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-19 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-21 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 12:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 12:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 13:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-23 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-24 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-24 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-25 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 12:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 13:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 12:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 13:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-27 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 16:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-31 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 12:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 13:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 12:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 13:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 11:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 12:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 13:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-05 19:00:00",
                                                    y: 0
                                                },

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
                                        text: "[ 1 Month ]",
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
                                                    label: "2020-10-12 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-12 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-12 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-12 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-13 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-13 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-13 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 13:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-13 14:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-13 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-13 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-13 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-13 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-13 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-13 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-13 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-14 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-14 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-14 11:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-14 12:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-14 13:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-14 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-14 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-14 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-14 17:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-14 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-14 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-14 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-14 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-14 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-14 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-15 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-15 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-15 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-15 03:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-15 04:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-15 05:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-15 06:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-15 07:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-15 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-15 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-15 10:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-15 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 12:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-15 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 14:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-15 15:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-15 17:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-15 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-15 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-15 21:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 22:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 23:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 00:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 01:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 02:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 03:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 04:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-16 05:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 06:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 07:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 08:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 09:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-16 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 12:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-16 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 14:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-16 15:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-16 16:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-16 17:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-16 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-16 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 03:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 04:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 05:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 06:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 07:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-17 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 10:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-17 11:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-17 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 13:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-17 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 15:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 16:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-17 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-17 18:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-17 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-17 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-17 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 22:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 03:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 04:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 05:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 06:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 07:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 08:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-18 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-18 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 12:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-18 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 14:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 15:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 16:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 17:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-18 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-18 19:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-18 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-18 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 22:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-19 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 03:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 04:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 05:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 06:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 07:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-19 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-19 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-19 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-19 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-19 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-19 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-19 15:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 16:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 17:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-19 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-19 20:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-19 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-20 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-20 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-20 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-20 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-20 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-20 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-20 15:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-20 16:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-20 17:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-20 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-20 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-20 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 00:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-21 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-21 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-21 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-21 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-21 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-21 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-21 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-21 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-21 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-21 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-21 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-21 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-21 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-21 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-21 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-21 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 01:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 02:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 10:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-22 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-22 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-22 13:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 14:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-22 15:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-22 16:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-22 17:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-22 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-22 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-22 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-22 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-22 22:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-22 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 03:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 04:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 05:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 06:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 07:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 08:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-23 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-23 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-23 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-23 12:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-23 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-23 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-23 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-23 16:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-23 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-23 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-23 19:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-23 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 22:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-23 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 03:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 04:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 05:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 06:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 07:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-24 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-24 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-24 12:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-24 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-24 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-24 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-24 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-24 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-24 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-24 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 22:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-24 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-25 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-25 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-25 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-25 03:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-25 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 09:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-25 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-25 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-25 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-25 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-25 14:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-25 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-25 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-25 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-25 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-25 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-25 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-25 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-25 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-25 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 10:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 11:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 12:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-26 13:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-26 14:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-26 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-26 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-26 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-26 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-26 19:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-26 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-26 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-26 22:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-26 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-27 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-27 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-27 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-27 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 08:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-27 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-27 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-27 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-27 12:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-27 13:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-27 14:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-27 15:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-27 16:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-27 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-27 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-27 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-27 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-27 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-27 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-28 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-28 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-28 11:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-28 12:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-28 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-28 14:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-28 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-28 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-28 17:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-28 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-28 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-28 21:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 22:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-28 23:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 06:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 08:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 09:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-29 10:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-29 11:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-29 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-29 13:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-29 14:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-29 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-29 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-29 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-29 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-29 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-29 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-29 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 07:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-10-30 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-30 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-30 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-30 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-30 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-30 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-30 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-30 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-30 17:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-30 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-30 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-30 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-30 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-30 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-31 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-31 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-31 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-31 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-31 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-31 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-31 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-31 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-31 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-31 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-31 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-31 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-31 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-31 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-31 22:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-31 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-01 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-01 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-01 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-01 03:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 04:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 05:00:00",
                                                    y: 0
                                                },

                                                {
                                                    label: "2020-11-01 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-01 09:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-01 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-01 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-01 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-01 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-01 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-01 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-01 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-01 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-01 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-01 19:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-01 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-01 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-01 22:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-01 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-02 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-02 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-02 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-02 03:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-02 04:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-02 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 06:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-02 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-02 09:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-02 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-02 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-02 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-02 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-02 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-02 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-02 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-02 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-02 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-02 19:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-02 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-02 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-02 22:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-02 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-03 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-03 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-03 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-03 03:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-03 04:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-03 05:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-03 06:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-03 07:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-03 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-03 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-03 10:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-03 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-03 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-03 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-03 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-03 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-03 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-03 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-03 18:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 19:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 20:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-03 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 05:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-04 06:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-04 07:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-04 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-04 09:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 10:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-04 11:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-04 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-04 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-04 14:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-04 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-04 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-04 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-04 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-04 19:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-04 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-04 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-04 22:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-04 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-05 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-05 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-05 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-05 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 06:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-05 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-11-05 08:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-05 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-05 10:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-11-05 11:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-11-05 12:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-05 13:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-05 14:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-11-05 15:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-05 16:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-05 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-11-05 18:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-11-05 19:00:00",
                                                    y: 0
                                                },

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
                                                    label: "2020-10-12 20:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-12 21:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-12 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-12 23:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 00:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 02:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 03:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 04:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 05:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 06:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 07:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 08:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 09:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 10:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 11:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 12:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 14:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 15:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 16:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 17:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 18:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 19:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 20:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 21:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 22:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 23:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 00:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 01:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 02:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 03:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 04:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 05:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 06:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 07:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 08:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 09:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-14 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-14 11:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-14 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-14 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-14 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-14 15:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-14 16:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-14 17:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 18:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-14 19:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-14 20:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-14 21:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-14 22:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-14 23:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 00:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 01:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 02:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 03:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 04:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 05:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 06:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 07:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-15 08:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 09:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-15 10:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-15 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-15 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-15 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-15 14:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-15 15:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-15 16:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-15 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 18:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-15 19:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-15 21:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-15 22:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-15 23:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 00:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 01:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 02:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 03:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-16 04:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-16 05:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 06:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-16 07:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 08:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-16 09:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-16 10:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-16 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-16 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-16 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-16 14:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-16 15:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-16 16:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-16 17:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-16 18:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-16 19:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 20:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 21:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 22:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 03:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 04:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 05:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 06:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 07:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 08:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-17 09:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-17 10:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-17 11:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-17 12:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-17 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-17 14:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-17 15:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-17 16:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-17 17:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-17 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 20:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 21:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 22:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 23:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 00:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 01:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 02:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 03:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-18 04:00:00",
                                                    y: 0.1
                                                },

                                                {
                                                    label: "2020-10-18 05:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 06:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 07:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 08:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-18 09:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-18 10:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-18 11:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-18 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-18 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-18 14:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-18 15:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-18 16:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-18 17:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-18 18:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-18 19:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-18 20:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 21:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 22:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 23:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-19 00:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 01:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 02:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 03:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 04:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 05:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 06:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 07:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 08:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-19 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-19 10:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-19 11:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-19 12:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-19 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-19 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-19 15:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-19 16:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-19 17:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-19 18:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-19 19:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-19 20:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-19 21:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-19 22:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-19 23:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-20 00:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-20 01:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-20 02:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-20 03:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-20 04:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-20 05:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-20 06:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-20 07:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-20 08:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 09:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-20 10:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 11:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-20 12:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-20 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 14:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 15:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 16:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 17:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-20 18:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-20 19:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 20:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 21:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 23:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 00:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 02:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 03:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 04:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 05:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-21 09:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 10:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-21 11:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-21 12:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-21 13:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-21 14:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 15:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 16:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 17:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 18:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 19:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 22:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-22 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 09:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 10:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-22 11:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-22 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-22 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 21:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 23:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 04:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 07:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 08:00:00",
                                                    y: 1.2
                                                },

                                                {
                                                    label: "2020-10-23 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-23 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-23 13:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 19:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 21:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 23:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 04:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 07:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 08:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-24 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 10:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-24 11:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-24 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 20:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 22:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 23:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 00:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 01:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 02:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 03:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 04:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 05:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 10:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-25 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-25 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 13:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-25 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 20:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 22:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 23:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 00:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 01:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 02:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 03:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 04:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 05:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 09:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-26 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 11:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 13:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-26 14:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-26 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-26 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-26 17:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-26 18:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-26 19:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-26 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-26 21:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-26 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-26 23:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 03:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-27 04:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-27 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-27 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-27 08:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-27 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-27 10:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-27 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 12:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-27 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-27 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-27 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-27 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-27 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-27 22:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-27 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-28 09:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-28 10:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-28 11:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-28 12:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-28 13:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-28 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 15:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 16:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 17:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 18:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-28 19:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-28 20:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-28 21:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-28 22:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-28 23:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 00:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-29 01:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 02:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 03:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 04:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 05:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 06:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 07:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-29 08:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-29 09:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-29 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-29 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-29 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-29 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-29 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-29 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-29 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-29 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-29 18:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-29 19:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-29 20:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-29 21:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-29 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-29 23:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-30 00:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-30 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-30 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-30 10:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-30 11:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-30 12:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-30 13:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-30 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-30 16:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 17:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-30 19:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 22:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 04:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 05:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-31 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-31 10:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 11:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-31 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 20:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 22:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 23:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 00:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 01:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 02:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-01 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-01 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-01 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 10:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-01 11:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 12:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-01 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-01 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 19:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 23:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 04:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 07:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-02 10:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-02 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 12:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 13:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 19:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 21:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 23:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 04:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 07:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 08:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 12:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 13:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-03 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-03 20:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-03 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-03 22:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-03 23:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-04 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 04:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 07:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 11:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 12:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 13:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 14:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 19:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-04 22:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-04 23:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-05 01:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 02:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 03:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 04:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 05:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-05 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 08:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-05 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-05 10:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-05 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-05 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-05 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-05 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 18:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-05 19:00:00",
                                                    y: 0.6
                                                },

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
                                                    label: "2020-10-12 20:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-12 21:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-12 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-12 23:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 00:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 02:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 03:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 04:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 05:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 06:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 07:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 08:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 09:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 10:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 11:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 12:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 14:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 15:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 16:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 17:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 18:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 19:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-13 20:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 21:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 22:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-13 23:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 00:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 01:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 02:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 03:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 04:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 05:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 06:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 07:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 08:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-14 09:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-14 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-14 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-14 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-14 13:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-14 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-14 15:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-14 16:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-14 17:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-14 18:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-14 19:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-14 20:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-14 21:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-14 22:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-14 23:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 00:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 01:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 02:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 03:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 04:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 05:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 06:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 07:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 08:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 09:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-15 10:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-15 11:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-15 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-15 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-15 14:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-15 15:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-15 16:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-15 17:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 18:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-15 19:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 20:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 21:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 22:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-15 23:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 00:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 01:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 02:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 03:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 04:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 05:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 06:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 07:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 08:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 09:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 10:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-16 11:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-16 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-16 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-16 14:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-16 15:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-16 16:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-16 17:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-16 18:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-16 19:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 20:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 21:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 22:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-16 23:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 00:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 01:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 02:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 03:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 04:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 05:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 06:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 07:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 08:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-17 09:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-17 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-17 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-17 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-17 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-17 14:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-17 15:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-17 16:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-17 17:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-17 18:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 19:00:00",
                                                    y: 0.2
                                                },

                                                {
                                                    label: "2020-10-17 20:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 21:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 22:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-17 23:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 00:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 01:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 02:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 03:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 04:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 05:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 06:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 07:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 08:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-18 09:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-18 10:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-18 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-18 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-18 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-18 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-18 15:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-18 16:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-18 17:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-18 18:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-18 19:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-18 20:00:00",
                                                    y: 0.3
                                                },

                                                {
                                                    label: "2020-10-18 21:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-18 22:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-18 23:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 00:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 01:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 02:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 03:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 04:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 05:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 06:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 07:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-19 08:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-19 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-19 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-19 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-19 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-19 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-19 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-19 15:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-19 16:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-19 17:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-19 18:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-19 19:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-19 20:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-19 21:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-19 22:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-19 23:00:00",
                                                    y: 0.4
                                                },

                                                {
                                                    label: "2020-10-20 00:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-20 01:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-20 02:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-20 03:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-20 04:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-20 05:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-20 06:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-20 07:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-20 08:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-20 10:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-20 11:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-20 12:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-20 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-20 15:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-20 16:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 17:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-20 18:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-20 19:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 20:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 21:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-20 23:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 00:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 02:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 03:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 04:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 05:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 08:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-21 09:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-21 10:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-21 11:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-21 12:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-21 13:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-21 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-21 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-21 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-21 18:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 19:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 22:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-21 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 01:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-22 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 05:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 09:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 10:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-22 11:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-22 12:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-22 14:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-22 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-22 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 19:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 21:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-22 23:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 04:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 07:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 08:00:00",
                                                    y: 1.2
                                                },

                                                {
                                                    label: "2020-10-23 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-23 10:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-23 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 12:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 13:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 14:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-23 15:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-23 16:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-23 17:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-23 18:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-23 19:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 21:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-23 23:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 04:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 07:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 08:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-24 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 10:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-24 11:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-24 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 20:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-24 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-24 23:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 04:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 05:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 10:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-25 11:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 13:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-25 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-25 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 20:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 22:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-25 23:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 00:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 01:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 02:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 03:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 04:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 05:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 09:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-26 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 11:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-26 13:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-26 14:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-26 15:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-26 16:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-26 17:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-26 18:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-26 19:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-26 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-26 21:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-26 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-26 23:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 04:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 07:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 08:00:00",
                                                    y: 1.2
                                                },

                                                {
                                                    label: "2020-10-27 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-27 10:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-27 11:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-27 12:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 13:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 15:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-27 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-27 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-27 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-27 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-27 22:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-27 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-28 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-28 10:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-28 11:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-28 12:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-28 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-28 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-28 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-28 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-28 17:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 18:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-28 19:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-28 20:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-28 21:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-28 22:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-28 23:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 00:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-29 01:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 02:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 03:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 04:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 05:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 06:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-29 07:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-29 08:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-29 09:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-29 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-29 11:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-29 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-29 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-29 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-29 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-29 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-29 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-29 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-29 19:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-29 20:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-29 21:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-29 22:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-29 23:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-30 00:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-30 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 06:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 07:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-30 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-10-30 10:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 11:00:00",
                                                    y: 0.6
                                                },

                                                {
                                                    label: "2020-10-30 12:00:00",
                                                    y: 0.5
                                                },

                                                {
                                                    label: "2020-10-30 13:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-10-30 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-30 15:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-30 16:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-30 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-30 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-30 19:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 20:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 21:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 22:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-30 23:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 00:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 01:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 02:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 04:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 05:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-31 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-31 10:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-10-31 12:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 14:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-31 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-31 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-31 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-10-31 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 20:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 22:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-10-31 23:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 00:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 01:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 02:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 03:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-01 04:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-01 05:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-01 06:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 08:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 10:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-01 11:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 12:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-01 13:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-01 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 18:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 19:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 21:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-01 23:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 04:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 07:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-02 10:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-02 11:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-02 12:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-02 13:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 14:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-02 15:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-02 16:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-02 17:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-02 18:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-02 19:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 21:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-02 23:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 04:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 07:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 08:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 10:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 11:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 12:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 13:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 14:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 15:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 16:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-03 17:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-03 18:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-03 19:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-03 20:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-03 21:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-03 22:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-03 23:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-04 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 03:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 04:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 05:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 07:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 08:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 09:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 10:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 11:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 12:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 13:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 14:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 15:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 16:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 17:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 18:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-04 19:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 20:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 21:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 22:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-04 23:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-05 00:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-05 01:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-05 02:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-05 03:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 04:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 05:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 06:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-05 07:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 08:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-05 09:00:00",
                                                    y: 1.1
                                                },

                                                {
                                                    label: "2020-11-05 10:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 11:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-05 12:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-05 13:00:00",
                                                    y: 0.8
                                                },

                                                {
                                                    label: "2020-11-05 14:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-05 15:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-05 16:00:00",
                                                    y: 1
                                                },

                                                {
                                                    label: "2020-11-05 17:00:00",
                                                    y: 0.9
                                                },

                                                {
                                                    label: "2020-11-05 18:00:00",
                                                    y: 0.7
                                                },

                                                {
                                                    label: "2020-11-05 19:00:00",
                                                    y: 0.6
                                                },

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
                                        text: "[ 1 Month ]",
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
                                                y: 744,
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
                                            <div id="chartContainerAngle" style="height: 450px; width: 100%;">
                                                <div class="canvasjs-chart-container" style="position: relative; text-align: left; cursor: auto; direction: ltr;"><canvas class="canvasjs-chart-canvas" width="656" height="450" style="position: absolute; user-select: none;"></canvas><canvas class="canvasjs-chart-canvas" width="656" height="450" style="position: absolute; -webkit-tap-highlight-color: transparent; user-select: none; cursor: default;"></canvas>
                                                    <div class="canvasjs-chart-toolbar" style="position: absolute; right: 1px; top: 1px; border: 1px solid transparent;"><button state="pan" type="button" title="Pan" style="display: none; background-color: white; color: black; border-top: none; border-right: 1px solid rgb(33, 150, 243); border-bottom: none; border-left: none; border-image: initial; user-select: none; padding: 5px 12px; cursor: pointer; float: left; width: 40px; height: 25px; outline: 0px; vertical-align: baseline; line-height: 0;"><img style="height:95%; pointer-events: none;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAICSURBVEhLxZbPahNRGMUn/5MpuAiBEAIufQGfzr5E40YptBXajYzudCEuGqS+gGlrFwquDGRTutBdYfydzJ3LzeQmJGZue+Dw/Z17Mnfmu5Pof9Hr9Z61Wq0bWZMKj263O6xWq99wU9lOpzPMKgEhEcRucNOcioOK+0RzBhNvt9tPV4nmVF19+OWhVqt9xXgFXZq+8lCv119UKpUJ7iX2FmvFTKz8RH34YdBsNk8wVtjE4fGYwm8wrrDi3WBG5oKXZGRSS9hGuNFojLTe2lFz5xThWZIktayyiE2FdT3rzXBXz7krKiL8c17wAKFDjCus2AvW+YGZ9y2JF0VFRuMPfI//rsCE/C+s26s4gQu9ul7r4NteKx7H8XOC724xNNGbaNu++IrBqbOV7Tj3FgMRvc/YKOr3+3sE47wgEt/Bl/gaK5cHbNU11vYSXylfpK7XOvjuumPp4Wcoipu30Qsez2uMXYz4lfI+mOmwothY+SLiXJy7mKVpWs3Si0CoOMfeI9Od43Wic+jO+ZVv+crsm9QSNhUW9LXSeoPBYLXopthGuFQgdIxxhY+UDwlt1x5CZ1hX+NTUdt/OIvjKaDSmuOJfaIVNPKX+W18j/PLA2/kR44p5Sd8HbHngT/yTfNRWUXX14ZcL3wmX0+TLf8YO7CGT8yFE5zB3/gney25/OETRP9CtPDFe5jShAAAAAElFTkSuQmCC" alt="Pan"></button><button state="reset" type="button" title="Reset" style="display: none; background-color: white; color: black; border-top: none; border-right: 1px solid rgb(33, 150, 243); border-bottom: none; border-left: none; border-image: initial; user-select: none; padding: 5px 12px; cursor: pointer; float: left; width: 40px; height: 25px; outline: 0px; vertical-align: baseline; line-height: 0;"><img style="height:95%; pointer-events: none;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAeCAYAAABJ/8wUAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPjSURBVFhHxVdJaFNRFP1J/jwkP5MxsbaC1WJEglSxOFAXIsFpVRE3ggi1K90obioRRBA33XXnQnciirhQcMCdorgQxBkXWlREkFKsWkv5npvckp/XnzRpKh64kLw733fffe9L/wrL0+mVUdO8uTSZ3MBL/we2qg4rkuSpodCELstXE46ziVkLQ6FQcGOmeSSq6wd4aV50d3drWjj8kQKZJTUc9kxFGenv79dZrDksTSTWWJp2QYtEPiErysyzdX0LsxsCQR8keX8gs6RHIk8ysdgKFg2G53mhuOPsshTlBjKaFo1g7SqLNoShKLdFXT8huQ/paLSbxatYnc2mHMM4hr18Vi8TIvCmXF3vYrW6cF23gGTOk0M1wA4RKvOmq6vLZRVJipvmSWT6tZ6CSEYkco5V50VPT4+D7RwOqi6RiSZm0fJ+vggSqkeoypdsNmuyelNwbXsbgvkWYMtzDWNvWaijoyOBqE+hVK8abcssUeXQ/YfKyi0gFYv1Ipgfoj34fYGTJLOYJA0ODirok32GLN8XhUWCwSes1hIwBg6LydJ/tEeRRapAdUp+wSAiZchtZZWWgAZ+JNpD8peYXQVK9UwUxNpzOK8pq97kURZhYTCKBwPD7h2zK+js7Myi7D8Fod+0TkMI8+EMAngLGc/WtBFWawkFHFnoj/t9KLgGmF0B3QfkxC+EarxkdhnFYlFLY06USqUwL7UMjICHfh/wOc2sCqhpxGbCkLvL7EUDbF73+6DkmVWB6zi7xUDQSLeYvWjAILvm9zEnkJhlbRcDQZcv6Kg2AipyT/Axw6wKlqVSqxDdjF8Izfod13qURdrG/nxehY+xGh+h0CSzKygGvSNQIcc097BI24jb9hax6kj2E7OrMFX1il+ICEf2NrPbhiXLl+fYl+U7zK4iYdsDcyLGf+ofFlkwcN+s10KhmpuYhhtm0hCLVIFL0MDsqNlDIqy9x2CLs1jL6OvrI7vPRbtohXG6eFmsFnHDGAp6n9AgyuVySRZrGvROxRgIfLXhzjrNYnNBUxNX/dMgRWT1mt4XLDovaApD53E9W3ilNX5M55LJHpRtIsgAvciR4WWcgK2Dvb1YqgXevmF8z2zEBTcKG39EfSKsT9EbhVUaI2FZO+oZIqImxol6j66/hcAu4sSN4vc1ZPoKeoE6RGhYL2YYA+ymOSSi0Z0wWntbtkGUWCvfSDXIxONraZ/FY90KUfNTpfC5spnNLgxoYNnR9RO4F8ofXEHOgogCQE99w+fF2Xw+b7O59rEOsyRqGEfpVoaDMQQ1CZrG46bcM6AZ0C/wPqNfHliqejyTySxh9TqQpL+xmbIlkB9SlAAAAABJRU5ErkJggg==" alt="Reset"></button><button state="menu" type="button" title="More Options" style="background-color: white; color: black; border: none; user-select: none; padding: 5px 12px; cursor: pointer; float: left; width: 40px; height: 25px; outline: 0px; vertical-align: baseline; line-height: 0;"><img style="height:95%; pointer-events: none;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAeCAYAAABE4bxTAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADoSURBVFhH7dc9CsJAFATgRxIIBCwCqZKATX5sbawsY2MvWOtF9AB6AU8gguAJbD2AnZ2VXQT/Ko2TYGCL2OYtYQc+BuYA+1hCtnCVwMm27SGaXpDJIAiCvCkVR05hGOZNN3HkFMdx3nQRR06+76/R1IcFLJlNQEWlmWlBTwJtKLKHynehZqnjOGM0PYWRVXk61C37p7xlZ3Hk5HneCk1dmMH811xGoKLSzDiQwIBZB4ocoPJdqNkDt2yKlueWRVGUtzy3rPwo3sWRU3nLjuLI6OO67oZM00wMw3hrmpZx0XU9syxrR0T0BeMpb9dneSR2AAAAAElFTkSuQmCC" alt="More Options"></button>
                                                        <div tabindex="-1" style="position: absolute; z-index: 1; user-select: none; cursor: pointer; right: 0px; top: 25px; min-width: 120px; outline: 0px; font-size: 14px; font-family: Arial, Helvetica, sans-serif; padding: 5px 0px; text-align: left; line-height: 10px; background-color: white; box-shadow: rgb(136, 136, 136) 2px 2px 10px; display: none;">
                                                            <div style="padding: 12px 8px; background-color: white; color: black;">Print</div>
                                                            <div style="padding: 12px 8px; background-color: white; color: black;">Save as JPEG</div>
                                                            <div style="padding: 12px 8px; background-color: white; color: black;">Save as PNG</div>
                                                        </div>
                                                    </div>
                                                    <div class="canvasjs-chart-tooltip" style="position: absolute; height: auto; box-shadow: rgba(0, 0, 0, 0.1) 1px 1px 2px 2px; z-index: 1000; pointer-events: none; display: none; border-radius: 5px;">
                                                        <div style=" width: auto;height: auto;min-width: 50px;line-height: auto;margin: 0px 0px 0px 0px;padding: 5px;font-family: Calibri, Arial, Georgia, serif;font-weight: normal;font-style: italic;font-size: 14px;color: #000000;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);text-align: left;border: 2px solid gray;background: rgba(255,255,255,.9);text-indent: 0px;white-space: nowrap;border-radius: 5px;-moz-user-select:none;-khtml-user-select: none;-webkit-user-select: none;-ms-user-select: none;user-select: none;} "> Sample Tooltip</div>
                                                    </div><a class="canvasjs-chart-credit" title="JavaScript Charts" style="outline:none;margin:0px;position:absolute;right:2px;top:436px;color:dimgrey;text-decoration:none;font-size:11px;font-family: Calibri, Lucida Grande, Lucida Sans Unicode, Arial, sans-serif" tabindex="-1" target="_blank" href="https://canvasjs.com/">CanvasJS.com</a>
                                                </div>
                                            </div>
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
                                        <div id="chartContainerMM" style="height: 450px; width: 100%;">
                                            <div class="canvasjs-chart-container" style="position: relative; text-align: left; cursor: auto; direction: ltr;"><canvas class="canvasjs-chart-canvas" width="656" height="450" style="position: absolute; user-select: none;"></canvas><canvas class="canvasjs-chart-canvas" width="656" height="450" style="position: absolute; -webkit-tap-highlight-color: transparent; user-select: none; cursor: default;"></canvas>
                                                <div class="canvasjs-chart-toolbar" style="position: absolute; right: 1px; top: 1px; border: 1px solid transparent;"><button state="pan" type="button" title="Pan" style="display: none; background-color: white; color: black; border-top: none; border-right: 1px solid rgb(33, 150, 243); border-bottom: none; border-left: none; border-image: initial; user-select: none; padding: 5px 12px; cursor: pointer; float: left; width: 40px; height: 25px; outline: 0px; vertical-align: baseline; line-height: 0;"><img style="height:95%; pointer-events: none;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAICSURBVEhLxZbPahNRGMUn/5MpuAiBEAIufQGfzr5E40YptBXajYzudCEuGqS+gGlrFwquDGRTutBdYfydzJ3LzeQmJGZue+Dw/Z17Mnfmu5Pof9Hr9Z61Wq0bWZMKj263O6xWq99wU9lOpzPMKgEhEcRucNOcioOK+0RzBhNvt9tPV4nmVF19+OWhVqt9xXgFXZq+8lCv119UKpUJ7iX2FmvFTKz8RH34YdBsNk8wVtjE4fGYwm8wrrDi3WBG5oKXZGRSS9hGuNFojLTe2lFz5xThWZIktayyiE2FdT3rzXBXz7krKiL8c17wAKFDjCus2AvW+YGZ9y2JF0VFRuMPfI//rsCE/C+s26s4gQu9ul7r4NteKx7H8XOC724xNNGbaNu++IrBqbOV7Tj3FgMRvc/YKOr3+3sE47wgEt/Bl/gaK5cHbNU11vYSXylfpK7XOvjuumPp4Wcoipu30Qsez2uMXYz4lfI+mOmwothY+SLiXJy7mKVpWs3Si0CoOMfeI9Od43Wic+jO+ZVv+crsm9QSNhUW9LXSeoPBYLXopthGuFQgdIxxhY+UDwlt1x5CZ1hX+NTUdt/OIvjKaDSmuOJfaIVNPKX+W18j/PLA2/kR44p5Sd8HbHngT/yTfNRWUXX14ZcL3wmX0+TLf8YO7CGT8yFE5zB3/gney25/OETRP9CtPDFe5jShAAAAAElFTkSuQmCC" alt="Pan"></button><button state="reset" type="button" title="Reset" style="display: none; background-color: white; color: black; border-top: none; border-right: 1px solid rgb(33, 150, 243); border-bottom: none; border-left: none; border-image: initial; user-select: none; padding: 5px 12px; cursor: pointer; float: left; width: 40px; height: 25px; outline: 0px; vertical-align: baseline; line-height: 0;"><img style="height:95%; pointer-events: none;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAeCAYAAABJ/8wUAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPjSURBVFhHxVdJaFNRFP1J/jwkP5MxsbaC1WJEglSxOFAXIsFpVRE3ggi1K90obioRRBA33XXnQnciirhQcMCdorgQxBkXWlREkFKsWkv5npvckp/XnzRpKh64kLw733fffe9L/wrL0+mVUdO8uTSZ3MBL/we2qg4rkuSpodCELstXE46ziVkLQ6FQcGOmeSSq6wd4aV50d3drWjj8kQKZJTUc9kxFGenv79dZrDksTSTWWJp2QYtEPiErysyzdX0LsxsCQR8keX8gs6RHIk8ysdgKFg2G53mhuOPsshTlBjKaFo1g7SqLNoShKLdFXT8huQ/paLSbxatYnc2mHMM4hr18Vi8TIvCmXF3vYrW6cF23gGTOk0M1wA4RKvOmq6vLZRVJipvmSWT6tZ6CSEYkco5V50VPT4+D7RwOqi6RiSZm0fJ+vggSqkeoypdsNmuyelNwbXsbgvkWYMtzDWNvWaijoyOBqE+hVK8abcssUeXQ/YfKyi0gFYv1Ipgfoj34fYGTJLOYJA0ODirok32GLN8XhUWCwSes1hIwBg6LydJ/tEeRRapAdUp+wSAiZchtZZWWgAZ+JNpD8peYXQVK9UwUxNpzOK8pq97kURZhYTCKBwPD7h2zK+js7Myi7D8Fod+0TkMI8+EMAngLGc/WtBFWawkFHFnoj/t9KLgGmF0B3QfkxC+EarxkdhnFYlFLY06USqUwL7UMjICHfh/wOc2sCqhpxGbCkLvL7EUDbF73+6DkmVWB6zi7xUDQSLeYvWjAILvm9zEnkJhlbRcDQZcv6Kg2AipyT/Axw6wKlqVSqxDdjF8Izfod13qURdrG/nxehY+xGh+h0CSzKygGvSNQIcc097BI24jb9hax6kj2E7OrMFX1il+ICEf2NrPbhiXLl+fYl+U7zK4iYdsDcyLGf+ofFlkwcN+s10KhmpuYhhtm0hCLVIFL0MDsqNlDIqy9x2CLs1jL6OvrI7vPRbtohXG6eFmsFnHDGAp6n9AgyuVySRZrGvROxRgIfLXhzjrNYnNBUxNX/dMgRWT1mt4XLDovaApD53E9W3ilNX5M55LJHpRtIsgAvciR4WWcgK2Dvb1YqgXevmF8z2zEBTcKG39EfSKsT9EbhVUaI2FZO+oZIqImxol6j66/hcAu4sSN4vc1ZPoKeoE6RGhYL2YYA+ymOSSi0Z0wWntbtkGUWCvfSDXIxONraZ/FY90KUfNTpfC5spnNLgxoYNnR9RO4F8ofXEHOgogCQE99w+fF2Xw+b7O59rEOsyRqGEfpVoaDMQQ1CZrG46bcM6AZ0C/wPqNfHliqejyTySxh9TqQpL+xmbIlkB9SlAAAAABJRU5ErkJggg==" alt="Reset"></button><button state="menu" type="button" title="More Options" style="background-color: white; color: black; border: none; user-select: none; padding: 5px 12px; cursor: pointer; float: left; width: 40px; height: 25px; outline: 0px; vertical-align: baseline; line-height: 0;"><img style="height:95%; pointer-events: none;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAeCAYAAABE4bxTAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADoSURBVFhH7dc9CsJAFATgRxIIBCwCqZKATX5sbawsY2MvWOtF9AB6AU8gguAJbD2AnZ2VXQT/Ko2TYGCL2OYtYQc+BuYA+1hCtnCVwMm27SGaXpDJIAiCvCkVR05hGOZNN3HkFMdx3nQRR06+76/R1IcFLJlNQEWlmWlBTwJtKLKHynehZqnjOGM0PYWRVXk61C37p7xlZ3Hk5HneCk1dmMH811xGoKLSzDiQwIBZB4ocoPJdqNkDt2yKlueWRVGUtzy3rPwo3sWRU3nLjuLI6OO67oZM00wMw3hrmpZx0XU9syxrR0T0BeMpb9dneSR2AAAAAElFTkSuQmCC" alt="More Options"></button>
                                                    <div tabindex="-1" style="position: absolute; z-index: 1; user-select: none; cursor: pointer; right: 0px; top: 25px; min-width: 120px; outline: 0px; font-size: 14px; font-family: Arial, Helvetica, sans-serif; padding: 5px 0px; text-align: left; line-height: 10px; background-color: white; box-shadow: rgb(136, 136, 136) 2px 2px 10px; display: none;">
                                                        <div style="padding: 12px 8px; background-color: white; color: black;">Print</div>
                                                        <div style="padding: 12px 8px; background-color: white; color: black;">Save as JPEG</div>
                                                        <div style="padding: 12px 8px; background-color: white; color: black;">Save as PNG</div>
                                                    </div>
                                                </div>
                                                <div class="canvasjs-chart-tooltip" style="position: absolute; height: auto; box-shadow: rgba(0, 0, 0, 0.1) 1px 1px 2px 2px; z-index: 1000; pointer-events: none; display: none; border-radius: 5px;">
                                                    <div style=" width: auto;height: auto;min-width: 50px;line-height: auto;margin: 0px 0px 0px 0px;padding: 5px;font-family: Calibri, Arial, Georgia, serif;font-weight: normal;font-style: italic;font-size: 14px;color: #000000;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);text-align: left;border: 2px solid gray;background: rgba(255,255,255,.9);text-indent: 0px;white-space: nowrap;border-radius: 5px;-moz-user-select:none;-khtml-user-select: none;-webkit-user-select: none;-ms-user-select: none;user-select: none;} "> Sample Tooltip</div>
                                                </div><a class="canvasjs-chart-credit" title="JavaScript Charts" style="outline:none;margin:0px;position:absolute;right:2px;top:436px;color:dimgrey;text-decoration:none;font-size:11px;font-family: Calibri, Lucida Grande, Lucida Sans Unicode, Arial, sans-serif" tabindex="-1" target="_blank" href="https://canvasjs.com/">CanvasJS.com</a>
                                            </div>
                                        </div>
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
                                    <div id="chartContainerPie" style="height: 450px; width: 100%;">
                                        <div class="canvasjs-chart-container" style="position: relative; text-align: left; cursor: auto; direction: ltr;"><canvas class="canvasjs-chart-canvas" width="686" height="450" style="position: absolute; user-select: none;"></canvas><canvas class="canvasjs-chart-canvas" width="686" height="450" style="position: absolute; -webkit-tap-highlight-color: transparent; user-select: none;"></canvas>
                                            <div class="canvasjs-chart-toolbar" style="position: absolute; right: 1px; top: 1px; border: 1px solid transparent;"><button state="menu" type="button" title="More Options" style="background-color: white; color: black; border: none; user-select: none; padding: 5px 12px; cursor: pointer; float: left; width: 40px; height: 25px; outline: 0px; vertical-align: baseline; line-height: 0;"><img style="height:95%; pointer-events: none;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAeCAYAAABE4bxTAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADoSURBVFhH7dc9CsJAFATgRxIIBCwCqZKATX5sbawsY2MvWOtF9AB6AU8gguAJbD2AnZ2VXQT/Ko2TYGCL2OYtYQc+BuYA+1hCtnCVwMm27SGaXpDJIAiCvCkVR05hGOZNN3HkFMdx3nQRR06+76/R1IcFLJlNQEWlmWlBTwJtKLKHynehZqnjOGM0PYWRVXk61C37p7xlZ3Hk5HneCk1dmMH811xGoKLSzDiQwIBZB4ocoPJdqNkDt2yKlueWRVGUtzy3rPwo3sWRU3nLjuLI6OO67oZM00wMw3hrmpZx0XU9syxrR0T0BeMpb9dneSR2AAAAAElFTkSuQmCC" alt="More Options"></button>
                                                <div tabindex="-1" style="position: absolute; z-index: 1; user-select: none; cursor: pointer; right: 0px; top: 25px; min-width: 120px; outline: 0px; font-size: 14px; font-family: Arial, Helvetica, sans-serif; padding: 5px 0px; text-align: left; line-height: 10px; background-color: white; box-shadow: rgb(136, 136, 136) 2px 2px 10px; display: none;">
                                                    <div style="padding: 12px 8px; background-color: white; color: black;">Print</div>
                                                    <div style="padding: 12px 8px; background-color: white; color: black;">Save as JPEG</div>
                                                    <div style="padding: 12px 8px; background-color: white; color: black;">Save as PNG</div>
                                                </div>
                                            </div>
                                            <div class="canvasjs-chart-tooltip" style="position: absolute; height: auto; box-shadow: rgba(0, 0, 0, 0.1) 1px 1px 2px 2px; z-index: 1000; pointer-events: none; display: none; border-radius: 5px;">
                                                <div style=" width: auto;height: auto;min-width: 50px;line-height: auto;margin: 0px 0px 0px 0px;padding: 5px;font-family: Calibri, Arial, Georgia, serif;font-weight: normal;font-style: italic;font-size: 14px;color: #000000;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);text-align: left;border: 2px solid gray;background: rgba(255,255,255,.9);text-indent: 0px;white-space: nowrap;border-radius: 5px;-moz-user-select:none;-khtml-user-select: none;-webkit-user-select: none;-ms-user-select: none;user-select: none;} "> Sample Tooltip</div>
                                            </div><a class="canvasjs-chart-credit" title="JavaScript Charts" style="outline:none;margin:0px;position:absolute;right:2px;top:436px;color:dimgrey;text-decoration:none;font-size:11px;font-family: Calibri, Lucida Grande, Lucida Sans Unicode, Arial, sans-serif" tabindex="-1" target="_blank" href="https://canvasjs.com/">CanvasJS.com</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--end col-lg-12-->

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

    <script src="script/jquery-1.10.2.min.js"></script>
    <script src="script/jquery-migrate-1.2.1.min.js"></script>
    <script src="script/jquery-ui.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/bootstrap-hover-dropdown.js"></script>
    <script src="script/html5shiv.js"></script>
    <script src="script/respond.min.js"></script>
    <script src="script/jquery.metisMenu.js"></script>
    <script src="script/jquery.slimscroll.js"></script>
    <script src="script/jquery.cookie.js"></script>
    <script src="script/icheck.min.js"></script>
    <script src="script/custom.min.js"></script>
    <script src="script/jquery.news-ticker.js"></script>
    <script src="script/jquery.menu.js"></script>
    <script src="script/pace.min.js"></script>
    <script src="script/holder.js"></script>
    <script src="script/responsive-tabs.js"></script>
    <script src="script/jquery.flot.js"></script>
    <script src="script/jquery.flot.categories.js"></script>
    <script src="script/jquery.flot.pie.js"></script>
    <script src="script/jquery.flot.tooltip.js"></script>
    <script src="script/jquery.flot.resize.js"></script>
    <script src="script/jquery.flot.fillbetween.js"></script>
    <script src="script/jquery.flot.stack.js"></script>
    <script src="script/jquery.flot.spline.js"></script>
    <script src="script/zabuto_calendar.min.js"></script>

    <script src="script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="script/highcharts.js"></script>
    <script src="script/data.js"></script>
    <script src="script/drilldown.js"></script>
    <script src="script/exporting.js"></script>
    <script src="script/highcharts-more.js"></script>
    <script src="script/charts-highchart-pie.js"></script>
    <script src="script/charts-highchart-more.js"></script>
    <script src="script/charts-flotchart.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>



    <span style="position: absolute; left: 0px; top: -20000px; padding: 0px; margin: 0px; border: none; white-space: pre; line-height: normal; font-family: &quot;Trebuchet MS&quot;, Helvetica, sans-serif; font-size: 14px; font-weight: normal; display: none;">Mpgyi</span>
</body>

</html>