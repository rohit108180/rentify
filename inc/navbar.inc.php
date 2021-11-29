
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="stylesheet" href="./style/Rtstyle.css">
    <link rel="stylesheet" href="./style/Rentify_CSS.css">
    <link rel="stylesheet" href= "style/rental.css">
</head>
<body>
<div class="navbar">
        <a href="index.php">Home</a>
        <a href="previousBooking.php">About</a>
        <a href="#news">Offers</a>
        <?php 
				if(!isset($_SESSION["user_login_id"])){
                    
					echo '<a href="./Login.php">Login</a>';
				}
				else{
					echo '<a href="./logout.php">Logout</a>';
				}
				?>
        
        <div class="brand">
            <img src="./assests/Rentify Logo (1).png" height="38px" width="45px" alt="">
        </div>
        <?php
        if(isset($_SESSION["user_login_id"])){
                    echo'<div class="dropdown">
            <button class="dropbtn">
              <i class ="fas fa-user"></i>  
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>';}
          ?>
      </div>

    
