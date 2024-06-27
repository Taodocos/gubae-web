<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    include_once("DBof-Gibi_conn.php");
    session_start();
    if (isset($_SESSION["username"])) {
       
        

    } else {
        header("location:login.php");
    }
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
	</style>
<link rel="stylesheet" href="datatables\datatables\js\jquery.dataTables.min.css">
	<script src="datatables\datatables\js\jquery-3.5.1.js"></script>
	<script src="datatables\datatables\js\jquery.dataTables.min.js"></script>
</head>
<body>
    <?php  
    $ke=$_GET['key'];
    
    $all = mysqli_query($conn, "select * from sera_asfetsami where Gibi_ID= '$ke'");
    while ($row = mysqli_fetch_array($all)) {
        $cid = $row['Gibi_ID'];
        $ስም = $row['ስም'];
        $ክህነት = $row['ክህነት'];
        $ስልክ = $row['ስልክ'];
        $የትምህርት_ደረጃ = $row['የትምህርት_ደረጃ'];
        $ኢሜል = $row['ኢሜል'];
        $የትምህርት_ከፍል= $row['የትምህርት_ከፍል'];
        $የክርስትናስም=$row['የክርስትናስም'];
        $የአገልግሎት_ክፍል = $row['የአገልግሎት_ክፍል'];
        $ዓም= $row['ዓም'];
    
    }?>









<div class="container" >
	<div class="row">
           <div class="col-md-10 mx-auto">
		<div class="card" style=" background-color:lightseagreen;color:black;margin-top: 20;">
			<div class="card-title">
			<span style="color:gold;;margin-left:40%;" align="center"><h2>ስራ አስፈጻሚ ማስተካከያ ገጽ</h2></span>
				<div class="card-body">
			
			
         <form action="#" method="post">
				    
<div class="row">
    <div class="col-3">
    
                <font color="red">*</font><label class=""> <h5>ጊቢ መለያ</h5> </label>
				
                <input   value="<?php  echo $cid; ?>"  class="form-control" type="text" name="gibiid"  pattern="[A-Za-z0-9]+" x-moz-errormessage="Enter character to university ID"/> 
    </div>
    <div class="col-3">
    <font color="red">*</font><label><h5>ስም</h5></label>
            
            <input type="text" value="<?php  echo $ስም; ?>"  class="form-control"  name="name"  pattern="[A-Za-z]+" x-moz-errormessage="Enter character to  name"/>
            
    </div>
    <div class="col-3">
    <font color="red">*</font><label><h5>የትምህርት_ከፍል</h5></label>
            
            <input type="text"  class="form-control" value="<?php  echo  $የትምህርት_ከፍል; ?>" name="temhrtkefl" pattern="[A-Za-z0-9]+"  x-moz-errormessage="Enter character to  temrt kefl "/>
             
    </div>
  
   

 </div>
 <div class="row">
    <div class="col-3">
    <font color="red">*</font><label><h5>የክርስትና-ስም</h5></label>
				
				<input type="text" value="<?php  echo   $የክርስትናስም; ?>"   class="form-control"  name="religiousname" pattern="[A-Za-z0-9]+"  x-moz-errormessage="Enter character to  religious name" />
				
    </div>
    <div class="col-3">
    <font color="red">*</font><label><h5>የአገልግሎት_ክፍል</h5></label>
            
            <input type="text"  class="form-control"  value="<?php  echo   $የአገልግሎት_ክፍል  ; ?>" name="agelglotkefl" pattern="[A-Za-z0-9]+" required x-moz-errormessage="Enter character to  agelglot kefl "/>
             
    </div>
    <div class="col-3">
    <font color="red">*</font><label><h5>ዓ/ም</h5></label>
            
            <input type="text"   value="<?php  echo   $ዓም ; ?>"   class="form-control"  name="yeagelglotzemn" pattern="[A-Za-z0-9]+"   x-moz-errormessage="Enter character to yeagelglotzemn "/>
             
    </div>
   
	

</div>
                
       <div class="row">
        <div class="col-3">
        <font color="red">*</font><label>ስልክ</label>
	
				<input type="text"  class="form-control"   value="<?php  echo    $ስልክ ; ?>" name="phone" pattern="[0-9]+"  x-moz-errormessage="Enter character to  phone number"  />
          
        </div>
        <div class="col-3">
    <font color="red">*</font><label><h5>የትምህርት_ደረጃ</h5></label>
            
            <input type="text"  class="form-control"  value="<?php  echo    $የትምህርት_ደረጃ ; ?>" name="year" pattern="[A-Za-z0-9]+"  x-moz-errormessage="Enter character to accadamic year "/>
             
    </div>
        
       
       </div>
       <div class="row">
        <div class="col-3">
        <font color="red">*</font><label>ክህነት</label>
				
        <input type="text"  class="form-control"   value="<?php  echo    $ክህነት ; ?>" name="ordination" pattern="[A-Za-z0-9]+"  x-moz-errormessage="Enter character to ordination" />
				
        </div>
       
        <div class="col-3">
           
				<font color="red">*</font><label>ኢሜል</label> 
				<input   class="form-control"  type="email" name="email" value="<?php  echo    $ኢሜል ; ?>"  title="enter phone number"/><br/><br/>
				
        </div>
     
                      	 
       </div>
       
     
    <div class="row">
                   <div class="col-3">

                   </div>
                    <div class="col-3">
                    <input type="submit" class="btn btn-primary btn-large form-control"  name="update" value="ማስተካከያ አድርግ"/>
                    </div>
                    <div class="col-3">
                    <input type="reset"  class="btn btn-danger btn-large form-control" value="አጥፋ"/>
                    </div>
                </div>
				</form>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>

<?php 
if(isset($_POST['update']))
{
    $gibiid=$_POST['gibiid'];
    
    $name=$_POST['name'];
    $temhrtkefl=$_POST['temhrtkefl'];
    $agelglotkefl=$_POST['agelglotkefl']; 
    $year=$_POST['year'];
    $yeagelglotzemn=$_POST['yeagelglotzemn'];
    $ordination=$_POST['ordination'];
    $phone=$_POST['phone'];  
    $religiousname=$_POST['religiousname'];
    $email=$_POST['email'];

       




    $update =	mysqli_query($conn,"UPDATE `sera_asfetsami` SET `Gibi_ID`='$gibiid',`ስም`='$name',`የትምህርት_ከፍል`='$temhrtkefl',`የአገልግሎት_ክፍል`='$agelglotkefl',`ስልክ`='$phone',`ክህነት`='$religiousname',`ኢሜል`='$email',
    `የትምህርት_ደረጃ`='$year',`ዓም`='$yeagelglotzemn',`የክርስትናስም`='$ordination' WHERE `Gibi_ID`='$gibiid'");
    if(!$update)
    {
    echo "Error".die();
    }
    else
    {	

         
       echo "<script>alert('update Succsesfuly!!!');</script>";
       echo "<script>window.location='sera_asfesami.php';</script>";
      
    }
}



?>








</body>
</html>