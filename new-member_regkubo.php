<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ጊቢ ጉባኤ</title>
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawsome/fontawesome-free-5.15.4-web/css/all.css">
  <link rel="stylesheet" href="datatables/css/jquery.dataTables.min.css">
  <script src="bootstrap\js\bootstrap.min.js"></script>
  <script src="bootstrap\js\popper.min.js"></script>
    <?php 
    include_once("DBof-Gibi_conn.php");
    session_start();
    if (isset($_SESSION["username"])) {
       
        

    } else {
        header("location:login.php");
    }
    include_once('pagesnav.php');
    ?>
</head>
<body>

   <div class="container" >
	<div class="row">
           <div class="col-md-10 mx-auto">
		<div class="card" style=" background-color:lightseagreen;color:black;margin-top: 20;">
			<div class="card-title">
			<span style="color:gold;;margin-left:40%;" align="center"><h2>አዲስ ተማሪ መመዝገቢያ ገጽ</h2></span>
				<div class="card-body">
			
			
         <form action="registerStudent.php" method="post">
				    
<div class="row">
    <div class="col-3">
    
                <font color="red">*</font><label class=""> <h5>ጊቢ መለያ</h5> </label>
				
                <input  class="form-control" type="text" name="gibiid" required pattern="[A-Za-z]+" x-moz-errormessage="Enter character to university ID"/> 
    </div>
    <div class="col-3">
    <font color="red">*</font><label><h5>ስም</h5></label>
            
            <input type="text"  class="form-control"  name="name" required pattern="[A-Za-z]+" x-moz-errormessage="Enter character to  name"/>
            
    </div>
    <div class="col-3">
    <font color="red">*</font><label><h5>የአባት-ስም</h5></label>
            
            <input type="text"  class="form-control"  name="fathername" pattern="[A-Za-z0-9]+" required x-moz-errormessage="Enter character to  father name "/>
             
    </div>
    <div class="col-3">
    <font color="red" >*</font>  <label for="insert the screen shoot">ጾታ </label>
             <select name="sex" class="form-control" id="">
                <option value="male">ወንድ</option>
                <option value="male">ሴት</option>
             </select>   
    </div>
   

 </div>
 <div class="row">
    <div class="col-3">
    <font color="red">*</font><label><h5>የክርስትና-ስም</h5></label>
				
				<input type="text"  class="form-control"  name="religiousname" pattern="[A-Za-z0-9]+" required x-moz-errormessage="Enter character to  religious name" />
				
    </div>
    <div class="col-3">
    <font color="red">*</font><label><h5>ክልል</h5></label>
				
				<input type="text"  class="form-control"  name="region" pattern="[A-Za-z0-9]+" required x-moz-errormessage="Enter character to  Region"  />
				
    </div>
<div class="col-3">
<font color="red">*</font><label><h5>ዞን</h5></label>
				
				<input type="text"  class="form-control"  name="zone" pattern="[A-Za-z0-9]+" required x-moz-errormessage="Enter character to  Zone"  />
</div>
<div class="col-3">
<font color="red">*</font><label><h5>ወረዳ</h5></label>
				
				<input type="text"  class="form-control"  name="woreda" pattern="[A-Za-z0-9]+" required x-moz-errormessage="Enter character to  woreda"  />
</div>
</div>
                
       <div class="row">
        <div class="col-3">
        <font color="red">*</font><label>ስልክ</label>
	
				<input type="text"  class="form-control"  name="phone" pattern="[0-9]+" required x-moz-errormessage="Enter character to  phone number"  />
          
        </div>
        <div class="col-3">
        <font color="red">*</font><label>የቅርብ-ተጠሪ_ስም</label>
				
				<input type="text"  class="form-control"  name="emergencey-name" pattern="[A-Za-z0-9]+" required x-moz-errormessage="Enter character to  emergencey name"  />
               
        </div>
        <div class="col-3">
        <font color="red">*</font><label>የቅርብ-ተጠሪ_ስልክ</label>
				
				<input type="text"  class="form-control"  name="emergencey-phone" pattern="[+]?251[0-9]+" required x-moz-errormessage="Enter character to  emergencey phone"  />
              
        </div>
       </div>
       <div class="row">
        <div class="col-3">
        <font color="red">*</font><label>ክህነት</label>
				
        <input type="text"  class="form-control"  name="ordination" pattern="[+]?251[0-9]+" required x-moz-errormessage="Enter character to ordination" />
				
        </div>
        <div class="col-3">
        <label for="insert the screen shoot">ፎቶ</label>
         <input type="file" name="my_image" id="img" class="form-control"  accept=".JPG, .PNG, .JPEG,">
                             
        </div>
        <div class="col-3">
           
				<font color="red">*</font><label>ኢሜል</label> 
				<input   class="form-control"  type="email" name="email" placeholder="email address please" required title="enter phone number"/><br/><br/>
				
        </div>
     
                      	 
       </div>
       
     
    <div class="row">
                   <div class="col-3">

                   </div>
                    <div class="col-3">
                    <input type="submit" class="btn btn-primary btn-large form-control"  name="መዝግብ" value="መዝግብ"/>
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

</body>
</html>