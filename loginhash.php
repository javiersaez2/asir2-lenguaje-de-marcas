<?php 

$usuario1 = "Juan";
$password1 = "juan123";

$usuario2 = "Pablo";
$password2 = "pablo123";

$passtext = $_GET['password'] ;
$usertext = $_GET['user'];

echo $usertext;
echo'<br>'; 


//echo password_hash($password2, PASSWORD_DEFAULT);

$hash1 = '$2y$10$nf/39.pDkt8TqPIpI/I1HOye6DyAn9pZ48eStwqIZuJbnVKlW8CJe';
$hash2 = '$2y$10$JnzgZ2pEhNDX/.Inz1d3veVmsmZNAQzWKQWDdoddW4Mi8z5vRy8Ty';


echo'<br>';echo'<br>';

if ($usertext = $usuario1){
if (password_verify($passtext, $hash1))  {
    echo 'Usuario y contraseña valida!';
} else {
    echo 'Usuario y contraseña invalida.';
}}

else if ($usertext = $usuario2){
    if (password_verify( $passtext, $hash2,)){
        echo 'Usuario 2 y contraseña valida!';
    } else {
        echo 'Usuario 2 y contraseña invalida.';
    }}


   ?>

   


