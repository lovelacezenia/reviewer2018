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
	
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover_img_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<h1>Scoped Objects</h1>
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
					<h1>Scoped Objects(in Java Web)</h1>
					<p>-Object given a name and exposed in a given scope.</p>

					<h1>Types of Scoped Object:</h1>
					<h2>1. Context Scope</h2>
					<p>-Starts from the point where a web application is put into service (started) till it is removed from service (shutdown) or the web application is reloaded. Parameters/attributes within the application scope will be available to all requests and sessions.</p> 
					<p>-Available to everything as long as the application is running</p>
					<p>-Represents by Servlet Context</p>
				    <h2>2. Request Scope</h2>
				    <p>-Start from the moment an HTTP request hits a servlet in our web container and end when the servlet is done with delivering the HTTP response.</p>

						
					</div>
					<div class="col-md-6 col-md-push-1 animate-box">
						<div class="work-detail">
						<h3>3. Session Scope</h3>
						<p>-A session scope starts when a client (e.g. browser window) establishes connection with our web application till the point where the browser window is closed.</p>
						<p>-Session scope spans across multiple requests from the same client.</p>
                   		<p>-Session scope is denoted by javax.servlet.http.HttpSession interface.</p>
						<p>-Session object is available in a JSP page as an implicit object called session.</p> 
						<p>-In a servlet, you can get Session object by calling request.getSession().</p>
						<h3>4. JSP page Scope</h3>
						<p>-The page scope restricts the scpoe and lifetime of attributes to the same page where it was created.</p>
						<p>-It is available in a JSP page as an implicit object called pageScope.</p>

							

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
