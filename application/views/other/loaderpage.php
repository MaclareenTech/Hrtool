<!DOCTYPE html>
<html>
    <head>
        <title>LOding</title>
        <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
      margin: 0;
      background-color: #F8f8f8;
    }


.loader {
    width: 100%;
align-items: center;
  height: 15px;
  text-align: center;
}

.dot {
  position: relative;
  width: 15px;
  height: 15px;
  margin: 0 2px;
  display: inline-block;
}

.dot:first-child:before {
  animation-delay: 0ms;
}

.dot:first-child:after {
  animation-delay: 0ms;
}

.dot:last-child:before {
  animation-delay: 200ms;
}

.dot:last-child:after {
  animation-delay: 200ms;
}

.dot:before{
  content: "";
  position: absolute;
  left: 0;
  width: 15px;
  height: 15px;
  background-color: blue;
  animation-name: dotHover;
  animation-duration: 900ms;
  animation-timing-function: cubic-bezier(.82,0,.26,1);
  animation-iteration-count: infinite;
  animation-delay: 100ms;
  background: linear-gradient(45deg, rgba(208, 8, 8, 1) 0%, rgba(255, 0, 0, 1) 100%);
      box-shadow: 0px 0px 8px rgba(208, 8, 8, 0.8);

  border-radius: 100%;  
}

.dot:after {
  content: "";
  position: absolute;
  z-index: -1;
  background: black;
  box-shadow: 0px 0px 1px black;
  opacity: .20;
  width: 100%;
  height: 3px;
  left: 0;
  bottom: -2px;
  border-radius: 100%;
  animation-name: dotShadow;
  animation-duration: 900ms;
  animation-timing-function: cubic-bezier(.82,0,.26,1);
  animation-iteration-count: infinite;
  animation-delay: 100ms;
}

@keyframes dotShadow {
  0% {
    transform: scaleX(1);
  }
  50% {
    opacity: 0;
    transform: scaleX(.6);
  }
  100% {
    transform: scaleX(1);
  }
}

@keyframes dotHover {
  0% {
    top: 0px;
  }
  50% {
    top: -50px;
    transform: scale(1.1);
  }
  100% {
    top: 0;
  }
}
        </style>
    </head>
    <body>
        <h1 style="text-align: center; font-size: 36px; color: black; text-shadow: 2px 2px 4px red;">Kindly wait for some time</h1>
        <p style="text-align: center; font-size: 18px; color: black;">Navigation to the home page</p>
      
        <div class="loader">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            
        </div>
    </body>
</html>

<!-- 
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?></title>
   
    <style>
        /* Styles for the loader */
        .loader {
            display: none; /* Initially hide the loader */
            /* Add your loader styles here */
        }
    </style>
</head>
<body>
    <h1>Welcome to MTAS : Login Page</h1>
   
    <div class="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

   
    <button id="loaderButton">Show Loader</button>-->

    <!-- Your JavaScript code to handle the button click and show the loader -->
   <!--   <script>
        document.getElementById("loaderButton").addEventListener("click", function() {
            // Show the loader on button click
            var loader = document.querySelector(".loader");
            loader.style.display = "flex";
        });
    </script>
</body>
</html>
 -->
