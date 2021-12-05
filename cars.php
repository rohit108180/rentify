<?php (include "inc/connect.inc.php") ?>
<?php session_start() ?>

<?php 

// sql query to get all the cars without filters
$cars = "select *from car c, car_category ct , location l where c.CAR_CATEGORY_NAME = ct.CATEGORY_NAME and c.LOC_ID = l.LOCATION_ID AND c.REGISTRATION_NUMBER not in (select b.REG_NUM from booking_details b)";

// if location is set then check for from values
if(isset($_GET["location"])){

  $locations = $_GET["location"];
  $car_category = $_GET["car-category-select"];
  $pickUpDate = $_GET["pick-up-date"];
  $returnDate = $_GET["return-date"];

  if($car_category == ''){
    $cars = "SELECT * 
    from car c, car_category ct, location l 
    where c.CAR_CATEGORY_NAME = ct.CATEGORY_NAME and c.LOC_ID = l.LOCATION_ID  AND c.LOC_ID = '$locations' and  c.REGISTRATION_NUMBER not in (
        SELECT b.REG_NUM 
        FROM booking_details b
        where  ('$pickUpDate' > b.FROM_DT_TIME and '$pickUpDate' < b.RET_DT_TIME) or ( '$pickUpDate' < b.FROM_DT_TIME and '$returnDate' > b.FROM_DT_TIME));";
  }
  else{
    $cars = "SELECT * 
    from car c, car_category ct, location l where c.CAR_CATEGORY_NAME = ct.CATEGORY_NAME and c.LOC_ID = l.LOCATION_ID  and c.CAR_CATEGORY_NAME ='$car_category' AND c.LOC_ID = '$locations' and  c.REGISTRATION_NUMBER not in (
        SELECT b.REG_NUM 
        FROM booking_details b
        where  ('$pickUpDate' > b.FROM_DT_TIME and '$pickUpDate' < b.RET_DT_TIME) or ( '$pickUpDate' < b.FROM_DT_TIME and '$returnDate' > b.FROM_DT_TIME));";

  }
}


// if book-now btn is set then move to book now page


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
        <!-- <div id="filter-box">
          <div class="filter-item free-km">
            <p class="head">Free km:</p>
            <div class="choices">
              <span data-value="66" class="active-filter">66</span>
              <span data-value="122">122</span>
            </div>
          </div>
          <div class="filter-item fuel-cost">
            <p class="head">Fuel Cost:</p>
            <div class="choices">
              <span class="active-filter">Not Included</span>
            </div>
          </div>
          <div class="filter-item seaters">
            <p class="head">Seaters :</p>
            <div class="choices">
              <span class="active-filter" data-value="5">5</span>
              <span data-value="7">7</span>
            </div>
          </div>
          <div class="filter-item car-type-filter">
            <p class="head">Car tpye</p>
            <div class="choices">
              <span class="active-filter" data-value="hatchback"
                >Hatchback</span
              >
              <span data-value="Sedan">Sedan</span>
              <span data-value="SUV">SUV</span>
              <span data-value="MVP">MVP</span>
            </div>
          </div>
          <div class="filter-item transmision">
            <p class="head">Transmission</p>
            <div class="choices">
              <span class="active-filter" data-value="Manual">Manual</span>
              <span data-value="Automatic">Automatic</span>
            </div>
          </div>
        </div> -->



        <div class="cars-container">
          <!--form for filter-->
          <div class="form-filter" style="order: 0">

          <div class="box-row">
            <span>Pickup Location</span>
            <span>Car category</span>
            <span>Pickup date</span>
            <span>Retrun date</span>
          </div>

            <form action="cars.php" method="GET" class= "box-row">

                <select  name="location" >
                <option value = ''>Select Pick Up location</option>
                  <?php 

                    $locations = "select * from  location";

                    $result = mysqli_query($con , $locations);

                    // echo var_dump($result);


                    if(mysqli_num_rows($result) > 0 ){
                        // $data = ;
                        while($row =mysqli_fetch_assoc($result) ){
                            echo "<option value = '".$row["LOCATION_ID"]."'>".$row["LOCATION_NAME"]." </option>";
                        }
                    }

                  ?>
                </select>
                <select  name="car-category-select">
                <option value = ''>choose car Cateegories</option>
                  <?php 

                    $categories = "select * from car_category";

                    $result = mysqli_query($con , $categories);

                    // echo var_dump($result);


                    if(mysqli_num_rows($result) > 0 ){
                        // $data = ;
                        while($row =mysqli_fetch_assoc($result) ){
                            echo "<option value = '".$row["CATEGORY_NAME"]."'>".$row["CATEGORY_NAME"]."</option>";
                        }
                    }

                  ?>
                </select>

                <input type="date" name="pick-up-date" id="loc" required/>

                <input type="date" name="return-date" id="loc" required/>

              <input class="butt" type="submit" name="submit" />
            </form>
          </div>

          <div class="cars-items">
            <!-- <div class="cars-item">
              <div class="cars-img">
                <img src="../assests/cars/Hatachback/santro.jpeg" alt="SEDAN" />
              </div>
              <div class="cars-details">
              <h2>Boleno</h2>
              <p>Transmition: <span>Manual</span></p>

              <p>Fuel type:<span>Petrol</span></p>
              <p><i class="fas fa-star" style="color: goldenrod"></i> 4.4</p>

             
              </div>
              <div class="cars-price">
                <p class="cars-item-price">₹ <span>1224</span></p>
               <form action="cars.php" method ="GET">
              <input type="submit" name = " book-btn"class="book-btn"
                value ="BOOK NOW" >
                </form> 
            </div>
            </div> -->

            <?php 
            

             $result = mysqli_query($con , $cars);




             if(mysqli_num_rows($result) > 0 ){
                 // $data = ;
                 while($row =mysqli_fetch_assoc($result) ){
                   

                     echo '<div class="cars-item"><div class="cars-img">
                     <img src="./assests/demoCar.jpg" alt= "car" />
                     </div>
                     <div class="cars-details">
                     <h2>'.$row["MODEL_NAME"].'</h2>
                     <p>Type : <span>'.$row["CAR_CATEGORY_NAME"].'</span></p>
                     
                     <p><span>'.$row["MODEL_YEAR"].'</span></p>
                     <p>'.$row["MILEAGE"].' Km driven</p>
                     <p>'.$row["LOCATION_NAME"].'</p>
                     
                     <!--link it to the form page-->
                     </div>
                     <div class="cars-price">
                     <p class="cars-item-price">₹ <span>'.$row["COST_PER_DAY"].'</span></p>
                     <p>per day</p>
                     <a href= "Booknow.php?carid='.$row["REGISTRATION_NUMBER"].'"  class="book-btn"
                     >book Now</a
                     >
                     </div>
                     </div>';;
                 }
             }
                


            ?>
          </div>
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


