<!DOCTYPE html>
<html>
<body>
	
<?php
session_start();
if(isset($_SESSION['admin_log']))
{
if($_SESSION['admin_log']==1)
{ 

$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email_id=$_POST['email_id'];
$mob_no=$_POST['mob_no'];
$pwd=$_POST['pwd'];
$rpwd=$_POST['rpwd'];
if($pwd!=$rpwd)
{
	echo "Pasword not match";
	header("refresh:1;url=addofficer.php");
	exit();
}


include "../config.php";
$id=officer_id();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="INSERT INTO login_officer VALUES ('$id','$f_name','$l_name','$email_id','$mob_no','$pwd')";
$query= mysqli_query($con,$sql);
if($query)
{
echo "Officer added Successfully";
echo "Please wait ......";
header("refresh:1;url=viewofficer.php");
}
else{
	echo "Data inserting failed";
}
}
else
{

echo "please login";
header("refresh:1;url=login.php");
}
}
else
{
  echo "please login";
header("refresh:1;url=login.php");
}
?>
</body>
</html>