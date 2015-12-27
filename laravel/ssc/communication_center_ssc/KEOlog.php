<?php

include 'db_connect.php';



$CallerName =  $_POST["Callername"];
$CallerPhone =  $_POST["Callernumber"];
$BuildingNumber =  $_POST["Buildingroom"]; 
$BuildingName =  $_POST["Buildingname"];
$ActionRequested =  $_POST["Actionrequired"];
$ActionPerformed =  $_POST["Actionstaken"];

		
$query = "INSERT INTO keo_1 ( ActionPerformed ,CallerName, CallerPhone, BuildingNumber, BuildingName, ActionRequested) VALUES ('$ActionPerformed' , '$CallerName', '$CallerPhone', '$BuildingNumber','$BuildingName','$ActionRequested') ";
	
	
 $mysqli->query($query);
			   
			
				   
				   
				   
			   
	
	
	
	
	
	
	






	?>