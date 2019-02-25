<!DOCTYPE html>
<html>
<body>
	<b>Welcome</b>
<?php
session_start();

include "../../config.php";

$date=date("Y");
$directory="../../doc/".$date;
if(!file_exists($directory)) {
mkdir($directory, 0777, true);
}
$docid=documentid();
$name=$_FILES['attachment']['name'];
$ext= pathinfo($name,PATHINFO_EXTENSION);
$filename=$docid.".".$ext;
$tmp=$_FILES['attachment']['tmp_name'];
$fileloc=$directory."/".$filename;
if(!file_exists($fileloc)){
		if(move_uploaded_file($tmp, $fileloc))
		{ 
			echo "sucesss";
		}
}


$aadhar_no=$_POST['aadhar_no'];
$e_name=$_POST['e_name'];
$category=$_POST['category'];
$gender=$_POST['gender'];
$physi_handy=$_POST['physi_handy'];
$b_name=$_POST['b_name'];
$org_type=$_POST['org_type'];
$pan_no=$_POST['pan_no'];
$plant_address=$_POST['plant_address'];
$office_address=$_POST['office_address'];
$mob_no=$_POST['mob_no'];
$email_id=$_POST['email_id'];
$commence_date=$_POST['commence_date'];
$acc_no=$_POST['acc_no'];
$ifsc=$_POST['ifsc'];
$business_activity=$_POST['business_activity'];
$nic=$_POST['nic'];
$business_details=$_POST['business_details'];
$no_of_emp=$_POST['no_of_emp'];
$investment=$_POST['investment'];
$u_id=$_SESSION['user_id'];
$id=licenseid();
	$_SESSION['id']=$id;
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="INSERT INTO `reg_form`(`id`,`u_id`, `aadhar_no`, `e_name`, `category`, `gender`, `physi_handy`, `b_name`, `org_type`, `pan_no`, `plant_address`, `office_address`, `mob_no`, `email_id`, `commence_date`, `acc_no`, `ifsc`, `business_activity`, `nic`, `business_details`, `no_of_emp`, `investment`, `attachment`, `status`) VALUES ('$id','$u_id','$aadhar_no','$e_name','$category','$gender','$physi_handy','$b_name','$org_type','$pan_no','$plant_address','$office_address','$mob_no','$email_id','$commence_date','$acc_no','$ifsc','$business_activity','$nic','$business_details','$no_of_emp','$investment','$filename','micro')";
$query= mysqli_query($con,$sql);
if($query)
{
echo "Data is inserted successfully";
header("refresh:1;url=printform.php");
}
else{
	echo "Data inserting failed";
}
?>
</body>
</html>