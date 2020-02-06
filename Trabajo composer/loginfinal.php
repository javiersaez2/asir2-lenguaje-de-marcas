<?php  session_start(); ?>  
<?php

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




if(isset($_SESSION['use']))   // Si la sesion ya esta iniciada envia directamente a otra pagina no sejando acceder (Botones.php) 

 {
    header("Location:botones.php"); 
 }

if(isset($_POST['login']))   // Si se ha clicado el boton de login o no
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
         $sql = "SELECT * FROM users WHERE user = '$user';";

     $result = $conn->query($sql);

     $row = $result->fetch_assoc();
      if(($result->num_rows > 0) && ($user == $row["user"]) && (password_verify($pass, $row["pass"])))  //Mira el usuario y contraseña en la base de datos para comparar con lo escrito  
         {                                     

          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("botones.php","_self");</script>';            //Si Funciona llevara a la siguiente pagina (Botones.php)

        }

        else
        {
           
           $invalid = "Usuario o contraseña invalidos";        
        }
}



$passwordre = $_POST["passwo"];
$hash = password_hash($passwordre, PASSWORD_DEFAULT);
if(isset($_POST['login2'])){
$sql = "INSERT INTO users (user,pass) VALUES ('".$_POST["user2"]."', '$hash')";
$result = $conn->query($sql);
header("Location:loginfinal.php");
}








 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>
<link rel="stylesheet" href="loginfinal.css">



<div class="container" id="container">
	<div class="form-container sign-up-container">
    <form action="" method="post">
			<h1><?php echo $tr->translate("Create Account")?></h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span><?php echo $tr->translate("Create acount")?></span>
			<input type="text" name="user2" placeholder=<?php echo $tr->translate("User")?> >
			<input type="password" name="pass"placeholder="<?php echo $tr->translate("Password")?>" />
            <button type="submit"class="tipografia" name="login2"><?php echo $tr->translate("Sign Up")?></button>
		</form>
	</div>
	<div class="form-container sign-in-container">
    <form action="" method="post">
			<h1><?php echo $tr->translate("Login")?></h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span><?php echo $tr->translate("Login with your acount")?></span>
            <input type="text" name="user" placeholder="<?php echo $tr->translate("User")?>"/>
        <input type="password" name="passwo" placeholder="<?php echo $tr->translate("Password")?>"/>
			<a href="#"><?php echo $tr->translate("Forgot your password?")?></a>
            <button type="submit"class="tipografia" name="login"><?php echo $tr->translate("Login")?></button>
			</br>
             <?php echo $invalid?><!-- Invalid user-->
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1><?php echo $tr->translate("Welcome Back!")?></h1>
				<p><?php echo $tr->translate("To keep connected with us please login with your personal info")?></p>
				<button class="ghost" id="signIn"><?php echo $tr->translate("Login")?></button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1><?php echo $tr->translate("Hello, Friend!")?></h1>
				<p><?php echo $tr->translate("Enter your personal details and start journey with us")?></p>
				<button class="ghost" id="signUp"><?php echo $tr->translate("Sign Up")?></button>
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