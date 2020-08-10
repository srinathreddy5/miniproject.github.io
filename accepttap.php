<?php
    include('functions.php');
    $id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 
    $query = "SELECT * FROM `listtap` WHERE `id` = '$id'; ";
    
    {
        foreach(fetchAll($query) as $row)
       {
$id=$row['id'];
$name=$row['name'];
$taxno=$row['taxno'];
$noc=$row['noc'];
$address=$row['address'];
$c=$row['c'];
$date=$row['date'];
    $query = "INSERT INTO `approvedtap`(`id`, `name`, `taxno`, `noc`,address,`c`,`date`,message,status) VALUES ('$id','$name','$taxno','$noc','$address','$c','$date','accepted','unread');";
        }  
       $query .= "DELETE FROM `listtap` WHERE `listtap`.`id` = '$id';";
           if(performQuery($query))
               {
              echo "Account has been accepted.";
              header('location:hometap.php');
                 }
            else{
            echo "Unknown error occured. Please try again.";
        }
    }
   //else{
//      echo "Error occured.";
  //  }
?>
	