<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
    if($_SESSION['login']!==true){      header('location:login.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pending Request System</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
	<!--	<h2><strong>E-MUNICIPALITY</strong></h2>  -->
		<strong>  WELCOME OFFICIAL "<?php echo $_SESSION['email'] ?>"</strong>
          </a>
            <div class="pull-right">
                <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:login.php');
                }
    
                ?>
                <form method="post">
                    <button name="logout" class="btn btn-danger my-2">Logout</button>
                </form>
            </div>
        </div>
      </div>
    </header>

<style>
.header {
  background: #1abc9c;
  color: white;
  font-size: 10px;
}

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
border-radius:0px;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 100%;
}
.t
{
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
border-radius:4px;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 100%;
}

.tablink:hover {
  background-color: none
}
.t:hover {
  background-color: #777;
}


/* Style the tab content (and add heightfor full page content) */
.content {
  color:black;
  display: none;
  padding: 100px 20px;
  height: 1100px;
width:100%;margin-bottom:10px;
}
.btn{
border-radius:10px; background:orange;  box-sizing:border-box;
}

#T{background-image: url("img/tsts.png");margin-top:250px;margin-left:170px;}

</style>
</head>
<body>

<button class="tablink" onclick="openPage('T', this, '#555')" id="defaultOpen">SERVICES</button>
<button class="t" onclick="location.href='homehouse.php'">BUILDING APPLICATIONS</button>
<button class="t" onclick="location.href='hometap.php'">WATER APPLICATIONS</button>
<button class="t" onclick="location.href='homeelectricity.php'">ELECTRICITY APPLICATIONS</button
<div>
<div id="T" class="content"></div>  
</div>
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
</body></html>

