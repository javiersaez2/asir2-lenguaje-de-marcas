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
</style>



<body>
    
    
    <div class="wrapper" onload="myFunction()">
        <div class="loading-wrapper">
          <div class="loader">
            <div class="inner"></div>
          </div>
        </div>
      </div>


  </body>



  </html>