<?php include "inc/connect.inc.php" ?>
<?php session_start() ?>



    <?php

    $msg = "";

    if(isset($_SESSION["user_login_id"])){
    }
    else{
        header("Location: Login.php");
    }



    $user_query = "select * from customer_details c where c.email_id = '".$_SESSION['user_login_id']."'";

    $user =  mysqli_fetch_assoc(mysqli_query($con ,$user_query));

    $bookings = "SELECT  count(b.BOOKING_ID) FROM booking_details b";

    $noOfBookings = mysqli_fetch_row(mysqli_query($con , $bookings))[0];

    $Bookingid = "B".($noOfBookings+ 1000 +1);

    $carid= $_GET["carid"];

    $getDetails = "SELECT * FROM car c, location l, car_category ct
    WHERE c.LOC_ID = l.LOCATION_ID and c.CAR_CATEGORY_NAME = ct.CATEGORY_NAME and c.REGISTRATION_NUMBER ='$carid';";

    $car = mysqli_fetch_assoc(mysqli_query($con, $getDetails));
    ?>

    <?php  include "inc/navbar.inc.php" ?> 





    <div id="book-now">
        <h1 class = "bn-heading" style= "margin :1rem;">Book your Car</h1>

        <form action= <?php echo "'BookNow.php?carid=".$_GET['carid']."'" ?> 
        method="POST" class= "book-now-form">

        <label for="loc">Pick up date :</label>
        <input type="date" name="pick-up-date" id="loc" required/>

        <br>
        <label for="loc">Return date :</label>
        <input type="date" name="return-date" id="loc" required/>
        <br>

        <input type="submit" name="save" id="save" value="save">

        </form>

        <?php 

        if(isset($_POST["save"])){


            $query = "SELECT DATEDIFF('".$_POST['return-date']."', '".$_POST['pick-up-date']."')";
            $no_of_days  = mysqli_fetch_row(mysqli_query($con, $query))[0];

            if($no_of_days < 0){
                echo "<script> alert('Return date must be grater than pickup Date')</script> ";
            }
            else{

            $amount = $no_of_days*$car["COST_PER_DAY"]*1.08;
            $book = "INSERT INTO `booking_details` (`BOOKING_ID`, `FROM_DT_TIME`, `RET_DT_TIME`, `AMOUNT`, `BOOKING_STATUS`, `PICKUP_LOC`, `REG_NUM`, `DL_NUM`, `ACT_RET_DT_TIME`, `DISCOUNT_CODE`) VALUES ('$Bookingid', '".$_POST["pick-up-date"]."', '".$_POST["return-date"]."', '".$amount."', 'B', '".$car["LOC_ID"]."', '".$car["REGISTRATION_NUMBER"]."', '".$user["DL_NUMBER"]."', NULL, NULL)";
            // echo $query;

            echo'<div class="bookDetails">
            <p> <strong> Car name : </strong>'.$car["MAKE"].' '.$car["MODEL_NAME"].' </p>
            <p> <strong> Car Registration no :</strong> '.$_GET["carid"].' </p>
            <p> <strong> Pick up date : </strong>'.$_POST["pick-up-date"].'   </p>
            <p> <strong> Booking Id :</strong> '.$Bookingid.' </p>
            <p style ="font-size: 1.7rem; color: green"><strong>Amount Payable : </strong>  ₹'.$amount.'</p>
            <p style = "font-size: 0.7rem;">(including taxes)</p>
            </div>
    
            <form action="BookNow.php?carid='.$_GET['carid'].'&pick='.$_POST["pick-up-date"].'&return='.$_POST["return-date"].'&amount='.$amount.'" method ="POST" class ="pay-now">
                <input type="submit" name ="Book" value="Book">
                <button id="rzp-button1">Pay</button>
                </form>
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script>
            var options = {
                "key": "rzp_test_NCuOyQcG2kIuX6", // Enter the Key ID generated from the Dashboard
                "amount": "'.($amount*100).'", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                "currency": "INR",
                "name": "Rentify ",
                "description": "Test Transaction",
                "image": "https://example.com/your_logo",
                "id": "'.$Bookingid.'", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function (response){
                    alert("Your car has been  booked !!!");


                    
                },
                "prefill": {
                    "name": "'.$user["FNAME"].' '.$user["LNAME"].'" ,
                    "email": "'.$user["EMAIL_ID"].'",
                    "contact": "9878667545"
                },
                "notes": {
                    "address": "Razorpay Corporate Office"
                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.on("payment.failed", function (response){
                    alert(response.error.code);
                    alert(response.error.description);
                    alert(response.error.source);
                    alert(response.error.step);
                    alert(response.error.reason);
                    alert(response.error.metadata.order_id);
                    alert(response.error.metadata.payment_id);

            });
            document.getElementById("rzp-button1").onclick = function(e){
                rzp1.open();
                e.preventDefault();
            }
            </script>
            ';

        }
        }



    if(isset($_POST["Book"])){
                
        $book = "INSERT INTO `booking_details` (`BOOKING_ID`, `FROM_DT_TIME`, `RET_DT_TIME`, `AMOUNT`, `BOOKING_STATUS`, `PICKUP_LOC`, `REG_NUM`, `DL_NUM`, `ACT_RET_DT_TIME`, `DISCOUNT_CODE`) VALUES ('$Bookingid', '".$_GET["pick"]."', '".$_GET["return"]."', '".$_GET["amount"]."', 'B', '".$car["LOC_ID"]."', '".$car["REGISTRATION_NUMBER"]."', '".$user["DL_NUMBER"]."', NULL, NULL)";


        if(mysqli_query($con, $book)){

            $msg = "Your car is booked";
            echo'
            <section class="modal-window">
            <div class="background"></div>
                <div class="pop-message-box">
                <i class="far fa-times-circle" id="close"></i>
                <i class="fas fa-check-circle check"></i>
                <p>Your Car has been Booked</p>
                </div>
            </section>';
        }
    }
    ?>  


    </div>

    <?php  include "inc/footer.inc.php"?> 


    <script src="./script/booknow.js"></script>