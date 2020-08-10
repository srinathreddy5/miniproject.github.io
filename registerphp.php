<?php 
include("connectdb.php");
$name=$_POST['name'];
$uname=$_POST['uname'];    
$email=$_POST['email'];
    $password=$_POST['password'];
          
	
         
            $sql="INSERT INTO register VALUES ('$name','$uname','$email','$password');";
             mysqli_query($conn, $sql);
         $result=mysqli_affected_rows($conn);
								
if($result>0){
           echo "User Registered Successfully"; 
           header('location:miniprojectmainfile.php');
}
else{
    echo"Unsuccessful registration ".mysqli_error($conn);
}
mysqli_close($conn);
?>