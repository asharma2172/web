<html>

    <head>

        <link href="css/bootstrap.css" rel="stylesheet"/>
        

        <?php if (isset($title)): ?>
            <title>Harvard Mental Health Forum <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Harvard Speaks</title>
        <?php endif ?>

        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
        	$(document).ready(function () {
        	$('#my_popover').popover();
        	});
        </script>
          <script>
        	$(document).ready(function () {
        	$('#my_popover1').popover();
        	});
        </script>
          <script>
        	$(document).ready(function () {
        	$('#my_popover2').popover();
        	});
        </script>
          <script>
        	$(document).ready(function () {
        	$('#my_popover3').popover();
        	});
        </script>
          <script>
        	$(document).ready(function () {
        	$('#my_popover4').popover();
        	});
        </script>
          <script>
        	$(document).ready(function () {
        	$('#my_popover5').popover();
        	});
        </script>
         <script>
        	$(document).ready(function () {
        	$('#my_popover6').popover();
        	})
        	</script>

    </head>

    <body>

        <div class="container-fluid">

            <div id="top">
               <center> <a href="http://www.hcs.harvard.edu/cs50-hmhf/links.php"><img alt="Harvard Speaks" src="HarvardSpeaksLogo.png"/></a></center>
            </div>
        	<div>
        	<br><br>
<?php
	//checks if user is logged in or not...there are different headers for pre- and post- login
	$a = $_SESSION;
	if (empty($a)):?>
	 <div id="middle">
    
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
    <br><br>
<ul class="nav nav-tabs nav-stacked">
<h5>Stressed out? <br>Reach out.</h5>
<li><a data-html="true" href="#" id="my_popover" title="Thayer Basement <br> <b>617-495-4969</b> <br> Nightly, 7pm - 7am <br> www.hcs.harvard.edu/~room13/" data-content="Room 13 is a dedicated group of upperclassmen who are here to talk about <b>anything<b> on your mind.">Room 13</a>   
</li>
<li><a data-html="true" href="#" id="my_popover1" title="HUHS 5th floor<br><b>617-495-7561</b><br> Nightly, 7pm - midnight <br> ww.hcs.harvard.edu/~pcc/" data-content="Peer Contraceptive Counselors is a group of undergraduate men and women who counsel Harvard students about contraceptives, sexually transmitted infections, relationships, and sexuality.">PCC</a>   
</li>
<li><a data-html="true" href="#" id="my_popover2" title="Lowell House Basement E 13<br><b>617-495-9600</b> <br>Hotline: Nightly, 9pm - 8am <br> Drop-in: Sun. - Thu. 9pm - midnight<br>www.hcs.harvard.edu/response/" data-content="Respone staffers are trained primarily in issues surrounding relationships, sexual assault, harassment, and abuse. However, they welcome calls from anyone who needs to talk, and from every gender and sexual orientation.">Response</a>   
</li>
<li><a data-html="true" href="#" id="my_popover3" title="Quincy House, F-Entry Basement<br><b>617-495-8200</b><br>Hotline: Nightly, 8pm - 8 am<br>Drop-in: Sun.-Thu., 8 - 11pm<br>www.hcs.harvard.edu/~echo/" data-content="ECHO is a peer counseling group that addresses concerns surrounding eating, body image, and self-esteem. ECHO staff members are undergraduates trained to provide non-judgmental support, both for those dealing with these issues and those who are concerned about a friend, roommate, significant other, or family member.">ECHO</a>   
</li>
<li><a data-html="true" href="#" id="my_popover4" title="Thayer Basement<br><b>617-495-8111</b><br>Hotline and drop-in: Thu.-Sun., 8pm - 1am<br> www.digitas.harvard.edu/~contact" data-content="Contact staff members share a deep concern about issues of sexual orientation, sex, sexuality and relationships and are interested in discussion of these topics. They also maintain a rapidly growing library of books, pamphlets, news clippings, and magazines. Drops-ins are welcome to peruse materials in the office or to borrow them from the library.">Contact</a>   
</li>
<li><a data-html="true" href="#" id="my_popover5" title="HUHS at Holyoke Center 4th Floor<br><b>617-495-2042</b>" data-content="Mental Health Services (UHS) offers Harvard students comprehensive outpatient care for a wide variety of mental health concerns, such as anxiety, depression, stress/crisis management, transitional issues, grief, and eating, sexual or relationship concerns.">Mental Health Services</a>   
</li>
<li><a data-html="true" href="#" id="my_popover6" title="5 Linden Street Cambridge, MA 02138 <br><b>617-495-2581</b><br>Mon.-Fri.,8:30am-5:30pm<br>www.bsc.harvard.edu" data-content="The Bureau can help students draw upon their existing strengths and develop new ones in their efforts to live a life that feels true to the whole of who they are and honors what matters to them in life.">Bureau of Study Counsel</a>   
</li>
</ul>
</div>
    <div class="span10">
    <br><br>
    
    <?php else:?>
    <div id="middle">
   
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
     <a href="newpost.php" class="btn btn-primary btn-block btn-primary" type="button">New Post</a>
     <a href="links.php" class="btn btn-primary btn-block" type="button">Inbox</a>
     <a href="usertable.php" class="btn btn-primary btn-block" type="button">My Posts</a>
     <br>
   <div class="btn-group">
  <a class="btn dropdown-toggle btn-primary" data-toggle="dropdown" align="center" href="#" width=100%>
    Account Settings
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="changepass.php">Change Password</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
    <br>
<ul class="nav nav-tabs nav-stacked">
<h5>Stressed out? <br> Reach out.</h5>
<li><a data-html="true" href="#" id="my_popover" title="Thayer Basement <br> <b>617-495-4969</b> <br> Nightly, 7pm - 7am <br> www.hcs.harvard.edu/~room13/" data-content="Room 13 is a dedicated group of upperclassmen who are here to talk about <b>anything<b> on your mind.">Room 13</a>   
</li>
<li><a data-html="true" href="#" id="my_popover1" title="HUHS 5th floor<br><b>617-495-7561</b><br> Nightly, 7pm - midnight <br> ww.hcs.harvard.edu/~pcc/" data-content="Peer Contraceptive Counselors is a group of undergraduate men and women who counsel Harvard students about contraceptives, sexually transmitted infections, relationships, and sexuality.">PCC</a>   
</li>
<li><a data-html="true" href="#" id="my_popover2" title="Lowell House Basement E 13<br><b>617-495-9600</b> <br>Hotline: Nightly, 9pm - 8am <br> Drop-in: Sun. - Thu. 9pm - midnight<br>www.hcs.harvard.edu/response/" data-content="Respone staffers are trained primarily in issues surrounding relationships, sexual assault, harassment, and abuse. However, they welcome calls from anyone who needs to talk, and from every gender and sexual orientation.">Response</a>   
</li>
<li><a data-html="true" href="#" id="my_popover3" title="Quincy House, F-Entry Basement<br><b>617-495-8200</b><br>Hotline: Nightly, 8pm - 8 am<br>Drop-in: Sun.-Thu., 8 - 11pm<br>www.hcs.harvard.edu/~echo/" data-content="ECHO is a peer counseling group that addresses concerns surrounding eating, body image, and self-esteem. ECHO staff members are undergraduates trained to provide non-judgmental support, both for those dealing with these issues and those who are concerned about a friend, roommate, significant other, or family member.">ECHO</a>   
</li>
<li><a data-html="true" href="#" id="my_popover4" title="Thayer Basement<br><b>617-495-8111</b><br>Hotline and drop-in: Thu.-Sun., 8pm - 1am<br> www.digitas.harvard.edu/~contact" data-content="Contact staff members share a deep concern about issues of sexual orientation, sex, sexuality and relationships and are interested in discussion of these topics. They also maintain a rapidly growing library of books, pamphlets, news clippings, and magazines. Drops-ins are welcome to peruse materials in the office or to borrow them from the library.">Contact</a>   
</li>
<li><a data-html="true" href="#" id="my_popover5" title="HUHS at Holyoke Center 4th Floor<br><b>617-495-2042</b>" data-content="Mental Health Services (UHS) offers Harvard students comprehensive outpatient care for a wide variety of mental health concerns, such as anxiety, depression, stress/crisis management, transitional issues, grief, and eating, sexual or relationship concerns.">Mental Health Services</a>   
</li>
<li><a data-html="true" href="#" id="my_popover6" title="5 Linden Street Cambridge, MA 02138 <br><b>617-495-2581</b><br>Mon.-Fri.,8:30am-5:30pm<br>www.bsc.harvard.edu" data-content="The Bureau can help students draw upon their existing strengths and develop new ones in their efforts to live a life that feels true to the whole of who they are and honors what matters to them in life.">Bureau of Study Counsel</a>   
</li>
</ul>
</div>
    
    <div class="span10">
    
    <?php endif ?>