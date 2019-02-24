<?php
include "../config.php";

$f_name=$_POST['f_name'];
$email_id=$_POST['email_id'];
$mob_no=$_POST['mob_no'];
$password=$_POST['password'];

$sql="INSERT INTO login_user VALUES ('','$f_name','$email_id','$mob_no','$password')";
$query= mysqli_query($con,$sql);
if($query)
{
echo "Data is inserted successfully";
}
else{
	echo "Data inserting failed";
}
?>
