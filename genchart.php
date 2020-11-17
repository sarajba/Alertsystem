<!DOCTYPE html>
<html lang="en">
<head>
    <title>GeoAlert | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Bootstrap css-->
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
    <link type="text/css" rel="stylesheet" href="styles/jplist-custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
    <style>
        canvas{
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        width: 100% !important;
        max-width: 1920px;
        height: auto !important;
        }
        td {
        text-align: center;
        }
        @media print
        {
        .noprint {display:none;}
        a:link:after, a:visited:after {
        content: "";
        }
        .page-content, .panel, .panel-body, .tab-general { border: none !important; } 
        }
        @media screen
        {

        }
        @page  
        { 
        /* size: auto;
        margin:0 -8cm; this affects the margin in the printer settings */ 
        } 
    </style>
    
    <script>    
        function toggle_res(source) 
        {
        checkboxes = document.getElementsByClassName('residence');
            for(var i=0, n=checkboxes.length;i<n;i++) 
            {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>
</head>
    
<body>
    <!--Main-->
    <div>
        <!--BEGIN BACK TO TOP-->
            <div class="noprint">
                
<!--BEGIN BACK TO TOP-->
<!--<a id="totop" href="#"><i class="fa fa-angle-up"></i></a>-->
<a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
<!--END BACK TO TOP-->

<!--BEGIN TOPBAR-->
<div id="header-topbar-option-demo" class="page-header-topbar">

    <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">

    <!DOCTYPE html>
<html>
    
<head>
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
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
    
<body>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html> 

      
       

    </div>
    </nav>

</div>
<!--END TOPBAR-->
            </div>
        <!--END TOPBAR-->
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div class="noprint">
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">
                        Charts
                    </div>
                </div>
        
                
        
                <div class="clearfix"></div>
            </div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
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
    <script src="script/highcharts.js"></script>
    <script src="script/data.js"></script>
    <script src="script/drilldown.js"></script>
    <script src="script/exporting.js"></script>
    <script src="script/highcharts-more.js"></script>
    <script src="script/charts-highchart-pie.js"></script>
    <script src="script/charts-highchart-more.js"></script>
    <script src="script/modernizr.min.js"></script>
    <script src="script/jplist.min.js"></script>
    <script src="script/jplist.js"></script>

    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>
</body>
</html>
