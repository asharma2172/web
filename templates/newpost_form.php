<form action="newpost.php" method="post">
    <fieldset>
        <center><h3><b>New Post</b></h3></center>
        <div class="control-group">
            <input name="title" type="text" placeholder="Give your post a title...">
        </div>
        <div class="control-group">
        <select name="keyword">
        	<option value="">Select a Keyword</option>
  			<option value="anxiety">Anxiety</option>
  			<option value="depression">Depression</option>
  			<option value="eating">Eating Issues</option>
  			<option value="gender">LGBTQ</option>
  			<option value="self">Self Harm</option>
  			<option value="substance">Substance Issues</option>
  			<option value="other">Other</option>
		</select>
		</div>
        <div class="control-group">
            <textarea  class="span10" rows=10 name="message" placeholder="Speak your mind here..." /></textarea>
        </div>
        <div class="control-group">
            <input type="checkbox" value="Private" name="check">&nbsp;Private to Staff<br>
        </div>
        <div class="control-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </fieldset>
</form>
