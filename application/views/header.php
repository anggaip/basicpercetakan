<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sistem Pengendalian Stock Barang</title>

		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>asset/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>asset/css/kastem.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="./asset/js/html5shiv.js"></script>
<![endif]-->
    
	</head>
	<body>
		<div class="container main-page">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="jumbotron header">
							<p>
							<center>
							<h3 class="text-center">SISTEM PENGENDALIAN STOCK BARANG</h3>
							</center>
							</p>
					</div>

					<nav class="navbar navbar-inverse menu-atas" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-home"></span> FILE <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url().'login/logout'; ?>" onClick="return confirm('Apakah Anda benar-benar ingin keluar dari sistem?');"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
									</ul>
								</li>
							</ul>
							<li>
								<a href="<?php echo  base_url().'distributor' ?>"><span class="glyphicon glyphicon-save"></span> DATA DISTRIBUTOR</a>
							</li>
							<li>
								<a href="<?php echo  base_url().'barang' ?>"><span class="glyphicon glyphicon-open"></span> DATA BARANG</a>
							</li>
							<li>
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-book"></span> TRANSAKSI <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url().'pembelian' ?>"><span class="glyphicon glyphicon-print"></span> TRANSAKSI PEMBELIAN</a></li>
									<li><a href="<?php echo base_url().'penjualan' ?>"><span class="glyphicon glyphicon-print"></span> TRANSAKSI PENJUALAN</a></li>
								</ul>
							</li>
							<li>
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-book"></span> LAPORAN <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url().'laporan/distributor' ?>" target="_blank"><span class="glyphicon glyphicon-print"></span> LAPORAN DATA DISTRIBUTOR</a></li>
									<li><a href="<?php echo base_url().'laporan/barang' ?>" target="_blank"><span class="glyphicon glyphicon-print"></span> LAPORAN DATA BARANG</a></li>
								</ul>
							</li>
						</ul>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a><span class="glyphicon glyphicon-user"></span> Administrator</a>
								</li>
							</ul>
						</div>
					</nav>