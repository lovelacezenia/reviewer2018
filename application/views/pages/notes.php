<?php
if(!isset($this->session->userdata['logged_in'])){
    header('location: login');
}
?>

<div id="colorlib-work">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2>WEBTEK FINALS</h2>
					</div>
				</div>
				<div class="row row-padded-bottom">
					<div class="col-md-6 animate-box text-center">
						<a href="work-single.html" class="work-img" style="background-image: url(assets/images/work-1.jpg);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-heart-outline"></i></span>
								<p class="tag"><span>Illustration</span>, <span>Logo</span></p>
								<h3>Work 01</h3>
								<span class="read-more">Read more <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>
					<div class="col-md-6 animate-box text-center">
						<a href="work-single.html" class="work-img" style="background-image: url(assets/images/work-2.jpg);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-heart-outline"></i></span>
								<p class="tag"><span>Web Design</span>, <span>UI</span></p>
								<h3>Work 02</h3>
								<span class="read-more">Read more <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<p class="prev-next">
						<a href="#" class="previous text-left"><i class="icon-arrow-left4"></i> Previous</a>
						<a href="#" class="next text-right">Next <i class="icon-arrow-right4"></i></a>
					</p>
				</div>
			</div>
		</div>

		<div id="colorlib-hire" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box">
						<h2 class="heading">Are you looking for a web designer?</h2>
						<p><a href="#" class="btn btn-primary btn-lg">Available for Hire!</a></p>
					</div>
				</div>
			</div>
		</div>
