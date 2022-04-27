<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}?>
<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=radio], select {

  font-size:25px;
}
input[type=submit] {
  width: 25%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

	<title>search</title>
	<link href="style_admin.css" rel='stylesheet' type='text/css' />
</head>
<body>	
 <form action="advanced_search_result.php" method="POST">
	<h1> Please select your preferences</h1><br> 
	<span STYLE="font-size:25px"> Interested in:</span><br>
	<input type="radio" name="sex" value="" <?php echo "checked";?> /><span STYLE="font-size:25px" >Any</span> <br>
    <input type="radio" name="sex" value="male" /><span STYLE="font-size:25px" >Groom</span> 
    <br><input type="radio" name="sex" value="female"/> <span STYLE="font-size:25px" >Bride</span><br><br>
    
    <label STYLE="font-size:25px" for="maritalstatus">Merital Status : </label><br>
        <select name="maritalstatus">
                        <option value="">Not Selected</option>
                        <option value="single">Single</option>
                        <option value="divorced">Divorced</option>
                        <option value="married">Married</option>
                        <option value="seperated">Seperated</option>
                        
                      </select><br>
      
    <label STYLE="font-size:25px" class="col-sm-5 control-lable1" for="country">Country : </label><br>
                 <select name="country">
				 <option value="">Not Selected</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="India">India</option>
                    </select><br>
					
	<label STYLE="font-size:25px" class="col-sm-5 control-lable1" for="division">Division : </label><br>
                 <select name="division">
				 <option value="">Not Selected</option>
                      <option value="Dhaka">Dhaka</option>
                     <option value="Khulna">Khulna</option>
                     <option value="Barishal">Barishal</option>
                     <option value="Rajshahi">Rajshahi</option>
                     <option value="Chittagong">Chittagong</option>
                     <option value="Mymensing">Mymensing</option>
                     <option value="Rangpur">Rangpur</option>
                     <option value="Sylhet">Sylhet</option>
                    </select><br>
					
	
   
    <label STYLE="font-size:25px" class="col-sm-5 control-lable1" for="Religion">Religion : </label><br>
        <select name="religion">
                        <option value="">Not Selected</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Christian">Christian</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Jain">Jain</option>
                        <option value="Sikh">Sikh</option>
                        
                      </select><br>
      
    <label STYLE="font-size:25px" class="col-sm-5 control-lable1" for="Mother Tongue">Mother Tongue : </label><br>
    
         <select name="mothertounge">
								<option value="">Not Selected</option>
                                <option value="Bengli">Bengli</option>
                           
                              <option value="English">English</option> 
							   <option value="English">Hindi</option> 
                            </select><br>
      
  <label STYLE="font-size:25px" class="col-sm-5 control-lable1" for="Age">Age : </label><br>
        <input STYLE="font-size:25px" class="form-control has-dark-background" name="agemin" id="slider-name" placeholder="18" type="text" /><br>
        <input STYLE="font-size:25px" class="form-control has-dark-background" name="agemax" id="slider-name" placeholder="40" type="text" /><br>
					
	<label STYLE="font-size:25px" class="col-sm-5 control-lable1" for="education">Education : </label><br>
                 <select name="education">
				 <option value="">Not Selected</option>
                      <option value="Primary">Primary</option>
					 <option value="Tenth level">Tenth level</option> 
					 <option value="B.Sc in Engineering">B.Sc in Engineering</option> 
					 <option value="M.Sc in Engineering">M.Sc in Engineering</option> 
					 <option value="Degree">Degree</option> 
					<option value="PG">PG</option> 
					 <option value="Doctorate">Doctorate</option>
                    </select><br>
   
	<label STYLE="font-size:25px" class="col-sm-5 control-lable1" for="bodytype">Body Type : </label><br>
                 <select name="bodytype">
				 <option value="">Not Selected</option>
                     <option value="Slim">Slim</option>
                      <option value="Fat">Fat</option> 
                    <option value="Average">Average</option> 
                    </select><br>
					
	<label STYLE="font-size:25px" class="col-sm-5 control-lable1" for="colour">Colour : </label><br>
                 <select name="colour">
				 <option value="">Not Selected</option>
                      <option value="Dark">Dark</option>
	                    <option value="Fair">Fair</option> 
	               		<option value="Normal">Normal</option> 
                    </select><br>
	
	<label STYLE="font-size:25px" class="col-sm-5 control-lable1" for="physicalstatus">Physical Status : </label><br>
                 <select name="physicalstatus">
				 <option value="">Not Selected</option>
                     <option value="No Problem">No Problem</option>
                      <option value="Blind">Blind</option> 
                    <option value="Deaf">Deaf</option> 
                    </select><br>
					
   <span STYLE="font-size:25px"> Diet :</span><br>
	<input type="radio" name="diet" value="" <?php echo "checked";?> /><span STYLE="font-size:25px" >Any</span> <br>
    <input type="radio" name="diet" value="Veg" /><span STYLE="font-size:25px" >Veg</span> 
    <br><input type="radio" name="diet" value="Non-Veg"/> <span STYLE="font-size:25px" >Non-Veg</span><br><br>
	
      
  <input STYLE="font-size:25px" type="submit" name="search" value="Search"/>
  
 </form>
 
</body>
</html>