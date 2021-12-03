<?php (include "inc/connect.inc.php") ?>

<?php 
ob_start();
session_start();
?>



<?php

// if(isset($_POST["changeit"])){

    
    if(isset($_POST["changeit"])){
        $curr = $_POST["curr-pass"];
        $new = $_POST["new-pass"];
        $conf = $_POST["confirm-pass"];

        $change_pass_query = "UPDATE `customer_details` SET `PASSWORD` = '".$new."' WHERE `customer_details`.`EMAIL_ID` = '".$_SESSION['user_login_id']."'";

            if($curr != $_SESSION["user_password"]){
                echo'
                    <script>
                        alert("current Password  doesn\'t match");
                    </script>';
            }
            else if($new != $conf){
                echo'
                    <script>
                        alert("New Password and Confirm password doesn\'t match");
                    </script>';
            }
            else if(mysqli_query($con, $change_pass_query)){

             

                echo '<script> alert("Password changed")</script>';
                $_SESSION["user_password"] = $new;
            }


}

?>


    <?php include ("inc/navbar.inc.php") ?>

    <Section class = "password-change">
        <h2>Change Your Password</h2>

        <form action="changePassword.php" method="POST">
            <label for="Curr-pass">Current Password</label>
            <br>
            <input type="password" name="curr-pass" id="Curr-pass" required>
            <br>
            <label for="new-pass">New Password</label>
            <br>
            <input type="password" name="new-pass" id="new-pass" required><br>
            <label for="confirm-pass">Confirm Password</label>
            <br>
            <input type="password" name="confirm-pass" id="confirm-pass" required><br>
            
            <input type="submit" name="changeit" value="Change">
        </form>
    </Section>


    <?php include  ('inc/footer.inc.php')?>
  
      