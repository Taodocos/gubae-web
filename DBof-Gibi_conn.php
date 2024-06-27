<?php
//step 1. connecting to the host machine
$conn = mysqli_connect("localhost","root", "", "gibidb");
if(mysqli_connect_errno()){
 echo "<p>Connection can't be established for some reason! "."</p>";
}
else
  //echo "succsesfull";
 ///mysqli_select_db($conn, "registrar");
?>