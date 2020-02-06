<?php  session_start(); ?>  

<?php
if(!isset($_SESSION['use'])) // Si no se ha iniciado sesion se enviara al login
{
    header("Location:loginfinal.php");  
}


require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;
$tr = new GoogleTranslate(eu); //  Traducir Euskera


$textoes = 'Escribe texto para traducir';
$textoen = 'Choisissez une langue à traduire';
$textoch = 'Elije un idioma para traducira';
$textofr = 'Elije un idioma para traduciraa';
$textoeus = 'Aukeratu hizkuntza itzultzeko';


?>



<!DOCTYPE html>
<html> 

<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="textbox.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- ajustes-logout-->
<div class="container mt_20">
            <div class="row">
                <div class="col-xs-12">
                    <header class="box-styling">
                        <div class="navbar-header">

                            </a>
                        </div>
                        <div class="collapse navbar-collapse">
                            </ul>
                            <ul class="menu-right nav navbar-nav navbar-right">
                                <li><a>
                                    <a class="home" href="botones.php" style="font-size:15px;"> Home </a>
                                </li></div>
                            <ul class="menu-right nav navbar-nav navbar-right">
                            <div class="ajustes"> 
                                <li><a>
                                    <a class="settings" href="ajustes.php" style="font-size:15px;">
                                        <i class="settings-icon fa fa-cog" aria-hidden="true"></i>  Ajustes
                                    </a>
                                </li></div>
                                <ul class="menu-right nav navbar-nav navbar-right">
                            <div class="cerrar">
                                <li>
                                    <a class="logout" href="logout.php"  style="font-size:15px;">
                                        <i class="logout-icon fa fa-sign-out" aria-hidden="true"></i> Logout
                                    </a>
                                </li></div>
                            </ul>
                        </div>
                    </header>
                </div>
            </div>
        </div>
<!-- fin ajustes-logout-->
    
<!-- Logo Asistente-->
<div class="wrapper" onload="myFunction()">
        <div class="loading-wrapper">
          <div class="loader">
            <div class="inner"></div>
          </div>
        </div>
      </div>
<!--Fin Logo Asistente-->

<div class="content">
   <span class="typing"></span>
   </div>

<!-- Texto para traducir-->    

<div class="cuadro">
<form action="texbox-eus.php" method="post">

  <div class="demo-flex-spacer">

  <div class="webflow-style-input">
    <input class="" type="text" name="nombre" placeholder="Texto para traducir"value="<?php echo $_POST['nombre'] ?>"></input>
    <button type="submit"name="save"><i class="icon ion-android-arrow-forward">→</i></button>
  </div></div></div>
<!-- Fin Texto para traducir-->

  
<!-- Texto traducido-->

<div class="cuadro2">
<form action="texbox-eus.php" method="post">

  <div class="demo-flex-spacer">

  <div class="webflow-style-input">
    <input class="" type="text" name="nombre2" placeholder="Traducido"value="
    <?php
    if(isset($_POST['save'])){
    echo $tr->translate($_POST['nombre']);}
    else {echo "Traducido";} ?>">
     
     </input>
    <button type="submit"><i class="icon ion-android-arrow-forward"></i></button>
  </div></div></div>

<!-- Fin Texto traducido-->

</form>



<!-- Texto movimiento -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>  
    <script src="https://www.mattboldt.com/demos/typed-js/js/typed.custom.js" type="text/javascript"></script>  
 <script>

$(function(){
        $(".typing").typed({
            strings: ["<?php echo $textoes?>", "<?php echo $textofr?>", "<?php echo $textoen?>", "<?php echo $textoch?>"],
            typeSpeed: 50,
            backSpeed: 50,
            startDelay: 0,
            backDelay: 500,
            loop: true,
            loopCount: false,
            attr: null
        });
    });


</script>
</body>

</html>