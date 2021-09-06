<! DOCTYPE html>



<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Create an Account</title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" />

    </head>
   
    <body onload = "refreshDate();">
        
        
        <?php include('header.php'); ?>
        
        
        <div class = "sideMenu">
            <ul>
                <li id = "unactive"> <a href = "home.php">Home</a></li>
                <li id = "unactive">   <a href = "browsePets.php">Browse Pets</a></li>
                <li id = "unactive"> <a href = "findPets.php">Find a Pet</a></li>
                <li id = "unactive"> <a href = "dogCare.php">Dog Care</a></li>
                <li id = "unactive"> <a href = "catCare.php">Cat Care</a></li>
                <li id = "unactive"> <a href = "login.php">Give Away a Pet</a></li>
                <li id = "active"> <a href = "createAccount.php">Create an Account</a></li>
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
        <div class = "content">

             <form id = "form" action = "" method="POST">
                 
                 <h2 class = "label">Create an Account</h2>
                 <input class = "site-text" name = "username" type = "text" placeholder = "User Name" size = "30"/>
                 <div class = "error" id = "username"></div>
                 <input class = "site-text" name = "password" type = "text" placeholder = "Password" size = "30"/>
                 <div class = "error" id = "password"></div>

                 <hr>
                    
                    <input class = "button" type = "submit" value = "Submit" name = "submit" id = "submit" onclick = "return validate()"/>
                    

            </form>
            <?php
            error_reporting(E_ERROR |  E_PARSE);
            
            function validate($username, $password)
            {
               
                $accountDataFile = fopen('accountData.txt', 'a+');
                if ($accountDataFile) 
                    while (($userData = fgets($accountDataFile)) !== false) 
                    {
                        $userData = explode(":", $userData, 2);
                        if($username === $userData[0])  
                            return false;
                    }
                    
                    fwrite ($accountDataFile, $username . ":" . $password . "\n");
                    fclose($accountDataFile);
                    return true;
            }
            
            if(isset($_POST['submit']))
            {
                $username = $_POST['username'].trim();      
                $password = $_POST['password'].trim();
                $usernamenaw = "/[a-zA-Z0-9]+/";                                   
                $passwordnaw = "/[a-zA-Z0-9]+/";    
               
                if(!preg_match($usernamenaw, $username))
                    echo("<div class = \"error\" >Invalid User Name : May only contain letters and digits. </div>");
                
                else if(!preg_match($passwordnaw, $password))
                    echo("<div class = \"error\" >Invalid Password : May only contain letters and digits. </div>");
                
                else if(validate($username, $password))
                    echo ("<div class = \"success\" >Account successfully created!</br></div>");
                else
                    echo ("<div class = \"error\" >User Name not available. Please try again.</br></div>");
            }
        ?>
        </div>
        

    </body>
</html>