<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Experiences
Version    : 1.0
Released   : 20070723
Description: A two-column, fixed-width and lightweight template ideal for 1024x768 resolutions. Suitable for blogs and small websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Post your experience</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="./css/default.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="./form/view.css"  />
<script type="text/javascript" src="./form/view.js"></script>
<script type="text/javascript" src="./ckeditor/ckeditor_basic.js"></script>
<script type="text/javascript" src=".form//formck.js"></script>





<body>

<div id="header">
	<div id="logo">
		<h1><a href="index.php">EXPERIENCES<sup>alpha</sup></a></h1>
		<h2>By CSEA NITC</h2>
	</div>
	<div id="menu">
		<ul>
			<li ><a href="index.php">Experiences</a></li>
			<li class="active"><a href="form.php">Post your Experience</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contacts</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="box1">
			<p><img src="images/pic.png" alt="CSEA" width="119" height="120" align="top" class="left" /><strong>This is a venture by Computer Science and Engineering Association (CSEA) to narrow the communication gap among the students of NIT Calicut. Students can share their Experiences irrespective of their stream and academic year.</strong> </p>
	  </div>
			<br />
<br />

 <img id="top" src="./form/top.png" alt="">
	<div id="form_container">
	
		<form id="form_389451" class="appnitro"  method="post" action="insert.php">
		<div class="form_description">
		<h2>Post your experience</h2>
		<p></p>
		</div>						
		<ul >
		
		<li id="li_1" >
		<label class="description" for="element_1">Name </label>
		<span>
		<input id="fname" name= "fname" class="element text" maxlength="255" size="14" value=""/>
		<label>First</label>
		</span>
		<span>
		<input id="lname" name= "lname" class="element text" maxlength="255" size="14" value=""/>
		<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Email </label>
		<div>
		<input id="email" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_2"><small>Enter your email address</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Facebook URL </label>
		<div>
		<input id="facebook" name="facebook" class="element text large" type="text" maxlength="255" value="http://"/> 
		</div><p class="guidelines" id="guide_3"><small>Enter your facebook url address.
		It will look like http://www.facebook.com/********</small></p> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Title </label>
		<div>
		<input id="title" name="title" class="element text large" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_5"><small>Enter the title for your post</small></p> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Content </label>
		<div>
		<textarea id="contnt" name="contnt" class="ckeditor"></textarea> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Tag </label>
		<div>
		<input id="tag" name="tag" class="element text large" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_4"><small>Tag your post using few related keywords.
		This will help users in searching for your post</small></p> 
		</li>
		
		<li class="buttons">
		<input type="hidden" name="form_id" value="389451" />
		
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
		</ul>
		</form>	
 </div>
</div>
</div>
</div>	
<div class="box1" id="footer">
	<div class="wrap">
	  <div id="fbox1" class="box2">
			<h2><b>Licence Info</b></h2>
		  <p>This work is free under a <a href="./license.txt">Creative Commons Attribution 2.5 License</a>.  <br />
		    <br />
		  </p>
	  </div>
		<div id="fbox2" class="box2">
			<h2><b>Credits</b></h2>
			<ul>
				<li><a href="http://www.facebook.com/piyushroshan" target="_blank">Roshan Piyush </a></li>
				<li><a href="https://www.facebook.com/pooja.prajod" target="_blank">Pooja Prajod </a></li>
			</ul>
		</div>
		<div id="fbox3" class="box2">
			<h2><b>Useful Links </b></h2>
			<ul>
				<li><a href="http://cse.nitc.ac.in/activities/computer-science-and-engineering-association" target="_blank">CSEA</a></li>
				<li><a href="http://nitc.ac.in" target="_blank">NITC</a></li>
				<li><a href="http://cse.nitc.ac.in" target="_blank">CSED</a></li>
			</ul>
		</div>
	</div>
	<p id="legal">Copyright (c) 2012 <a href="http://cse.nitc.ac.in/activities/computer-science-and-engineering-association" target="_blank" style="text-decoration: none" >CSEA, NIT Calicut.</a> &nbsp; &nbsp; &nbsp; &nbsp; Design by <a href="http://www.freecsstemplates.org/" target="_blank" style="text-decoration: none">freecsstemplete.com </a></p>
</div>
<!-- end footer -->
</body>
</html>
