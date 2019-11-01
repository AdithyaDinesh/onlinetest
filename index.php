<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Comport</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style type="text/css">
      form {
  display: grid;
}

#loginBox , #signinBox {
  width:100%;
  padding:1em;
}

#loginBox .signup, #signinBox .signup {
  min-width:200px;
  max-width:400px;
  padding:.8em 2em;
}

.login-container {
  min-width:200px;
  max-width:400px;
  background:#fff;
  border:1px solid #ccc;
  border-radius:8px;
}

label, input {
  display:block;
  padding: 1.2em;
}

input {
  width: 100%;
  border:1px solid #ccc;
  border-radius:4px;
  line-height: 1;
}

button[type="submit"] {
  width:100%;
  padding:10px;
  background:#00ccff;
  color:#fff;
  font:bold 14px Arial, sans-serif;
  border:none;
  border-radius:4px;
  line-height: 1;
  cursor:pointer;
  border:1px solid #fff;
  box-shadow: inset 0 0 2px 0 #333;
}

button[type="submit"]:hover {
  background:#0097bd;
  transition: background ease-in .1s;
}

/***TYPOGRAPHY***/
h1 {
  font: bold 32px Arial, sans-serif;
  text-align:center;
  text-shadow: 1px 2px 0 rgba(50, 50, 50, 0.8);
  background-color:#fff;
  color:transparent;
  background-clip:text;
}

p, label {
  font: 14px/14px "Arial", sans-serif;
  padding: .5em 0;
  color: #666;
}

p, a, a:link, a:visited, a:hover, a:active {
  font: 12px/14px "Arial", sans-serif;
  color: #666;
}

a:hover {
  font: 12px/14px "Arial", sans-serif;
  color: #000;
}


  </style>
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->
    <?php if(isset($_SESSION['message'])){ ?>
<div><p class="alert-danger"><?= $_SESSION['message'] ?></p></div>
<?php unset($_SESSION['message']); }?>
    <!-- Header Area Starts -->
	<header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.php">home</a></li>
                            <li><a href="about.html">about us</a></li>
                            
                            <?php
                            if (isset($_SESSION['user'])) {  ?>
                                <li class="menu-btn">
                                <a  class="login" href="includes/logout.php">
                                Logout / <?= $_SESSION['user'] ?>
                            </a>
                            </li>
                            <?php } else { ?>
                            <li class="menu-btn">
                                <a href="#" class="login"  data-toggle="collapse" data-target="#demoLogin">log in</a>
                                <button  class="template-btn"  type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">sign up</button>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    <div id="demo" class="collapse" style="position: absolute; z-index: 5; top: 22%; right :0;">
                        <div id="loginBox" class="login-container">
                              <form action="includes/newuser.php" method="post">
                              <div>
                                <h1>Member Sign In</h1>
                              </div>
                                  <div>
                                    <label for="name">Username</label>
                                    <input type="text" id="name" name="username" required>
                                  </div>
                                  <div>
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" required>
                                  </div>
                               <br>
                                <div>
                                  <button type="submit" name="submit">Submit</button>
                               </div>
                               <br>
                              </form>
                            </div>
                                                  
                  </div>
    <div id="demoLogin" class="collapse" style="position: absolute; z-index: 5; top: 22%; right: 0;">
                        <div id="signinBox" class="login-container">
                              <form action="includes/log.php" method="post">
                              <div>
                                <h1>Member Login</h1>
                              </div>
                                  <div>
                                    <label for="name">Username</label>
                                    <input type="text" id="name" name="username" required>
                                  </div>
                                  <div>
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" required>
                                  </div>
                                  <br>
                                <div>
                                  <button type="submit" name="submit">Submit</button>
                               </div>
                               <br>
                              </form>
                            </div>
                                                  
                  </div>

    <!-- Banner Area Starts -->
    <section class="banner-area" id="mainId">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <div class="banner-bg"></div>
                </div>
                <div class="col-lg-6 align-self-center">
                    
                    <div class="banner-text">
                        <h1>Get your dream <span>job</span></h1>
                        <p class="py-3">practice Aptitude questions and answers with anywhere and everywhere</p>
                        <a href="#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Banner Area End -->

   <?php if (isset($_SESSION['user'])) { ?>
    <!-- Feature Area Starts -->
    <section class="feature-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <img src="assets/images/cat6.png" alt="category">
                        <h4>Arthematic Aptitude</h4>
                        <p class="py-3">
                            Questions which cracks your mathematical skills.
                        </p>
                        <a href="includes/start.php?cat_id=1" class="secondary-btn">Take test now<span class="flaticon-next"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <img src="assets/images/cat1.png" alt="category">
                        <h4>Data Interpretation</h4>
                        <p class="py-3">Check how well you can interpret the datas.</p>
                        <a href="includes/start?cat_id=2" class="secondary-btn">Take test now<span class="flaticon-next"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <img src="assets/images/cat7.png" alt="category">
                        <h4>Actual aptitude</h4>
                        <p class="py-3">This contains both type of questions.</p>
                        <a href="includes/start?cat_id=3" class="secondary-btn">Take test now<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>
    <!-- Feature Area End -->
<?php } ?>



    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
