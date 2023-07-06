  
<?php
    session_start();
    include('config.php');
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">The email address is already registered!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(username,password,email) VALUES (:username,:password_hash,:email)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Your registration was successful!</p>';
                header('Location:log.php');
            } else {
                echo '<p class="error">Something went wrong!</p>';
            }
        }
    }
?>

<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/stylee.css">

<body >
    
   
<form name="myForm" action="" onsubmit="return validateForm()" method="post"  style="padding: 40px">
    <header>
    <div class="user">
     <img src="assets/img/image.jpg" alt=""></div></header>
    <div class="container" style="padding: 40px">
     <h3  style="font-family: Arial ; color:black ">Join Now For Free! </h3>
    
   <h6 style="color:gray" >    It's free and hardly takes more than 30 seconds.</h6>
    <div class="form-element">
<label>Username</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
<label>Email</label>
<input type="email" name="email" required />
</div>
<div class="form-element">
<label>Password</label>
<input type="password" name="password" required />
</div>
    
    <div class="form-element" > <br>
  <details>
  <summary style="font-size: 16px"> Terms and Conditions </summary>
  <span style="font-size: 14px">The Site is intended for users who are at least 18 years old. Persons under the age of 18 are not permitted to use or register for the Site.The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. </span> 
</details>
        
        
        
</div>
<button type="submit" name="register"  class="sign-in" value="register" onclick="return validateForm()"> Sign up</button> 
     

</form>
        
    
  <script>
function validateForm() {
  let x = document.forms["myForm"]["username"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
    
 let pw = document.forms["myForm"]["password"].value;
    if(pw.length < 8) {
    alert("Password length must be at least 8 characters");
    return false;
  }   
    
   
    
    
    
    
    
}
</script>
       <footer>
  
		
				<div class="clear"> </div>
		
		<div class="copy-tight">
             <h1 class="logo me-auto me-lg-0"><img src="assets/img/kl.png" alt="" class="img-fluid"  height="40px"  width="30px"  ><span style="color:#ffc451" >.</span></h1>
			<p style="color:white">&copy 247ERICPOINTCOM</p>
		</div>
           
           
           
    </footer>
    </body>

</html>