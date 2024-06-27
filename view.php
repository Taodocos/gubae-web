<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawsome/fontawesome-free-5.15.4-web/css/all.css">
  <link rel="stylesheet" href="datatables/css/jquery.dataTables.min.css">
  <script src="bootstrap\js\bootstrap.min.js"></script>
  <script src="bootstrap\js\popper.min.js"></script>
</head>
<body>

<?php 
 session_start();
 if (isset($_SESSION["username"])) {
 } else {
	 header("location:login.php");
 }
 include_once('pagesnav.php');?>
<div class="container">
		<table id="example" class="table table-stripped">
						<thead>
							<tr>
								<th style="width:5;">ጊቢ መለያ</th>
								<th style="width:5;">ስም</th>
								<th style="width:5;">የአባት-ስም</th>
								<th style="width:5;">ጾታ</th>
								<th style="width:5;">የክርስትና-ስም</th>
								<th style="width:5;">አቅራቢያ ቤተ-ክርስቲያን</th>
								<th style="width:5;">ክልል</th>
								<th style="width:5;">ዞን</th>
								<th style="width:5;">ወረዳ</th>
								<th style="width:5;">ስልክ</th>
								<th style="width:5;">የቅርብ-ተጠሪ_ስም</th>
								<th style="width:5;">የቅርብ-ተጠሪ_ስልክ</th>
								<th style="width:5;">ክህነት</th>
								<th style="width:5;">ኢሜል</th>
								<th style="width:5;">የትምህርት_ደረጃ</th>
								<th style="width:5;">ፎቶ</th>
								<th style="width:5;">ዓ/ም</th>
								
								
							</tr>
						</thead>
                          <tbody>

<?php

   include("DBof-Gibi_conn.php");
  
  
#include("DBof-Gibi_conn.php");   
$select = mysqli_query($conn, "select * from newstud1"); 
while ($row = mysqli_fetch_array($select)) {
	
	$id = $row['id'];
    $name= $row['name'];
	$frname = $row['fathername'];
	$sex = $row['sex'];
	$spname = $row['religiousname'];
	$region= $row['region'];
	$zone = $row['zone'];
	$wereda = $row['woreda'];
	$abe = $row['church'];
	$kihnet=$row['ordination'];
	$phoneno = $row['phone'];
	$nearpname = $row['emergenceyname'];
	$nearpphone=$row['emergenceyphone'];
	$email = $row['email'];
	$photo= $row['myimage'];
	$year= $row['year'];
	$ዓም= $row['ዓም'];
 
 	echo'<tr>';
		echo '<td>' . $id . '</td>';
		echo '<td>' . $name . '</td>';
		echo '<td>' . $frname . '</td>';
		echo '<td>' . $sex  . '</td>';
		echo '<td>' . $spname . '</td>';
		echo '<td>' . $abe . '</td>';
		echo '<td>' . $region. '</td>';
		echo '<td>' . $zone . '</td>';
		echo '<td>' . $wereda . '</td>';
		echo '<td>' . $phoneno . '</td>';
		echo '<td>' . $nearpname . '</td>';
		echo '<td>' . $nearpphone . '</td>';
		echo '<td>' . $kihnet. '</td>';
		echo '<td>' . $email . '</td>';
		echo '<td>' . $year. '</td>';
		?>
		<td><img width="70" height="70" src='image\<?php  echo $photo;?>'></td>
		<?php
		echo '<td>' . $ዓም . '</td>';
		
	echo '</tr>';
	}
	   
	                          
?>
</tr>
</tbody>
</table>
</body>
</html>
	
	