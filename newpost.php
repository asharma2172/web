<?php
/*****************************************************************************************************************
*
* CS50 Final Project
* Harvard Mental Health Forum
*
* Stephanie Havens and Akshay Sharma
*
* newpost.php
* Usage: creates a new post
*
******************************************************************************************************************/

//configuration
require("/home/groups/cs50-hmhf/web/includes/config.php");

// Check that the form has been filled out
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // check that the user didn't leave the message or title empty
    if(empty($_POST["message"]) || empty($_POST["title"]))
    	apologize("Please fill in all fields"); 
    
    // Retrieve message, title from Post
    $message = htmlspecialchars($_POST["message"]);
    $title = htmlspecialchars($_POST["title"]);
	$userid = $_SESSION["id"];
    
    //record privacy settings
    if(isset($_POST["check"]))
    	$private = 1;
    else
    	$private = 0;

    // Use the Max http://www.w3schools.com/sql/sql_func_max.asp to find the max last named titleid 
    $maxtitleid = query("SELECT MAX(titleid) as titleid FROM posts");
    	
    // create a new title id
    $titleid = intval($maxtitleid[0]["titleid"]) + 1;
  
    // Insert into mysql table and check that insertion worked
    if(query("INSERT INTO posts (titleid, message, title, id, timeid, privacy, keyword) VALUES (?, ?, ?, ?, ?, ?, ?)", $titleid, $message, $title, $userid, 0, $private, $_POST["keyword"])===false)
        apologize("Please try again"); 
    
    // direct to posts.php, passing the titleid through the link
    redirect("posts.php?titleid=$titleid");
}
else
	// otherwise render the new post form (since nothing has been submitted)
	render("newpost_form.php", array("title"=>"New Post"));

?>
