<center><h2>Join in. Speak Out.</h2></center>
<form action="keywordlinks.php" method="GET">
<button class="btn btn-success pull-right" type="submit">Go</button>
<select class="pull-right" name="keyword">
        	<option value="">Filter by Topic</option>
  			<option value="anxiety">Anxiety</option>
  			<option value="depression">Depression</option>
  			<option value="eating">Eating Issue</option>
  			<option value="gender">LGBTQ</option>
  			<option value="self">Self Harm</option>
  			<option value="substance">Substance Abuse</option>
  			<option value="other">Other</option>
		</select>
            
</form>

<?php 
if(isset($moderator)){
	// only moderators can see this section
	if($moderator == 1) { ?>
<h3>Private Messages</h3>
<ul class="nav nav-tabs nav-stacked">
<?php
 		// for private posts, creates links for each message and displays links in a table
 		foreach ($rows as $row)
    	{
    		if($row["privacy"] == 1)
        		print("<li>" . "<a href = \" posts.php?titleid=" . $row["titleid"]. "\">". $row["title"]."</a>"."</li>");  
    	}
?>
</ul>
<h3>Public Messages</h3>
<?php }
else{?>
<br><br>
<?php }}?>


<ul class="nav nav-tabs nav-stacked">
 
 <?php
    // for public posts, creates links for each message and displays links in table
    foreach ($rows as $row)
    {
        if($row["privacy"] == 0)
        	print("<li>" . "<a href = \" posts.php?titleid=" . $row["titleid"]. "\">". $row["title"]."</a>"."</li>");  
    }
?>
</ul>