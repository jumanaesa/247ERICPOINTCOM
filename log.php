<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Username  or password  wrong!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                $username = $_POST['username'];
		       $_SESSION['username'] = $username;
                header('Location:profile.php');
            } else {
                echo '<p class="error">Username or password   wrong! </p>' ;
            }
        }
    }
?>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/stylee.css">
</head>
<body >
    <header>
    <div class="user">
     <img src="assets/img/image.jpg" alt=""></div></header>
    <div class="container" style="padding: 40px">
    <div class="card">
        <div class="top-row">
<h3  style="font-family: Arial ; color:black ">Member Login! </h3>
    
            </div>

<form method="post" action="" name="signin-form" >
  <div class="form-element">
    <label>Username</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        <i class="fa fa-envelope"></i>
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
      <span id = "message" style="color:red"> </span> <br><br>     <i class="fa fa-lock"></i>
       <span><small class="fa fa-eye-slash passcode"></small></span>

  </div>
  <button type="submit" name="login" class="sign-in"  value="login" onclick="check()"  >Log In</button>

</form>
      <a href="Signup.php" class='sign-up' style="color:gray ; text-decoration: none">Sign up?</a>

 
     </div>
</div>        
            
            
     
            
            
            
            
            
      
       <footer>
  
		
				<div class="clear"> </div>
		
		
		<div class="copy-tight">
             <h1 class="logo me-auto me-lg-0"><img src="assets/img/kl.png" alt="" class="img-fluid"  height="40px"  width="30px"  ><span style="color:#ffc451" >.</span></h1>
			<p style="color:white">&copy 247ERICPOINTCOM</p>
		</div>
           
           
    </footer>
    </body>

</html>
    
    
    
    
    
    
    
    
    
    