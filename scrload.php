

<html>

  <head>
    <title> Cart | Chill Out Cafe </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/payment.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <style>
    .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/food.gif) center no-repeat #fff;
}
  </style>
  <body>
  <div class="se-pre-con"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script>

    function myFunction() {
  setTimeout(function(){ 
    // $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("fast");
        
	// });
   }, 3000);

  
//    window.stop()
   
}


    </script>
        </body>
</html>