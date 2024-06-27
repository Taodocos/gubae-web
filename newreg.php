<?php  
   session_start();
   if (isset($_SESSION["username"])) {
	  
	   

   } else {
	   header("location:login.php");
   }
if(isset($_POST['መዝግብ'])){
	$id=validate($_POST['id']);
	$name=validate($_POST['name']);
	$frname=validate($_POST['fathername']);
	$sex=validate($_POST['sex']);
	$spname=validate($_POST['religiousname']);
	$region=validate($_POST['region']);
	$zone=validate($_POST['zone']);
	$wereda=validate($_POST['woreda']);
	$abe=validate($_POST['church']);
	$kihnet=validate($_POST['ordination']);
	$phoneno=validate($_POST['phone']);
	$nearpname=validate($_POST['emergenceyname']);
	$nearpphone=validate($_POST['emergenceyphone']);
	$email=validate($_POST['email']);
	$photo=validate($_POST['myimage']);
	$የትምህርት_ደረጃ=validate($_POST['year']);
	$የትምህርት_ዓመት=validate($_POST['accadamicyear']);
	
  include("DBof-Gibi_conn.php");
	$insert = "INSERT INTO  newstud1 (id,name,fathername ,sex
	,religiousname,region,zone ,woreda,church,ordination,phone
	 ,emergenceyname,emergenceyphone,email,myimage,year,ዓም,የትምህርት_ክፍል,ባች)
	values('$id','$name','$frname','$sex','	$spname','$region','$zone',
		'$wereda','$abe','$kihnet','$phoneno','$nearpname','$nearpphone',
		'$email','$photo','$የትምህርት_ደረጃ','$የትምህርት_ዓመት',null,null)";
	$query= mysqli_query($conn, $insert);
	if($query){
	  
		echo "<script>alert('በአግባቡ  ተመዝግባል!!!');</script>";
		echo "<script>window.location='new-member_reg.php';</script>";
}
}
function validate($data){
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	$data=trim($data);
	return $data;
	#include('session.php');
}
?>