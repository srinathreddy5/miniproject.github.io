<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
if($_SESSION['login']!==true){
        header('location:miniprojectmainfile.php');
    }
?>
 <!doctype html>
 <html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="list.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>House Cnstruction Application</title>
  </head>
    <?php
        if(isset($_POST['submit'])){
$id=$_POST['id'];
$name=$_POST['name'];
$gender=$_POST['sellist1'];    
$email=$_POST['email'];
$phno=$_POST['phno'];
$paddress=$_POST['paddress'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$lsno=$_POST['lsno'];
$bu=$_POST['bu'];
$regno=$_POST['regno'];
$area=$_POST['area'];
$l=$_POST['l'];
$street=$_POST['street'];
$municipal=$_POST['municipal'];
$engname=$_POST['engname'];
$c=$_POST['c'];
$date=$_POST['date'];

          $query = "INSERT INTO listhouse VALUES ('$id','$name','$gender','$email','$phno','$paddress','$city','$pincode','$lsno','$bu','$regno','$area','$l','$street','$municipal','$engname','$c','$date');";
                if(performQuery($query))
		{
                 echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
 		// header('location:mini2.php');            
 		}
         else{
                echo "<script>alert('Unknown error occured.')</script>";
           }
        }
    ?>
<body>


 <form method="POST" >   
  <div class="container">					
                      
 <h1>House Construction Application</h1>
    <p>Please fill the form to apply.</p>
    
<label for="id"><b>Enter ID number</b></label>
    <input type="text" placeholder="Enter ID" name="id" required>

    <label for="name"><b>Name Of Applicant</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
 
     <label for="gender"><b>Gender</b></label>
     
    
  <label for="sel1">Select list (select one):</label>
      <select class="form-control"  name="sellist1" required>
        <option>male</option>
        <option>female</option>
        <option>other</option>
      </select>    
<br>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="phno"><b>Phone number</b></label>
    <input type="text" placeholder="Enter Phone no." name="phno" required>

     <label for="paddress"><b>Present Address</b></label>
    <input type="text" placeholder="Enter Present Address" name="paddress" required>
    
<label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="city" required>

<label for="pincode"><b>Pincode</b></label>
     <input type="text" placeholder="Enter Pincode" name="pincode" required>

<h2>New Building</h2>

<label for="lsno"><b>Land Survey no.</b></label>
    <input type="text" placeholder="Enter Land Survey no." name="lsno" required>

<label for="bu"><b>Building Usage</b></label>
    <input type="text" placeholder="Enter Building Usage" name="bu" required>

<label for="regno"><b>Registration number</b></label>
    <input type="text" placeholder="Enter Reg no." name="regno" required>

<h2>Measurements</h2>

<label for="area"><b>Area Size</b></label>
    <input type="text" placeholder="Enter Area Size in sqft units" name="area" required>

<label for="locality"><b>Locality</b></label>
    <input type="text" placeholder="Enter Locality" name="l" required>


<label for="street"><b>Street</b></label>
    <input type="text" placeholder="Enter Street" name="street" required>

<label for="municipal"><b>Application Processing Municipal Administration</b></label>
    <input type="text" placeholder="Enter Municipal" name="municipal" required>



<h2>Engineer Information</h2>

<label for="engname"><b>Engineer Name</b></label>
    <input type="text" placeholder="Enter Engineer Name" name="engname" required>

<h2>Payment</h2>

<label for="payment"><b>Challan number</b></label>
    <input type="text" placeholder="Enter Challan number" name="c" required>

<label for="date"><b>Date</b></label>
    <input type="text" placeholder="Enter Date" name="date" required>
       
   
<label class="checkbox-inline"> <input type="checkbox" value="" required> <p>By submitting you agree to our <a href="#">Terms & Privacy</a>.</p></label>
<button type="submit" class="submitbtn" name="submit">submit</button>
 

              <a href="mini2.php" class="mt-5 mb-3 text-muted">Go back to home page</a>
            </form>
          </div>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     
     </body>
</html>