<! DOCTYPE html>



<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Find a Pet</title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" />
        <script type = "text/javascript" src = "date.js"></script>
    </head>
    
	
    <body onload = "refreshDate();">
        
       
        <?php include('header.php'); ?>
        
       
        <div class = "sideMenu">
            <ul>
                <li id = "unactive"> <a href = "home.php">Home</a></li>
                <li id = "unactive"> <a href = "browsePets.php">Browse Pets</a></li>
                <li id = "active"> <a href = "findPets.php">Find a Pet</a></li>
                <li id = "unactive"> <a href = "dogCare.php">Dog Care</a></li>
                <li id = "unactive"> <a href = "catCare.php">Cat Care</a></li>
				<li id = "unactive"><a href = "login.php">Give Pets Home</a></li>
               
                
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
        
        <div class = "content-center">
            <h2 class = "label">Adopt a Dog</h2>
            <a href = "browsedogs.php">
                <img class = "polaroidShrink50" src = "photos/adoptDog.jpg"alt = " (Adopt a Dog) "/></a>
            <hr>
            <h2 class = "label">Adopt a Cat</h2>
            <a href = "browsecats.php"> 
                <img class = "polaroidShrink50" src = "photos/adoptCat.jpg" alt = " (Adopt a Cat) " size = "50%"/></a>
            <hr>
        </div>
        
   
    </body>
</html>