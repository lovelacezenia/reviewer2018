<?php
if(!isset($this->session->userdata['logged_in'])){
    header('location: login');
}
?>

<div id="colorlib-work">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2>WEBTECH FINALS</h2>
					</div>
				</div><div class="row row-padded-bottom">
					<div class="col-md-6 animate-box text-center">
						<a href="php" class="work-img" style="background-image: url(assets/images/php.png);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-heart-outline"></i></span>
								<h3>PHP</h3>
								<span class="read-more">Read more <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>
				<div class="row row-padded-bottom">
					<div class="col-md-6 animate-box text-center">
						<a href="servlet" class="work-img" style="background-image: url(assets/images/servlets.png);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-heart-outline"></i></span>
								<h3>Servlet</h3>
								<span class="read-more">Read more <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>
					<div class="col-md-6 animate-box text-center">
						<a href="sessionhandler" class="work-img" style="background-image: url(assets/images/sh.png);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-heart-outline"></i></span>
								<h3>Session Handling</h3>
								<span class="read-more">Read more <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>
					<div class="col-md-6 animate-box text-center">
						<a href="ajax" class="work-img" style="background-image: url(assets/images/ajax.png);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-heart-outline"></i></span>
								<h3>Ajax</h3>
								<span class="read-more">Read more <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>
					<div class="col-md-6 animate-box text-center">
						<a href="ScopedObjects" class="work-img" style="background-image: url(assets/images/so.png);">
							<div class="overlay"></div>
							<div class="desc">
								<span class="icon"><i class="icon-heart-outline"></i></span>
								<h3>Scoped Objects</h3>
								<span class="read-more">Read more <i class="icon-arrow-right3"></i></span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
