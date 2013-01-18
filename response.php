<?php
/*****************************************************************************************************************
*
* CS50 Final Project
* Harvard Mental Health Forum
*
* Stephanie Havens and Akshay Sharma
*
* response.php
* Usage: Allows user to respond to existing posts
*
******************************************************************************************************************/

//configuration
require("/home/groups/cs50-hmhf/web/includes/config.php");

// Check that the form has been filled out
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Retrieve message, title from Post
    $message = htmlspecialchars($_POST["message"]);
    $titleid = htmlspecialchars($_POST["titleid"]);
    $userid = $_SESSION["id"];
        
        // Insert into mysql table
        if(query("INSERT INTO posts (titleid, message, id, timeid) VALUES (?, ?, ?, ?)", $titleid, $message, $userid, 1)===false)
            apologize("Please try again"); 
	
	//determine the privacy
	if($_POST["privacy"] == 1)
	{	
		//send email to original poster
		$rows = query("SELECT * FROM posts WHERE titleid = ? AND timeid = ?", $titleid, 0);
		$row = $rows[0];
		$user = $row["id"];
		$email = query("SELECT email FROM users WHERE userid = ?", $user);
		$email = $email[0];
		$title = htmlspecialchars($row["title"]);
		$to = htmlspecialchars($email["email"]); 
        $subject = "Someone responded to your post: " . $title;
    	$body = "You said: \n" . $row["message"] . "\n\n A Student Mental Health Leader responded: \n".$message;
        $headers = "From: cs50-hmhf@hcs.harvard.edu\r\n";
        mail($to, $subject, $body, $headers);
	}
}
	//after the post redirect to the updated thread
	redirect("posts.php?titleid=$titleid");

?>
