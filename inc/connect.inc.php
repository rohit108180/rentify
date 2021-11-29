<?php 
	$con = mysqli_connect("localhost","root","") ;
	
	if(!$con)die("Couldn't connet to SQL server");


	if(mysqli_select_db($con ,"rental_service_db")){
		
	}
	else die("Couldn'ttt select DB");



?>