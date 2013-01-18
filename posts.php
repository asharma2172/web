<?php
/*****************************************************************************************************************
*
* Harvard Mental Health Forum
* CS50 Final Project
*
* Akshay Sharma and Stephanie Havens
*
* posts.php
* Usage: keeps track of transaction history
*
******************************************************************************************************************/

    
    // configuration
    require("/home/groups/cs50-hmhf/web/includes/config.php"); 
    
     // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // avoids SQL injection attacks
        $TITLE_ID = htmlspecialchars($_GET["titleid"]);
    
        // queries message information ordered by time
        $rows = query("SELECT * FROM posts WHERE titleid = ? ORDER BY timestamp", $TITLE_ID);
        if(empty($rows[0]))
        	apologize("This page no longer exists.");
         
        // queries current user information
        $user = query("SELECT * FROM users WHERE userid = ?", $_SESSION["id"]);
        
        $user = $user[0];
        $row = $rows[0];
        
        $privacy = $row["privacy"];
        
        // if user didn't write they post they are viewing
        // if current user has no moderator privileges do not show post
        if($user["userid"] != $row["id"]){
        	if($privacy == 1 && $user["moderator"] == 0)
        		apologize("You do not have access to this post");
        }
        
        	
    	// renders the response form table
		render("form_table.php", array("rows"=>$rows, "user"=>$user));
	
	}
?>
