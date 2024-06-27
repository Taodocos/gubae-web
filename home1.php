<html>
<head>
				
<?php 
	//include_once('header.php');
	session_start();
    if(isset($_GET['logged']))
	{
		Header("location:index.php");
		session_destroy();
		
	} //<link rel="stylesheet" href="styles/slide1.css" type="text/css"/>
 
 ?>



</head>
	<body> 
    
  	<?php 
     include_once('pagesnav.php');?>

  
<div class="container-fluid" style="background-color:azure;">
<div class="row" >
  <div class="col-4" >
    <div class="card" >
      <div class="card-body">
      <center><h4 style="   font-family:'Times New Roman', Times, serif;color:#336699;">Welcome To our system</h4></center>
      <ol style=" width:; height:; color:#336699; font-size:20;font-family'Times New Roman', Times, serif;">
 
      አስፈላጊነት
የቤተ ክርስቲያቱ መዋቅር ያልሸፈነችውን ክፍተቶች
በመሙላት ወደ ከፍተኛ የትምህርት ተቋማት የሚገቡትን
የዘመኑን ትውልድ ከመንፈሳዊነትና ከቅድስት ቤተ
ክርስቲያን ትምህርት ጋር በማዋሐድና ከአበው
በማቀራረብ ቤተ ክርስቲያን የምትጠብቅበትን ድርሻ
እንድንወጣ ለማድረግ የማኅበረ ቅዱሳን አገልግሎት
አስፈላጊ ነው፡፡
 
</ol>
      </div>
    </div>


  </div>
  
  <div class="col-5" style="width:; height:;">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images\mahbere.JFIF" class="d-block " style="width:900;height: 400;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images\mahbere1.JFIF" class="d-block w-100 h-10"style="width:700;height: 400;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images\mahbere6.JFIF" class="d-block w-100 h-70" style="width:700;height: 400;" alt="...">
        </div>
        <div class="carousel-item">
          <img src=" images\mahbere3.JFIF" class="d-block w-100 h-70" style="width:700;height: 400;"  alt="...">
        </div>
        <div class="carousel-item">
          <img src= "images\mahbere4.JFIF" class="d-block w-100 h-70" style="width:700;height: 400;" alt="...">
        </div>
        <div class="carousel-item">
          <img src= " images\mahbere5.JFIF" class="d-block w-100 h-70" style="width:700;height: 400;"  alt="...">
        </div>
        <div class="carousel-item">
          <img src= " images\mahbere6.JFIF" class="d-block w-100 h-70" style="width:700;height: 400;" alt="...">
        </div>
        <div class="carousel-item">
          <img src= " images\mahbere7.JFIF" class="d-block w-100 h-70" style="width:700;height: 400;" alt="...">
        </div>
        <div class="carousel-item">
          <img src= " images\mahbere8.JFIF" class="d-block w-100 h-70" style="width:700;height: 400;" alt="...">
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
    </div>
</div>
<div class="col-3" style="background-color:azure;">
<div class="card" >
      <div class="card-body">
      <center><h4 style="font-family:'Times New Roman', Times, serif;sans-serif;color:#336699;"> Mekdela Amba University</h4></center>
      <ol style="width:; height:; color:#336699; font-size:20;font-family:, Geneva, Tahoma, sans-serif;">
      Mekdela Amba University is established in Amhara Regional State, 
      South Wollo Zone having two campuses at Tulu Awlya and MekaneSelam towns.
       The main campus is at Tulu Awlya town located at 480kms north from Addis Ababa,
        and 80km west from Dessie town the capital of South Wollo Zone.
        The University was inaugurated on March, 2015 G.C by Ato Demeke Mekonen,
         the Deputy Prime Minister of the Federal Democratic Republic of Ethiopia. 
         Construction of the university is underway on a total land area of 354 hectares
         (220 hectares at Tulu Awlya town and 134hectares at MekaneSelam town).

</ol>
      </div>
    </div>
	</div>
	</div>
  
  
	<br/>
	<br/><br/>

	<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      
<div class="card" >
      <div class="card-body">
      <center><h4 style="font-family:'Times New Roman', Times, serif;sans-serif;color:#336699;">Pesent Senatio Of The University</h4></center>
      <ol style="width:; height:; color:#336699; font-size:20;font-family:, Geneva, Tahoma, sans-serif;">
      The past and present scenario in the student clearance method of Mekdela Amba University is that the processes are done by moving from one office to another and having records on paper and every clearance task is done manually.
The university has continued to use this mode since its inception. This creates a system unreliable and confusing to keep the correct track of the records and can be very overwhelming and stressful.
At the time of withdrawal, year break or transfer to other university and also at the end of the academic year, the clearance form as we know it today is commonly used. Students have to apply the clearance form to their respective department if they need to exit the university.


</ol>
      </div>
    </div>
  </div>
  </div>
							 


  </div>
 </div>
                                                              
</body>

</html>