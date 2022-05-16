<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>


<html>

  <head>
    <title> Explore | Chill Out Cafe </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/foodlist.css">
  <link rel="stylesheet" type = "text/css" href ="css/footer.css">
  <link rel="stylesheet" type = "text/css" href ="css/service2.css">
  
  <!-- <link rel="stylesheet" type = "text/css" href ="css/service.css"> -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>  
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.js"> -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/burger_fries.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <style>
    .card {
  width: 280px;
  overflow: hidden;
  border-radius: 25px;
  border: 1px solid lavender;
  margin: 15px;
  box-shadow: 5px 5px 15px 5px rgba(230, 230, 250, 1);
}


.card__image {
  position: relative;
  height: 130px;
}

.card__image > img {
  max-width: 100%;
  border-bottom-right-radius: 30px;
  transform: rotate(10deg) translate(-15px, -55px);
  position: absolute;
  height: 200px;
  object-fit: cover;
  object-position: center;
}

.card__info {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  padding: 0px 30px 20px 30px;
}
.card__info h3 {
  font-size: 18px;
  font-weight: 700;
}
.card__info p {
  font-size: 14px;
  font-weight: 600;
}
.card__info--price {
  text-align: right;
  color: orangered;
}
.rect2 {
  position: relative;
  bottom: 315px;
  right: 15px;
  width: 325px;
  height: 230px;
  border: 1px solid lavender;
  border-radius: 0 0px 80px 0;
  background-image: url();
  transform: rotate(10deg);
  object-fit: cover;
}
  </style>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Chill Out Cafe</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="aboutus.php">About</a></li> -->
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>
          

<?php
if(isset($_SESSION['login_user1'])){

?>


          
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="active" ><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart  (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              <li> <a href="#"> Admin Sign-up</a></li>
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
              <li> <a href="#"> Admin Login</a></li>
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="item active">
      <img src="images/food1.jpg" style="height:500px; width:100%;">
      <div class="carousel-caption">
      </div>
      </div>
       
    
      <div class="item">
      <img src="images/food4.jpg" style="width:100%;">
      <div class="carousel-caption">

      </div>
      </div>
      <div class="item">
      <img src="images/food5.jpg" style="width:100%;">
      <div class="carousel-caption">
      </div>
      </div>
    
    </div>
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Welcome To Chill Out Cafe</h1>      
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>
<div class="container burger">
        <h1>Burger and Fries Anyone?</h1>
        <div id="burger_button" class="hamburger_button" onclick="burgerClick()">
            <div id="top_bun" class="hb_bar">
                <div class="sesame_seed"></div>
                <div class="sesame_seed"></div>
                <div class="sesame_seed"></div>
                <div class="sesame_seed"></div>
                <div class="sesame_seed"></div>
                <div class="sesame_seed"></div>
            </div>
            <div id="tomatoes" class="hb_bar">
                <div class="tomato"></div>
                <div class="tomato"></div>  
            </div>
            <div id="cheese" class="hb_bar"></div>
            <div id="patty" class="hb_bar"></div>
            <div id="lettuce"class="hb_bar"></div>
            <div id="bottom_bun"class="hb_bar"></div>
        </div>
</div>
  



<div class="container" style="width:95%;">

<!-- Display all Food from food table -->
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM FOOD WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<!-- <div class="mypanel" align="center";> -->
<div class="card">
            <div class="card__image">
            <img src="<?php echo $row["images_path"]; ?>" class="img-responsive">
            </div><br><br>
            <div class="card__info">
               <div class="car__info--title">
               <h4 class="text-dark"><?php echo $row["name"]; ?></h4>
                <h5 class="text-info"><?php echo $row["description"]; ?></h5>
                <h5 class="text-danger">&#8377; <?php echo $row["price"]; ?>/-</h5>
                <h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                <input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
                <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">

               </div>
               </div>
  </div>
  <!-- </div> -->
</form>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
  }
?>

</div>
</div>
<?php
}
else
{
  ?>
    <?php

}

?>
<!-- service  -->
<div class="container">
    <h1 class="text-center">Services</h1><br>
    <div class="row">
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon yellow">
                    <div class="front-content">
                        <!-- <i class="fa fa-trophy"></i> -->
                        <h3>Fastest Food Delivery</h3>
                        <img style="height:100px;width:100px;" src="images/food-delivery.png" alt="">
                    </div>
                </div>
                <div class="service-content">
                    <h3>Fastest Food Delivery</h3>
                    <p>Retail food delivery is a courier service in which a restaurant, store, or independent food-delivery company delivers food to a customer</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon orange">
                    <div class="front-content">
                        <!-- <i class="fa fa-anchor"></i> -->
                        <h3>24 Hour Services</h3>
                        <img style="height:100px;width:100px;" src="images/24-hours.png" alt="">
                    </div>
                </div>
                <div class="service-content">
                    <h3>24 Hour Services</h3>
                    <p>Services are 24/7: Customers will be happy for the services catered by the Restaurant people at all time.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box ">
                <div class="service-icon red">
                    <div class="front-content">
                        <!-- <i class="fa fa-trophy"></i> -->
                        <h3>Pay With UPI</h3>
                        <img style="height:100px;width:100px;" src="images/UPI.png" alt="">
                    </div>
                </div>
                <div class="service-content">
                    <h3>Pay With UPI</h3>
                    <p>An e-commerce payment system facilitates the acceptance of electronic payment for online transactions. Payment systems have become increasingly popular due to the widespread use of the internet-based shopping and banking.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box">
                <div class="service-icon grey">
                    <div class="front-content">
                        <!-- <i class="fa fa-paper-plane-o"></i> -->
                        <h3>Better Services</h3>
                        <img style="height:100px;width:100px;" src="images/waiter.svg" alt="">
                    </div>
                </div>
                <div class="service-content">
                    <h3>Better Services</h3>
                    <p>The companies that supply foodservice operators are called foodservice distributors. Foodservice distributors sell goods like small wares (kitchen utensils) and foods.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
//  require("service.php");
require("footer.php");
?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       
</body>
</html>