<?php
/*****************************************************************************************************************
*
* CS50 Final Project
* Harvard Mental Health Forum
*
* Stephanie Havens and Akshay Sharma
*
* changepass.php
* Usage: changes password
*
******************************************************************************************************************/


    // configuration
    require("/home/groups/cs50-hmhf/web/includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        // query database for user to obtain password
        $rows = query("SELECT * FROM users WHERE userid = ?", $_SESSION["id"]);
      	
        // if we found user, check password
        if (count($rows) == 1)
        {  
            // first (and only) row
            $row = $rows[0];
			// if former password field is empty, apologize
        	if (empty($_POST["password"]))
            	apologize("You must provide your password.");
            
            // if either passoword field is empty, apologize
            if(empty($_POST["new_password"]) || empty($_POST["confirm"]))
                apologize("Please reenter your new password and confirm it");
        
            // check confirmation matches password
            if( $_POST["new_password"] != $_POST["confirm"])
                apologize("Your password and confirmation do not match, please try again.\n");
        	
        	// protect against sql injection attacks
            $pass = $_POST["new_password"];
            
            // compare hash of user's input against hash that's in database
            if (crypt($_POST["password"], $row["password"]) == $row["password"])
            {
                // create new password crypt
                $crypt = crypt($pass);
        
                // insert new password into database
                if(query("UPDATE users SET password = '$crypt' WHERE userid = ?", $_SESSION["id"] )=== false)
                    apologize("Please choose a new password. \n");
                
                // redirect to homepage
                redirect("links.php");
            }
            
            else {
            // else apologize
            apologize("Invalid password.");
        		}
        }
        
    }
    else
    {
        // else render form
        render("changepass_form.php", array("title" => "Change Password"));
    }

?>

