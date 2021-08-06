<link rel="stylesheet" href="css/mystyle.css">

<div class="topnav" id="myTopnav">
	<a href="login.html">Login</a>
	<a href="contact.html">Contact</a>
	<a href="about.html">About</a>
	<a href="catering.html">Catering</a>
	<a href="index.html">Index</a>
	 <div class="centered">Meals By Milzee</div>
	 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	</a>
</div>

<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="contact.html" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="contact.html" onClick="history.go(-1)">Back to form</a></strong></p>
