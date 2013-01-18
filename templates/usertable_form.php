<center><h2>Join in. Speak Out.</h2></center>
<h3>My Posts</h3>
<ul class="nav nav-tabs nav-stacked">
 
 <?php
    // prints links to messages that the user has written
    foreach ($rows as $row)
    {
        	print("<li>" . "<a href = \" posts.php?titleid=" . $row["titleid"]. "\">". $row["title"]."</a>"."</li>");  
    }
?>
</ul>