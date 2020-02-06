<?php  session_start(); ?>  

<?php
a

require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;
$tr = new GoogleTranslate('es'); // Translates into English 



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




/*Eliminar cuenta*/
if(isset($_POST['login2'])){

    $sql = "DELETE FROM users WHERE user='".$_SESSION['use']    ."'";
$result = $conn->query($sql);
session_destroy();  
	header("Location: loginfinal.php");

}
/*Editar contraseña*/
$pass = $_POST["pass2"];
$hash = password_hash($pass, PASSWORD_DEFAULT);

if(isset($_POST['login'])){
  $sql = ("UPDATE users set pass = '$hash' where user = '".$_SESSION['use']."'");
$result = $conn->query($sql);
    header("Location: loginfinal.php");
}







 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>
<link rel="stylesheet" href="loginfinal.css">

<a class= "home" href="botones.php">Home</a>



<div class="container" id="container">
	<div class="form-container sign-up-container">
    <form action="" method="post">
			<h1><?php echo $tr->translate("Delete account")?></h1>

			<span></span>

            <button type="submit"class="tipografia" name="login2"><?php echo $tr->translate("Delete acount")?></button>
		</form>
	</div>
	<div class="form-container sign-in-container">
    <form action="" method="post">
			<h1><?php echo $tr->translate("Edit")?></h1>

			<span><?php echo $tr->translate("Edit your password")?></span>

        <input type="password" name="pass" placeholder="Contraseña"/>
			
            <button type="submit"class="tipografia" name="login"><?php echo $tr->translate("Edit")?></button>
            <?php echo $prueba ?> <!-- Invalid user-->
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1><?php echo $tr->translate("Edit your acount")?></h1>
				<p></p>
				<button class="ghost" id="signIn"><?php echo $tr->translate("Edit Password")?></button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1><?php echo $tr->translate("Delete acount")?></h1>
				<p><?php echo $tr->translate("aaaaaaaaaaa")?></p>
				<button class="ghost" id="signUp"><?php echo $tr->translate("Delete acount")?></button>
			</div>
		</div>
	</div>
</div>

    


<!-- Login-Regisater -->
<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>
</html>