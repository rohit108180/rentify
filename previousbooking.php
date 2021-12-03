<?php (include "inc/connect.inc.php") ?>

<?php 
session_start();





$user = "select * from customer_details c where c.email_id = '".$_SESSION['user_login_id']."'";

$UDL =  mysqli_fetch_assoc(mysqli_query($con ,$user))["DL_NUMBER"];


$bookings = "select* from booking_details b , car c
where b.DL_NUM = '".$UDL."' and b.REG_NUM = c.REGISTRATION_NUMBER ";


if(isset($_GET["submit"])){
$fromDate = $_GET["from-date"];
$toDate = $_GET["to-date"];

  if(!($fromDate == '' || $toDate == '')){
    $bookings = "select* from booking_details b , car c
where b.DL_NUM = '".$UDL."' and b.REG_NUM = c.REGISTRATION_NUMBER and b.FROM_DT_TIME >= '$fromDate' and b.FROM_DT_TIME <= '$toDate' ";
  }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rentify</title>
    <link rel="stylesheet" href="./style/Rtstyle.css" />
    <link rel="stylesheet" href="./style/rental.css" />
  </head>
  <body>
    <?php include "./inc/navbar.inc.php" ?>
    <section>
      <div id="cars">
          

        <div class="cars-container">
          <!--form for filter-->
          <div class="form-filter " style="order: 0" >

            <form action="previousbooking.php" method="GET" class= "box-row"">

            <div>
              <label for="from-date">From : </label>
                <input type="date" name="from-date" id="loc" />

            </div>


            <div>
            <label for="to-date">To : </label>
            <input type="date" name="to-date" id="loc" />
            </div>

              <input class="butt" type="submit" name="submit" />
            </form>
          </div>

          <div class="cars-items">
            <!-- <div class="cars-item">
              
              <div class="cars-details">

              <h2>Boleno</h2>
              <p><strong> Booking Id: </strong> <span>B001</span></p>
              <p><strong> Start date: </strong> <span>B001</span></p>
              <p><strong> Returned Date: </strong> <span>B001</span></p>
              <p><strong> Car Registration No. : </strong> <span>B001</span></p>
              
             
              </div>
              <div class="cars-price">
                <p class="cars-item-price">₹ <span>1224</span></p>

              <a  class="book-btn"
                >Returned</a
              >
            </div>

            </div> -->



<?php 

$result = mysqli_query($con , $bookings);



if(mysqli_num_rows($result) > 0 ){
    // $data = ;
    while($row =mysqli_fetch_assoc($result) ){

        $ISRETURED = "";
        if($row["BOOKING_STATUS"] == "B"){
            $color = "red";
            $ISRETURED = '<a href  = "previousbooking.php?returncar='.$row["BOOKING_ID"].'" class="book-btn" style ="background-color: red;"
            >RETURN</a
          >';
        }
        else{
            $color = "turquoise";
            $ISRETURED = '<p class="book-btn" style ="background-color: turquoise ;"
            > RETURNED</p>';
        }
       

       


        echo '<div class="cars-item">
 
        <div class="cars-details">

        <h2>'.$row["MODEL_NAME"].'</h2>
        <p><strong> Booking Id: </strong> <span>'.$row["BOOKING_ID"].'</span></p>
        <p><strong> Start date: </strong> <span>'.$row["FROM_DT_TIME"].'</span></p>
        <p><strong> Returned Date: </strong> <span>'.$row["RET_DT_TIME"].'</span></p>
        <p><strong> Car Registration No. : </strong> <span>'.$row["REG_NUM"].'</span></p>
        
       
        </div>
        <div class="cars-price">
          <p class="cars-item-price">₹ <span>'.$row["AMOUNT"].'</span></p>

        '.$ISRETURED.'
        
      </div></div>';;
    }
}

if(isset($_GET["returncar"])){



  $retrun = "UPDATE `booking_details` SET `BOOKING_STATUS` = 'R' WHERE `booking_details`.`BOOKING_ID` = '".$_GET["returncar"]."' ";

  // echo $retrun;

  if(mysqli_query($con, $retrun)){
    echo  '<script>window.open("http://localhost/rentify/rentify/","_self")</script>';
  }

}
   
?>
        </div>
      </div>
    </section>

    <section class="car-details-container hidden">
      <div id="car-details">
        <div id="car-image">
          <img src="../assests/cars/Hatachback/i20.jpeg" alt="" />
        </div>

        <div class="car-specifications">
          <p class="car-name">Alto</p>
          <p class="rent-price">₹ <span>1250</span></p>
          <p></p>
        </div>
      </div>
    </section>

    <?php include "inc/footer.inc.php" ?>

    <!-- <script src="./script/car.js"></script> -->

    <script
      src="https://kit.fontawesome.com/4f3c8bf71e.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
