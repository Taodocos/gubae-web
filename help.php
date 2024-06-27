<html>
<head>
				
<?php 
	//include_once('header.php');
	session_start();
    if(isset($_GET['logged']))
	{
		Header("location:home.php");
		session_destroy();
		
	}
  

include_once("DBof-Gibi_conn.php");

 //echo "validuser".$_SESSION['validuser'];
 session_destroy();
 
 ?>



</head>
	<body style="background-color:azure;"> 
    
  	<?php 
     include_once('i-head.php');?>

  
<div class="container-fluid" >
<div class="row" ><center>
  <div class="col-4" >
    <div class="card" >
      <div class="card-body">
      <h4 style="   font-family:'Times New Roman', Times, serif;color:#336699;">እንኳን ደህና መጡ</h4>
      <ol style="width:; height:; color:#336699; font-size:20;font-family:, Geneva, Tahoma, sans-serif;">
          <h3>To Use The System Please Contact Developers Thank You</h3>

</ol>
      </div>
    </div>


  </div></center>
  </div>
  </div>
							 


  </div>
 </div>
                                                              
</body>

</html>