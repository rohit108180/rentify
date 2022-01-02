<?php (include "inc/connect.inc.php") ?>
<?php session_start() ?>


<?php


$user_query_update = "select * from customer_details c where c.email_id = '".$_SESSION['user_login_id']."'";

$user_update =  mysqli_fetch_assoc(mysqli_query($con ,$user_query_update));


if(isset($_POST["update"])){
    // echo "<script> alert('update  clicked')</script>;"


    if(isset($_POST["fname"])){
    //     // echo "<script> alert('fname changed')</script>;";

        $fname = $_POST["fname"];
       $update_fname =  "UPDATE `customer_details` SET `FNAME` = '".$fname."' WHERE `customer_details`.`DL_NUMBER` = '".$user_update["DL_NUMBER"]."'";

    // //    echo $update_fname;

       if(mysqli_query($con, $update_fname)){
        //    echo "<script> alert('fname updated')</script>";
       };
    }
    if(isset($_POST["l-name"])){
        $lname = $_POST["l-name"];
       $update_fname =  "UPDATE `customer_details` SET `LNAME` = '".$lname."' WHERE `customer_details`.`DL_NUMBER` = '".$user_update["DL_NUMBER"]."'";

       if(mysqli_query($con, $update_fname)){
        //    echo "<script> alert('lname updated')</script>";
       };
    }

    if(isset($_POST["street"])){
        $street = $_POST["street"];
       $update_fname =  "UPDATE `customer_details` SET `STREET` = '".$street."' WHERE `customer_details`.`DL_NUMBER` = '".$user_update["DL_NUMBER"]."'";

       if(mysqli_query($con, $update_fname)){
        //    echo "<script> alert('street updated')</script>";
       };
    }
    if(isset($_POST["city"])){
        $city = $_POST["city"];
       $update_fname =  "UPDATE `customer_details` SET `CITY` = '".$city."' WHERE `customer_details`.`DL_NUMBER` = '".$user_update["DL_NUMBER"]."'";

       if(mysqli_query($con, $update_fname)){
        //    echo "<script> alert('city updated')</script>";
       };
    }
    if(isset($_POST["state"])){
        $state = $_POST["state"];
       $update_fname =  "UPDATE `customer_details` SET `STATE_NAME` = '".$state."' WHERE `customer_details`.`DL_NUMBER` = '".$user_update["DL_NUMBER"]."'";

       if(mysqli_query($con, $update_fname)){
        //    echo "<script> alert('state updated')</script>";
       };
    }
    if(isset($_POST["zip_code"])){
        $zip_code = $_POST["zip_code"];
       $update_fname =  "UPDATE `customer_details` SET `ZIPCODE` = '".$zip_code."' WHERE `customer_details`.`DL_NUMBER` = '".$user_update["DL_NUMBER"]."'";

       if(mysqli_query($con, $update_fname)){
        //    echo "<script> alert('state updated')</script>";
       };
    }
    if(isset($_POST["contact-no"])){
        $contact = $_POST["contact-no"];
       $update_fname =  "UPDATE `customer_details` SET `PHONE_NUMBER` = '".$contact."' WHERE `customer_details`.`DL_NUMBER` = '".$user_update["DL_NUMBER"]."'";

       if(mysqli_query($con, $update_fname)){
        //    echo "<script> alert('state updated')</script>";
       };
    }

        //    echo "<script> alert('PROFILE UPDATED')</script>";

  

//   $street = $_POST["street"];
//   $city= $_POST["city"];
//   $state = $_POST["state"];
//   $zip_code = $_POST["zip_code"];
//   $email = $_POST["email"];
//   $contact_no = $_POST["contact-no"];




//   $Driving_license = $_POST["DL"];
  
//   $password = $_POST["password"];

//   if(strlen($password) <6){
//     $msg = "Password must be of atlest 6 digits";
//   }



//   $re_password = $_POST["re-password"];
//   if($password  != $re_password){
//     $msg = "Password doesn't match";

//   $sql = "INSERT INTO `customer_details` (`DL_NUMBER`, `FNAME`, `MNAME`, `LNAME`, `PHONE_NUMBER`, `EMAIL_ID`, `STREET`, `CITY`, `STATE_NAME`, `ZIPCODE`, `MEMBERSHIP_TYPE`, `MEMBERSHIP_ID`, `PASSWORD`) VALUES ('$Driving_license', '$fname', NULL, '$lname', '$contact_no', '$email', '$street', '$city', '$state', '$zip_code', 'N', NULL, '$password')";
//   // $sql = "select * from customer_details;";

//   // echo $sql;
  
  

//   if( $result = mysqli_query($con , $sql)){
//     echo "<script>alert('You have successfully registered');</script>";
//   }
  
// }
}


$user_update =  mysqli_fetch_assoc(mysqli_query($con ,$user_query_update));



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
            <h3 class ="sign-header">Update Profile</h3>
            <div class="sign-in-form">
                <form action ="updateProfile.php" method ="POST" >
                <label for="fname" class="address-label">First Name</label>
                    <input type="text" name="fname" id="address" placeholder="<?php echo $user_update["FNAME"]  ?>" >
                    <label class="l-name-label"for="l-name">Last name</label>
                    <input type="text" name ="l-name" placeholder="<?php echo $user_update["LNAME"]  ?>"  >
                    <br>
                    <label for="street" class="address-label">Street</label>
                    <input type="text" name="street" id="address" placeholder="<?php echo $user_update["STREET"]  ?>" >
                    <label for="city" class="address-label">City</label>
                    <input type="text" name="city" id="city" placeholder="<?php echo $user_update["CITY"]  ?>" >
                    <label for="State" class="address-label">State</label>
                    <input type="text" name="state" id="State" placeholder="<?php echo $user_update["STATE_NAME"]  ?>" >
                    <label for="zip_code" class="address-label">Pin Code</label>
                    <input type="text" name="zip_code" id="zip_code" placeholder="<?php echo $user_update["ZIPCODE"]  ?>" >
                    <br>
                    <label for="contact-num" id="contact-num-label">Contact number</label>
                    <input type="text" name="contact-no" placeholder="<?php echo $user_update["PHONE_NUMBER"]  ?>" >
                    <br>
<!-- 
                    <label for="dob" id= "dob-label">Date of birth</label>
                    <input type="date" name="dob" id="dob" >
                    <br> -->

                    <input type="submit" value="UPDATE" name = "update">
                
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