


<?php (include "inc/connect.inc.php") ?>
<?php session_start(); ?>

<?php
if (!isset($_SESSION['user_login_id'])) {
}
else {
	header("location: index.php");
}


$msg = "";
if(isset($_POST["username"])){

  $username = $_POST["username"];

  $password = $_POST["password"];

  if(strlen($password) <6){
    $msg = "Password must be of atlest 6 digits";
  }
  else{

  $sql = "select * from customer_details where email_id = '$username' and password = '$password' limit 1;";
  // $sql = "select * from customer_details;";

  // echo $sql;
  
  $result = mysqli_query($con , $sql);

  if( mysqli_num_rows($result) == 1){
    
    $_SESSION["user_login_id"] = $username;
    $_SESSION["user_password"] = $password;
    setcookie('user_login', $user_login, time() + (365 * 24 * 60 * 60), "/");
    $msg= "You have successfully logged in";
    header('location: index.php');
  }
  else{
    $msg ="you have Entered incorrect id or password";
  }
}
}
else{
  $msg = "Enter email-id";
}

$con->close();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rentify | login</title>
    <link rel="stylesheet" href="./style/Rtstyle.css" />
    <link rel="stylesheet" href="./style/rental.css" />
  </head>
  <body>



    <?php include ("inc/navbar.inc.php") ?>

    <section id="login">
      <div class="bg"></div>
      <!-- <div class="circle"></div> -->
      <div class="login-form">
        <p class="login-header">Login</p>
        <form   action="./Login.php" method="POST" name ="login-form" onsubmit = "return validateLogin()">
          <!-- <label for="username" 
            ><i class="fa fa-user-circle" aria-hidden="true"></i
            ></label> -->
            <?php

            if($msg!= '')
            echo '<p class="err err-username ">'.$msg.'</p>'
            ?>
          <input
            type="email"
            name="username"
            class="username"
            placeholder="Email-Id"
          />

          <br />
          <!-- <label for="password"><i class="fas fa-unlock-alt"></i></label> -->
          <input
            type="password"
            name="password"
            class="password"
            placeholder="password"
          />
          <p class="err err-password"></p>
          <br />
          <input class="checkbox" type="checkbox" />
          <label class="checkbox-label" for="remember-me">remember me</label>
          <br />

          <input type="submit" value="login" class="login-btn" />
          <br />
        </form>

        <div class="login-to-sign-up">
          <p >Don't have an account? <a href="./signIn.php">Sign-up now </a></p>
        </div>
      </div>
    </section>





  <?php include  ('inc/footer.inc.php')?>

   <script src="../script/login.js"></script>
   <script
   src="https://kit.fontawesome.com/4f3c8bf71e.js"
   crossorigin="anonymous"
 ></script>
  </body>
</html>

