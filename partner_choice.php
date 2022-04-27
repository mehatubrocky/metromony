<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 
$id=$_GET['id'];
writepartnerprefs($id);

///reading partnerprefs from db

		$sql="SELECT * FROM partnerprefs WHERE custId = $id";
		$result=mysqlexec($sql);
		if($result){
			$row=mysqli_fetch_assoc($result);
			$agemin=$row['agemin'];
			$agemax=$row['agemax'];
			$marital_status=$row['maritalstatus'];
			$complexion=$row['complexion'];
			$height=$row['height'];
			$diet=$row['diet'];
			$religion=$row['religion'];
			
			$mother_tounge=$row['mothertounge'];
			$education=$row['education'];
			$occupation=$row['occupation'];
			$country=$row['country'];
			$descr=$row['descr'];
			
		}
		else{
			echo mysqli_error($conn);
		}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Partner Preference</title>
	<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>
<body>
	 <form action="" method="post" name="partner">
 <div class="tab_box">
				    	<h1>My Ideal Partner would be</h1>
				    	<p><textarea name="descr" rows="5" cols="150">
				    		<?php echo $descr;?></textarea></p>
				    </div>

 <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value">
									<input type="text" name="agemin" value="<?php echo $agemin; ?>">to <input type="text" name ="agemax" value="<?php echo $agemax; ?>"> 
									</td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">
										<div class="select-block1">
										<select name="maritalstatus">
						                    <option value="<?php if($marital_status="Single"){echo "Single";} elseif ($marital_status="Married") {echo "Married";} else{echo "Divorced";}?>"><?php echo $marital_status;?></option>

						                    <option value="Single">Single</option>
						                    <option value="Married">Married</option> 
						               		<option value="Divorsed">Divorsed</option>
						                </select>
						                </div>
									</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value closed">
									<div class="select-block1">
						                <select name="colour">
						                    <option value="">Black</option>
						                    <option value="">Fair</option> 
						               		<option value="">Normal</option> 
						                </select>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Height</td>
									<td class="day_value closed"><input type="text"  id="edit-name" name="height" value="<?php echo $height;?>" size="60" maxlength="60" class="form-text">cm</td>
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
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span>
									<div class="select-block1">
					                    <select name="religion">
						                    <option value="Not Applicable">Not Applicable</option>
						                    <option value="Hindu">Hindu</option>
						                    <option value="Christian">Christian</option>
						                    <option value="Muslim">Muslim</option>
						                    <option value="Jain">Jain</option>
						                    <option value="Sikh">Sikh</option>
						                    
					                    </select>
	                 				</div></span>
	                  			</td>
								</tr>
								
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
									<td class="day_value closed"><div class="select-block1">
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
									<td class="day_value closed"> <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" value="<?php echo $occupation;?>" class="form-text"></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Country of Residence :</td>
									<td class="day_value closed">
										<div class="select-block1">
						                    <select name="country">
							                    <option value="Not Applicable">Country</option>
							                    <option value="Bangladesh">Bangladesh</option>
						
							                    
						                    </select>
						                 </div>
						            </td>
								</tr>
							 </tbody>
				          </table>
				        </div>
				  
				 <input type="submit" value="Update Preferences " class="btn_1 submit">
		   
		     </form>

</body>
</html>