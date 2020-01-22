<link rel="stylesheet" href="login.css">

<?php
$servername = "localhost";
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

$tr = new GoogleTranslate(en); // Translates into English 
?>


<!DOCTYPE html>
<html>
<style>

<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<style type="text/css">
.form-style-8{
	font-family: 'Open Sans Condensed', arial, sans;
	width: 500px;
	padding: 30px;
	background: #FFFFFF;
	margin: 50px auto;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 h2{
	background: #4D4D4D;
	text-transform: uppercase;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #797979;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
	margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}
.form-style-8 textarea{
	resize:none;
	overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="submit"]{
	-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	box-shadow: inset 0px 1px 0px 0px #45D6D6;
	background-color: #2CBBBB;
	border: 1px solid #27A0A0;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 14px;
	padding: 8px 18px;
	text-decoration: none;
	text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
	background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
	background-color:#34CACA;
}
</style>
<body>

<form action="ejemplo.php" method="get">
<div class="form-style-8">
tra<textarea placeholder="Message" onkeyup="adjust_textarea(this)" name="nombre2" value="<?php echo $_GET['nombre2'] ?>"></textarea>
</div>

  <p>Traducir: <input type="text" name="nombre" value="<?php echo $_GET['nombre'] ?>" size="40"></p>
  <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">

  </p>
</form>
Traducido: <?php echo $tr->translate( $_GET['nombre2']);?>



<br>
</body>


<script type="text/javascript">
    //auto expand textarea
    function adjust_textarea(h) {
        h.style.height = "20px";
        h.style.height = (h.scrollHeight)+"px";
    }
    </script>
</html>