<!DOCTYPE html>
<html>
<body>
	<b>Welcome</b>
<?php
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email_id=$_POST['email_id'];
$mob_no=$_POST['mob_no'];
$description=$_POST['description'];
echo $f_name;

$con= mysqli_connect("localhost","root","","msme");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="INSERT INTO grievance ('f_name','l_name','email_id','mob_no','description','date','status')  VALUES ($f_name','$l_name','$email_id','$mob_no','$description','hgjk','processing')";
$query= mysqli_query($con,$sql);
if($query)
{
	echo "Data Inserted System";
}
else
{
	echo "Failed";
}
?>
</body>
</html>