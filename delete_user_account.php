<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
  
   
    if($conn){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $qur = "DELETE FROM customer WHERE id = '$id'";
            mysqli_query($conn,$qur);
            header("location:admin_panel.php?id={$row['id']}");
        }
        else{
            echo "NO ID FOUND!";
        }
    }
    else{
        echo "NOT CONNECTED!";
    }
?>