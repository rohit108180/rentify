<?php (include "inc/connect.inc.php") ?>

<?php 

    $categories = "select * from car_category";

    $result = mysqli_query($con , $categories);

    echo var_dump($result);


    if(mysqli_num_rows($result) > 0 ){
        // $data = ;
        while($row =mysqli_fetch_assoc($result) ){
            echo " ".$row["CATEGORY_NAME"]." ".$row["COST_PER_DAY"]."<br>";
        }
    }


?>