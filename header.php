<header id="header">
        <header class = "site-header">
            <a href = "home.php"><img class = "logo"
                 src = "photos/logo.png"
                 alt = "(Adopt Cats & Dogs Logo)"/></a>
				  <?php
            session_id('session');  
            session_start();        
            if(isset($_SESSION['valid']))
                echo("<a href = \"logout.php\"><input class = \"button\" id = \"logout\" value = \"Log Out\"/></a>");
            else
                
                echo("<a href = \"login.php\"><input class = \"button\" id = \"logout\" value = \"Log In\"/></a>");
            ?>
            
        </header> 
</header>