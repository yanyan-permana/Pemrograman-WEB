<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Absensi Online</title>

	<link href="layout/css/bootstrap.min.css" rel="stylesheet">
	<link href="layout/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="layout/css/plugins/iCheck/custom.css" rel="stylesheet">
	<link href="layout/css/animate.css" rel="stylesheet">
	<link href="layout/css/style.css" rel="stylesheet">
	<link href="layout/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

	<!-- Mainly scripts -->
	<script src="layout/js/jquery-3.1.1.min.js"></script>
	<script src="layout/js/popper.min.js"></script>
	<script src="layout/js/bootstrap.js"></script>
	<script src="layout/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="layout/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="layout/js/inspinia.js"></script>
	<script src="layout/js/plugins/pace/pace.min.js"></script>
	<script src="layout/js/plugins/datapicker/bootstrap-datepicker.js"></script>
	<script src="layout/js/plugins/iCheck/icheck.min.js"></script>
</head>

<body>
	<div id="wrapper">
		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav metismenu" id="side-menu">
					<li class="nav-header">
						<div class="dropdown profile-element">
							<img alt="image" class="rounded-circle" src="layout/img/profile_small.jpg" />
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<span class="block m-t-xs font-bold">David Williams</span>
								<span class="text-muted text-xs block">Art Director</span>
							</a>
						</div>
					</li>

					<?php
					include 'menu.php';
					?>
				</ul>

			</div>
		</nav>
		<div id="page-wrapper" class="gray-bg">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
						<form role="search" class="navbar-form-custom" action="search_results.html">
							<div class="form-group">
								<input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
							</div>
						</form>
					</div>
					<ul class="nav navbar-top-links navbar-right">

						<li>
							<a href="#">
								<i class="fa fa-sign-out"></i> Log out
							</a>
						</li>
					</ul>
				</nav>