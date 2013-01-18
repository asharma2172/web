<?php
/*****************************************************************************************************************
*
* CS50 Final Project
* Harvard Mental Health Forum
*
* Stephanie Havens and Akshay Sharma
*
* keywordlinks.php
* Usage: creates a page that only has the filtered keyword messages
*
******************************************************************************************************************/
    require("/home/groups/cs50-hmhf/web/includes/config.php"); 
    
     // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // avoids SQL injection attacks
        $keyword = htmlspecialchars($_GET["keyword"]);
        
        $user = query("SELECT moderator FROM users WHERE userid = ?", $_SESSION["id"]);
        $user = $user[0];
        $moderator = $user["moderator"];
              
        // queries data from database with select keyword and only the first post of all of the same title
         $rows = query("SELECT * FROM posts WHERE keyword = ? AND timeid = ? ORDER BY timestamp DESC", $keyword, 0);

    	// renders link form
		render("link_form.php", array("rows"=>$rows,"moderator"=>$moderator));
	
	}
?>