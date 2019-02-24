<?php
session_start();
if(isset($_SESSION['officer_log']))
{
if($_SESSION['officer_log']==1)
{ 
?>
  <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MSME DELHI</title>
    
        <link href="../lib/css/dashboard.css" rel="stylesheet" id="bootstrap-css">
      <script src="lib/jquery-3.2.1.min.js">
                $(function () {
            $('.navbar-toggle-sidebar').click(function () {
                $('.navbar-nav').toggleClass('slide-in');
                $('.side-body').toggleClass('body-slide-in');
                $('#search').removeClass('in').addClass('collapse').slideUp(200);
            });

            $('#search-trigger').click(function () {
                $('.navbar-nav').removeClass('slide-in');
                $('.side-body').removeClass('body-slide-in');
                $('.search-input').focus();
            });
          });  
   </script>
    </head>
 <body> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<?php include "nav.php";?>




<!------ Include the above in your HEAD tag ---------->
    <div class="container-fluid main-container">
        <div class="col-md-2 sidebar">
            <div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <div class="absolute-wrapper"> </div>
    <!-- Menu -->
  <?php include "sidebar.php";?>
</div>          </div>
        <div class="col-md-10 content">
              <div class="panel panel-default">
    <div class="panel-heading">
  Welcome 
    </div>
    <div class="panel-body">
      <h2>New Forms</h2>
       <table class="table table-bordered">
      <thead>
      <tr>
          <td>Sr.</td><td>License id </td><td>E_Name</td><td>Category</td><td>Action</td>
      </tr>
    </thead><tbody>
        <?php
       include "../config.php";
       $i=1;
       $result=mysqli_query($con,"SELECT * FROM `reg_form`");
		while ($row=mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$i."</td> ";
		echo "<td>".$row ['id']."</td>";
		echo "<td>".$row ['e_name']."</td>";
		echo "<td>".$row['category']."</td>";
		echo "<td><a href=''><button class='btn btn-sucess'>view</button></a></td>";
		echo "</tr>";
		$i++;
		}
        ?>
        </table>
  <br>
    </div>
</div>
        </div>
        <footer class="pull-left footer">
            <p class="col-md-12">
                <hr class="divider">
               
            </p>
        </footer>
    </div>


    </body>    
</html>
<?php
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