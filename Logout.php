<?php

include_once("DBof-Gibi_conn.php");
 session_start();
 //echo "validuser".$_SESSION['validuser'];
 session_destroy();
 header("location:home.php");
 {
   echo "session not set";
 }
?>