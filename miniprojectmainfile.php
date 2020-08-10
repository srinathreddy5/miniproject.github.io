<?php
 session_start(); //we need session for the log in thingy XD 
    include("functions.php");

// remove all session variables
//session_unset();

// destroy the session
session_destroy();

?>
<html>
    <head>
        <title>E-Municipality</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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

 <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#">Services</a>

    <a href="#">Projects</a>
    <a href="#">Contact</a>
    <a href="#">Help</a>
  </div>
</div>
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; connects you online</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
<div class="login-container">
    <form action="tryuserlogin.php" method="POST">

      <input type="email" placeholder="email" name="email" id="inputEmail" required autofocus>
     <input type="password" placeholder="Password" name="password" id="inputPassword" required>
      <input type="submit" value="Login">    
	<input type="button" value="Register" onclick="location.href='register.html'">
</form>
 

	<!--<label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
             
        <button name="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <button name="register" class="btn btn-lg btn-primary btn-block" type="button" onclick="location.href='register.html'">Register</button>    --> 

</div>

</div>

   
     <div id="background-image"> </div>
     <div>   <div style="width:100%">
        <div class="thumbnail" style="background-color:#ffff63;border-radius:200px" > 
       
 <h4 style="color:white">Services</h4> <img src="img/s1.png" alt="services" style="border-radius:20px"> 
        <p>Here you can request<br>for application</p><!-- use this if you need at every thumbnail -- <input type="button" value="read more >>" id="readmore" style="background-color: same thumbnail color">-->


        </div>
    <div class="thumbnail" style="background-color:#00ff80;border-radius:200px" >
        
        <h4 style="color:white">Projects</h4> <img src="img/p1.jpg" alt="projects" style="border-radius:20px">          
        <p>Here you can see <br>your project status</p>
        
    </div>
     <div class="thumbnail" style="background-color:#66b2ff;border-radius:200px">
        
        <h4 style="color:white">Contact</h4> <img src="img/c1.png" alt="contact" style="border-radius:20px">
        <p>Here you can <br>contact for officials</p>
       
    </div>
     <div class="thumbnail" style="background-color:#ff99ff;border-radius:200px">
        
        <h4 style="color:white" >Help</h4> <img src="img/l1.png" alt="list" style="border-radius:20px">
        <p>Here you about to <br>know about E-M </p>
       
    </div> 
        </div></div>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'F')" id="defaultOpen">OUR FEATUERS</button>
  <button class="tablinks" onclick="openCity(event, 'M')">OUR MISSION</button>
  <button class="tablinks" onclick="openCity(event, 'S')">OUR SOLUTION</button>
</div>

<div id="F" class="tabcontent">
  <h3>FEATUERS</h3>
  <p>WE OFFER THE ONLINE FEATUERS TO THE USERS WHERE THE USER CAN ACCESS THE MUNICIPAL SERVICES AT THEIR FINGERTIPS</p>
</div>

<div id="M" class="tabcontent">
  <h3>MISSION</h3>
  <p>OUR MISSION IS TO TRANSFORM THE MUNICIPALITY SERVICES TO ONLINE SUCH THAT USER CAN ACCESS MUNICIPALITY SERVICES THROUGH INTERNET</p> 
</div>

<div id="S" class="tabcontent">
  <h3>SOLUTION</h3>
  <p>E-MUNICIPALITY IS THE ONLINE SOLUTION TO THE OFFLINE SYSTEM OF THE MUNICIPALITY</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



</script>
<div class="row">

</div>


<div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>E-MUNICIPALITY</h2>
      <p class="pr-5 text-white-50">The interface where the people are connected at fingertips with safe and secure services </p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-linkedin"></a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-instagram"></a>
       
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="m-0 p-0">
          <li>- <a href="#">About us</a></li>
          <li>- <a href="#">Contact uS</a></li>
          <li>- <a href="#">Services</a></li>
          <li>- <a href="register.html">Register</a></li>
          <li>- <a href="#">Help</a></li>
          
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
      <p>123, ABC Block, XYZ, QWERRTY</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(040) 1122-333-444</p>
      <p><i class="fa fa-envelope-o mr-3"></i>mailme@gmail.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>


</body>
</html>