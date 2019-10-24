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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
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
form input[type=radio]{
  display: inline-block;
}
#Q{
  font-family: 'PT Serif', serif;
  font-size: 1.5em;
}

  </style>
  <script type="text/javascript">
function callme()
{

    $('p #aa').text="aaa";
    alert();
}  
</script>
</head>
<body>
    <!-- Preloader Starts -->
    <!-- <div class="preloader">
        <div class="spinner"></div>
    </div> -->
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
                            <li><a href="job-category.html">category</a></li>
                            <li><a href="#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-home.html">Blog Home</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">contact</a></li>
                            <li><a href="#">pages</a>
                                <ul class="sub-menu">
                                    <li><a href="job-search.html">Job Search</a></li>
                                    <li><a href="job-single.html">Job Single</a></li>
                                    <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <?php
                            if (isset($_SESSION['user'])) {  ?>
                                <li class="menu-btn">
                                <a  class="login" href="includes/logout.php">
                                Logout
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
    <?php include('includes/shuffle.php'); ?>


    <div class="col-md-12 text-right">
      <p>Time Remaining : <span id="demo">1111</span></p>
    </div>
    <section class="feature-area section-padding2 col-md-10">
       
    </section>

</i></div>
