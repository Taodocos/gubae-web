<!DOCTYPE HTML">
<html>
 <head>
 <link rel="stylesheet" href="styles/slide1.css" type="text/css"/>
 <link rel="stylesheet" href="mystyel2.css">
  <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawsome/fontawesome-free-5.15.4-web/css/all.css">
  <link rel="stylesheet" href="datatables/css/jquery.dataTables.min.css">
  <script src="bootstrap\js\bootstrap.min.js"></script>
  <script src="bootstrap\js\popper.min.js"></script>

 <?php 
 	
      $ke=$_GET['key'];
	session_start();
	include_once("DBof-Gibi_conn.php");
    include_once('pagesnav.php');
    if(isset($_GET['logged']))
	{
		Header("location:index.php");
		session_destroy();
		
	}
    session_start();
    if (isset($_SESSION["username"])) {
       
        

    } else {
        header("location:login.php");
    }

					$Today=date('y:m:d');
					$new=date('l, F d, Y',strtotime($Today));
					
				?>
                <style>
    a{
        text-decoration:none;
    }
    a:hover{
        color:green;
    }
</style>


 </head>
 <body style="margin-top:10px; background-color:steelblue;">
 
	

<div class="container-fluid "  >
        <div class="row">
           <div class="col-md-3 mx-auto">
              <div class="card cardback"id="" style="margin-top:50px; background-color:azure;" >
                 <div class="card-body">
                  <a href="begena.php"> <h4>በገና ተማሪዎች ዝርዝር</h4></a>
               <?php    echo "<td><a href='begenamezgeba.php?key=".$ke."'> <h4 style='color:goldenrod; border-style:double; background-color:darkslategray;'>ወደ በገና ተማሪዎች መዝግብ</h4></a>"
                 ?>
               
                           	
                </div>
                    </div>
                    </div>
                    <div class="col-md-3 mx-auto">
              <div class="card cardback"id="" style="margin-top:50px; background-color:azure;" >
                 <div class="card-body">
                 <a href="wanchawoch.php"> <h4>ዋንጫ ያነሱ ተማሪዎች ዝርዝር</h4></a>
                 <?php    echo "<td><a href='wanchamezgbi.php?key=".$ke."'> <h4 style='color:goldenrod; border-style:double; background-color:darkslategray;'>ዋንጫ ያነሱ ተማሪዎች ላይ መዝግብ</h4></a>"
                 ?>	 
                </div>
                    </div>
                    </div>
                    <div class="col-md-3 mx-auto">
              <div class="card cardback"id="" style="margin-top:50px; background-color:azure;" >
                 <div class="card-body">
                <a href="graduations.php">    <h4>የተመራቂ ተማሪዎች ዝርዝር</h4> </a>
                  <?php    echo "<td><a href='graduationmezgabi.php?key=".$ke."'> <h4 style='color:goldenrod; border-style:double; background-color:darkslategray;'>ዋንጫ ያነሱ ተማሪዎች ላይ መዝግብ</h4></a>"
                 ?>			
            </div>
                    </div>
                    </div>
                    <div class="col-md-3 mx-auto">
              <div class="card cardback"id="" style="margin-top:50px; background-color:azure;" >
                 <div class="card-body">
                 <a href="sera_asfesami.php">  <h4 >የሰራ አስፈጻሚ ዝርዝር</h4></a>
                <?php    echo "<td><a href='seraasfesamimezgebi.php?key=".$ke."'> <h4 style='color:goldenrod; border-style:double; background-color:darkslategray;'>ዋንጫ ያነሱ ተማሪዎች ላይ መዝግብ</h4></a>"
                 ?>			 
            </div>
                    </div>
                    </div>
                    </div>
                      
      
			
												         </div>  
                                                        

	
 
                                                                         
</body>
</html>