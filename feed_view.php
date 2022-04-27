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
//safty purpose copy the get id
$profileid=$id;

//getting profile details from db
$sql="SELECT * FROM customer WHERE cust_id = $id";
$result = mysqlexec($sql);
if($result){
$row=mysqli_fetch_assoc($result);

	$fname=$row['firstname'];
	$lname=$row['lastname'];
	$sex=$row['sex'];
	$email=$row['email'];
	$dob=$row['dateofbirth'];
	$religion=$row['religion'];
	$country = $row['country'];
		$phonenumber=$row['phonenumber'];
	$division=$row['division'];
	$district=$row['district'];
	$age=$row['age'];
	$maritalstatus=$row['maritalstatus'];
	$education=$row['education'];
	$bodytype=$row['body_type'];
	$physicalstatus=$row['physical_status'];
	$drink=$row['drink'];
	$smoke=$row['smoke'];
	$mothertounge=$row['mothertounge'];
	$bloodgroup=$row['blood_group'];
	$weight=$row['weight'];
	$height=$row['height'];
	$colour=$row['colour'];
	$diet=$row['diet'];
	$occupation=$row['occupation'];
	$fatheroccupation=$row['fathers_occupation'];
	$motheroccupation=$row['mothers_occupation'];
	$income=$row['annual_income'];
	$bros=$row['no_bro'];
	$sis=$row['no_sis'];
	$aboutme=$row['aboutme'];


/*$sql1="SELECT * FROM photos WHERE id = $id";
$result1 = mysqlexec($sql1);
if($result1){
$row1=mysqli_fetch_assoc($result1);
$image1=$row1['pic1'];
$image2=$row1['pic2'];
$image3=$row1['pic3'];
$image4=$row1['pic4'];
//end of getting profile detils
*/


	$pic1="";
	$pic2="";
	$pic3="";
	$pic4="";
//getting image filenames from db
$sql2="SELECT * FROM photos WHERE cust_id = $profileid";
$result2 = mysqlexec($sql2);
if($result2){
	$row2=mysqli_fetch_array($result2);
	$image1=$row2['pic1'];
	$pic2=$row2['pic2'];
	$pic3=$row2['pic3'];
	$pic4=$row2['pic4'];
echo $image1;
}
}
else{
	echo "<script>alert(\"Invalid Profile ID\")</script>";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>My profile</title>
	<h2>Profile Id : <?php echo $profileid;?></h2>
<center><img src="user.png">
<center><H2><span style='color: #5cb85c; font-size:30px;'><?php echo $fname . " " .$lname; ?></H2></span>
</div>

  <div class="basic_1-left">
				    	
				 <li> <img src="profile/<?php echo $profileid;?>/<?php echo $image1;?> " /> </li>
					</div>
 
 <div class="tab_box">
				    	<h1>About </h1>
				    	<p> <?php echo $aboutme;?></p>
				    </div>

 <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
				        			<td class="day_label"> Name  : </td>
									<td class="day_value">
  	                              <?php echo $fname . " " .$lname; ?>
  	                           </td>
                                  </tr>
                                  <tr class="opened">
									<td class="day_label">Age   : </td>
									<td class="day_value">
									<?php echo $age;?>
									</td>
								</tr>
								<tr class="opened">
				        			
									<td class="day_label">sex  :</td>
									<td class="day_value">
									  <ul>
            <?php echo $sex;?>
          </ul>  
									</td>
								</tr>
								 <tr class="opened">
									<td class="day_label">Email   : </td>
									<td class="day_value">
									<?php echo $email;?>
									</td>
								</tr>
							<tr class="opened">
									<td class="day_label">Date of Birth :</td>
									<td class="day_value">	
     <?php echo $dob;?>
                                </tr>
                                <tr class="opened">

                                 <td class="day_label">Religion :</td>
                                 <td class="day_value">	
                        <?php echo $religion;?>
                  </td>
              </tr>
                <tr class="opened">

                                 <td class="day_label">Country :</td>
                                 <td class="day_value">	
                                 	  
                    <?php echo  $country;?></td>
                </tr>
                <tr class="opened">
									<td class="day_label">Division :</td>
									<td class="day_value">
                
                     <?php echo $division;?>
                </td>
            </tr>


                    <tr class="opened">
									<td class="day_label">district :</td>
									<td class="day_value">
										 <?php echo $district;?>
									</td>
								</tr>

								<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">
										 <?php echo $maritalstatus;?>
						                
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
									<td class="day_value closed"> <?php echo  $height;?><h3>cm</h3></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value closed"> <?php echo $weight;?><h3>kg</h3></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><div class="select-block1">
					                 <?php echo  $diet;?>
							    	</div>
							    	</td>
								</tr>
					<tr class="opened">
									<td class="day_label">Blood Group :</td>
									<td class="day_value closed"><div class="select-block1">
					               <?php echo $bloodgroup;?>
							    	</div>
							    	</td>
								</tr>
					
                              <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value">
										 <?php echo $bodytype;?>
              </td>
          </tr>


<tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value">
										 <?php echo $physicalstatus;?>
              </td>
          </tr>

<tr class="opened">
									<td class="day_label">color :</td>
									<td class="day_value">
						 <?php echo $colour;?>
              </td>
          </tr>
                <tr class="opened">
									<td class="day_label">Phone Number :</td>
									<td class="day_value">
										 <?php echo $phonenumber;?>
                   </td>
               </tr>

				
                         
										 <tr class="opened">
									<td class="day_label">Drinking habit :</td>
									<td class="day_value">
										 <?php echo  $drink;?>
                                         </td></tr>
										 <tr class="opened">
									<td class="day_label">Smoking habit :</td>
									<td class="day_value">
										 <?php echo $smoke;?>
                                        </td></tr>
										
								<tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value closed">
									<div class="select-block1">
						               <?php echo $mothertounge;?>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed">
										<div class="select-block1">
						                 <?php echo $education;?>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed">  <?php echo  $occupation;?></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Annual Income  :</td>
									<td class="day_value closed">  <?php echo $income;?></td>
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
										 <?php echo  $fatheroccupation;?>
									</td></tr>
 <tr class="opened">
									<td class="day_label">Mothers Occupation :</td>
									<td class="day_value closed">
										  <?php echo $motheroccupation;?>
										</td></tr>
 <tr class="opened">
									<td class="day_label">No . Of sisters :</td>
									<td class="day_value">
										 <?php echo $sis;?>
	            </td>
	        </tr>
 <tr class="opened">
									<td class="day_label">No . Of brothers :</td>
									<td class="day_value">
                                <?php echo  $bros;?>
	            </td>
	        </tr>
	    </tbody>
	</table>
</div>
				
		  
		    
		     <script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>  

</body>
</html>