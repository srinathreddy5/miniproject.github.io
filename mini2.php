<?php
     session_start(); //we need session for the log in thingy XD 
    include("functions.php");
if($_SESSION['login']!==true){      header('location:miniprojectmainfile.php');
    }
?>
  
<!doctype html>
<head>
<title>E-Municipality</title>
<link rel="stylesheet" type="text/css" href="style2.css">
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="topnav">
<h2>E-MUNICIPALITY</h2>
<a class="active" >Connects You Online</a>
<div class="container d-flex justify-content-between">
           <center><strong>Welcomes You <?php echo $_SESSION['name'] ?></strong></center>
    <div class="pull-right">   
   	 <div class="btn-group">
   	 <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">STATUS<span class="caret"></span></button>
    	 <ul class="dropdown-menu" role="menu">
      	 <a class="dropdown-item" href="statushouse.php">House Construction</a>
    	 <a class="dropdown-item" href="statustap.php">Water connection</a>
    	 <a class="dropdown-item" href="statuselectricity">Electricity Connection</a>
    	 </ul> </div>                
    <div class="btn-group">
	<form method="post">
                    <button name="logout" class="btn btn-primary">logout</button></form>

 <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:miniprojectmainfile.php');
                } 
?>
 </div> 
</div>
</div>

<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
border-radius:4px;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 33.3339%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add heightfor full page content) */
.content {
  color:black;
  display: none;
  padding: 100px 20px;
  height: 1010px;
width:100%
}

.btn{
border-radius:2px; background:blue;  box-sizing:border-box; font-size: 10px;
}
#H {background-image: url("img/construction.jfif"); }
#T {background-image: url("img/water.JPG");}
#E {background-image: url("img/electricity.jfif");}
.button{ padding: 20px 30px;
  margin-top:600px;margin-left:680px; 
  background:#5BA41B;
  font-size: 25px;
  border: .5px solid green;
  cursor: pointer; border-radius: 25px;
    box-sizing: border-box;}
.button:hover {
  background-color: #80d03a;}
}

</style>
</head>
<body>

<button class="tablink" onclick="openPage('H', this, 'green')">BUILDING CONSTRUCTION</button>
<button class="tablink" onclick="openPage('T', this, 'green')" id="defaultOpen">WATER CONNECTION</button>
<button class="tablink" onclick="openPage('E', this, 'green')">ELECTRICITY CONNECTION</button>

<div id="H" class="content">
     <button type="button" class="button" onclick="location.href='listhouse.php'">Apply</button>
</div>

<div id="T" class="content">
  
    
<button type="button" class="button" onclick="location.href='listtap.php'">Apply</button>


</div>

<div id="E" class="content">
  
  
   <button type="button" class="button" onclick="location.href='listelectricity.php'">Apply</button>
</div>
</div></div>

<script>
function openPage(pageName,elmnt,color) {
  var i, content, tablinks;
 content = document.getElementsByClassName("content");
  for (i = 0; i < content.length; i++) {
    content[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



<div>
<?php include("footer1.html");?> </div>
</body>
</html>