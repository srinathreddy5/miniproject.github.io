<?php session_start();   
if($_SESSION['login']!==true){      header('location:miniprojectmainfile.php');
    }
?>

<html>
<head> 
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<header><div class="topnav">
<h2>E-MUNICIPALITY</h2>
 <h3>Connects You Online</h3>
          <div class="pull-right">   
        <div class="btn-group">
	<form method="post">
                    <button name="logout" class="btn btn-primary">logout</button></form></div>

 <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:miniprojectmainfile.php');
                } 
?>
 </div> 
</div>
</div></header>

<?php

include("connectdb.php");
  if( isset( $_SESSION['name'])) {
      $name = $_SESSION['name']; 

         $query = "SELECT * from approvedtap where name = '$name';";
          $result=mysqli_query($conn,$query);

echo '<div class="container">                   
  <h3>Application status for Water Connection</h3>                    
<table class="table table-hover" >
  <thead>
<tr> 
<th>Application Id</th>
<th>Name</th>
<th>Tax Number</th>
<th>Status</th>
<p></p>

      </tr>
 </thead> ';
$resultcount=mysqli_num_rows($result);
if(($resultcount)>0){
 while ($row =mysqli_fetch_array($result)){

 echo '<tr>
<td>'. $row["id"].'</td>     
<td>'. $row["name"].'</td>
<td>'.$row["taxno"].'</td>
<td>'.$row["message"].'</td>

</tr>';


}
echo'</table>';
}
else{
echo"your application is in pending";
}
}
?>
</body>
</html>