<?php
/*****************************************************************************************************************
*
* CS50 Final Project
* Harvard Mental Health Forum
*
* Stephanie Havens and Akshay Sharma
*
* links.php
* Usage: displays the links to posts
*
******************************************************************************************************************/

// configuration
require("/home/groups/cs50-hmhf/web/includes/config.php");

// determine whether the user is a moderator
$moderator = query("SELECT moderator FROM users WHERE userid  = ?", $_SESSION["id"]);
$mod = $moderator[0];
$mod = $mod["moderator"];

// query the rows from the posts data base
$rows = query("SELECT * FROM posts WHERE timeid = 0 ORDER BY titleid DESC");

// send posts information and moderator information to link form
render("link_form.php", array("rows"=>$rows, "moderator"=>$mod));

?>
