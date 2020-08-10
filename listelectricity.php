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
    <title>ELECTRICITY Connection Application</title>
 </head>
<?php
        if(isset($_POST['submit'])){
$id=$_POST['id'];
$name=$_POST['name'];
$taxno=$_POST['taxno'];
$toc=$_POST['sellist1'];
$c=$_POST['c'];
$date=$_POST['date'];
//$_session['name']=$name;

          $query = "INSERT INTO listelectricity VALUES ('$id','$name','$taxno','$toc','$c','$date');";
		 if(performQuery($query)){
                 echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
          
		}
else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
    }
    ?>
<body>

 <form method="POST" >   
  <div class="container">					
                      
 <h1>ELECTRICITY  Connection Application</h1>
    <p>Please fill the form to apply.</p>
    
<label for="id"><b>Enter ID number</b></label>
    <input type="text" placeholder="Enter ID" name="id" required>

    <label for="name"><b>Name Of Applicant</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
 
<h2>Connections</h2>

<label for="taxno"><b>Municipal TAX no.</b></label>
    <input type="text" placeholder="Enter Municipal Tax no." name="taxno" required>

 <label for="phase"><b>Type of connection</b></label>
     
    
  <label for="sel2">Phase (select one):</label>
      <select class="form-control" id="sel1" name="sellist1" required>
        <option>2 phase</option>
        <option>3 phase</option>
      </select>    
<br>

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