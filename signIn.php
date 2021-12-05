<?php (include "inc/connect.inc.php") ?>

<?php


$msg = "";
if(isset($_POST["email"])){

  $fname = $_POST["fname"];
  $lname = $_POST["l-name"];

  $street = $_POST["street"];
  $city= $_POST["city"];
  $state = $_POST["state"];
  $zip_code = $_POST["zip_code"];
  $email = $_POST["email"];
  $contact_no = $_POST["contact-no"];
//   $dob= $_POST["dob"];
  $Driving_license = $_POST["DL"];
  
  $password = $_POST["password"];

  if(strlen($password) <6){
    $msg = "Password must be of atlest 6 digits";
  }



  $re_password = $_POST["re-password"];
  if($password  != $re_password){
    $msg = "Password doesn't match";
  }
  else{  

  $sql = "INSERT INTO `customer_details` (`DL_NUMBER`, `FNAME`, `MNAME`, `LNAME`, `PHONE_NUMBER`, `EMAIL_ID`, `STREET`, `CITY`, `STATE_NAME`, `ZIPCODE`, `MEMBERSHIP_TYPE`, `MEMBERSHIP_ID`, `PASSWORD`) VALUES ('$Driving_license', '$fname', NULL, '$lname', '$contact_no', '$email', '$street', '$city', '$state', '$zip_code', 'N', NULL, '$password')";
  // $sql = "select * from customer_details;";

  // echo $sql;
  
  

  if( $result = mysqli_query($con , $sql)){
    echo "<script>alert('You have successfully registered');</script>";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify | sign-in</title>
    <link rel="stylesheet" href="./style/Rtstyle.css">
    <link rel="stylesheet" href="./style/rental.css">
</head>
<body>

    <?php include "./inc/navbar.inc.php"?>

    <section id="sign-in">
        <div class="bg2"></div>
        <div class="sign-in-block">
            <h3 class ="sign-header">Sign Up</h3>
            <div class="sign-in-form">
                <form action ="signin.php" method ="POST" >
                <label for="fname" class="address-label">First Name</label>
                    <input type="text" name="fname" id="address" placeholder="eg .Rohan" required>
                    <label class="l-name-label"for="l-name">Last name</label>
                    <input type="text" name ="l-name" placeholder="eg: Sharma">
                    <br>
                    <label for="street" class="address-label">Street</label>
                    <input type="text" name="street" id="address" placeholder="Enter your Street" required>
                    <label for="city" class="address-label">City</label>
                    <input type="text" name="city" id="city" placeholder="Enter your city" required>
                    <label for="State" class="address-label">State</label>
                    <input type="text" name="state" id="State" placeholder="Enter your State" required>
                    <label for="zip_code" class="address-label">Pin Code</label>
                    <input type="text" name="zip_code" id="zip_code" placeholder="Enter your zip_code" required>
                    <br>
                    <label id ="email-label" for="email">Email Id</label>
                    <input type="email" name="email" placeholder="eg: abc@xyz.com" required>
                    <br>
                    <label for="contact-num" id="contact-num-label">Contact number</label>
                    <input type="text" name="contact-no" placeholder="eg: 8877903411" required>
                    <br>
<!-- 
                    <label for="dob" id= "dob-label">Date of birth</label>
                    <input type="date" name="dob" id="dob" required>
                    <br> -->

                    <label id ="dl-label" for="DL">Driving Licence Number</label>
                    <input type="test" name="DL"  id="dl" required/>
                    <br>

                    <label class ="password-label"for="password">Password</label>
                    <input type="password" name="password" class= "password" id="password" placeholder="Create a password">

                    <label class ="password-label"for="password">Confirm password</label>
                    <input type="password" name="re-password" class= "password" id="re-password" placeholder="Re Enter Your Password">

                    <input type="submit" value="Create Account">

                </form>
            </div>
        </div>

    </section>

    <footer>
        <div id="foot">
            <p class="fott"><i class="fab fa-whatsapp fa-3x"></i></p>
            <p class="fott"><i class="fab fa-instagram fa-3x"></i></p>
           <p class="fott"><i class="fab fa-linkedin-in fa-3x"></i></p>
            <p class="fott"><i class="fab fa-twitter-square fa-3x"></i></p>
        </div>
        <div class="footer-links">
            <div class="last" id="more-links">
              <!-- <a href="links.html"><b>Contact Us</b></a> -->
              <ul>
                  <li><a href="#">Contact us</a></li>
                  <li><a href="#">Faqs</a></li>
                  <li><a href="#">Terms and Conditions</a></li>
    
    
              </ul>
             
            </div>
            <div class="last" id="quick-links">
             <b>Quick links</b>
             <ul>
                 <li><a href="#">Home</a></li>
                 <li><a href="#">Subscriptions</a></li>
                 <li><a href="#">About</a></li>
                 <li><a href="#">login</a></li>
             </ul>
            </div>
            <div class="last" id="last2">
                <p >Hit Subscribe Button and get notifications for latest offers</p>
                <input type="text" id="search" class="search" placeholder="Enter your E-mail">
                <input type="submit" value="SUBSCRIBE" class="subscribe"  >
            </div>
        </div>
     </footer>
     <script
     src="https://kit.fontawesome.com/4f3c8bf71e.js"
     crossorigin="anonymous"
   ></script>
</body>
</html>