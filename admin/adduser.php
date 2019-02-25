
   <?php
session_start();
if(isset($_SESSION['admin_log']))
{
if($_SESSION['admin_log']==1)
{ 
?>
  <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add User</title>
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

<?php include "nav.php"?>


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

<form action="sregister.php" method="post">
  First Name:<br><input type="text" name="f_name" required><br>
  
  <br>Last Name:<br><input type="text" name="l_name" required><br>
  
  <br>Email id:<br><input type="text" name="email_id" required><br>
  
  <br>Mobile number:<br><input type="text" name="mob_no" required><br>

  <br>Password:<br><input type="password" name="pwd" required><br>

  <br>Repeat Password:<br><input type="password" name="rpwd" required><br>

  <br><input type="submit" name="" value="add officer" >

</form>


    </div>
    <div class="panel-body">
      <h2>Overall Requirement</h2>

  <br>
    </div>
</div>
        </div>
      </div>

        <?php include "footer.php";?>
    


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
?>