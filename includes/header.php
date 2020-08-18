<?php
$servername = "localhost";
$server_user = "root";
$server_password = "";
$db= "sh_aviation";

// Create connection 
$conn = mysqli_connect($servername, $server_user, $server_password,$db);

if ($conn == true) {
  //echo "connected<br>";
}else{
  echo "not connected<br>";
}


// session_start();
session_start();
//checking if the user is logged in
if(isset($_SESSION['user_email'])){
	$user_email=$_SESSION['user_email'];
	$name=$_SESSION['name'];
	$user_id=$_SESSION['user_id'];
	$isAdmin=$_SESSION['isAdmin'];
  $loggin_status = 'Logged in';
  $loggedin = true;
  }else{
  $loggin_status = 'Not logged in';
  $loggedin = false;

  
  }

?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SH Aviation</title>
  <link rel="icon" href="img/sh.png">

    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Prompt:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet">  -->
    <link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script> 
    <script type="text/javascript" src="js/validation.js"></script>      
  </head>
  
  <!--
  You can change the color scheme of the page. Just change the class of the <body> tag. 
  You can use this class: "primary-color-white", "primary-color-yellow", "primary-color-red", "primary-color-orange", "primary-color-pink", "primary-color-purple", "primary-color-blue", "primary-color-light-blue", "primary-color-aqua", "primary-color-green", "primary-color-dark" 
  -->
  
  <!--
  Each element is able to have its own background or text color. Just change the class of the element.  
  You can use this class: 
  "background-white", "background-yellow", "background-red", "background-orange", "background-pink", "background-purple", "background-blue", "background-light-blue", "background-aqua", "background-green", "background-grey", "background-sand",  "background-primary" 
  "text-white", "text-yellow", "text-red", "text-orange", "text-pink", "text-purple", "text-blue", "text-light-blue", "text-aqua", "text-green", "text-primary"
  -->
  
  <!-- 
  If you want animated elements after scroll, add class "animated-element" or "animated-element slow" (for slower animation) to the elements.
  -->
  
  <!-- 
  If you want the hover zoom animation effect, wrapp the element to <div class="hover-zoom"> ... </div>
  -->
  <body class="size-1280 primary-color-light-blue" style="font-family:'prompt'">
    <!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
    <div id="page-overlay" class="background-dark"></div>
    
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-primary-dott full-width sticky">          
        <!-- mobile version logo -->              
        <div class="logo hide-l hide-xl hide-xxl">
           <a href="/" class="logo">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="img/sh.png" alt="">
          </a>
        </div>
        <div class="top-nav"> 
          
          <!-- left menu items -->
          <div class="top-nav left-menu">
             <ul class="right top-ul chevron">
                <li><a href="/">Home</a></li>
                <li><a href="about.php">About</a></li>
             </ul>
          </div>
          
          <!-- logo -->
          <ul class="logo-menu">
            <a href="/" class="logo">
              <!-- Logo White Version -->
              <img class="logo-white" src="img/sh.png" alt="">
              <!-- Logo Dark Version -->
              <img class="logo-dark" src="img/sh.png" alt="">
            </a>
          </ul>
          
          <!-- right menu items -->
          <div class="top-nav right-menu">
             <ul class="top-ul chevron">
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php if($loggedin){?> 
                  <?php if($isAdmin == 'yes'){?>
                <li><a href="adminDash.php">Profile</a></li>
                <?php }else{ ?>
                <li><a href="userDash.php">Profile</a></li>
                <?php }?>
                <?php }else{ ?>
                <li><a href="login.php">Login</a></li>
                <?php }?>
             </ul> 
          </div>
        </div>
      </nav>
    </header>