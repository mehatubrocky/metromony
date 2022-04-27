<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php 
if(! isloggedin()){
   header("location:login.php");
}
 ?>
<?php
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		processprofile_form($id);
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>My profile</title>
	<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>
<body>
	 <form action="" method="POST">
	 	
 <div class="tab_box">
				    	<h1>About yourself</h1>
				    	<p><textarea name="aboutme" rows="5" cols="150"></textarea></p>
				    </div>

 <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
				        		 <label>First Name:   </label>
  	                             <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60">
                                       <label class="tab">Last Name:  </label>
                                  <input type="text" id="edit-last" name="lname" size="60" maxlength="128" >
                                 
                                  <tr class="opened">
									<td class="day_label">Age   : </td>
									<td class="day_value">
									<input type="text" name="age" value="" min="18" max="18">
									</td>
								</tr>
								<tr class="opened">
				        			
									<td class="day_label">sex  :</td>
									<td class="day_value">
									   
             <select name="sex">
	                    <option value="Male">Male</option>
	                    <option value="Female">Female</option> 
	               
	                </select>
      
									</td>
								</tr>
								 <tr class="opened">
									<td class="day_label">Email   : </td>
									<td class="day_value">
									 <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60">
									</td>
								</tr>
							<tr class="opened">
									<td class="day_label">Date of Birth :</td>
									<td class="day_value">	
     
                                    <input type="date" name="dateofbirth"></td>
                                </tr>
                                <tr class="opened">

                                 <td class="day_label">Religion :</td>
                                 <td class="day_value">	
                         <select name="religion">
                        <option value="Not Applicable">Not Applicable</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Christian">Christian</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Jain">Jain</option>
                        <option value="Sikh">Sikh</option>
                        
                      </select>
                  </td>
              </tr>
                <tr class="opened">

                                 <td class="day_label">Country :</td>
                                 <td class="day_value">	
                                 	   <select name="country">
                      <option value="bangladesh">Bangladesh</option>
                      <option value="india">India</option>
                    </select></td>
                </tr>
                <tr class="opened">
									<td class="day_label">Division :</td>
									<td class="day_value">
                
                    <select name="division">
                     <option value="Dhaka">Dhaka</option>
                     <option value="Khulna">Khulna</option>
                     <option value="Barishal">Barishal</option>
                     <option value="Rajshahi">Rajshahi</option>
                     <option value="Chittagong">Chittagong</option>
                     <option value="Mymensing">Mymensing</option>
                     <option value="Rangpur">Rangpur</option>
                     <option value="Sylhet">Sylhet</option>

                    </select>
                </td>
            </tr>


                    <tr class="opened">
									<td class="day_label">district :</td>
									<td class="day_value">
										<input type="text" name="district">
									</td>
								</tr>

								<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">
										<select name="maritalstatus">
						                    <option value="Single">Single</option>
						                    <option value="Married">Married</option> 
						               		<option value="Divorsed">Divorsed</option>
						                </select>
						                
									</td>
								</tr>
							</tbody>
						</table>
					</div>
                    <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
                    <h2>Personal Information</h2>
                    
								
								<tr class="opened">
									<td class="day_label">Height</td>
									<td class="day_value closed"><input type="text"  id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text"><h3>cm</h3></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value closed"><input type="text"  id="edit-name" name="weight" value="" size="60" maxlength="60" class="form-text"><h3>kg</h3></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><div class="select-block1">
					                <select name="diet">
					                    <option value="Veg">Veg</option>
					                    <option value="Non Veg">Non Veg</option> 
					                </select>
							    	</div>
							    	</td>
								</tr>
					<tr class="opened">
									<td class="day_label">Blood Group :</td>
									<td class="day_value closed"><div class="select-block1">
					                <select name="bloodgroup">
	                    <option value="O +ve">O +ve</option>
	                    <option value="O -ve">O -ve</option> 
	               		<option value="AB -ve">AB -ve</option> 
	                </select>
							    	</div>
							    	</td>
								</tr>
					
                              <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value">
										 <select name="bodytype">
                      <option value="Slim">Slim</option>
                      <option value="Fat">Fat</option> 
                    <option value="Average">Average</option> 
                  </select>
              </td>
          </tr>


<tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value">
										<select name="physicalstatus">
                      <option value="No Problem">No Problem</option>
                      <option value="Blind">Blind</option> 
                    <option value="Deaf">Deaf</option> 
                  </select>
              </td>
          </tr>

<tr class="opened">
									<td class="day_label">color :</td>
									<td class="day_value">
						 <select name="colour">
	                    <option value="Dark">Dark</option>
	                    <option value="Fair">Fair</option> 
	               		<option value="Normal">Normal</option> 
	                </select>
              </td>
          </tr>
                <tr class="opened">
									<td class="day_label">Phone Number :</td>
									<td class="day_value">
										 <input type="Number" name="phonenumber">
                   </td>
               </tr>

				
                         
										 <tr class="opened">
									<td class="day_label">Drinking habit :</td>
									<td class="day_value">
										 <select name="drink">
                                         <option value="yes">Yes</option>
                                       <option value="no">No</option>
                                        </select>
                                         </td></tr>
										 <tr class="opened">
									<td class="day_label">Smoking habit :</td>
									<td class="day_value">
										 <select name="smoke">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                          </select>
                                        </td></tr>
										
								<tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value closed">
									<div class="select-block1">
						                <select name="mothertounge">
						                    <option value="">Bengli</option>
						               
						               		<option value="">English</option> 
						                </select>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed">
										<div class="select-block1">
						                <select name="education">
						                      <option value="Primary">Primary</option>
                                             <option value="Tenth level">Tenth level</option> 
                                             <option value="B.Sc in Engineering">B.Sc in Engineering</option> 
                                             <option value="M.Sc in Engineering">M.Sc in Engineering</option> 
                                             <option value="Degree">Degree</option> 
                                            <option value="PG">PG</option> 
                                             <option value="Doctorate">Doctorate</option> 
                                     </select>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed"> <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" value=" " class="form-text"></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Annual Income  :</td>
									<td class="day_value closed"> <input type="text" id="edit-name" name="income" value="" size="60" maxlength="60"></td>
								</tr>
								
							 </tbody>
				          </table>
				        </div>
				        
 <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        	<h2>Family Information</h2>
				  

				   <tr class="opened">
									<td class="day_label">Fathers Occupation  :</td>
									<td class="day_value closed">
										<input type="text" id="edit-name" name="fatheroccupation" value="" size="60" maxlength="500">
									</td></tr>
 <tr class="opened">
									<td class="day_label">Mothers Occupation :</td>
									<td class="day_value closed">
										  <input type="text" id="edit-name" name="motheroccupation" value="" size="60" maxlength="500">
										</td></tr>
 <tr class="opened">
									<td class="day_label">No . Of sisters :</td>
									<td class="day_value">
										 <select name="sis">
	                    <option value="1">1</option>
	                    <option value="2">2</option> 
	                    <option value="3">3</option> 
	                    <option value="4">4</option> 
	                    <option value="5">5</option> 	
	                </select>
	            </td>
	        </tr>
 <tr class="opened">
									<td class="day_label">No . Of brothers :</td>
									<td class="day_value">
                                <select name="bros">
	                    <option value="1">1</option>
	                    <option value="2">2</option> 
	                    <option value="3">3</option> 
	                    <option value="4">4</option> 
	                    <option value="5">5</option> 	
	                </select>
	            </td>
	        </tr>
	    </tbody>
	</table>
</div>
				<input type="submit" id="edit-submit" name="op" value="Submit"class="btn_1 submit">
		  
		     </form>

</body>
</html>

