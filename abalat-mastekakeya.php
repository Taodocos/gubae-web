<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    include_once("DBof-Gibi_conn.php");
    include_once('pagesnav.php');
   
    session_start();
    if (isset($_SESSION["username"])) {
       
        

    } else {
        header("location:login.php");
    }
    ?>
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
    <?php  
    $ke=$_GET['key'];
   

	
	
    $all = mysqli_query($conn, "select * from newstud1 where id= '$ke'");
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
    $ዓም= $row['ዓም'];
    $ፎቶ = $row['myimage'];
    
    $የትምህርት_ደረጃ= $row['year'];
    
    }?>

<div class="container" >
	<div class="row">
           <div class="col-md-10 mx-auto">
		<div class="card" style=" background-color:lightseagreen;color:black;margin-top: 20;">
			<div class="card-title">
			<span style="color:gold;;margin-left:40%;" align="center"><h2> አባላት ማስተካከያ ገጽ</h2></span>
				<div class="card-body">
			
			
         <form action="#" method="post">
				    
<div class="row">
    <div class="col-3">
    
                <font color="red">*</font><label class=""> <h5>ጊቢ መለያ</h5> </label>
				
                <input   value="<?php  echo $cid; ?>"  class="form-control" type="text" name="gibiid"  pattern="[a-zA-Z0-9]+" x-moz-errormessage="Enter character to university ID"/> 
    </div>
    <div class="col-3">
    <font color="red">*</font><label><h5>ስም</h5></label>
            
            <input type="text" value="<?php  echo $ስም; ?>"  class="form-control"  name="name"  pattern="[A-Za-z]+" x-moz-errormessage="Enter character to  name"/>
            
    </div>
    <div class="col-3">
    <font color="red">*</font><label><h5>የአባት_ስም</h5></label>
            
            <input type="text"  class="form-control"  value="<?php  echo     $የአባት_ስም ; ?>" name="father" pattern="[A-Za-z]+"  x-moz-errormessage="Enter character to father "/>
             
    </div>
   
  
   

 </div>
 <div class="row">
    <div class="col-3">
    <font color="red">*</font><label><h5>የክርስትና-ስም</h5></label>
				
				<input type="text" value="<?php  echo   $የክርስትና_ስም; ?>"   class="form-control"  name="religiousname" pattern="[A-Za-z0-9]+"  x-moz-errormessage="Enter character to  religious name" />
				
    </div>
    <div class="col-3">
        <font color="red">*</font><label>ክህነት</label>
				
        <input type="text"  class="form-control"   value="<?php  echo    $ክህነት ; ?>" name="ordination" pattern="[A-Za-z0-9]+"  x-moz-errormessage="Enter character to ordination" />
				
        </div>
   
    <div class="col-3">
    <font color="red">*</font><label><h5>ዓ/ም</h5></label>
            
            <input type="text"   value="<?php  echo   $ዓም ; ?>"   class="form-control"  name="accadamicyear" pattern="[A-Za-z0-9]+"   x-moz-errormessage="Enter character to yeagelglotzemn "/>
             
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
    <div class="col-3">
    <font color="red">*</font><label><h5>የትምህርት_ከፍል</h5></label>
            
            <input type="text"  class="form-control" value="<?php  echo  $የትምህርት_ክፍል; ?>" name="temhrtkefl" pattern="[A-Za-z]+"  x-moz-errormessage="Enter character to  temrt kefl "/>
             
    </div>
        
       
       </div>
       <div class="row">
       <div class="col-3">
    <font color="red">*</font><label><h5>ባች</h5></label>
            
            <input type="text"  class="form-control"  value="<?php  echo   $ባች  ; ?>" name="batch" pattern="[A-Za-z0-9]+"  x-moz-errormessage="Enter character to  batch "/>
             
    </div>
       
        <div class="col-3">
           
				<font color="red">*</font><label>ኢሜል</label> 
				<input   class="form-control"  type="email" name="email" value="<?php  echo    $ኢሜል ; ?>"  title="enter phone number"/><br/><br/>
				
        </div>
        <div class="col-3">
           
				<font color="red">*</font><label>ፎቶ</label> 
				<input   class="form-control"  type="file" name="photo" value="<?php  echo    $ኢሜል ; ?>"  title="enter phone number"/><br/><br/>
				
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
    //$agelglotkefl=$_POST['agelglotkefl']; 
    $accadamicyear=$_POST['accadamicyear'];
    //$yeagelglotzemn=$_POST['yeagelglotzemn'];
    $ordination=$_POST['ordination'];
    $batch=$_POST['batch'];  
    $religiousname=$_POST['religiousname'];
    $email=$_POST['email'];
    
    $phone=$_POST['phone'];
   $photo=$_POST['photo'];
    $father=$_POST['father'];


       




    $update =	mysqli_query($conn,"
    UPDATE `newstud1` SET `id`='$gibiid',`name`='$name',`fathername`='$father',`sex`='[value-4]',
    `religiousname`='$religiousname',`ordination`='$ordination',`phone`='$phone',`email`='$email',
    `year`='$የትምህርት_ደረጃ',`ዓም`='$accadamicyear',`የትምህርት_ክፍል`='$temhrtkefl',`myimage`='$photo',`ባች`='$batch' WHERE id='$ke'");
    if(!$update)
    {
    echo "Error".die();
    }
    else
    {	

         
       echo "<script>alert('update Succsesfuly!!!');</script>";
       echo "<script>window.location='abalatmerja.php';</script>";
      
    }
}



?>








</body>
</html>