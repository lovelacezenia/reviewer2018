<?php
if(isset($this->session->userdata['logged_in'])){
    if($this->session->userdata['logged_in']['position'] === 'Admin'){
        header('location: adminhome');
    }else{
        header('location: home');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/login.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/images/webtek.png">

    </head>

    <body>
        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            
                            <div id="login" class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login to our site</h3>
                                        <p>Enter username and password to log in:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                    <form method="POST" action="login/user_login_process">
                 
                    <?php
                    echo "<div class='error_msg'>";
                    if (isset($error_message)) {
                        echo $error_message;
                    }
                   
                    echo "</div>";
                    ?>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="login-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" name="idno" id="username" placeholder="Username..." class="form-username form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="password" id="password" placeholder="Password..." class="form-password form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn" value="login" name="submit">Sign in</button>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" onclick="togglediv()" class="btn">Create Account</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>

                            <!-- create account -->
                            <div id="signup" hidden  class="form-box">
                                <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Sign up now</h3>
                                        <p>Fill in the form below to get instant access:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                         
                            </div>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-first-name">First name</label>
                                            <input type="text" name="firstname" id="firstname" placeholder="First name..." class="form-first-name form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Last name</label>
                                            <input type="text" name="lastname" id="lastname" placeholder="Last name..." class="form-last-name form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" name="email" id="email" placeholder="Email..." class="form-email form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" name="idno" id="username" placeholder="Username..." class="form-username form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="password" id="password" placeholder="Password..." class="form-password form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Confirm Password</label>
                                            <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password..." class="form-password form-control">
                                        </div>
                                        <button type="submit" class="btn">Sign me up!</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div> 
                </div>
            </div>
            
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/reviewer.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>