<?php
	include('./config.php');
?>

<!DOCTYPE>
<html>
	<head>
		<!-- PAGE TITLE -------------------->
		<title> Reweb Consulting LLC </title>
		
		<!-- META TAGS --------------------->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="abstract" content="ReWeb Consulting LLC">
		<meta name="description" content="ReWeb Consulting LLC">
		
		<meta name="p:domain_verify" content="9883803b165004bd328a0f2be31a1571"/>
		
		<!-- DAMN FAVICONS ----------------->
		<!--[if IE]><link rel="shortcut icon" href="path/to/favicon.ico"><![endif]-->
		<link rel="icon" href="path/to/favicon.png">
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
		
		<!-- SITE FONTS -------------------->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
		<!-- SITE STYLES ------------------->
		<link type="text/css" rel="stylesheet" media="all" href="./themes/default/stylesheet.css" />
		<link type="text/css" rel="stylesheet" media="print" href="#" />
		<link type="text/css" rel="stylesheet" media="screen" href="#" />
		
		<!-- SITE SCRIPTS ------------------>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		
	</head>
	<body>
		<!-- HEADER SECTION ---------------->
		<div class="header">
			<div class="header" id="logo"></div>
		</div>
		
		<!-- SUB HEADER SECTION ------------>
		<div class="subHeader">
			<ul>
				<li>Home</li>
				<li>About Us</li>
				<li>Contact Us</li>
				<li>Services</li>
				<li>Pricing</li>
				<li>Portfolio</li>
			</ul>
		</div>


		<script>
			$(document).ready(function(){
				$("#flashCard").mouseenter(function(){
					$("#underCard").slideDown();
					$("#flashCard").slideUp();
				});
				$(".btn2").click(function(){
					$("p").slideDown();
				});
			});
		</script>		
		
		<div class="pageContent">
			<center>
				<div id="flashCard">
					<i class="fa fa-bolt" aria-hidden="true" style="font-size: 170px; color: #f2f2f2; margin-top: 35px; position: absolute; margin-left: -40px;"></i>
					<h1 style="z-index: 2; position: absolute; margin-left: 10px;">Lightning Fast</h1>
				</div>
			
				<div id="flashCard">
					Working on the web, however, is a wholly different matter. Our work is defined by its transience, often refined or replaced within a year or two. Inconsistent window widths, screen resolutions, user preferences, and our users’ installed fonts are but a few.
				</div>
				
				<div id="flashCard">
					Working on the web, however, is a wholly different matter. Our work is defined by its transience, often refined or replaced within a year or two. Inconsistent window widths, screen resolutions, user preferences, and our users’ installed fonts are but a few.
				</div>
				
				<div id="flashCard">
					Working on the web, however, is a wholly different matter. Our work is defined by its transience, often refined or replaced within a year or two. Inconsistent window widths, screen resolutions, user preferences, and our users’ installed fonts are but a few.
				</div>
				
				<div id="flashCard">
					Working on the web, however, is a wholly different matter. Our work is defined by its transience, often refined or replaced within a year or two. Inconsistent window widths, screen resolutions, user preferences, and our users’ installed fonts are but a few.
				</div>
				
				<div id="flashCard">
					Working on the web, however, is a wholly different matter. Our work is defined by its transience, often refined or replaced within a year or two. Inconsistent window widths, screen resolutions, user preferences, and our users’ installed fonts are but a few.
				</div>
			</center>
		</div>
	</body>
</html>	
