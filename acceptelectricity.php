<?php
session_start();
    include('functions.php');
    $id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 
    $query = "SELECT * FROM `listelectricity` WHERE `id` = '$id'; ";
    
    {
        foreach(fetchAll($query) as $row)
       {
$id=$row['id'];
$name=$row['name'];
$taxno=$row['taxno'];
$toc=$row['toc'];
$c=$row['c'];
$date=$row['date'];
    $query = "INSERT INTO `approvedelectricity`(`id`, `name`, `taxno`, `toc`,`c`,`date`,message,status) VALUES ('$id','$name','$taxno','$toc','$c','$date','approved','unread');";
        }  
       $query .= "DELETE FROM `listelectricity` WHERE `listelectricity`.`id` = '$id';";
           if(performQuery($query))
               {
              echo "Account has been accepted.";
              header('location:homeelectricity.php');
                 }
            else{
            echo "Unknown error occured. Please try again.";
        }
    }
   //else{
//      echo "Error occured.";
  //  }
?>
