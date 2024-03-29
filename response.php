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
                            <?php if (isset($_SESSION['user'])) {  ?>
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
    <div class="col-md-12 text-right">
      <p>Time Remaining : <span id="demo">Expired</span></p>
    </div>
    <section class="feature-area section-padding2 col-md-10">
      <?php 
      include 'includes/conn.php';
      $eid=$_SESSION['examid'];
        $sql1="SELECT * FROM userresponse U,questions Q  WHERE U.tid='$eid' AND U.qid=Q.id" ;
        $result= mysqli_query($db,$sql1);
        $c=1;
        while($c <= 10){

        $row1 = $result->fetch_assoc();
          $id=$row1['qid'];
          $uresult=$row1['response'];
          $uresponse=$row1['result'];
          ?>
          <table>
        <tr>
          <td style="width: 50px; text-align: center;"><?= $c ?> ) </td>
          <td colspan="3" style="line-height: 1em;"> <?= $row1['question'] ?></td>
        </tr>
        <tr>
          <td style="width: 50px; text-align: center;">A</td>
          <td> <?= $row1['A'] ?></td>
          <td><?php if ($uresponse==1 && $uresult==$row1['A'] ) { ?>
            <strong><span style='color: green;'>&nbsp;&#10004;</span></strong>
          <?php }else if ($uresponse==0 && $uresult==$row1['A'] ){ ?>
                <strong><span style='color: red;'>&nbsp;x</span></strong>
           <?php } ?>
          </td>
        </tr>
        <tr>
          <td style="width: 50px; text-align: center;">B</td>
          <td> <?= $row1['B'] ?></td>
          <td><?php if ($uresponse==1 && $uresult==$row1['B'] ) { ?>
            <strong><span style='color: green;'>&nbsp;&#10004;</span></strong>
          <?php }else if ($uresponse==0 && $uresult==$row1['B'] ) { ?>
              <strong><span style='color: red;'>&nbsp;x</span></strong>
           <?php } ?></td>
        </tr>
        <tr>
          <td style="width: 50px; text-align: center;">C</td>
          <td> <?= $row1['C'] ?></td>
          <td><?php if ($uresponse==1 && $uresult==$row1['C'] ) { ?>
            <strong><span style='color: green;'>&nbsp;&#10004;</span></strong>
          <?php }else if ($uresponse==0 && $uresult==$row1['C'] ) { ?>
                <strong><span style='color: red;'>&nbsp;x</span></strong>
           <?php } ?></td>
        </tr>
        <tr>
          <td style="width: 50px; text-align: center;">D</td>
          <td> <?= $row1['D'] ?></td>
          <td><?php if ($uresponse==1 && $uresult==$row1['D'] ) { ?>
            <strong><span style='color: green;'>&nbsp;&#10004;</span></strong>
          <?php }else if ($uresponse==0 && $uresult==$row1['D'] ) { ?>
            <strong><span style='color: red;'>&nbsp;x</span></strong>
           <?php } ?></td>
        </tr>
      </table>
      
      <!-- //     echo "<span id='Q'>".$c.") ".$row1['question']."</span>";
      //     echo "<p class='ansDiv'><ul>";
      //   if ($uresponse==1 && $uresult==$row1['A'] ) {
      //   echo "<li><strong><label class='ans' id='A'>A ) </label>";
      //   echo "<label class='ans' id='A'>".$row1['A']."</label>";
      //   echo "<span style='color: green;'>&nbsp;&#10004;</span></strong></li>";
      //   }elseif ($uresponse==0 && $uresult==$row1['A'] ) {
      //   echo "<li><strong><label class='ans' id='A'>A ) </label>";
      //   echo "<label class='ans' id='A'>".$row1['A']."</label>";
      //   echo "<span style='color: red;'>&nbsp;x</span></strong></li>";      
      //   }
      //   if($uresponse==0 &&  $row1['ans']==$row1['A']){
      //   echo "<li><label class='ans' id='A'>A ) </label>";
      //   echo "<label class='ans' id='A'>".$row1['A']."</label>";
      //   echo "<span>&nbsp;&#10004;</span> </li>";           
      //   }else{
      //   echo "<li><label class='ans' id='A'>A ) </label>";
      //   echo "<label class='ans' id='A'>".$row1['A']."</label>";
      //   echo "</li>"; 
      //   $c++;
      //   } -->

      <?php $c++; }
        ?>
       
    </section>
</i></div>