<?php
include "../config.php";
session_start();
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email_id=$_POST['email_id'];
$mob_no=$_POST['mob_no'];
$description=$_POST['description'];
$u_id=$_SESSION['u_id'];
$g_id=grievance_id();

$sql="INSERT INTO grievance VALUES ('$u_id','$g_id','$f_name','$l_name','$email_id','$mob_no','$description','dssd','dshds')";
$query= mysqli_query($con,$sql);
if($query)
{
echo "Data is inserted successfully";
}
else{
	echo "Data inserting failed";
}
?>
