<html>
<head>
<script type="text/javascript">
<!--
function delayer(){
    window.location = "./index.php"
}
//-->
</script>
</head>
<body >
<h2>Posting your content!</h2>
<p></p>




<?php
include('./include/dbconnect.php');
if($connect){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$title=$_POST['title'];
$tag=$_POST['tag'];
$email=$_POST['email'];
$facebook=$_POST['facebook'];
$contnt=$_POST['contnt'];
	$date= date("Y-n-d");
		$time=date("H:i");
		$stmnt="insert into blog_entry values('','$fname','$lname','$title','$tag','$contnt','$date','$time','$facebook','$email')";
		$query = mysql_query($stmnt);

if ($query) {
	echo "Your Experience is posted. Now you will be redirected to the homepage in a few seconds";
    header ("location:./index.php"); 
    }
    else {
echo "Something is wrong. Try Again";
}
mysql_close();
?>
<?php
}
?>
</body>
</html>