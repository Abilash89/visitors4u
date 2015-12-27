<html> 

<head> 
<title> favorites / bookmark title goes here </title>
  <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>



<body>


<h1>Communication Center : Texas A&M University Physical Plant</h1>;
<div><h3>Fire alarm</h3>&nbsp;<h3>Trouble Alarm</h3><h3>
KEO 355</h3><h3>Incident Log</h3><h3 >Proctors</h3></div>

<form action="log.php" method="post">
Date:
<input type="text" name="Date">
<br>
Time:
<input type="text" name="Time">
Name:
<input type="text" name="firstname">
<br>
Phone:
<input type="text" name="Phone"><br>


Buiding no: <select name="building_no">

<?PHP
include 'db_connect.php';


if ($stm = $mysqli->prepare("SELECT BuildingNo FROM  build_info")){
      
        $stm->execute(); // Execute the prepared query.
        $stm->bind_result($BuildingNo);
 
		while($stm->fetch())
		{

	    echo   "<option value=".$BuildingNo.">".$BuildingNo."</option>";
		    
		}


}



?>

</select >















Buiding name: <select>


<?PHP



if ($stm = $mysqli->prepare("SELECT BuildingName FROM  build_info")){
      
        $stm->execute(); // Execute the prepared query.
        $stm->bind_result($BuildingName);
 
		while($stm->fetch())
		{

	    echo   "<option value=".$BuildingName.">".$BuildingName."</option>";
		    
		}


}



?>





</select>

Floor:
<input type="text" name="Floor">
Room:
<input type="text" name="Room">
<br>
Location:
<input type="text" name="Location"><br>



<input type="hidden" name="Code" value="off"><INPUT TYPE=CHECKBOX NAME="Code"   >Code 1
<input type="hidden" name="Smoke" value="off"><INPUT TYPE=CHECKBOX NAME="Smoke" >Smoke
<input type="hidden" name="Fire" value="off"><INPUT TYPE=CHECKBOX NAME="Fire"      >Fire
<input type="hidden" name="Injury" value="off"><INPUT TYPE=CHECKBOX NAME="Injury"      >Injury
<input type="hidden" name="Odor" value="off"><INPUT TYPE=CHECKBOX NAME="Odor"      >Odor
<input type="hidden" name="Gas leak" value="off"><INPUT TYPE=CHECKBOX NAME="Gas leak"      >Gas leak

<br/>

<input type="hidden" name="Chemical" value="off"><INPUT TYPE=CHECKBOX NAME="Chemical"      >Chemical
<input type="hidden" name="Radiological" value="off"><INPUT TYPE=CHECKBOX NAME="Radiological"      >Radiological
<input type="hidden" name="Biological" value="off"><INPUT TYPE=CHECKBOX NAME="Biological"      >Biological
<input type="hidden" name="Other" value="off"><INPUT TYPE=CHECKBOX NAME="Other"      >Other
<br>

Name:
<input type="text" name="name">
<br>
Quantity:
<input type="text" name="Quantity"><br>
is any ione injured ? <input type="hidden" name="Other" value="off"><INPUT TYPE=RADIO NAME="group1"  >yes  <INPUT TYPE=RADIO NAME="group1"    >no<P> 
if yeas, has EMF been notified ? <input type="hidden" name="Other" value="off"><INPUT TYPE=RADIO NAME="group2"  >yes <INPUT TYPE=RADIO NAME="group2"      >no<P> 
is anyone  contaminated?  <input type="hidden" name="Other" value="off"><INPUT TYPE=RADIO NAME="group3">yes<INPUT TYPE=RADIO NAME="group3"      >no<P>
if so, where(arms ,legs,etc)  : <input type="text" name="bodypart">
call back number: <input type="text" name="call back number">
comments: <textarea></textarea>
radio room operator: <input type="text" name="radio room operator">
<br/>
<input type='submit' />
</form>


</body>

</html>