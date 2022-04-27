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
 <form action="basic_search_result.php" method="POST">
	<h1> Please select your preferences</h1><br> 
	<span STYLE="font-size:25px"> Bride/Groom :</span><br>
    <input type="radio" name="sex" value="" <?php echo "checked";?>/><span STYLE="font-size:25px" >Any</span><br>
	<input type="radio" name="sex" value="male"  /><span STYLE="font-size:25px" >Groom</span> 
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
      
  <input STYLE="font-size:25px" type="submit" name="search" value="Search"/>
  
 </form>
 
</body>
</html>