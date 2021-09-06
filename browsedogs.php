<! DOCTYPE html>



<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Browse Pets</title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" /> 
        <script type = "text/javascript" src = "browsePets.js"></script>
    </head>
   
    <body>
   
    <?php include('header.php'); ?> 
       
        <div class = "sideMenu">
            <ul>
                <li id = "unactive"> <a href = "home.php">Home</a></li>
                <li id = "active">   <a href = "browsePets.php">Browse Pets</a></li>
                <li id = "unactive"> <a href = "findPets.php">Find a Pet</a></li>
                <li id = "unactive"> <a href = "dogCare.php">Dog Care</a></li>
                <li id = "unactive"> <a href = "catCare.php">Cat Care</a></li>
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
         
        <div class = "content-center">
            <select class = "single" id = "browseSelect" size = "1">
                <option>Cats</option>
            
                <option selected = "selected">Dogs</option>
            </select>
            <hr />
            <div id = "browsePets">
         </div>
        </div>
        
        
        <script type = "text/javascript" src = "browsePetsR.js"></script>
    </body>
</html>