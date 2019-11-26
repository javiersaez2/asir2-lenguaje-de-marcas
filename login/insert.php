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
    $sql = "INSERT INTO blog (title, info,img)
VALUES ('".$_POST["title"]."','".$_POST["info"]."','".$_POST["img"]."')";
$result = $conn->query($sql);
    header("Location: read.php");
}

?>

  <div class="login-page">
    <div class="form">
    


<form method="post"> 
<label id="title"> Producto:</label><br/>
<input type="text" name="title"><br/>

<label id="info">Precio</label><br/>
<input type="text" name="info"><br/>

<label id="img">Imagen</label><br/>
<input type="text" name="img"><br/>

<button type="submit" name="save">save</button>

</form>
</form>
    </div>
  </div>
</form> 