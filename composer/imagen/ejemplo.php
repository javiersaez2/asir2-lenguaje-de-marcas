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
$sql = "SELECT * FROM idiomas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    ?>
 
<?php while($row = $result->fetch_assoc()) { ?>
<?php echo  $row["letra"];?>

            <?php
    }
} else {
    echo "0 results";
}
$conn->close();

require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;
$prue = $result ;
$pp = 1;

$sql = "SELECT * FROM idiomas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    ?>
 
<?php while($row = $result->fetch_assoc()) { ?>
<?php echo  $row["letra"];?>

            <?php
    }
} else {
    echo "0 results";
}
$conn->close();

$tr = new GoogleTranslate(); // Translates into English 
?>


<!DOCTYPE html>
<html>
<body>

<form action="ejemplo.php" method="get">
  <p>Traducir: <input type="text" name="nombre" value="<?php echo $_GET['nombre'] ?>" size="40"></p>
  <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">

  </p>
</form>
Traducido: <?php echo $tr->translate( $_GET['nombre']);?>
<?php echo  $row["letra"];?>

<br>
</body>
</html>