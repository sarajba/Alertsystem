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
  <title>Alerms| MySTAR GeoAlert</title>
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

  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>

  <div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <a href="welcome.php">
          <h3>GeoAlertSystem</h3>
        </a>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="#" class="list-items"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a>
        </li>
        <li>
          <a href="#" class="list-items"><i class="fas fa-map-marker-alt"></i>&nbsp; Nodes</a>
        </li>
        <li>
          <a href="Alerms.php" class="list-items"><i class="fas fa-bell fa fw"></i>&nbsp; Alerms</a>
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
            <a class="animated-icon1" href="#"><span></span><span></span><span></span></a>
          </div>
        </div>
      </nav>
	 
	  <style>
* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
body {
	margin: 0;
}
html {
	font-family: sans-serif;
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
}
button, input, optgroup, select, textarea {
	color: inherit;
	font: inherit;
	margin: 0;
}
button {
	overflow: visible;
}
button, select {
	text-transform: none;
}
button, html input[type=button], input[type=reset], input[type=submit] {
	-webkit-appearance: button;
	cursor: pointer;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
input {
	line-height: normal;
}
::before, ::after {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
body {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 14px;
	line-height: 1.4285;
	color: #333;
	background-color: #fff;
}
html {
	font-size: 62.5%;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
input, button, select, textarea {
	font-family: inherit;
	font-size: inherit;
	line-height: inherit;
}
ul, ol {
	margin-top: 0px;
	margin-bottom: 10px;
}
p {
	margin: 0 0 10px;
}
table {
	max-width: 100%;
	background-color: transparent;
}
*::before, *::after {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.page-content {
	padding: 20px 20px 50px 20px;
	min-height: 700px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
	position: relative;
	min-height: 1px;
	padding-left: 15px;
	padding-right: 15px;
}
/* @media all and (min-width:1200px) */
.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
	float: left;
}
/* @media all and (min-width:1200px) */
.col-lg-12 {
	width: 100%;
}
.row {
	margin-left: -15px;
	margin-right: -15px;
}
.mbl, .mvl, .mal {
	margin-bottom: 20px !important;
}
.panel-body {
	padding: 15px;
}
.clearfix::before, .clearfix::after, .container::before, .container::after, .container-fluid::before, .container-fluid::after, .row::before, .row::after, .form-horizontal .form-group::before, .form-horizontal .form-group::after, .btn-toolbar::before, .btn-toolbar::after, .btn-group-vertical > .btn-group::before, .btn-group-vertical > .btn-group::after, .nav::before, .nav::after, .navbar::before, .navbar::after, .navbar-header::before, .navbar-header::after, .navbar-collapse::before, .navbar-collapse::after, .pager::before, .pager::after, .panel-body::before, .panel-body::after, .modal-footer::before, .modal-footer::after {
	content: " ";
	display: table;
}
.clearfix::after, .container::after, .container-fluid::after, .row::after, .form-horizontal .form-group::after, .btn-toolbar::after, .btn-group-vertical > .btn-group::after, .nav::after, .navbar::after, .navbar-header::after, .navbar-collapse::after, .pager::after, .panel-body::after, .modal-footer::after {
	clear: both;
}
body {
	font-family: "Open Sans", sans-serif;
	font-size: 13px;
	line-height: 1.4285;
	color: #999999;
	background-color: #f0f2f5;
	height: 100%;
}
body {
	font-family: "Lato", sans-serif;
}
html {
	font-size: 62.5%;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	height: 100%;
}
.panel {
	margin-bottom: 20px;
	background-color: #fff;
	border: 1px solid transparent;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
	box-shadow: 0px 1px 1px rgba(0,0,0,0.05);
}
.panel {
	-webkit-box-shadow: none !important;
	box-shadow: none !important;
	-webkit-border-radius: 0 !important;
	-moz-border-radius: 0 !important;
	border-radius: 0 !important;
	border: 5px solid #e5e5e5;
	border-radius: 0 !important;
	box-shadow: none !important;
}
.jplist-ios-button {
	display: none;
}
.jplist-panel {
	color: #27252a;
	clear: both;
}
input, button, select, textarea {
	font-family: inherit;
	font-size: inherit;
	line-height: inherit;
}
.form-control {
	display: block;
	width: 100%;
	height: 34px;
	padding: 6px 12px;
	font-size: 14px;
	line-height: 1.4285;
	color: #555;
	background-color: #fff;
	background-image: none;
	border: 1px solid #ccc;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
	box-shadow: inset 0px 1px 1px rgba(0,0,0,0.075);
	-webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
	transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control {
	-webkit-box-shadow: none !important;
	box-shadow: none !important;
	border-color: #e5e5e5;
	-webkit-border-radius: 0 !important;
	-moz-border-radius: 0 !important;
	border-radius: 0 !important;
}
.jplist-drop-down {
	float: left;
	position: relative;
	width: 170px;
	margin: 10px 10px 0 0;
}
.btn {
	display: inline-block;
	margin-bottom: 0px;
	font-weight: 400;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	border: 1px solid transparent;
	white-space: nowrap;
	padding: 6px 12px;
	font-size: 14px;
	line-height: 1.4285;
	border-radius: 4px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.btn-default {
	color: #333;
	background-color: #fff;
	border-color: #ccc;
}
.btn {
	outline: none !important;
	-webkit-border-radius: 0 !important;
	-moz-border-radius: 0 !important;
	border-radius: 0 !important;
}
.btn-default {
	background: #f2f5f7;
	background: -moz-linear-gradient(top, #f2f5f7 0%, #f6f8f9 50%, #d7dee3 50%, #d7dee3 50%, #d7dee3 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f2f5f7), color-stop(50%,#f6f8f9), color-stop(50%,#d7dee3), color-stop(50%,#d7dee3), color-stop(100%,#d7dee3));
	background: -webkit-linear-gradient(top, #f2f5f7 0%,#f6f8f9 50%,#d7dee3 50%,#d7dee3 50%,#d7dee3 100%);
	background: -o-linear-gradient(top, #f2f5f7 0%,#f6f8f9 50%,#d7dee3 50%,#d7dee3 50%,#d7dee3 100%);
	background: -ms-linear-gradient(top, #f2f5f7 0%,#f6f8f9 50%,#d7dee3 50%,#d7dee3 50%,#d7dee3 100%);
	background: linear-gradient(to bottom, #f2f5f7 0%,#f6f8f9 50%,#d7dee3 50%,#d7dee3 50%,#d7dee3 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f5f7', endColorstr='#d7dee3',GradientType=0 );
	color: #58636b;
	-webkit-border-radius: 5px !important;
	-moz-border-radius: 5px !important;
	border-radius: 5px !important;
}
.jplist-empty {
	display: none;
}
.jplist-label {
	float: left;
	margin: 10px 10px 0 0;
}
.jplist-hidden {
	display: none;
}
.jplist-panel .jplist-pagination {
	cursor: pointer;
	float: left;
}
.jplist-panel .jplist-pagination .jplist-pagingprev, .jplist-panel .jplist-pagination .jplist-pagingmid, .jplist-panel .jplist-pagination .jplist-pagingnext {
	float: left;
}
.jplist-panel button {
	float: left;
	margin: 10px 10px 0 0;
}
.jplist-panel .jplist-pagination button {
	border: 1px solid #e5e5e5;
}
.jplist-panel .jplist-pagination button {
	display: inline-block;
	color: #999;
	background: #efefef;
	border: 3px solid #e5e5e5;
	margin-bottom: 0px;
	font-weight: 400;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	white-space: nowrap;
	padding: 6px 12px;
	font-size: 14px;
	line-height: 1.4285;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.jplist-drop-down .jplist-dd-panel {
	float: left;
	width: 157px;
	overflow: hidden;
	text-indent: 10px;
	cursor: pointer;
}
.jplist-drop-down .jplist-dd-panel::after {
	content: "\25BC";
	color: #999;
	display: inline-block;
	float: right;
	margin: 0 10px;
}
.panel-bottom .jplist-drop-down .jplist-dd-panel::after {
	content: "\25B2";
}
.dropdown-menu {
	position: absolute;
	top: 100%;
	left: 0px;
	z-index: 1000;
	display: none;
	float: left;
	min-width: 160px;
	padding: 5px 0;
	margin: 2px 0 0;
	list-style: none;
	font-size: 14px;
	background-color: #fff;
	border: 1px solid #ccc;
	border: 1px solid rgba(0, 0, 0, .15);
	border-radius: 4px;
	-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
	box-shadow: 0px 6px 12px rgba(0,0,0,0.175);
	background-clip: padding-box;
}
.dropdown-menu {
	margin: 0;
	padding: 0;
	border: 0;
	border-radius: 0;
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15) !important;
	box-shadow: 0px 1px 1px rgba(0,0,0,0.15) !important;
}
.jplist-drop-down ul {
	position: absolute;
	top: 100%;
	left: -3px;
	z-index: 1000;
	min-width: 170px;
	display: none;
	overflow: hidden;
	background: #fff;
	list-style: none;
	margin-top: 5px;
	padding: 0;
}
.panel-bottom .jplist-drop-down ul {
	top: auto;
	bottom: 100%;
	margin-top: 0px;
	margin-bottom: 5px;
}
.jplist-drop-down ul li {
	width: 100%;
	float: left;
	height: 30px;
	line-height: 30px;
	text-indent: 10px;
	cursor: pointer;
}
.fa {
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
.mls, .mhs, .mas {
	margin-left: 5px !important;
}
[class^='fa-'], [class^='glyphicon-'], [class^='icon-'], [class*=' fa-'], [class*=' glyphicon-'], [class*=' icon-'] {
	display: inline-block;
	margin-top: 1px;
	font-size: 14px;
	*margin-right: .3em: ;
	line-height: 14px;
	-webkit-font-smoothing: antialiased;
}
.fa-unsorted::before, .fa-sort::before {
	content: "\f0dc";
}
.demo-tbl {
	background: #fff;
	width: 100%;
	float: left;
	border-collapse: collapse;
	border-right: 1px solid #dbdbdb;
	border-bottom: 1px solid #dbdbdb;
	margin: 30px 0;
}
.jplist-panel .text-filter-box {
	float: left;
	margin: 10px 10px 0 0;
}
.input-group {
	position: relative;
	display: table;
	border-collapse: separate;
}
.jplist-panel .text-filter-box .input-group {
	width: 200px;
}
:-ms-input-placeholder.form-control {
	color: #999;
}
.input-group .form-control {
	position: relative;
	z-index: 2;
	float: left;
	width: 100%;
	margin-bottom: 0px;
}
.input-group-addon, .input-group-btn, .input-group .form-control {
	display: table-cell;
}
.input-group-addon, .input-group-btn {
	width: 1%;
	white-space: nowrap;
	vertical-align: middle;
}
.input-group-addon {
	padding: 6px 12px;
	font-size: 14px;
	font-weight: 400;
	line-height: 1;
	color: #555;
	text-align: center;
	background-color: #eee;
	border: 1px solid #ccc;
	border-radius: 4px;
}
.input-group :first-child.form-control, :first-child.input-group-addon, :first-child.input-group-btn > .btn, :first-child.input-group-btn > .btn-group > .btn, :first-child.input-group-btn > .dropdown-toggle, :last-child.input-group-btn > :not(:last-child):not(.dropdown-toggle).btn, :last-child.input-group-btn > :not(:last-child).btn-group > .btn {
	border-bottom-right-radius: 0px;
	border-top-right-radius: 0px;
}
:first-child.input-group-addon {
	border-right: 0;
}
.input-group .input-group-addon {
	color: #999999;
	border-color: #e5e5e5;
	-webkit-border-radius: 0 !important;
	-moz-border-radius: 0 !important;
	border-radius: 0 !important;
}
.input-group :first-child.form-control, :first-child.input-group-addon, :first-child.input-group-btn > .btn, :first-child.input-group-btn > .btn-group > .btn, :first-child.input-group-btn > .dropdown-toggle, :last-child.input-group-btn > :not(:last-child):not(.dropdown-toggle).btn, :last-child.input-group-btn > :not(:last-child).btn-group > .btn {
	border-bottom-right-radius: 0px !important;
	border-top-right-radius: 0px !important;
}
.input-group :first-child.form-control, :first-child.input-group-addon, :first-child.input-group-btn > .btn, :first-child.input-group-btn > .btn-group > .btn, :first-child.input-group-btn > .dropdown-toggle, :last-child.input-group-btn > :not(:last-child):not(.dropdown-toggle).btn, :last-child.input-group-btn > :not(:last-child).btn-group > .btn {
	border-bottom-right-radius: 0px !important;
	border-top-right-radius: 0px !important;
}
.jplist-panel input[type='text'], .jplist-panel select {
	float: left;
	width: 150px;
	text-indent: 5px;
}
.input-group :last-child.form-control, :last-child.input-group-addon, :last-child.input-group-btn > .btn, :last-child.input-group-btn > .btn-group > .btn, :last-child.input-group-btn > .dropdown-toggle, :first-child.input-group-btn > :not(:first-child).btn, :first-child.input-group-btn > :not(:first-child).btn-group > .btn {
	border-bottom-left-radius: 0px;
	border-top-left-radius: 0px;
}
.input-group :last-child.form-control, :last-child.input-group-addon, :last-child.input-group-btn > .btn, :last-child.input-group-btn > .btn-group > .btn, :last-child.input-group-btn > .dropdown-toggle, :first-child.input-group-btn > :not(:first-child).btn, :first-child.input-group-btn > :not(:first-child).btn-group > .btn {
	border-bottom-left-radius: 0px !important;
	border-top-left-radius: 0px !important;
}
.input-group :last-child.form-control, :last-child.input-group-addon, :last-child.input-group-btn > .btn, :last-child.input-group-btn > .btn-group > .btn, :last-child.input-group-btn > .dropdown-toggle, :first-child.input-group-btn > :not(:first-child).btn, :first-child.input-group-btn > :not(:first-child).btn-group > .btn {
	border-bottom-left-radius: 0px !important;
	border-top-left-radius: 0px !important;
}
.fa-search::before {
	content: "\f002";
}
.fa-mail-forward::before, .fa-share::before {
	content: "\f064";
}
.jplist-panel button i {
	font-size: 18px;
}
</style>
</head>








<body class="  pace-done"><div><div class="page-content"><div id="tab-general"><div class="row mbl"><div class="col-lg-12"><div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="box jplist" id="grid-layout-table-1">
                                    <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                    <div class="jplist-panel box panel-top">
                                        <button class="jplist-reset-btn btn btn-default" type="button" data-control-action="reset" data-control-name="reset" data-control-type="reset">Reset<i class="fa fa-share mls"></i></button>

                                        <div class="jplist-drop-down form-control" data-control-action="paging" data-control-name="paging" data-control-type="drop-down"><div class="jplist-dd-panel"> view all</div>
                                            <ul class="dropdown-menu" style="display: none;">
                                                <li><span data-number="3"> 3 per page</span></li>
                                                <li><span data-number="5"> 5 per page</span></li>
                                                <li><span data-number="10"> 10 per page</span></li>
                                                <li class="active"><span data-number="all" data-default="true"> view all</span></li>
                                            </ul>
                                        </div>


                                        <div class="jplist-drop-down form-control" data-control-action="sort" data-control-name="sort" data-control-type="drop-down" data-datetime-format="{month}/{day}/{year}"><div class="jplist-dd-panel">Node ID A-Z</div>
                                            <ul class="dropdown-menu" style="display: none;">
                                                <li><span data-path="default">Sort by</span></li>
                                                <li class="active"><span data-default="true" data-path=".title" data-type="text" data-order="asc">Node ID A-Z</span></li>
                                                <li><span data-path=".title" data-type="text" data-order="desc">Node ID Z-A</span></li>
                                                <!--<li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>-->
                                                <li><span data-path=".like" data-type="text" data-order="asc">Alarm</span></li>
                                                <!--<li><span data-path=".like" data-order="desc" data-type="text"> desc</span></li>
                                                <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>-->
                                            </ul>
                                        </div>

                                        <div style="display: inline-block;">
                                        <div class="text-filter-box">
                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control" type="text" placeholder="Filter by Node ID" value="" data-control-action="filter" data-control-name="title-filter" data-control-type="textbox" data-path=".title"></div>
                                        </div>
                                        <div class="text-filter-box">
                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control" type="text" placeholder="Filter by Description" value="" data-control-action="filter" data-control-name="desc-filter" data-control-type="textbox" data-path=".desc"></div>
                                        </div>
                                        <div class="text-filter-box">
                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control" type="text" placeholder="Filter by Alarm" value="" data-control-action="filter" data-control-name="like-filter" data-control-type="textbox" data-path=".like"></div>
                                        </div>
                                      </div>

                                        <div class="jplist-label btn btn-default jplist-empty" data-control-action="paging" data-control-name="paging" data-control-type="pagination-info" data-type="Page {current} of {pages}"></div>
                                        <div class="jplist-pagination jplist-hidden" data-control-action="paging" data-control-name="paging" data-control-type="pagination"><div class="jplist-pagingprev jplist-hidden" data-type="pagingprev"><button class="jplist-first" type="button" data-number="0" data-type="first">«</button><button class="jplist-prev" type="button" data-type="prev">‹</button></div><div class="jplist-pagingmid" data-type="pagingmid"></div><div class="jplist-pagingnext" data-type="pagingnext"><button class="jplist-next" type="button" data-type="next">›</button><button class="jplist-last" type="button" data-type="last">»</button></div></div>

                                      </div>

                                    <div class="box text-shadow">
                                        <table class="demo-tbl jplist-hidden"><!--<item>1</item>-->

                                          
<style>
.buttonAdvisory {
    background-color: #36a2df;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
    
.buttonWatch {
    background-color: orange; /* Green */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.buttonDanger {
    background-color: red; 
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
    
.buttonAck {
    background-color: gray; /* Green */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.buttonH:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>


<script>
function myFunction() {
    location.reload();
}
</script>
</table>

                                    </div>
                                    <div class="box jplist-no-results text-shadow align-center"><p>No results found</p></div>
                                    <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                    <div class="jplist-panel box panel-bottom">
                                        <div class="jplist-drop-down form-control" data-control-action="paging" data-control-name="paging" data-control-type="drop-down" data-control-animate-to-top="true"><div class="jplist-dd-panel"> view all</div>
                                            <ul class="dropdown-menu" style="display: none;">
                                                <li><span data-number="3"> 3 per page</span></li>
                                                <li><span data-number="5"> 5 per page</span></li>
                                                <li><span data-number="10"> 10 per page</span></li>
                                                <li class="active"><span data-number="all" data-default="true"> view all</span></li>
                                            </ul>
                                        </div>
                                        <div class="jplist-drop-down form-control" data-control-action="sort" data-control-name="sort" data-control-type="drop-down" data-datetime-format="{year}/{month}/{day}" data-control-animate-to-top="true"><div class="jplist-dd-panel">Node ID A-Z</div>
                                            <ul class="dropdown-menu" style="display: none;">
                                                <li><span data-path="default">Sort by</span></li>
                                                <li class="active"><span data-default="true" data-path=".title" data-type="text" data-order="asc">Node ID A-Z</span></li>
                                                <li><span data-path=".title" data-type="text" data-order="desc">Node ID Z-A</span></li>
                                                <li><span data-path=".like" data-type="text" data-order="asc">Alarm</span></li>
                                            </ul>
                                        </div>
                                        <div class="jplist-label btn btn-default jplist-empty" data-control-action="paging" data-control-name="paging" data-control-type="pagination-info" data-type="{start} - {end} of {all}"></div>
                                        <div class="jplist-pagination jplist-hidden" data-control-action="paging" data-control-name="paging" data-control-type="pagination" data-control-animate-to-top="true"><div class="jplist-pagingprev jplist-hidden" data-type="pagingprev"><button class="jplist-first" type="button" data-number="0" data-type="first">«</button><button class="jplist-prev" type="button" data-type="prev">‹</button></div><div class="jplist-pagingmid" data-type="pagingmid"></div><div class="jplist-pagingnext" data-type="pagingnext"><button class="jplist-next" type="button" data-type="next">›</button><button class="jplist-last" type="button" data-type="last">»</button></div></div>
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
</div>
</body>





    </div>
  </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
      });
    });
  </script>
</body>
</html>
