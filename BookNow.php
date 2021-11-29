<?php include "inc/connect.inc.php" ?>
<?php session_start() ?>

    <?php

    $user = "select * from customer_details c where c.email_id = '".$_SESSION['user_login_id']."'";

    $UDL =  mysqli_fetch_assoc(mysqli_query($con ,$user))["DL_NUMBER"];

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

        <form action= <?php echo "'BookNow.php?carid=".$_GET['carid']."'" ?> method="POST" class= "book-now-form">

        <label for="loc">Pick up date :</label>
        <input type="date" name="pick-up-date" id="loc" required/>

        <label for="loc">Return date :</label>
        <input type="date" name="return-date" id="loc" required/>

        <input type="submit" name="save" id="save" value="save">

        </form>

        <?php 

        if(isset($_POST["save"])){


            $query = "SELECT DATEDIFF('".$_POST['return-date']."', '".$_POST['pick-up-date']."')";
            $amount = mysqli_fetch_row(mysqli_query($con, $query))[0]*$car["COST_PER_DAY"]*1.0815;

            // echo $query;

            echo'<div class="bookDetails">
            <p> <strong> Car name : </strong>'.$car["MAKE"].' '.$car["MODEL_NAME"].' </p>
            <p> <strong> Car Registration no :</strong> '.$_GET["carid"].' </p>
            <p> <strong> Pick up date : </strong>'.$_POST["pick-up-date"].'   </p>
            <p> <strong> Booking Id :</strong> '.$Bookingid.' </p>
            <p style ="font-size: 1.7rem; color: green"><strong>Amount : </strong> Payable : ₹'.$amount.'</p>
            <p style = "font-size: 0.7rem;">(including taxes)</p>
            </div>
    
            <form action="BookNow.php?carid='.$_GET['carid'].'&pick='.$_POST["pick-up-date"].'&return='.$_POST["return-date"].'&amount='.$amount.'" method ="POST" class ="pay-now">
                <input type="submit" name ="Book" value="Book">
            </form>';
        }



    if(isset($_POST["Book"])){
                
        $book = "INSERT INTO `booking_details` (`BOOKING_ID`, `FROM_DT_TIME`, `RET_DT_TIME`, `AMOUNT`, `BOOKING_STATUS`, `PICKUP_LOC`, `REG_NUM`, `DL_NUM`, `ACT_RET_DT_TIME`, `DISCOUNT_CODE`) VALUES ('$Bookingid', '".$_GET["pick"]."', '".$_GET["return"]."', '".$_GET["amount"]."', 'B', '".$car["LOC_ID"]."', '".$car["REGISTRATION_NUMBER"]."', '".$UDL."', NULL, NULL)";


        if(mysqli_query($con, $book)){
            echo '<script type="text/javascript">alert("Your car is booked ")</script>';
            
            // header("Location: index.php");
        }


    
    }
    ?>  


    </div>

    <?php  include "inc/footer.inc.php"?> 
