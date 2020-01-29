<?php
require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;
$tr = new GoogleTranslate(es); // Translates into English 

$textoes = "Escribe texto para traducir";
$textoen = $tr->setSource('es')->setTarget('en')->translate('Escribe texto para traducir, prueba de texto');
$textoch = $tr->setSource('es')->setTarget('zh')->translate('Escribe texto para traducir, prueba de texto');
$textofr = $tr->setSource('es')->setTarget('fr')->translate('Escribe texto para traducir, prueba de texto');
?>



<!DOCTYPE html>
<html> 
<style>

/* Logo Asistente*/
* {

}
#ad{
  font-size:15px;
  position:relative;
  bottom:-500px;
  font-color:#f9f9f9;
  
}

    body{
    background-color:  #1d1e26;    

    }
    .wrapper {
        position: absolute;
        top: 35%;
        left: 50%;
        -webkit-transform: translateY(-50%) translateX(-50%);
        transform: translateY(-50%) translateX(-50%);
        display: block;
        height: 80px;
        width: 80px;
      }
      
      .loading-wrapper {
        position: relative;
        height: 100%;
        width: 100%;
      }
      
      .loading-wrapper .loader {
        height: 80px;
        width: 80px;
        border: 3px solid #fff;
        border-radius: 50%;
        -webkit-animation: pulse 1200ms ease-in-out;
        animation: pulse 1200ms ease-in-out;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
      }
      
      .loading-wrapper .loader .inner {
        display: block;
        height: 40px;
        width: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        background: #30bdff;
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        border-radius: 50%;
        -webkit-animation: innerPulse 1200ms ease-in-out;
        animation: innerPulse 1200ms ease-in-out;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-delay: 600ms;
        animation-delay: 600ms;
        box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
      }

      @-webkit-keyframes pulse {
  0% {
    border: 3px solid #fff;
  }
  50% {
    border: 40px solid #fff;
  }
  100% {
    border: 3px solid #fff;
  }
}

@keyframes pulse {
  0% {
    border: 3px solid #fff;
  }
  50% {
    border: 40px solid #fff;
  }
  100% {
    border: 3px solid #fff;
  }
}

@-webkit-keyframes innerPulse {
  0% {
    height: 40px;
    width: 40px;
  }
  50% {
    height: 53.33333px;
    width: 53.33333px;
  }
  100% {
    height: 40px;
    width: 40px;
  }
}

@keyframes innerPulse {
  0% {
    height: 40px;
    width: 40px;
  }
  50% {
    height: 53.33333px;
    width: 53.33333px;
  }
  100% {
    height: 40px;
    width: 40px;
  }
}

/* Fin Logo Asistente*/





/*Cuadro de texto*/ 
html {
  box-sizing: border-box;
  font-size: 10px;
  
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

body,
ul,
li {
  margin: 0;
  padding: 0;
}

li {
  list-style: none;
}

p,
h1,
h2,
h3,
h4,
h5,
h6 {
  margin-top: 0;
}

a {
  text-decoration: none;
}

input {
  border-style: none;
  background: transparent;
  outline: none;
}

button {
  padding: 0;
  background: none;
  border: none;
  outline: none;
}

body {

}

h1.demo {
  text-align: center;
  font-size: 2.4rem;
  font-weight: normal;
  margin-bottom: 1rem;
  color: #f5f6ff;
}

a.demo {
  text-align: center;
  font-size: 1.6rem;
  font-weight: normal;
  color: rgba(202, 205, 239, 0.8);
  margin-bottom: 3rem;
}

.demo-flex-spacer {
  -webkit-box-flex: 1;
          flex-grow: 1;
}

.container {

}

@-webkit-keyframes gradient {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 100% 0;
  }
}

@keyframes gradient {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 100% 0;
  }
}
.webflow-style-input {
  left:10%;
  top:10%;
  position: relative;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  width: 100%;
  max-width: 400px;
  margin: 0 auto;
  border-radius: 2px;
  padding: 1.4rem 2rem 1.6rem;
  background: rgba(57, 63, 84, 0.8);
}

.webflow-style-input:after {
  content: "";
  position: absolute;
  left: 0px;
  right: 0px;
  bottom: 0px;
  z-index: 999;
  height: 2px;
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
  background-position: 0% 0%;
  background: -webkit-gradient(linear, left top, right top, from(#b294ff), color-stop(#57e6e6), color-stop(#feffb8), color-stop(#57e6e6), color-stop(#b294ff), to(#57e6e6));
  background: linear-gradient(to right, #b294ff, #57e6e6, #feffb8, #57e6e6, #b294ff, #57e6e6);
  background-size: 500% auto;
  -webkit-animation: gradient 3s linear infinite;
          animation: gradient 3s linear infinite;
}

.webflow-style-input input {
  -webkit-box-flex: 1;
          flex-grow: 1;
  color: #bfd2ff;
  font-size: 1.8rem;
  line-height: 2.4rem;
  vertical-align: middle;
}
.webflow-style-input input::-webkit-input-placeholder {
  color: #7881a1;
}

.webflow-style-input button {
  color: #7881a1;
  font-size: 2.4rem;
  line-height: 2.4rem;
  vertical-align: middle;
  -webkit-transition: color 0.25s;
  transition: color 0.25s;
}
.webflow-style-input button:hover {
  color: #bfd2ff;
}
/*Fin cuadro de texto*/


.cuadro{
  position: absolute;
  top:55%;
  left:25%;
  height:auto;
  width: 20%;
  border: 0px solid green;
}
.cuadro2{
  position: absolute;
  top:55%;
  left:50%;
  height:auto;
  width: 20%;
  border: 0px solid red;
}


.content {
  color: #fff;
  font-size: 80px;
  font-weight: bold;
}
</style>

<body>


    
<!-- Logo Asistente-->
<div class="wrapper" onload="myFunction()">
        <div class="loading-wrapper">
          <div class="loader">
            <div class="inner"></div>
          </div>
        </div>
      </div>
<!--Fin Logo Asistente-->

<!-- Texto para traducir-->    

<div class="cuadro">
<form action="texbox.php" method="get">

  <div class="demo-flex-spacer">

  <div class="webflow-style-input">
    <input class="" type="text" name="nombre" placeholder="Texto para traducir"value="<?php echo $_GET['nombre'] ?>"></input>
    <button type="submit"><i class="icon ion-android-arrow-forward">→</i></button>
  </div></div></div>
<!-- Fin Texto para traducir-->
  
  
<!-- Texto traducido-->

<div class="cuadro2">
<form action="texbox.php" method="get">

  <div class="demo-flex-spacer">

  <div class="webflow-style-input">
    <input class="" type="text" name="nombre" placeholder="Traducido"value="<?php echo $_GET['nombre'] ?>"></input>
    <button type="submit"><i class="icon ion-android-arrow-forward"></i></button>
  </div></div></div>

<!-- Fin Texto traducido-->

</form>


<div class="content">
   <span class="typing"></span>
   </div>

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