<?php
/*****************************************************************************************************************
*
* CS50 Final Project
* Harvard Mental Health Forum
*
* Stephanie Havens and Akshay Sharma
*
* login.php
* Usage: logs user in
*
******************************************************************************************************************/
    
    // configuration
    require("./includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	// avoid injection attacks
    	htmlspecialchars($_POST["email"]);
    	htmlspecialchars($_POST["password"]);
    	
        // check that email and password has been submitted
        if (empty($_POST["email"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE email = ?", $_POST["email"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (crypt($_POST["password"], $row["password"]) == $row["password"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["userid"];

                // redirect to forum
                redirect("links.php");
            }
        }

        // else apologize
            apologize("Invalid username and/or password.");
    }
    else
    {
        // else render form
        render("login_form.php", array("title" => "Log In" ));
    }

?>
