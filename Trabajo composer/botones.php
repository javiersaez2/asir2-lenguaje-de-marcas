<?php  session_start(); ?>  

<?php
if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
{
    header("Location:loginfinal.php");  
}
require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;
$tr = new GoogleTranslate(es); // Translates into English 

$textoes = "Elije un idioma para traducir";
$textoen = $tr->setSource('es')->setTarget('en')->translate('Elije un idioma para traducir');
$textoch = $tr->setSource('es')->setTarget('zh')->translate('Elije un idioma para traducir');
$textofr = $tr->setSource('es')->setTarget('fr')->translate('Elije un idioma para traducir');
$textoeus = $tr->setSource('es')->setTarget('eu')->translate('Elije un idioma para traducir');

echo $_SESSION['use'];
?>

<!DOCTYPE html>
<html>

<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="botones.css">

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
                            <div class="ajustes"> 
                                <li>
                                    <a class="settings" href="ajustes.php">
                                        <i class="settings-icon fa fa-cog" aria-hidden="true"></i> Settings
                                    </a>
                                </li></div>
                                <ul class="menu-right nav navbar-nav navbar-right">
                            <div class="cerrar">
                                <li>
                                    <a class="logout" href="logout.php">
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

<div id="workarea">
  <div class="position">

    <!--start button, nothing above this is necessary -->
    <div class="svg-wrapper">
      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
        <rect id="shape" height="40" width="150" />
        <div id="text">
          <a href="texbox-us.php"><span class="spot"></span>Ingles</a>
        </div>
      </svg>
    </div>
    <!--Next button -->
    <div class="svg-wrapper">
      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
        <rect id="shape" height="40" width="150" />
        <div id="text">
          <a href="texbox.php"><span class="spot"></span>Español</a>
        </div>
      </svg>
    </div>
    <!--Next button -->
    <div class="svg-wrapper">
      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
        <rect id="shape" height="40" width="150" />
        <div id="text">
          <a href="texbox-zh.php"><span class="spot"></span>Chino</a>
        </div>
      </svg>
    </div>
    <!--End button -->
    <!--Next button -->
    <div class="svg-wrapper">
      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
        <rect id="shape" height="40" width="150" />
        <div id="text">
          <a href="texbox-fr.php"><span class="spot"></span>Frances</a>
        </div>
      </svg>
    </div>
    <!--End button -->
    <!--Next button -->
    <div class="svg-wrapper">
      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
        <rect id="shape" height="40" width="150" />
        <div id="text">
          <a href="texbox-eus.php"><span class="spot"></span>Euskera</a>
        </div>
      </svg>
    </div>
    <!--End button -->

<!-- Texto movimiento -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>  
    <script src="https://www.mattboldt.com/demos/typed-js/js/typed.custom.js" type="text/javascript"></script>  
 <script>

$(function(){
        $(".typing").typed({
            strings: ["<?php echo $textoes?>", "<?php echo $textofr?>", "<?php echo $textoen?>", "<?php echo $textoch?>","<?php echo $textoeus?>"],
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