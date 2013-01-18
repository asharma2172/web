<?php
/*****************************************************************************************************************
*
* CS50 Final Project
* Harvard Mental Health Forum
*
* Stephanie Havens and Akshay Sharma
*
* usertable.php
* Usage: creates a table with users' old posts
*
******************************************************************************************************************/

// configure
require("/home/groups/cs50-hmhf/web/includes/config.php");

// query messages that were written by the user
$rows = query("SELECT * FROM posts WHERE id = ? AND timeid = ? ORDER BY timestamp DESC", $_SESSION["id"], 0);

// render the table with the old user messages
render("usertable_form.php", array("rows" => $rows));

?>