<?php
date_default_timezone_set('Asia/Kolkata');
$host="localhost";
$db="msme";
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password,$db);


function  officer_id()
{
$date=date("YmdHis");
$uniquesavename=time().uniqid(rand());
$id="o_".$date.$uniquesavename;
return $id;
}
function  user_id()
{
$date=date("YmdHis");
$uniquesavename=time().uniqid(rand());
$id="u_".$date.$uniquesavename;
return $id;
}
function licenseid()
{
$date=date("YmdHis");
$uniquesavename=time().uniqid(rand());
$id="l_".$date.$uniquesavename;
return $id;
}

function documentid()
{
$date=date("YmdHis");
$uniquesavename=time().uniqid(rand());
$id="d_".$date.$uniquesavename;
return $id;
}


// echo officer_id();
// echo "<br>";
// echo user_id();
// echo "<br>";
// echo licenseid();
?>
