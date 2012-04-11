<?php
include('./include/dbconnect.php');
if($connect){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sub=$_POST['sub'];
$tag=$_POST['tag'];
$contnt=$_POST['contnt'];
	$date= date("Y-n-d");
		$time=date("H:i");
		$stmnt="insert into blog_entry values('','$fname','$lname','$sub','$tag','$contnt','$date','$time')";
		$query = mysql_query($stmnt);
		
$query2="SELECT * FROM blog_entry";

$result=mysql_query($query2);

$num=mysql_numrows($result);

mysql_close();
?>
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td><font face="Arial, Helvetica, sans-serif">FNAME</font></td>
<td><font face="Arial, Helvetica, sans-serif">LNAME</font></td>
<td><font face="Arial, Helvetica, sans-serif">SUB</font></td>
<td><font face="Arial, Helvetica, sans-serif">TAG</font></td>
<td><font face="Arial, Helvetica, sans-serif">CONTENT</font></td>
</tr>

<?php
$i=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"Fname");
$f2=mysql_result($result,$i,"Lname");
$f3=mysql_result($result,$i,"Sub");
$f4=mysql_result($result,$i,"Tag");
$f5=mysql_result($result,$i,"Contnt");
?>

<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
</tr>

<?php
$i++;
}
}
?>
