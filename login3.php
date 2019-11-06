<?php 

$usuario1 = "Juan";
$password1 = "juan123";
$passtext = $_GET['password'] ;


echo $_GET['user'];
echo'<br>'; 


//echo password_hash($password1, PASSWORD_DEFAULT);

$hash = '$2y$10$nf/39.pDkt8TqPIpI/I1HOye6DyAn9pZ48eStwqIZuJbnVKlW8CJe';
echo $hash;
echo'<br>';echo'<br>';
if (password_verify( $passtext, $hash,) && $_GET['user'] == $usuario1) {
    echo 'Userio y contraseña valida!';
} else {
    echo 'Userio y contraseña invalida.';
}



   ?>

   


