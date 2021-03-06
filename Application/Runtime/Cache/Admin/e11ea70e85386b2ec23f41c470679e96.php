<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proton - Admin Template</title>

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="/0.btest/Public/admin/assets/ico/favicon.ico" type="image/x-icon" />
    <!-- Css files -->
    <link href="/0.btest/Public/admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/0.btest/Public/admin/assets/css/jquery.mmenu.css" rel="stylesheet">
    <link href="/0.btest/Public/admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/0.btest/Public/admin/assets/css/climacons-font.css" rel="stylesheet">
    <link href="/0.btest/Public/admin/assets/plugins/xcharts/css/xcharts.min.css" rel=" stylesheet">
    <link href="/0.btest/Public/admin/assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet">
    <link href="/0.btest/Public/admin/assets/plugins/morris/css/morris.css" rel="stylesheet">
    <link href="/0.btest/Public/admin/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <link href="/0.btest/Public/admin/assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="/0.btest/Public/admin/assets/css/style.min.css" rel="stylesheet">
    <link href="/0.btest/Public/admin/assets/css/add-ons.min.css" rel="stylesheet">
    <link href="/0.btest/Public/admin/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
</head>
</head>

<body>

<div class="container-fluid content">
	<div class="row col-lg-12 col-lg-12">
		<!-- start: Content -->
		<div style="margin-top: 10px;"></div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box red-bg">
					<i class="fa fa-thumbs-o-up"></i>
					<div class="count">356K</div>
					<div class="title">Order</div>
				</div>
				<!--/.info-box-->
			</div>
			<!--/.col-->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box green-bg">
					<i class="fa fa-cubes"></i>
					<div class="count">425K</div>
					<div class="title">Stock</div>
				</div>
				<!--/.info-box-->
			</div>
			<!--/.col-->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box blue-bg">
					<i class="fa fa-cloud-download"></i>
					<div class="count">325K</div>
					<div class="title">Download</div>
				</div>
				<!--/.info-box-->
			</div>
			<!--/.col-->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box magenta-bg">
					<i class="fa fa-shopping-cart"></i>
					<div class="count">259K</div>
					<div class="title">Purchased</div>
				</div>
				<!--/.info-box-->
			</div>
			<!--/.col-->
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-lg-9 col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-refresh green"></i>
						<h2><strong>Real-time updates</strong></h2>
						<div class="panel-actions">
							<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
							<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
							<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						</br/>
						<div id="realtime-update" style="height:200px;color:#484848;"></div>
					</div>
				</div>
			</div>
			<!--/col-->
			<div class="col-lg-3 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body white-bg">
						</br/>
						<div class="graph-container text-center">
							<div id="hero-donut" class="graph" style="height:236px;"></div>
						</div>
					</div>
				</div>
			</div>
			<!--/.col-->
		</div>
		<!--/.row-->
		<div class="row">

			<div class="col-lg-3 col-md-6">
				<div class="panel panel-default">
					<div class="panel-body text-center" style="height:230px">
						<h2 class="lime">Sold Out</h2>
						<div style="width:300px;left:50%;position:absolute;margin-left:-150px;">
							<canvas id="gauge1"></canvas>
						</div>
						<span class="pull-left"><strong class="blue">$256.256,25</strong></span>
						<span class="pull-right"><i class="fa fa-arrow-circle-o-up text-success"></i> 52%</span>
					</div>
				</div>
			</div>
			<!--/.col-->
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-default">
					<div class="panel-body text-center" style="height:230px">
						<h2 class="lime">Profit</h2>
						<div style="width:300px;left:50%;position:absolute;margin-left:-150px;">
							<canvas id="gauge2"></canvas>
						</div>
						<span class="pull-left"><strong class="blue">$125.365,56</strong></span>
						<span class="pull-right"><i class="fa fa-arrow-circle-o-up text-success"></i> 70%</span>
					</div>
				</div>
			</div>
			<!--/.col-->
		</div>
		<!--/row-->
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2><i class="fa fa-bar-chart-o red"></i><strong>xCharts</strong></h2>
						<div class="panel-actions">
							<a href="charts-xcharts.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
							<a href="charts-xcharts.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
							<a href="charts-xcharts.html#" class="btn-close"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<figure class="demo" id="chart" style="height: 300px"></figure>
					</div>
				</div>
			</div>
			<!--/col-->
		</div>
		<!--/row-->
		<div class="row">

			<div class="col-md-3">
				<div class="social-box facebook">
					<i class="fa fa-facebook"></i>
					<ul>
						<li>
							<strong>256k</strong>
							<span>friends</span>
						</li>
						<li>
							<strong>359</strong>
							<span>feeds</span>
						</li>
					</ul>
				</div>
				<!--/social-box-->
			</div>
			<!--/col-->
			<div class="col-md-3">
				<div class="social-box twitter">
					<i class="fa fa-twitter"></i>
					<ul>
						<li>
							<strong>1562k</strong>
							<span>followers</span>
						</li>
						<li>
							<strong>2562</strong>
							<span>tweets</span>
						</li>
					</ul>
				</div>
				<!--/social-box-->
			</div>
			<!--/col-->
			<div class="col-md-3">
				<div class="social-box linkedin">
					<i class="fa fa-linkedin"></i>
					<ul>
						<li>
							<strong>8926</strong>
							<span>contacts</span>
						</li>
						<li>
							<strong>6253</strong>
							<span>feeds</span>
						</li>
					</ul>
				</div>
				<!--/social-box-->
			</div>
			<!--/col-->
			<div class="col-md-3">
				<div class="social-box google-plus">
					<i class="fa fa-google-plus"></i>
					<ul>
						<li>
							<strong>962</strong>
							<span>followers</span>
						</li>
						<li>
							<strong>256</strong>
							<span>circles</span>
						</li>
					</ul>
				</div>
				<!--/social-box-->
			</div>
			<!--/col-->
		</div>
		<!--/row-->
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="panel panel-default calendar">
					<div class="calendar-small"></div>
					<div class="list">
						<ul>
							<li>
								<label class="custom-checkbox-item">
									<input class="custom-checkbox" type="checkbox" />
									<span class="custom-checkbox-mark"></span>
									<span class="custom-checkbox-desc">Lunch With Clients</span>
									<i class="fa fa-thumbs-o-up"></i>
								</label>
							</li>
							<li>
								<label class="custom-checkbox-item">
									<input class="custom-checkbox" type="checkbox" />
									<span class="custom-checkbox-mark"></span>
									<span class="custom-checkbox-desc">Meeting With All Staff</span>
									<i class="fa fa-space-shuttle"></i>
								</label>
							</li>
							<li>
								<label class="custom-checkbox-item">
									<input class="custom-checkbox" type="checkbox" />
									<span class="custom-checkbox-mark"></span>
									<span class="custom-checkbox-desc">Factory Birthday</span>
									<i class="fa fa-star-half-o"></i>
								</label>
							</li>
						</ul>
						<div class="row">
							<div class="col-xs-6">
								<button type="button" class="btn btn-success btn-block">Accept</button>
							</div>
							<!--/col-->
							<div class="col-xs-6">
								<button type="button" class="btn btn-default btn-block">Discard</button>
							</div>
							<!--/col-->
						</div>
						<!--/row-->
					</div>
				</div>
			</div>
			<!--/col-->
			<div class="col-lg-8 col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2><i class="fa fa-check red"></i><strong>To Do</strong></h2>
						<div class="panel-actions">
							<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
							<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
							<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body no-padding">
						<div class="todo-list">
							<div class="header">Today</div>
							<ul id="todo-2" class="todo-list-tasks">
								<li>
									<label class="custom-checkbox-item pull-left">
										<input class="custom-checkbox" type="checkbox" />
										<span class="custom-checkbox-mark"></span>
									</label>
									<span class="desc">Add slider home to creative template</span>
								</li>
								<li>
									<label class="custom-checkbox-item pull-left">
										<input class="custom-checkbox" type="checkbox" />
										<span class="custom-checkbox-mark"></span>
									</label>
									<span class="desc">Change portfolio image with new animation</span>
								</li>
								<li>
									<label class="custom-checkbox-item pull-left">
										<input class="custom-checkbox" type="checkbox" />
										<span class="custom-checkbox-mark"></span>
									</label>
									<span class="desc">Fixed JavaScript problem for index page</span>
								</li>
							</ul>
							<div class="header">Tommorow</div>
							<ul id="todo-3" class="todo-list-tasks">
								<li>
									<label class="custom-checkbox-item pull-left">
										<input class="custom-checkbox" type="checkbox" />
										<span class="custom-checkbox-mark"></span>
									</label>
									<span class="desc">Update sliding menu with newest</span>
								</li>
								<li>
									<label class="custom-checkbox-item pull-left">
										<input class="custom-checkbox" type="checkbox" />
										<span class="custom-checkbox-mark"></span>
									</label>
									<span class="desc">Change navigation structure on header</span>
								</li>
							</ul>
							<div class="header">Completed</div>
							<ul class="completed"></ul>
						</div>
					</div>
					<div class="panel-footer">
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Add new task">
						</div>
						<div class="btn-group">
							<button type="button" class="btn btn-link"><i class="fa fa-wheelchair"></i></button>
							<button type="button" class="btn btn-link"><i class="fa fa-file-text"></i></button>
							<button type="button" class="btn btn-link"><i class="fa fa-heart"></i></button>
						</div>
						<div class="pull-right">
							<button type="button" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<!--/col-->
		</div>
		<!--/row-->
		<!-- end: Content -->
	</div>
</div>


<!--/////////////////////////////-->
<!--/container-->
<div class="clearfix"></div>
<!-- start: JavaScript-->
<script src="/0.btest/Public/admin/assets/js/jquery-2.1.1.min.js"></script>
<script src="/0.btest/Public/admin/assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/0.btest/Public/admin/assets/js/jquery-2.1.1.min.js'>" + "<" + "/script>");
</script>

<script type="text/javascript">
    window.jQuery || document.write("<script src='/0.btest/Public/admin/assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
</script>

<![endif]-->
<script src="/0.btest/Public/admin/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/0.btest/Public/admin/assets/js/bootstrap.min.js"></script>
<!-- page scripts -->
<script src="/0.btest/Public/admin/assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/moment/moment.min.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
<!--[if lte IE 8]>
<script language="javascript" type="text/javascript" src="/0.btest/Public/admin/assets/plugins/excanvas/excanvas.min.js"></script>
<![endif]-->
<script src="/0.btest/Public/admin/assets/plugins/flot/jquery.flot.min.js"></script>
<!--<script src="/0.btest/Public/admin/assets/plugins/flot/jquery.flot.pie.min.js"></script>-->
<!--<script src="/0.btest/Public/admin/assets/plugins/flot/jquery.flot.stack.min.js"></script>-->
<!--<script src="/0.btest/Public/admin/assets/plugins/flot/jquery.flot.resize.min.js"></script>-->
<!--<script src="/0.btest/Public/admin/assets/plugins/flot/jquery.flot.time.min.js"></script>-->
<!--1-->
<script src="/0.btest/Public/admin/assets/plugins/flot/jquery.flot.spline.min.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/xcharts/js/xcharts.min.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/autosize/jquery.autosize.min.js"></script>

<script src="/0.btest/Public/admin/assets/plugins/placeholder/jquery.placeholder.min.js"></script>

<script src="/0.btest/Public/admin/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>

<script src="/0.btest/Public/admin/assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/raphael/raphael.min.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/morris/js/morris.min.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/jvectormap/js/gdp-data.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/gauge/gauge.min.js"></script>
<!-- theme scripts -->
<script src="/0.btest/Public/admin/assets/js/SmoothScroll.js"></script>
<script src="/0.btest/Public/admin/assets/js/jquery.mmenu.min.js"></script>
<script src="/0.btest/Public/admin/assets/js/core.min.js"></script>
<script src="/0.btest/Public/admin/assets/plugins/d3/d3.min.js"></script>
<!-- inline scripts related to this page -->
<script src="/0.btest/Public/admin/assets/js/pages/index.js"></script>
<!-- end: JavaScript-->
</body>

</html>