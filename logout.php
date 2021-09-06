<! DOCTYPE html>



<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Create an Account : 40006417</title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" />

    </head>
   
    <body">
        
        <?php include('header.php'); ?>
        
        
        <div class = "sideMenu">
            <ul>
                <li id = "unactive"> <a href = "home.php">Home</a></li>
                <li id = "unactive">   <a href = "browsePets.php">Browse Pets</a></li>
                <li id = "unactive"> <a href = "findPets.php">Find a Pet</a></li>
                <li id = "unactive"> <a href = "dogCare.php">Dog Care</a></li>
                <li id = "unactive"> <a href = "catCare.php">Cat Care</a></li>
                <li id = "unactive"> <a href = "login.php">Give Away a Pet</a></li>
                
                <li id = "active"> <a href = "logout.php">Log Out</a></li>
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
        
        <div class = "content">

             <h2 class = "label">Logout</h2>

             <hr>
                    
            
            <?php
			error_reporting(E_ERROR | E_WARNING | E_PARSE);
            session_id('session');  
            session_start();        
            
            if(isset($_SESSION['valid']))
            {
                session_destroy();
                $_SESSION['valid'] = false;
                unset($_SESSION["username"]);
                unset($_SESSION["password"]);
                echo "<h3>See you next time!</h3>";
            } 
            else 
                
                die("<script>location.href = 'login.php'</script>");
            ?>
        </div>
        
        
    </body>
</html>