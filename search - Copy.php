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


	<title>search</title>
	<link href="style_admin.css" rel='stylesheet' type='text/css' />
</head>
<body>	
 <center><form action="search_result.php" method="POST">
   <div class="form_but1">
  <label class="col-sm-5 control-lable1" for="sex">Gender : </label>
  <div class="col-sm-7 form_radios">
    <input type="radio" class="radio_1" name="sex" value="male" <?php echo "checked";?> />Groom 
    <input type="radio" class="radio_1" name="sex" value="female"/> Bride
    
    <!--<hr />
    <p id="sel"></p><br />
    <input id="btnRadio" type="button" value="Get Selected Value" />-->
  </div>
  <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="maritalstatus">Merital Status : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="religion">
                        <option value="">Not Selected</option>
                        <option value="single">Single</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                        <option value="seperated">Seperated</option>
                        
                      </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="country">Country : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
                 <select name="country">
				 <option value="">Not Selected</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="India">India</option>
                    </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Religion">Religion : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="religion">
                        <option value="">Not Selected</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Christian">Christian</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Jain">Jain</option>
                        <option value="Sikh">Sikh</option>
                        
                      </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Mother Tongue">Mother Tongue : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
         <select name="mothertounge">
								<option value="">Not Selected</option>
                                <option value="Bengli">Bengli</option>
                           
                              <option value="English">English</option> 
							   <option value="English">Hindi</option> 
                            </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
  <label class="col-sm-5 control-lable1" for="Age">Age : </label>
  <div class="col-sm-7 form_radios">
    <div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="agemin" id="slider-name" placeholder="18" type="text" />
      </div>
      
      <div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="agemax" id="slider-name" placeholder="40" type="text" />
      </div>
      <div class="clearfix"> </div>
  </div>
  <div class="clearfix"> </div>
  <input type="submit" name="search" value="Search"/>
  </div>
 </form>
 <div class="paid_people">
   <h1>Profiles</h1>
   
  </div>
</div>


</body>
</html>