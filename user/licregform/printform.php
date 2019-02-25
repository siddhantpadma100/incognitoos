

<!DOCTYPE html>
<html>
<head>
    
	   
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>


	</style>
</head>
<body>
    <?php
    session_start();
if(isset($_SESSION['id']))
{
include "../../config.php";
$id=$_SESSION['id'];
$date=date("Y");
$result=mysqli_query($con,"SELECT * FROM `reg_form` where `id`='$id'");
		while ($row=mysqli_fetch_array($result)){
		
	
?>
	<form style="border:solid"
			style="border-width:thick">
 <!--<div  class="page-header" >-->
    	
	<div style="background-color:#33BEFF; text-align: center">
                <div class="row">
				</div>
				<div class="row">
                    	<div align="left">
                       
                         <img src="lib/images/logoba.png" hspace="3" vspace="3" />
 						</div>
                   
                  
                        <div align="center" class="header-div" style="padding-top: 10px;">
                           
                            
                            
                            <font size="5">भारत सरकार</font>
                            <br />
                            <font size="5" style="color: red"> सूक्ष्म , लघु  और मध्यम उद्यम मंत्रालय </font>
                            <br />
                            <font size="5">
                            Government Of India<br />
                            Ministry of Micro, Small & Medium Enterprises</font>
                            <br />
                        
                          </div>
                    <div align=right">
                        <img alt="MSME" src="lib/images/swach-bharat.png" hspace="5" vspace="5" />
                    </div>
                </div>
        </div>
     </div>


  <br> 
<div class="container">           
  <table class="table" style="border-style: solid"
  style="border-color: coral">

      <h4><b>PERSONAL DETAILS</b></h4>
      <tr>
        <th>ID :<?php echo $row ['id']; ?> </th>
        <td> </td>
       
		</tr>
    <tr>
        <th>AADHAR NUMBER : <?php echo $aadhar_no=$row['aadhar_no']; ?></th>
        <td></td>
       
      </tr>
      <tr>
        <th>ENTREPRENEUR NAME : <?php echo $e_name=$row['e_name']; ?></th>
        <td></td>
      </tr>

      <tr>
        <th>MOBILE NUMBER : <?php echo $mob_no=$row['mob_no']; ?></th>
        <td></td>
       </tr>

      <tr>
        <th>CATEGORY:<?php echo $category=$row['category'];?> </th>
        <td></td>
       </tr>

      <tr>
        <th>GENDER : <?php  echo $gender=$row['gender']; ?></th>
        <td></td>
       </tr>
    
    <tr>
        <th>PHYSICAL HANDICAPPED : <?php echo $physi_handy=$row['physi_handy'];?> </th>
        <td></td>
       </tr>

        <tr>
        <th>PAN NUMBER : <?php  echo $pan_no=$row['pan_no']; ?></th>
        <td></td>
       </tr>

       <tr>
       	<th>EMAIL ID <?php echo $email_id=$row['email_id']; ?></th>
       	<td></td>
      </tr>

   </table>
    
    <table class="table" style="border:1px solid black" >
    	
    	<h4><b>BUSSINESS DETAILS</b> : <?php 
echo $business_details=$row['business_details']; ?></h4>
    	<tr>
        <th>BUSSINESS NAME  </th>
        <th>ORGANIZATION TYPE  </th>
        <th>PLANT ADDRESS </th>
        <th>OFFICE ADDRESS </th>
        <th>COMMENCE DATE</th>
         <th>NO OF EMPOYEES </th>
         <th>INVESTMENT </th>
       </tr>

       <tr>
     	<td><?php echo $b_name=$row['b_name'];?></td>
        <td><?php echo $org_type=$row['org_type'];?></td>
        <td><?php echo  $plant_address=$row['plant_address'];?></td>
        <td><?php echo $office_address=$row['office_address'];?></td>
        <td><?php echo $commence_date=$row['commence_date']; ?></td>
        <td><?php echo $no_of_emp=$row['no_of_emp'];?></td>
        <td><?php echo $investment=$row['investment']; ?></td>
        
       </tr>

      
   </table>
      
      <table class="table" style="border-style: solid"
  style="border-color: coral">
      <h4><b>BANK DETAILS</b></h4>
        <tr>
        <th>ACCOUNT NUMBER :</th>
        <td><?php echo $acc_no=$row['acc_no'];
?></td>
       </tr>

        <tr>
        <th>IFSC CODE :</th>
        <td><?php echo $ifsc=$row['ifsc'];
?></td>
       </tr>

        <tr>
        <th>BUSSINESS ACTIVITY :</th>
        <td><?php echo $business_activity=$row['business_activity'];
 ?></td>
       </tr>


    	 <tr>
        <th>ATACHMENT :</th>
        <td><?php echo "<image src="."../../doc/".$date."/".$row['attachment']." width='100px'>";?></td>
       </tr>

        <tr>
        <th>STATUS:</th>
        <td><?php echo $row ['id']; ?></td>
       </tr>

  </table>
</div>
<?php echo "<a href=?id=".$row ['id']."'><button class='btn btn-primary'>Approve</button></a>";?>
</form>
<?php
 }
}
else
{
	echo "Something is wrong";
}
?>
</body>
</html>
