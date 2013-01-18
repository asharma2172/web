<?php
/*****************************************************************************************************************
*
* Harvard Mental Health Forum
* CS50 Final Project
*
* Stephanie Havens and Akshay Sharma
*
* logout.php
* Usage: logs user out
*
******************************************************************************************************************/

    // configuration
    require("/home/groups/cs50-hmhf/web/includes/config.php"); 

    // log out current user, if any
    logout();

    // redirect user
    redirect("index.html");

?>
