<?php
require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;
$tr = new GoogleTranslate(es); // Translates into English 
?>



<!DOCTYPE html>
<html>
<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
#ad{
  font-size:15px;
  position:relative;
  bottom:-500px;
  font-color:#f9f9f9;
}

    body{
    background-color: black;    
    }
    .wrapper {
        position: absolute;
        top: 50%;
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
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  background-image: radial-gradient(circle at 0% 0%, #373b52, #252736 51%, #1d1e26);
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
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  height: 100vh;
  max-width: 1600px;
  padding: 0 15px;
  margin: 0 auto;
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


</style>

<body>


    
    
<div class="wrapper" onload="myFunction()">
        <div class="loading-wrapper">
          <div class="loader">
            <div class="inner"></div>
          </div>
        </div>
      </div>



<form action="texbox.php" method="get">
<div class="container">
  
  <div class="demo-flex-spacer"></div>

  <div class="webflow-style-input">
    <input class="" type="text" name="nombre" placeholder="What's your email?"value="<?php echo $_GET['nombre'] ?>"></input>
    <button type="submit"><i class="icon ion-android-arrow-forward">→</i></button>
  </div>

  
 
  <div class="container">
  <div class="webflow-style-input">
  <input class=""placeholder="Traducido: <?php echo $tr->translate( $_GET['nombre']);?>"></div>
  </imput>
  </div>
  <div class="demo-flex-spacer"></div>
  <h1 class="demo">Webflow-style input</h1>
  <a class="demo" href="https://webflow.com/cms" title="Webflow CMS">https://webflow.com/cms</a>

</form>
</div>
</body>
</html>