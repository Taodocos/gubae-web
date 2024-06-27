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
	<body> 
    
  	<?php 
     include_once('i-head.php');?>

  
<div class="container-fluid" style="background-color:azure;">
<div class="row" >
  <center>
  <div class="col-5" style="width:; height:;">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images\logo.jfif" class="d-block " style="width:900;height:500;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images\mahbere1.JFIF" class="d-block w-100 h-10"style="width:100%;height: 500;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images\senbet9.jfif" class="d-block w-100 h-70" style="width:700;height: 500;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images\abunmat.jfif" class="d-block w-200 h-70" style="width:1000;height: 500;"  alt="...">
        </div>
        <div class="carousel-item">
          <img src= "images\kdusan.jfif" class="d-block w-100 h-70" style="width:700;height: 500;" alt="...">
        </div>
        <div class="carousel-item">
          <img src= "images\mesaf.jfif" class="d-block w-100 h-70" style="width:700;height: 500;"  alt="...">
        </div>
        <div class="carousel-item">
          <img src= " images\mslefekur.jfif" class="d-block w-100 h-70" style="width:700;height: 500;" alt="...">
        </div>
        <div class="carousel-item">
          <img src= " images\senbet2.jfif" class="d-block w-100 h-70" style="width:700;height: 500;" alt="...">
        </div>
        <div class="carousel-item">
          <img src= " images/temari.jfif" class="d-block w-100 h-70" style="width:700;height: 500;" alt="...">
        </div>

        <div class="carousel-item">
          <img src="images\abmat.jfif" class="d-block w-200 h-70" style="width:1000;height: 500;"  alt="...">
        </div>
        <div class="carousel-item">
          <img src= "images\anbebo.jfif" class="d-block w-100 h-70" style="width:700;height: 500;" alt="...">
        </div>
        <div class="carousel-item">
          <img src= "images\mesaf.jfif" class="d-block w-100 h-70" style="width:700;height: 500;"  alt="...">
        </div>
        <div class="carousel-item">
          <img src= " images\mahbere4.jfif" class="d-block w-100 h-70" style="width:700;height: 500;" alt="...">
        </div>
        <div class="carousel-item">
          <img src= " images\senbet2.jfif" class="d-block w-100 h-70" style="width:700;height: 500;" alt="...">
        </div>
        <div class="carousel-item">
          <img src= " images/temari.jfif" class="d-block w-100 h-70" style="width:700;height: 500;" alt="...">
        </div>
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div></center>
</div>

	</div>
  
  
	

							 


  </div>
 </div>
                                                              
</body>

</html>