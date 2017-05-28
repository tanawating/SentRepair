<!DOCTYPE html>
<html lang="th">
	<head>

		<meta charset="utf-8" />
		<title>ระบบส่งซ่อมร้านเขตต์ปริ้นเตอร์</title>

		<!-- Bootstrap -->
		<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Footer -->
		<link href="<?php echo base_url();?>assets/css/footer.css" rel="stylesheet"> 
		<!-- Font -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font.css">
		<!-- Form validator -->
		<link href="<?php echo base_url();?>assets/form_validator/validator.css" rel="stylesheet">
		<!-- Icon -->
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/image/icon.jpg">
		<!-- Ribbon -->
		<link href="<?php echo base_url();?>assets/css/ribbon.css" rel="stylesheet">
		<!-- Font awesome -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font_awesome/css/font-awesome.min.css">

	</head>

	<body>
		<img src = "<?php echo base_url();?>assets/image/ribbon.png" class="black-ribbon stick-top stick-left">
		<nav class="navbar  navbar-inverse  navbar-fixed-top">
			<div class="container">
				<ul class="nav navbar-nav navbar-left">
					<li class=""><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i> ระบบตรวจสอบการส่งซ่อมร้านเขตต์ปริ้นเตอร์</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class=""><a href="#" data-toggle="modal" data-target="#addcomment"><i class="fa fa-envelope-o" aria-hidden="true"></i> ส่งคำติชม</a> </li>
					<li class=""><a href="#" data-toggle="modal" data-target="#if"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> เงื่อนไขการซ่อม</a> </li>
					<li class=""><a href="#" data-toggle="modal" data-target="#contact"><i class="fa fa-address-book-o" aria-hidden="true"></i> ติดต่อร้าน</a> </li>
					<li> <a href="<?php echo base_url();?>home/login"><i class="fa fa-sign-in" aria-hidden="true"></i> เข้าสู่ระบบ</a> </li>
				</ul>
			</div>
		</nav>