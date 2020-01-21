<link rel="stylesheet" href="login.css">

<?php
$servername = "192.168.71.10:3306";
$username = "javis";
$password = "Admin123";
$dbname = "asir2_crud";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['save'])){
  $sql= ("UPDATE idiomas SET letra ='$_POST[nuevo]' 
  WHERE letra='$_POST[viejo2]'");
  
  $result = $conn->query($sql);
  header("Location: pruebas.php");
  }
  
  ?>
    <div class="login-page">
      <div class="form">
      
  <form method="post"> 
  Producto a cambiar</br>
  <input type="text" name="viejo2"><br/>
  
  Precio a cambiar</br>
  <input type="text" name="nuevo"><br/>
  
  
  
  <button type="submit" name="save">save</button>



</body>
</html>
