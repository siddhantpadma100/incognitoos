
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include "../../config.php";
session_start();
$id=$_SESSION['id'];
$result=mysqli_query($con,"SELECT * FROM `reg_form` WHERE `id`='$id'");
while ($row=mysqli_fetch_array($result)){
echo $row ['id'];
echo "<br>";
echo $aadhar_no=$row['aadhar_no'];echo "<br>";
echo $e_name=$row['e_name'];echo "<br>";
echo $category=$row['category'];echo "<br>";
 echo $gender=$row['gender'];echo "<br>";
 echo $physi_handy=$row['physi_handy'];echo "<br>";
 echo $b_name=$row['b_name'];echo "<br>";
 echo $org_type=$row['org_type'];echo "<br>";
 echo $pan_no=$row['pan_no'];echo "<br>";
echo  $plant_address=$row['plant_address'];echo "<br>";
echo $office_address=$row['office_address'];echo "<br>";
echo $mob_no=$row['mob_no'];echo "<br>";
echo $email_id=$row['email_id'];echo "<br>";
echo $commence_date=$row['commence_date'];echo "<br>";
echo $acc_no=$row['acc_no'];echo "<br>";
echo $ifsc=$row['ifsc'];echo "<br>";
echo $business_activity=$row['business_activity'];echo "<br>";
echo $nic=$row['nic'];	echo "<br>";
echo $business_details=$row['business_details'];echo "<br>";
echo $no_of_emp=$row['no_of_emp'];echo "<br>";
echo $investment=$row['investment'];echo "<br>";
$date=date("Y");
echo "<image src="."../../doc/".$date."/".$row['attachment']." width='100px'>";
}
?>
</body>
</html>