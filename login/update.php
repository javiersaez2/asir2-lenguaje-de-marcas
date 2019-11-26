<link rel="stylesheet" href="login.css">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asir2_crud";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['save'])){
$sql= ("UPDATE blog SET info ='$_POST[nuevo]' 
WHERE title='$_POST[viejo2]'");

$result = $conn->query($sql);
header("Location: read.php");
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

