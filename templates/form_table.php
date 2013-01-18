<body>

<h2> <?php
	// prints title
	$row1 = $rows[0];
	print($row1["title"]);
	 ?></h2>

<table class="table table-hover">

    <thead>
        <tr>
            <th>Message </th>
            
          
        </tr>
    </thead>
    <tbody>
        <?php           
            
            // print data from SQL database
            foreach ($rows as $row) 
            {
            
            // prints timestamp
            $timestamp = $row["timestamp"];
            $time = date("D, M d, Y g:i a" , (strtotime($timestamp)));
            
                print("<tr>");
            	// prints message
                print("<td>". $row["message"] . "<br>". "</td>"); 
                print("<td width=12%>" . "<small>". "<small>". "<i>". $time . "</small>". "</small>" . "</td>");    
                print("</tr>");
            }
        ?>
    </tbody>
</table>


<form action="response.php" method="post">
    <fieldset>
    <p><b>Reply to this post </b> <?php if($user["moderator"] == 1) {
             print("or <a href = \" delete.php?titleid=" . $row["titleid"]. "\">Delete this post</a>");
              } ?>
     <?php $row1 = $rows[0]; if($row1["privacy"] == 1 && $user["moderator"] == 1)
     print("<br><i>Please note that this will be sent via email to the user</i>"); ?></p>
        <div class="control-group">
            <textarea  name= "message" placeholder="Type your response here..." class="span10" rows=10></textarea>
        </div>
        <div class="control-group">
             <button class="btn btn-success" type="submit">Submit</button>
        </div>
        <div>
    		<input type="hidden" name = "titleid" value= <?php $row1 = $rows[0]; print("\"" . $row1["titleid"] . "\""); ?> />
        </div>
        <div>
    		<input type="hidden" name = "privacy" value= <?php $row1 = $rows[0]; print("\"" . $row1["privacy"] . "\""); ?> />
        </div>
    </fieldset>
</form>
</body>
