

<html>

<head>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css"> 
    
      
    <!-- Social Buttons CSS -->
    <link rel="stylesheet" href="css/demo.css">
	<!-- Demo CSS -->
	 <link rel="stylesheet" href="css/s.css">
  
    
   </head>
    
<body>
    
 <!-- Header Section Starts -->

 <header><br><br>
 <div class="user">
     <img src="assets/img/image.jpg" alt=""></div>
<pre style="color:black ; text-align: center ; font-size: 2.5rem;
    color: #222"> 

<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: home.php");
		exit();
	}

	$username = $_SESSION['username'];
	$url = "page2.php?username=" . $username;

 echo '<span class="error" style="color:#ffc451 ">Hello ! </span>'. $username ;
?>

</pre> 
 

 <nav class="navbar">
     <ul>
         <li><a href="#home"> Math Contest (Mathema)</a></li>
         <li><a href="#about"> Email Monitoring system</a></li>
         <li><a href="#education">SQL Injection system</a></li>
         <li><a href="#portfolio"> 247iLogger system</a></li>
         <li><a href="#contact"> Web Application Firewall (WAF) system</a></li>
         <li><a href="#contact"> Encryption Software system</a></li>
         <li><a href="#contact"> Smart Coach Decision Support system</a></li>
         <li><a href="#contact"> Online Central Data Management system for Hospitals </a></li>
         <li><a href="#contact">Online Central Data Management system for Enterprises</a></li>
       
     </ul>
 </nav>
</header>

<!-- Header Section Ends -->

<div id="menu" class="fa fa-bars"></div>

<!-- Home Section Starts -->

<section class="home" id="home">
    

    <h3 >HI THERE !</h3>
    
<!-- Social Media Buttons HTML -->
<div class="wrapper">
  <a href="https://www.facebook.com/247ericpointcom/" class="icon facebook">
    <div class="tooltip">Facebook</div>
    <span><i class="fab fa-facebook-f"></i></span>
  </a>
  <a href="https://twitter.com/eric_bawa" class="icon twitter">
    <div class="tooltip">Twitter</div>
    <span><i class="fab fa-twitter"></i></span>
  </a>
  <a href="https://www.instagram.com/pointcomeric/" class="icon instagram">
    <div class="tooltip">Instagram</div>
    <span><i class="fab fa-instagram"></i></span>
  </a>
  <a href="#" class="icon github">
    <div class="tooltip">Github</div>
    <span><i class="fab fa-github"></i></span>
  </a>
  <a href="#" class="icon youtube">
    <div class="tooltip">Youtube</div>
    <span><i class="fab fa-youtube"></i></span>
  </a>

<!-- End Social Media Buttons HTML -->
 
    <h1>This's <span style="color:#894ca5">247ERICPOINTCOM </span></h1>
    <p>247ERICPOINTCOM is majorly a Technology based company which can also get involved in scientific work as well as research work.</p>
    <a href="index.html"><button class="btn">Home <i class="fas fa-user"></i></button></a>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>