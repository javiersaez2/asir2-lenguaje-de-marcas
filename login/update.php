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
WHERE info ='$_POST[viejo]' and title='$_POST[viejo2]'");

$result = $conn->query($sql);
header("Location: read.php");
}

?>

<form method="post"> 
Cuantos productos habia</br>
<input type="text" name="viejo"><br/>
Cuantos productos hay</br>
<input type="text" name="nuevo"><br/>

Producto a cambiar</br>
<input type="text" name="viejo2"><br/>
>

<button type="submit" name="save">save</button>

