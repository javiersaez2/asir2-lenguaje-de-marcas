<?php  session_start(); ?>  // session starts with the help of this function 
<?php
$servername = "localhost";
$username = "javis";
$password = "Admin123";
$dbname = "asir2_web";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
         $sql = "SELECT * FROM users WHERE user = '$user';";

     $result = $conn->query($sql);

     $row = $result->fetch_assoc();
      if(($result->num_rows > 0) && ($user == $row["user"]) && (password_verify($pass, $row["pass"])))  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>
<link rel="stylesheet" href="login.css">
<form action="" method="post">
  <div class="login-page">
    <div class="form">
    
      <form class="login-form">
        <input type="text" name="user" placeholder="Usuario"/>
        <input type="password" name="pass" placeholder="Contraseña"/>
        <button type="submit"class="tipografia" name="login">Login</button>
      
      </form>
</body>
</html>