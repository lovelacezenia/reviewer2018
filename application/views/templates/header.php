
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Webtek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="assets/css/flexslider.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="assets/css/flexslider.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/webtek.png">
    

</head>

<body>
    <nav id="colorlib-main-nav" role="navigation">
        <a class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
        <div class="js-fullheight colorlib-table">
            <div class="colorlib-table-cell js-fullheight">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="notes">Notes</a></li>
                    <li><a href="quiz">Quiz</a></li>
                    <li><a href="developers">Developers</a></li>
                    <?php echo $this->session->userdata['user_in']['name'];?>
                    <?php
                    if(!isset($this->session->userdata['logged_in'])){
                        echo '<li><a href="login">Login</a></li>';
                    }else{
                        echo '<li><a href="login/logout">Logout</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div id="colorlib-page">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                    </div>
                </div>
            </div>
        </header>
                <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                <li style="background-image: url(assets/images/slide5.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
                                <div class="slider-text-inner">
                                    <h2>IT 324</h2>
                                    <h1>Web Systems And Technologies</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(assets/images/slide6.png);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
                                <div class="slider-text-inner">
                                    <h2>Sharing your knowledge with others,</h2>
                                    <h1>Does not make you less important.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(assets/images/slide4.png);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
                                <div class="slider-text-inner">
                                    <h2>Sharing will enrich everyone with more knowledge.</h2>
                                    <h1> - Ana Monnar </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
        </aside>
