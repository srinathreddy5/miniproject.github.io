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
$phno=$row['phno'];    
$paddress=$row['paddress'];
//$pincode=$row['pincode'];
$lsno=$row['lsno'];
$bu=$row['bu'];
$regno=$row['regno'];
$area=$row['area'];
$l=$row['l'];
$municipal=$row['municipal'];
$engname=$row['engname'];
//$c=$row['c'];
$date=$row['date'];
            $query = "INSERT INTO `approvedhouse`(taxno,`id`, `name`, `phno`, `paddress`, `lsno`, `bu`, `regno`, `area`, `l`, `municipal`, `engname`, `date`, `message`, `status`) VALUES (NULL,'$id','$name','$phno','$paddress','$lsno','$bu','$regno','$area','$l','$municipal','$engname','$date','approved','unread');";
        }
        $query .= "DELETE FROM `listhouse` WHERE `listhouse`.`id` = '$id';";
        if(performQuery($query))
            {
            echo "Account has been accepted.";
           header('location:homehouse.php');
            }
        else{
            echo "Unknown error occured. Please try again.";
             }
}
?>