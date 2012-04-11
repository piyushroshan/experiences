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
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Search Result</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="./css/default.css" rel="stylesheet" type="text/css" />
</head>

<?php
include('./include/dbconnect.php');
$query="SELECT * FROM blog_entry ORDER BY id DESC";
$data=mysql_query($query);
 $rows = mysql_num_rows(mysql_query($query)); 
$page_rows = 3; 
$last = ceil($rows/$page_rows); 
if (!(isset($_GET['pg']))) 
 { 
 $pagenum = 1; 
 } else
	 {
	 	$pagenum=$_GET['pg'];
	 }
if ($pagenum < 1) 
 { 
 $pagenum = 1; 
 } 
 elseif ($pagenum > $last) 
 { 
 $pagenum = $last; 
 } 
$max = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows; 
$data_p = mysql_query("SELECT * FROM blog_entry ORDER BY id DESC $max") or die(mysql_error()); 

mysql_close();
?>



<body>

<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="index.php">EXPERIENCES<sup>1.0</sup></a></h1>
		<h2>By CSEA NITC</h2>
	</div>
	<div id="menu">
		<ul>
			<li><a href="index.php">Experiences</a></li>
			<li><a href="./form.php">Post your Experience</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact </a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="box1">
			<p><img src="images/pic.png" alt="CSEA" width="119" height="120" align="top" class="left" /></p>
			<p><strong>This is a venture by Computer Science and Engineering Association (CSEA) to narrow the communication gap among the students of NIT Calicut. Students can share their Experiences irrespective of their stream and academic year.</strong> </p>
	  </div>
			<br />
<br />
<br />
	<?php 
 $find=$_GET['q'];
 $field=$_GET['field'];
 if($field=="All")
	 {
	 	$field="Contnt";
	 }

 echo "<h2>Results for ".$_GET['q']." </h2><p>"; 
 
 if ($find == "") 
 { 
 echo "<p>You forgot to enter a search term or entered invalid special character</p>"; 
 exit; 
 } 

 
include('./include/dbconnect.php');
 

 $find = strtoupper($find); 
 $find = strip_tags($find); 
 $find = trim ($find); 
 
$query="SELECT * FROM blog_entry  WHERE upper($field) LIKE '%$find%'";
 $data=mysql_query($query);
$rows = mysql_num_rows($data); 
$page_rows = 3; 
$last = ceil($rows/$page_rows); 
$count= mysql_num_rows($data);

 if (!(isset($_GET['pg']))) 
 { 
 $pagenum = 1; 
 } else
	 {
	 	$pagenum=$_GET['pg'];
	 }
if ($pagenum < 1) 
 { 
 $pagenum = 1; 
 } 
 elseif ($pagenum > $last) 
 { 
 $pagenum = $last; 
 } 
if($count>0)
{


$max = 'limit ' .($pagenum - 1) * $page_rows .',' .$page_rows; 
$data_p = mysql_query("SELECT * FROM blog_entry WHERE upper($field) LIKE '%$find%' ORDER BY id DESC $max ") or die(mysql_error()); 

 


 while($result= mysql_fetch_array($data_p))
 {	
 $f1=$result['Fname'];
$f2=$result['Lname'];
$f3=$result['Sub'];
$f4=$result['Tag'];
$f5=$result['Contnt'];
$f6=$result['Date'];
$f7=$result['Time'];
  ?>
 	<div class="post">
			<h2 class="title"><?php echo $f3; ?></h2>
			<div class="entry">
				<?php echo $f5; ?>
			</div>
			<div class="meta">
				<p class="byline">Posted on <?php echo $f7." ".$f6; ?> by <?php echo $f1." ".$f2; ?><br/>Tags:<?php echo $f4 ?>   </p>
				
				
			</div>
		</div>
 
 <?php
 
}
 }
if($count<=0)
	{
		echo "<h3> Sorry no result found </h3></br></br>";
	}

echo " --Page $pagenum of $last-- <p>";
 
 // First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the first page, and to the previous page.
 if ($pagenum == 1) 
 {
 	echo "  <<-First ";
 echo " ";
 $previous = $pagenum-1;
 echo " <-Previous";
 } 
 else 
 {
 echo " <a href='{$_SERVER['PHP_SELF']}?q=$find&field=$field&pg=1'> <<-First</a> ";
 echo " ";
 $previous = $pagenum-1;
 echo " <a href='{$_SERVER['PHP_SELF']}?q=$find&field=$field&pg=$previous'> <-Previous</a> ";
 } 

 //just a spacer
 echo " ---- ";

 //This does the same as above, only checking if we are on the last page, and then generating the Next and Last links
 if ($pagenum == $last) 
 {
 } 
 else {
 $next = $pagenum+1;
 echo " <a href='{$_SERVER['PHP_SELF']}?q=$find&field=$field&pg=$next'>Next -></a> ";
 echo " ";
 echo " <a href='{$_SERVER['PHP_SELF']}?q=$find&field=$field&pg=$last'>Last ->></a> ";
 } 

 echo "<br/><b>Searched For:</b> " .$find; 
 
 ?> 
	</div>

	<!-- end content -->
		<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b>Search</b></h2>
 <form name="search" method="get" action="searching.php">
 Seach for: <input name="q" type="text" class="right" /> 
 in 
 <Select NAME="field" class="right">
 <Option VALUE="Contnt" selected="selected">Content</option>
 <Option VALUE="Tag">Tag</option>
  <Option VALUE="All">All</option>
 <Option VALUE="Fname">Name</option>
 </Select>

 <input name="search" type="submit" class="right" value="Search" />
 </form>
 
			</li>
		
			<li>
				<h2><b>Volutpat</b> Dolore</h2>
				<ul>
					<li><a href="#">Nec metus sed donec</a></li>
					<li><a href="#">Magna lacus bibendum mauris</a></li>
					<li><a href="#">Velit semper nisi molestie</a></li>
					<li><a href="#">Eget tempor eget nonummy</a></li>
					<li><a href="#">Nec metus sed donec</a></li>
					<li><a href="#">Magna lacus bibendum mauris</a></li>
					<li><a href="#">Velit semper nisi molestie</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<div class="wrap">
		<div id="fbox1" class="box2">
			<h2><b>Lorem</b> Ipsum</h2>
			<p>Curabitur tellus. Phasellus tellus <a href="#">turpis iaculis</a> in, faucibus lobortis, posuere in, lorem. Donec a ante. Donec neque purus, adipiscing id <a href="#">eleifend a cursus</a> vel odio. Vivamus varius justo amet porttitor iaculis, ipsum massa aliquet nulla, non elementum mi elit a mauris. In hac habitasse platea.</p>
		</div>
		<div id="fbox2" class="box2">
			<h2><b>Metus</b> Nonummy</h2>
			<ul>
				<li><a href="#">Magna lacus bibendum mauris</a></li>
				<li><a href="#">Nec metus sed donec</a></li>
				<li><a href="#">Velit semper nisi molestie</a></li>
				<li><a href="#">Consequat sed cursus</a></li>
				<li><a href="#">Eget tempor eget nonummy</a></li>
			</ul>
		</div>
		<div id="fbox3" class="box2">
			<h2><b>Metus</b> Nonummy</h2>
			<ul>
				<li><a href="#">Magna lacus bibendum mauris</a></li>
				<li><a href="#">Nec metus sed donec</a></li>
				<li><a href="#">Velit semper nisi molestie</a></li>
				<li><a href="#">Consequat sed cursus</a></li>
				<li><a href="#">Eget tempor eget nonummy</a></li>
			</ul>
		</div>
	</div>
	<p id="legal">(c) 2007 YourSite. Design by <a href="http://csea.cse.nitc.ac.in/">CSEA</a> and <a href="http://www.nitc.ac.in/">NITC</a>.</p>
</div>
<!-- end footer -->
</body>
</html>