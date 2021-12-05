<?php (include "inc/connect.inc.php") ?>

<?php 
ob_start();
session_start();


if(isset($_COOKIE["index_msg"])){
    echo '<script type="text/javascript">alert("'.$_COOKIE["index_msg"].'")</script>';
    $_COOKIE["index_msg"] = "";
}

?>


    <?php include ("inc/navbar.inc.php") ?>


    <!-- <a href="./Login.php">login</a> -->
    <div class="front ">
        <p>TO TRAVEL IS TO LIVE </p>
    </div>
    

    <section class="modal-window hidden">
        <div class="background"></div>
        <div class="modal-img">
          <div class="modal-close">
            <i class="far fa-times-circle"></i>
          </div>
          <a href="./cars.php"><img src="./assests/modal-pop-add.png" alt="pop-add" /></a>
    
          
        </div>
      </section>


  
  
  
      <section class="best-deals align-verticle ">
        <div class="container-bd ">
          <div class="title-bd  p-1">
            <p class="text-center m-0 sec-det">Cars for every need</p>
            <legend class="text-center m-1 ">
              Choose a car that fits best to your needs
            </legend>
          </div>
          <div class="car-types ">
              <i class="fas fa-chevron-left left-slider "></i>
            <i class="fas fa-chevron-right right-slider "></i>
  
              <div class ="type-container">
              <div class="car-type active">
                
                  <div class="car-photo align-verticle">
                      <img src="./assests/suv.png" alt="">
                  </div>
                  <div class="car-details ">
                      <p class="type"> SUV</p>
                      <p class="price">Starting from ₹80/Km</p>
                      <p class="cars">Available cars :<br> Hunadai Creata, Maruti Suzuki Vitara Brezza</p>
                      <a href="./cars.php" class = " show-all-btn">SEE ALL <i class="fas fa-arrow-right"></i></a>
                  </div>
              </div>
   
              <div class="car-type ">
                
                  <div class="car-photo align-verticle">
                      <img src="./assests/hatchback.png" alt="Hatchback Car">
                  </div>
                  <div class="car-details">
                      <p class="type">Hatchback</p>
                      <p class="price">Starting from ₹70/Km</p>
                      <p class="cars">Available cars :<br> Hunadai Creata, Maruti Suzuki Vitara Brezza</p>
                      <a href="./cars.php" class = "show-all-btn">SEE ALL<i class="fas fa-arrow-right"></i></a>
                  </div>
              </div>
       
              <div class="car-type ">
                
                  <div class="car-photo align-verticle">
                      <img src="./assests/sedan.png" alt="">
                  </div>
                  <div class="car-details">
                      <p class="type">Sedan</p>
                      <p class="price">Starting from ₹75/Km</p>
                      <p class="cars">Available cars :<br> Hunadai Creata, Maruti Suzuki Vitara Brezza</p>
                      <a href="./cars.php" class = "show-all-btn">SEE ALL<i class="fas fa-arrow-right"></i></a>
                  </div>
              </div>
              <div class="car-type ">
                  <div class="car-photo align-verticle">
                      <img src="./assests/mpv.png" alt="">
                  </div>
                  <div class="car-details">
                      <p class="type">MVP</p>
                      <p class="price">Starting from ₹85/Km</p>
                      <p class="cars">Available cars :<br> Hunadai Creata, Maruti Suzuki Vitara Brezza</p>
                      <a href="./cars.php" class = "show-all-btn">SEE ALL<i class="fas fa-arrow-right"></i></a>
                  </div>
              </div>
              </div>
          </div>
        </div>
      </section>





      <!-- SUBSCRIPTOION -->
      <div id= "Subscriptions" class="hidden">
        <h3>Subscriptions and offers </h3>

        <p> Worried about not having your own car?</p>
        <p>Don't worry as Rentify has great subscription offers which will fill in all your needs!!</p>
        <div >
            <ul id="options">
            
                <li><a href="#daily">
                <i class="fas fa-calendar-day"></i>
                Daily
            </a>
            
            </li>
           
                <li><a href="#weekly">
                <i class="fas fa-calendar-week"></i>
               Weekly
                </a>
                </li>
          
                <li><a href="#monthly">
                <i class="fas fa-calendar-alt"></i> Monthly</a></li>
             <br>
                <li><a href="#dhamaka-offer"><i class="fas fa-gifts"></i>Dhamaka offer!!</a></li>

          
        </div>

    </div>
    <div id="daily">
        
        <a href="#" class="close">X</a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas praesentium corporis quaerat non quidem, quo, voluptatibus possimus quam corrupti impedit sunt cumque iusto, laboriosam nesciunt perferendis sapiente saepe nisi. Velit.</p>
        <a href="#" class="go-about">Let's Hit The Road</a>
    </div>

    <div id="weekly">
        
        <a href="#" class="close">X</a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas praesentium corporis quaerat non quidem, quo, voluptatibus possimus quam corrupti impedit sunt cumque iusto, laboriosam nesciunt perferendis sapiente saepe nisi. Velit.</p>
        <a href="#" class="go-about">Let's Hit The Road</a>
    </div>

    <div id="monthly">
        
        <a href="#" class="close">X</a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas praesentium corporis quaerat non quidem, quo, voluptatibus possimus quam corrupti impedit sunt cumque iusto, laboriosam nesciunt perferendis sapiente saepe nisi. Velit.</p>
        <a href="#" class="go-about"> Let's Hit The Road </a>
    </div>

    <div id="dhamaka-offer">
        
        <a href="#" class="close">X</a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas praesentium corporis quaerat non quidem, quo, voluptatibus possimus quam corrupti impedit sunt cumque iusto, laboriosam nesciunt perferendis sapiente saepe nisi. Velit.</p>
        <a href="#" class="go-about">Let's Hit The Road</a>
    </div>

    <hr>
    <hr>
    <!-----------------------------ADVERTISEMENT--------------------------------->
   
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Our Competing Prices</p>
        </div>

        <div class="row align-items-center .pricebox">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Basic</h3>
              <h4>₹0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i>Can avail best discounts on our <br>best Deals</li>
                <li><i class="bx bx-check"></i> Can Rent for  maximum 5 days</li>
                <li class="na"><i class="bx bx-x"></i> <span>Get sanitized Rentify cars at<br>your door step</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Luxuary Cars</span></li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Best</h3>
              <h4>₹529<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Can avail best discounts on our <br>best Deals</li>
                <li><i class="bx bx-check"></i> Can Rent for  maximum 15 days</li>
                <li><i class="bx bx-check"></i> Get sanitized Rentify cars at<br>your door step</li>
                <li class="na"><i class="bx bx-x"></i> <span>Luxuary Cars</span></li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Premimum</h3>
              <h4>₹950<span>per month</span></h4>
              <ul>
              <li><i class="bx bx-check"></i> Can avail best discounts on our <br>best Deals</li>
                <li><i class="bx bx-check"></i> Can Rent for complete 1 month</li>
                <li><i class="bx bx-check"></i> Get sanitized Rentify cars at<br>your door step</li>
                
                <li><i class="bx bx-check"></i>Luxuary cars</li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section>End Pricing Section




<!-- -------------------Testimonal --------------------------- -->



   <section class= "testimonals">
    <div class="test" >
        Testimonals
    </div>
    <div class="container-testimonals">
        <div class="box ">
            <div class="testimonal-header">
                <h1>Mokshi Sharma</h1>

                <div class="ratings">
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                </div>

            </div>

            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vitae, non vel molestias delectus omnis repudiandae voluptate porro aspernatur ut, rem obcaecati enim illo maxime!</p>
       
        </div>
        <div class="box">
            <div class="testimonal-header">
                <h1>Rohit Sharma</h1>

                <div class="ratings">
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                </div>

            </div>

            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vitae, non vel molestias delectus omnis repudiandae voluptate porro aspernatur ut, rem obcaecati enim illo maxime!</p>
       
        </div>
        <div class="box">
            <div class="testimonal-header">
                <h1>Amrisha Das</h1>

                <div class="ratings">
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                    <i class="fas fa-star" style="color: goldenrod;"></i>
                </div>

            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vitae, non vel molestias delectus omnis repudiandae voluptate porro aspernatur ut, rem obcaecati enim illo maxime!</p>
       
        </div>

       
</section>

<?php include  ('inc/footer.inc.php')?>
  
      