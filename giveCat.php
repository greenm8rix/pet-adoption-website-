<?php
require_once('config.php');
?>


<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Adoption form </title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" />
			  
        
    </head>
    
    <body >
 <?php include('header.php'); ?>

        <?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		$namerr = $namErr = $emailErr  = $childErr = $genderErr = $ageErr = $aboutErr = ""; 
		if(isset($_POST['submitBtn'])){
            $firstname 	= $_POST['firstname'];
			$lastname	= $_POST['lastname'];
			$email 		= $_POST['email'];
			$breed      = $_POST['breed'];
			$age	    = $_POST['age'];
			$gender     = $_POST['gender'];
			$childFriendly 	= $_POST['childFriendly'];
			$about 	    =     $_POST['about'];
		if (empty($_POST['firstname'])) { 
			
         $namerr = 'Name is required';  
    } 
            
            if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {  
                $namerr = "Only alphabets and white space are allowed";  
            } 
			
			if (empty($_POST['lastname'])) {  
         $namErr = 'Last Name is required';  
    } 
	
            
            if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {  
                $namErr = "Only alphabets and white space are allowed";  
            }  
      
      
     
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } 
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
			 
		
		 if (empty ($_POST["gender"])) {  
            $genderErr = "gender is required";  
    } 
	if (empty ($_POST["childFriendly"])) {  
            $childErr = "required";  
    }
	if (empty($_POST['about'])) { 
			
         $aboutErr = 'cannot be empty';  
    } 
			
					if($namErr == "" && $emailErr == "" && $namerr =="" && $aboutErr =="" && $childErr=="" && $genderErr=="")
		{      
			$sql = "INSERT INTO cat(firstname,lastname,email,breed,age,gender,childFriendly,about) VALUES(?,?,?,?,?,?,?,?)";
			$stmtinsert =$db->prepare($sql);
			$result= $stmtinsert->execute([$firstname,$lastname,$email,$breed,$age,$gender,$childFriendly,$about]);
			 echo '<script>alert("form submitted")</script>';
		}
		}
		?>
       
        <div class = "sideMenu">
            <ul>
                <li id = "unactive"> <a href = "home.php">Home</a></li>
                <li id = "unactive">  <a href = "browsePets.php">Browse Pets</a></li>
                <li id = "unactive"> <a href = "findPets.php">Find a Pet</a></li>
                <li id = "unactive"> <a href = "dogCare.php">Dog Care</a></li>
                <li id = "unactive"> <a href = "catCare.php">Cat Care</a></li>
                <li id = "active"> <a href = "login.php">Give Pets Home</a></li>
               
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
		<div class = "content">
        
             <form id = "form" method = "post">
                 <h1 class = "label">Give Away a Cat</h1>
                 <hr>
                    <h2 class = "label">Breed </h2>
                    <select class = "single" name = "breed">
                                <option> Persian </option>
                                <option> Ragdoll </option>
                                <option> Sphinx </option>
                                <option> Russian Blue </option>
                             <option> Scottish Fold </option> 
                            <option > Mixed </option></select>
                 
                 <hr>
                    <h2 class = "label">Age Category </h2>
                    <select class = "single" name = "age">
                                <option> Less than 1 year</option>
                                <option> 1-2 </option>
                                <option> 3-5 </option>
                                <option> 6-10 </option>
                            <option> More than 10 years</option> </select>
                 
                 <hr>
        
                    <h2 class = "label">Gender</h2>
                    <label> <input type = "radio" name = "gender" value = "male"/> Male </label>
                    <label> <input type = "radio" name = "gender" value = "female" /> Female </label>
                 <span style="color:red"> <?php echo $genderErr; ?> </span>  
                 <hr>
                 
                    <h2 class = "label">Child Friendly</h2> 
                    <label> <input type = "radio" name = "childFriendly" value = "yes"/> Yes </label>
                    <label> <input type = "radio" name = "childFriendly" value = "no" /> No </label>
                 <span style="color:red"> <?php echo $childErr; ?> </span>  
                 <hr>
                 
                    
                 
                 
                 
                 <h2 class = "label">Tell Us About Your Cat</h2>
                 <textarea name = "about" placeholder = "Why are you putting your Cat up for adoption?"></textarea>
                 <span style="color:red"> <?php echo $aboutErr; ?> </span>  
                 <hr>
                 
                 <h2 class = "label">Personal Information</h2>
                 <input class = "site-text" name = "firstname" type = "text" placeholder = "First Name" size = "30"/>
                 <span style="color:red"> <?php echo $namerr; ?> </span>  
                 <input class = "site-text" name = "lastname" type = "text" placeholder = "Last Name" size = "30"/>
                 <span style="color:red"> <?php echo $namErr; ?> </span>
                 <input class = "site-text" name = "email" type = "text" placeholder = "Email Address" size = "30"/>
                 <span style="color:red"> <?php echo $emailErr; ?> </span>
                 <hr>
                 <label><h2 class = "label">Your cat will find a great new home!</h2>
                    <input class = "button" type = "submit" name = "submitBtn" value = "Submit Form" />
                    
                 
                 <hr>
            </form>
        </div>
        
    </body>
</html>