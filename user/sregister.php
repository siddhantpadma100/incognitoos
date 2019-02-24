<!DOCTYPE html>
<html>
<body>
	<b>Welcome</b>
<?php
$f_name=$_POST['f_name'];
$email_id=$_POST['email_id'];
$mob_no=$_POST['mob_no'];
$pwd=$_POST['pwd'];
$rpwd=$_POST['rpwd'];
echo $f_name;

$con= mysqli_connect("localhost","root","","msme");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  echo $pwd=md5($pwd);
  $sql="INSERT INTO login_user VALUES ('',$f_name','$email_id','$mob_no','$pwd','$rpwd')";
$query= mysqli_query($con,$sql);
if($query)
{
echo "Data is inserted successfully";
}
else{
	echo "Data inserting failed";
}
?>
</body>
</html>