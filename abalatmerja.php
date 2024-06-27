<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>በገና</title>
    
	<?php 
    include_once("DBof-Gibi_conn.php");
    session_start();
    if (isset($_SESSION["username"])) {
       
        

    } else {
        header("location:login.php");
    }
    include_once('pagesnav.php');
    ?>
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
                    <th style="width:5;">የአባት_ስም</th>
                    <th style="width:5;">የክርስትና_ስም</th>
                    <th style="width:5;">ክህነት</th>
                    <th style="width:5;">የትምህርት_ክፍል</th>
                    <th style="width:5;">ባች</th>
                    <th style="width:5;">ስልክ</th>
                    <th style="width:5;">ኢሜል</th>
                    <th style="width:5;">የትምህርት_ዓመት</th>
                    <th style="width:5;">ፎቶ</th>
                    <th style="width:5;">ዓ/ም</th>
                 
                    
                
                    

                    
                </tr>
            </thead>
            <tbody>
                
							
						  <?php
              echo "<tr>";
$all = mysqli_query($conn, "select * from newstud1");
while ($row = mysqli_fetch_array($all)) {
	
	$cid = $row['id'];
	$ስም = $row['name'];
    $የአባት_ስም = $row['fathername'];
	$የክርስትና_ስም = $row['religiousname'];
	$ክህነት = $row['ordination'];
	$የትምህርት_ክፍል = $row['የትምህርት_ክፍል'];
	$ባች = $row['ባች'];
    $ስልክ = $row['phone'];
    $ኢሜል = $row['email'];
    $የትምህርት_ደረጃ = $row['year'];
    $ፎቶ = $row['myimage'];
    $ዓም = $row['ዓም'];
   
    
//echo $ኢሜል;


       echo '<td>' . $cid . '</td>';
		echo '<td>' . $ስም  . '</td>';
		echo '<td>' . $የአባት_ስም . '</td>';
		echo '<td>' . $የክርስትና_ስም . '</td>';
		echo '<td>' . $ክህነት . '</td>';
		echo '<td>' .$የትምህርት_ክፍል. '</td>';
       echo '<td>' . $ባች. '</td>';
        echo '<td>' . $ስልክ. '</td>';
        echo '<td>' . $ኢሜል .'</td>';
        echo '<td>' . $የትምህርት_ደረጃ. '</td>';?>
        <td><img width="70" height="70" src='images\<?php  echo $ፎቶ;?>'></td>
      <?php
        echo '<td>' . $ዓም. '</td>';
        echo "<td><a href='abalat-mastekakeya.php?key=".$cid."'> <span class='btn btn-success btn-block '> ማስተካክያ </span></a></td>";
        echo "<td><a href='techmari.php?key=".$cid."'> <span class='btn btn-info btn-block '> ተጨማሪ </span></a></td>";
        echo '</tr>';
		
echo "</form>";


}
            ?></tbody>
        
</body>
</html>



