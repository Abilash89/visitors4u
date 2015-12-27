<?php


include 'db_connect.php';

  echo "

               <html>

               <head>
                         <title> favorites / bookmark title goes here </title>
                         <link rel='stylesheet' href='style.css' type='text/css' media='screen'/>
               </head>

               <body>

						 <div class='upperSection'>

						 </div><br/>
						 <div id='navHolder'>
						 <ul id='nav' align:center;>
								<li><a href='#' style='float:left;'>FIRE ALARM</a></li>
								<li><a href='#'>TROUBLE ALARM</a></li>
						<li><a href='keo.php'>KEO355</a></li>
								<li><a href='#'>INCIDENT LOG</a></li>
								 <li><a href='index.php'>PROCTORS</a></li>>
								<li><a href='#'  style='float:right;'>ADMIN</a></li>
                <li><a href='login.php'>LOGIN</a></li>
						</ul>
						</div>
						<br/>
						  <div id='contentHolder'>

						  <div id ='content'>




						    <h2>Search proctor entries</h2>";

if (isset($_POST["build_no"])) {


             echo  "<form action='index.php' method='post'>";

             echo "Building: <input type='text' name='build_no'> <input type='text'  name='build_name'> <br/><br/>";

		     echo "<input type='submit' > ";

	         echo  "</form>";

$build_number = $_POST["build_no"];

$query = "SELECT *  FROM proctors  WHERE  BUILDINGNUMBER = $build_number ";

if ($result = $mysqli->query($query)) {

    /* fetch object array */
    while ($row = $result->fetch_row()) {



echo "<table style='width:100%'>
	<tr><td>ID</td><td> " .$row[0]."</td> </tr>
	<tr><td>PROCTOR1</td> <td> " .$row[1]."</td> </tr>
  <tr> <td>MAILSTOP1</td><td> " .$row[2]."</td> </tr>
   <tr><td>DEPARTMENTTITLE1</td><td> " .$row[3]."</td> </tr>
  <tr><td>EMAIL1</td><td> " .$row[4]."</td> </tr>
   <tr> <td>CAMPUSPHONE1</td><td> " .$row[5]."</td> </tr>
  <tr><td>CAMPUSFAX1</td><td> " .$row[6]."</td>  </tr>
   <tr><td>HOMEPHONE1</td><td> " .$row[7]."</td></tr>
  <tr><td>CELLPHONE1</td><td> " .$row[8]."</td> </tr>
   <tr><td>PAGER1</td><td> " .$row[9]."</td> </tr>
   <tr><td>BUILDINGNUMBER</td><td> " .$row[10]."</td> </tr>
   <tr><td>LASTMODIFIED</td><td> " .$row[11]."</td> </tr>
  <tr><td>LASTMODIFIEDBY</td><td> " .$row[12]."</td> </tr>
   <tr><td>CREATEDBY</td><td> " .$row[13]."</td> </tr>
   <tr><td>CREATED</td><td> " .$row[14]."</td> </tr>
   <tr> <td>BUILDINGNAME</td><td> " .$row[15]."</td></tr>
 <tr><td>HAWKEYECOMMENTS</td><td> " .$row[16]."</td> </tr>
   <tr><td>AMSHOP</td><td> " .$row[17]."</td> </tr>
   <tr><td>PROCTOR2</td><td> " .$row[18]."</td> </tr>
   <tr><td>MAILSTOP2</td><td> " .$row[19]."</td>  </tr>
  <tr><td>DEPARTMENTTITLE2</td><td> " .$row[20]."</td> </tr>
   <tr><td>EMAIL2</td><td> " .$row[21]."</td> </tr>
 <tr><td>CAMPUSPHONE2	</td><td> " .$row[22]."</td> </tr>
   <tr><td>	CAMPUSFAX2</td><td> " .$row[23]."</td> </tr>
  <tr> <td>HOMEPHONE2	</td><td> " .$row[24]."</td> </tr>
   <tr><td>	CELLPHONE2</td><td> " .$row[25]."</td> </tr>
      <tr><td>	PAEGER2</td><td> " .$row[26]."</td> </tr>

  <tr><td>PROCTOR3	</td><td> " .$row[27]."</td> </tr>
   <tr> <td>	MAILSTOP3</td><td> " .$row[28]."</td> </tr>
   <tr><td>DEPARTMENTTITLE3	</td><td> " .$row[29]."</td> </tr>
    <tr><td>EMAIL3	</td><td> " .$row[30]."</td> </tr>
      <tr><td>CAMPUSPHONE3	</td><td> " .$row[31]."</td> </tr>
      <tr><td>CAMPUSFAX3	</td><td> " .$row[32]."</td> </tr>
      <tr><td>HOMEPHONE3	</td><td> " .$row[33]."</td> </tr>
      <tr><td>CELLPHONE3	</td><td> " .$row[34]."</td> </tr>
      <tr><td>PAGER3	</td><td> " .$row[35]."</td> </tr>
      <tr><td>PROCTOR	</td><td> " .$row[36]."</td> </tr>
       <tr><td>MAILSTOP	</td><td> " .$row[37]."</td> </tr>
      <tr><td>DEPARTMENTTITLE	</td><td> " .$row[38]."</td> </tr>
      <tr><td>EMAIL4	</td><td> " .$row[39]."</td> </tr>
      <tr><td>CAMPUSPHONE4	</td><td> " .$row[40]."</td> </tr>
      <tr><td>CAMPUSFAX	</td><td> " .$row[41]."</td> </tr>
      <tr><td>HOMEPHONE	</td><td> " .$row[42]."</td> </tr>
      <tr><td>CELLPHONE	</td><td> " .$row[43]."</td> </tr>
      <tr><td>PAGER4	</td><td> " .$row[44]."</td> </tr>

</table>";












    }


















	}
}
else{
        echo  "<form action='index.php' method='post'>";

    echo "Building: <input type='text' name='build_no'> <input type='text'  name='build_name'><br/><br/> ";

	echo "<input type='submit' > ";

	echo "</form>";
}

?>
</div>
	  </div>

               </body>

			   </html>
