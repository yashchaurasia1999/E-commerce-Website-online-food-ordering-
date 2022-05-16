<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food ordering</title>
    <!-- Reset styles -->
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <!-- Google Fonts Muli -->
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="main.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    </head>
<body>
<?php
    $err="";
      if(isset($_REQUEST['s1']))
      {
        $user=$_POST['mail'];
        $pwd=$_POST['pwd'];
        if($user=="admin" && $pwd=="admin123")
        {

            echo "<script>window.location.href='index.php';</script>";
        }
        else
        {
          $err="Invalid User Name and Password";
          //  $a= "<div class='user' style='background:black;'></div>";
        }
       
      }
    ?>
    <section class="wrapper">
        <div class="container">
            <div class="img__container">
            <img src="https://images.unsplash.com/photo-1546793665-c74683f339c1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="salad" class="img"> 
        </div>   
            <div class="content">
                <!-- <h2 class="subtitle">Subscribe today</h2> -->
                <h1 class="title">Never Miss A Recipe</h1>
                
                <form method="post">
                <input type="text" class="user" placeholder="User Name" name="username" required>
                <input type = "password" class="user" placeholder="Password" name="password">
                <div><?php  echo "<div style='color:red;font-weight:bold;'>".$err."</div>";?></div>
                <input type="submit" value="Log In" class="subscribe" name="s1">
                </form>
            </div>
        </div>
    </section>
    <script>
     
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script> -->
</body>
</html>