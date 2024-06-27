<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>በገና</title>
    
	<?php 
     session_start();
     if (isset($_SESSION["username"])) {
        
         
 
     } else {
         header("location:login.php");
     }
    include_once("DBof-Gibi_conn.php");
    include_once('pagesnav.php');?>
	<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawsome/fontawesome-free-5.15.4-web/css/all.css">
  <link rel="stylesheet" href="datatables/css/jquery.dataTables.min.css">
  <script src="bootstrap\js\bootstrap.min.js"></script>
  <script src="bootstrap\js\popper.min.js"></script>
	<style>
		td.highlight {
			font-weight: bold;
			color: blue;
		}
        
    a{
        text-decoration:none;
        color: blue;
    }

	</style>
<link rel="stylesheet" href="datatables\datatables\js\jquery.dataTables.min.css">
	<script src="datatables\datatables\js\jquery-3.5.1.js"></script>
	<script src="datatables\datatables\js\jquery.dataTables.min.js"></script>
</head>
<body>
<div class="container">
		
        <table id="example" class="table table-stripped">
            <thead>
                <tr>
                    <th style="width:5;">Gibi_ID </th>
                    <th style="width:5;">ስም</th>
                    <th style="width:5;">ክህነት</th>
                    <th style="width:5;">ስልክ</th>
                    <th style="width:5;">የትምህርት_ዓመት</th>
                    <th style="width:5;">ኢሜል</th>
                    <th style="width:5;">የትምህርት_ክፍል</th>
                    <th style="width:5;">የክርስትና-ስም</th>
                    <th style="width:5;">ዓ/ም</th>
                    

                    
                </tr>
            </thead>
            <tbody>
                
							
						  <?php
              echo "<tr>";
$all = mysqli_query($conn, "select * from begena");
while ($row = mysqli_fetch_array($all)) {
	
	$cid = $row['Gibi_ID'];
	$ስም = $row['ስም'];
	$ክህነት = $row['ክህነት'];
	$ስልክ = $row['ስልክ'];
	$የትምህርት_ደረጃ = $row['የትምህርት_ደረጃ'];
	$ኢሜል = $row['ኢሜል'];
    $የትምህርት_ክፍል = $row['የትምህርት_ክፍል'];
    $የክርስትናስም = $row['የክርስትና-ስም'];
    $ዓም = $row['ዓም'];
    
//echo $ኢሜል;


       echo '<td>' . $cid . '</td>';
		echo '<td>' . $ስም  . '</td>';
		echo '<td>' . $ክህነት . '</td>';
		echo '<td>' . $ስልክ . '</td>';
		echo '<td>' . $የትምህርት_ደረጃ . '</td>';
		echo '<td>' . $ኢሜል . '</td>';
        echo '<td>' . $የትምህርት_ክፍል. '</td>';
        echo '<td>' . $የክርስትናስም. '</td>';
        echo '<td>' . $ዓም . '</td>';
        echo '</tr>';
		
        echo "</form>";
              

}
            ?>
            </tbody>
            </table>
            <center>
            <div class="back">
              <a href="home.php">  <h4>ወደ ዋና ገጽ</h4></a>
             </div>

            </center>
            
</body>
</html>