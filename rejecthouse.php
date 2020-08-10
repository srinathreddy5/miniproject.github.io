<?php
session_start();
    include('functions.php');
 
$id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 
    $query = "SELECT * FROM `listhouse` WHERE `id` = '$id'; ";  
      if(count(fetchAll($query)) > 0)
        {
        foreach(fetchAll($query) as $row)
    {
$id=$row['id']; 
$name=$row['name'];   

           $query="INSERT INTO approvedhouse(taxno,`id`, `name`, `message`, `status`) VALUES (NULL,'$id,'$name','rejected','unread');";
}
        $query = "DELETE FROM listhouse WHERE listhouse.`id` = '$id';";
        if(performQuery($query))
            {
            echo "Account has been accepted.";
           header('location:homehouse.php');
            }
        else{
            echo "Unknown error occured. Please try again.";
             }
        }
    //else{
      //  echo "Error occured.";
    //}
?>
