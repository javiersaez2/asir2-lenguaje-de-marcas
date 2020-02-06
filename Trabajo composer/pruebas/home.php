
<?php   session_start();  ?>


<!DOCTYPE html>
<html>
  <head>
       <title> Home </title>
  </head>
  <body>
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:Login.php");  
       }

          echo $_SESSION['use'];
echo"</br>";
          echo "Login Success";

          echo "<a href='logout.php'> Logout</a> "; 
?>
</body>
</html>