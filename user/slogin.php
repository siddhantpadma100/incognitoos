<?php
include "../config.php";
if((isset($_POST['uname'])) && (isset($_POST['password']))  ){}
else
{
			echo "please fill proper details";
			header("refresh:1;url=index.php");// 
}

$username=$_POST['uname'];//username
$password=$_POST['password'];//password 



//mysqli("localhost","username of database","password of database","database name")

$sql="SELECT * FROM `login_user` WHERE `email_id`='$username' && `password`='$password'";

$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
do{
	if(isset($row['email_id']))
	{
		if($row['email_id']==$username)
		{
			if($row['password']==$password)
			{	

				session_start();
				echo "Login success";
				$_SESSION['user_log']=1;
				$_SESSION['user']="admin";
				header("refresh:1;url=index.php");	
			}
			else{
			echo "check password";
			header("refresh:1;url=../index.php");// it takes 2 sec to go index page
			}
		}
		else{
			echo "check user id";
			header("refresh:1;url=../index.php");// it takes 2 sec to go index page
		}
	}
	else
		{
			echo "please fill proper details";
			header("refresh:1;url=../index.php");// it takes 2 sec to go index page
		}	
}while ($row=mysqli_fetch_array($result));

			
?>