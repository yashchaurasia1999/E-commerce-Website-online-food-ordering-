<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Chill Out Cafe </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/myrestaurant.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

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
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>




<div class="container">
    <div class="jumbotron">
     <h2>Hello Manager! </h2>
     <p>Manage All Your Data From Here</p>

    </div>
    </div>
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<!-- <a href="myrestaurant.php" class="list-group-item active">My Restaurant</a> -->
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
        <a href="revenue.php" class="list-group-item ">Revenue</a>
    	</div>
    </div>
    <?php
     $user_check=$_SESSION['login_user1'];
    //  $sql=" select * from food,orders ORDER BY order_date";
     $sql = "SELECT * FROM orders o,food WHERE o.R_ID IN (SELECT r.R_ID FROM RESTAURANTS r WHERE r.M_ID='$user_check') ORDER BY order_date";
     $result = mysqli_query($conn, $sql);
    ?>
    <?php
    if (mysqli_num_rows($result) > 0)
    {

  ?>
    

    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> YOUR Order Status </h3>
          <table class="table table-striped">
          <thead class="thead-dark">
          <tr>
            <th>Order NO.</th>
            <th>Food name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Order date</th>
            <th>Status</th>
            </tr>
          </thead>
        
          <?php
          while($row = mysqli_fetch_assoc($result))
          {
            ?>
            <tr>
              <td><?php echo $row['order_ID']; ?></td>
              <td><?php echo $row['foodname']; ?></td>
              <td><?php echo $row['price']; ?></td>
              <td><?php echo $row['quantity']; ?></td>
              <td><?php echo $row['order_date']; ?></td>
              <?php
              $x=date("Y-m-d");
                if($row['order_date']==$x )
                {
                  ?><td><button class='btn btn-danger'>Pending</button></td><?php
                }
              else
              {
                ?><td><button class='btn btn-primary'>Delivered</button></td><?php
              }
                  
                ?>
          
              
            </tr>
            <?php
          }
        }
      
          ?>
          </table>

</div>
</div>    
   

    
</div>

  </body>
</html>