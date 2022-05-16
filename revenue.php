<?php
include('session_m.php');
// include ("connection.php");
if(!isset($login_session)){
header('Location: managerlogin.php'); 
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Chill Out Cafe </title>
    <style>
     
      </style>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/delete_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <!-- <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
   rel = "stylesheet">
        <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <script>
    $(document).ready(function(){
     
      $("#date").datepicker({
        showAnim:"bounce",
        dateFormat:"yy/mm/dd",
      });
    

      
    });
  </script>
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
    		<a href="myrestaurant.php" class="list-group-item ">My Restaurant</a>
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item active">Delete Food Items</a>
        <a href="view_order_details.php" class="list-group-item ">View Order Details</a>
        
    	</div>
    </div>
    <form method="POST">
    <input type="text" id="date" name="dat" autocomplete="off" placeholder="Date"><br><br>
    <button class="btn btn-warning" name="b1">Search</button>
    <button class="btn btn-info" name="b2">Total Revenue</button>
    
    </form>
    <?php
   
    if(isset($_POST['b1']))
    {
      $date=$_POST['dat'];
    
      ?><?php
      $sql="select * from orders where order_date='$date'";
      // $sql = "SELECT * FROM orders o,food WHERE o.R_ID IN (SELECT r.R_ID FROM RESTAURANTS r WHERE r.M_ID='$user_check') where order_date='$date' ORDER BY order_date";
      $query=mysqli_query($conn,$sql);
      $num=mysqli_num_rows($query);
      ?>
      
  <table class="table">
  <thead class="table">
    <tr class="bg-success">
      <th>Order ID</th>
      <th>F_ID</th>
      <th>Food Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Order Date</th>
    </tr>
  </thead>
      <?php
       $total=0;
      while($res=mysqli_fetch_array($query))
      {
        if($num>0)
        {
        ?>
        

  <tbody>
    <tr>
      <td><?php echo $res['order_ID']?></td>
      <td><?php echo $res['F_ID']?></td>
      <td><?php echo $res['foodname']?></td>
      <td><?php echo $res['price']?></td>
      <td><?php echo $res['quantity']?></td>
      <td><?php echo $res['order_date']?></td>

    </tr>
      </tbody>
      
       <?php
       $total=$res["price"]+$total; 
        }
        else
        {
          ?>
       
          <tr>
            <td><?php echo "0 records"?></td>
          </tr>
          <?php
        }
      }
      ?><h2><?php echo "Your revenue on ".$date." is=  ".$total;?></h2><?php
      
      ?>
      </table>
      <?php
 
      }
     if(isset($_POST['b2']))
     {
      ?><h3><?php echo "Your Total Revenue Earned=  ".$_SESSION['x']?></h3><?php
     }
    ?>
    

    
    
  </body>
</html>