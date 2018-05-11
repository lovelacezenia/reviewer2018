<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Suitcase Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="work.html">Work</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="blog.html">Case Studies</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="index.html">Suitcase</a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover_img_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<h1>Servlets</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-work">
			<div class="container">
				<div class="row row-padded-bottom">
					<div class="col-md-6 animate-box">
						<H1>Java Servlets</H1>
						 <p>-Java Objects that are intended to play the role of server components client-server communications.</p>
						 <p>-Handles clients requests by generating responses to such requests.</p>
						  <p>-Hosted in a 'servlet container' that provides the environment,in which the servlet runs,as well as controls the 'servlet lifecycle'.</p>
						  <H1>HTTP Servlets</H1>
						  <p>-Used to handle HTTP request and generate HTTP responses.</p>
						 <p>-Hosted in a 'Web Container', which is a component in a java application server (e.g., Apache Tomcat,Red Hat,Jboss,Wildfly,Oracle Glassfish,IBM Websphere)</p>
						  <p>-The service() method call is routed to a doXXX() call, depending on the HTTP request method</p>
						  <p>-The doXXX() methods are passed two arguments.</p>
						  <h1>HTTP Servlet Request</h1>
						  <p>-Object Representation of HTTP request sent by the client and received by the servlet</p>
						  <h1>HTTP Servlet Response</h1>
						  <p>-Object representation of the HTTP response generated by the servlet and sent back to the requesting client</p>
						  <p>-Used to set information</p>
						 
					</div>
					<div class="col-md-6 col-md-push-1 animate-box">
						<div class="work-detail">
							<h1>Servlet Lifecycle</h1>
							<h2>Instantiation</h2>
							<p>-Creates an instance of the servlet to service client requests.</p>
							<p>-Invoked implicitly by the Servlet Container when the servlet is called upon to service a client requests and no instance currently exist.</p> 
							<h2>Initialization</h2>
							<p>-Invoked only once and is intended for any start up initialization code for the servlet.</p>
							<h2>Request Handling</h2>
							<p>-Invoked for each Client Request.</p>
							<p>-Servlet performs whatever logic necessary in order to serve the request and generate response.</p>
							<p>-Multiple client requests are typically handled by a single, multi-threaded servlet instance; thus care must be exercised to ensure that the code being run by the servlet is 'thread-safe'</p>
								</div>
					</div>
				</div>
				

		</div>

		
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

