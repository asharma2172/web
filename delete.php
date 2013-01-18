<?php
/*****************************************************************************************************************
*
* CS50 Final Project
* Harvard Mental Health Forum
*
* Stephanie Havens and Akshay Sharma
*
* delete.php
* Usage: allows moderator to delete from database
*
******************************************************************************************************************/

// configure
require("/home/groups/cs50-hmhf/web/includes/config.php");

// delete selected post from database by titleid
$rows = query("DELETE FROM posts WHERE titleid = ? ", $_GET["titleid"]);

redirect("links.php");

?>