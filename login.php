<! DOCTYPE html>



<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Create an Account</title>
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
                <li id = "active"> <a href = "login.php">Give Away a Pet</a></li>
                
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
        
        <div class = "content">

             <form id = "form" action = "" method="POST">
                 
                 <h2 class = "label">Log In</h2>
                 <input class = "site-text" name = "username" type = "text" placeholder = "User Name" size = "30"/>
                 <div class = "error" id = "username"></div>
                 <input class = "site-text" name = "password" type = "text" placeholder = "Password" size = "30"/>
                 <div class = "error" id = "password"></div>

                 <hr>
                    
                    <input class = "button" type = "submit" value = "Submit" name = "submit" id = "submit" onclick = "return validate()"/>
                    

            </form>
            
            <?php
			error_reporting(E_ERROR | E_PARSE);
            
            function validate($username, $password)
            {
                
                $accountDataFile = fopen('accountData.txt', 'r');
                if ($accountDataFile) 
                    while (($userData = fgets($accountDataFile)) !== false) 
                    {
                        $userData = explode(":", $userData);
                        
                        if(($username === trim($userData[0])) && ($password === trim($userData[1])))
                        {
                            fclose($accountDataFile);
                            return true;
                        }
 
                    }
                   
                    fclose($accountDataFile);
                    return false;
            }
            session_id('session');
            session_start();
            
            if ($_SESSION['valid'] === true)
                die("<script>location.href = 'giveAwayPets.php'</script>");

           
            if(isset($_POST['submit']))
            {
                $username = trim($_POST['username']);     
                $password = trim($_POST['password']);
                $usernamenaw = "/[a-zA-Z0-9]+/";                                    
                $passwordnaw = "/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+){4}$/";    
               
                if(!preg_match($usernamenaw, $username))
                    echo("<div class = \"error\" >Invalid User Name. May only contain letters and digits. </div>");
                
                else if(validate($username, $password))
                {
                    $_SESSION['valid'] = true;
                    $_SESSION['username'] = $username;

                    die("<script>location.href = 'giveAwayPets.php'</script>");
                }
                else
                {
                    $_SESSION['int'] = 0;
                    echo ("<div class = \"error\" >Incorrect credentials. Please try again.</br></div>");   
                }
            }
        ?>
		<?php
			error_reporting(E_ERROR | E_PARSE);
            
            function val($username, $password)
            {
                
                $adminlogFile = fopen('adminlog.txt', 'r');
                if ($adminlogFile) 
                    while (($userData = fgets($adminlogFile)) !== false) 
                    {
                        $userData = explode(":", $userData);
                        
                        if(($username === trim($userData[0])) && ($password === trim($userData[1])))
                        {
                            fclose($adminlogFile);
                            return true;
                        }
 
                    }
                   
                    fclose($adminlogFile);
                    return false;
            }
            session_id('session');
            session_start();
            
            if ($_SESSION['valid'] === true)
                die("<script>location.href = 'adminpage.php'</script>");

           
            if(isset($_POST['submit']))
            {
                $username = trim($_POST['username']);     
                $password = trim($_POST['password']);
                $usernamenaw = "/[a-zA-Z0-9]+/";                                    
                $passwordnaw = "/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+){4}$/";    
               
                if(!preg_match($usernamenaw, $username))
                    echo("<div class = \"error\" >Invalid User Name. May only contain letters and digits. </div>");
                
                else if(val($username, $password))
                {
                    $_SESSION['valid'] = true;
                    $_SESSION['username'] = $username;

                    die("<script>location.href = 'adminpage.php'</script>");
                }
                else
                {
                    $_SESSION['int'] = 0;
                    echo ("<div class = \"error\" >Incorrect credentials. Please try again.</br></div>");   
                }
            }
        ?>
        </div>
       
    </body>
</html>