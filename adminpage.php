<! DOCTYPE html>



<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Home</title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" />
			  <style>
table, td, th {
  border: 1px solid black;
   font-size: 30px;
   color:black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
        
        <script type = "text/javascript" src = "date.js"></script>
    </head>
    <body onload="start()">
    
        
        <?php include('header.php'); ?>
        
        <div class = "sideMenu">
            <ul>
                <li id = "active"><a href = "home.php">Home</a></li>
                <li id = "unactive"> <a href = "browsePets.php">Browse Pets</a></li>
                <li id = "unactive"> <a href = "findPets.php">Find a Pet</a></li>
                <li id = "unactive"> <a href = "dogCare.php">Dog Care</a></li>
                <li id = "unactive"> <a href = "catCare.php">Cat Care</a></li>
                <li id = "unactive"><a href = "login.php">Give Pets Home</a></li>
                
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
		<div class = "content">
		
		<div id="saq1" class="saq1">
		<?php include('dog.php'); ?> 
		</div>
		<div id="saq2" class="saq2">
		<?php include('cat.php'); ?> 
		</div>
		<p><input class = "button"  onclick="saq1()" value = "cat" /><input class = "button"  onclick="saq2()" value = "DOG" /></p>
		
		</div>
		

<script language="javascript">
function saq2() {
  var x = document.getElementById("saq1");
   if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function saq1() {
  var x = document.getElementById("saq2");
   if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function start(){
    saq1();
    saq2();
    
}
</script>