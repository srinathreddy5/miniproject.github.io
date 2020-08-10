<?php
 session_start();  

$conn = mysqli_connect("localhost","root","","mini");
       $uname=$_POST['email'];
        $password = $_POST['password'];
         
    $query = "SELECT * from register where email='$uname' and password='$password'";
                $result= mysqli_query($conn, $query);
                    if(mysqli_num_rows($result)>0)
 			 {
                      $row=mysqli_fetch_assoc($result);
                       $_SESSION['login'] = true;
                       $_SESSION['name'] = $row['name'];
				echo"login successful";
				 header('location:mini2.php');
                 		}
				else
				  {
		                    echo "<script>alert('Wrong login details.')</script>";
                                  }          
    
 mysqli_close($conn);
?>