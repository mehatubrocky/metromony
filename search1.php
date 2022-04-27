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
    <link rel="stylesheet" type="text/css" href="style_admin.css">
</head>
<body>
   <form action="search_result.php" method="POST">
    <div class="basic_1-left">
                <table class="table_working_hours">
                  <tbody>
               <td class="day_label">AGE  : </td>
                  <td class="day_value">
                 
                 <div class="col-sm-5 input-group1">
        <input type="number" name="agemin" id="slider-name" name="agemin" placeholder="18"  >
      </div>
      
      <div class="col-sm-5 input-group1">
        <input type="number"name="agemax" id="slider-name" name="agemax" placeholder="40" >
               </td>
             </tbody>
           </table>
         </div>

 <input type="submit" name="search" value="Search" class="btn_1 submit">
</form>
</body>
</html>