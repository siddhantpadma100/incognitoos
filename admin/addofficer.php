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
        <title>JSP Page</title>
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
<style type="text/css">
  
</style>
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
  <h1>Welcome</h1> 

<<<<<<< HEAD
  <div class="container">
  <div class="row">

=======
<form action="saddofficer.php" method="post">
  First Name:<br><input type="text" name="f_name" required><br>
  
  <br>Last Name:<br><input type="text" name="l_name" required><br>
  
  <br>Email id:<br><input type="text" name="email_id" required><br>
  
  <br>Mobile number:<br><input type="text" name="mob_no" required><br>

  <br>Password:<br><input type="password" name="password" required><br>
>>>>>>> 5b014f6943aae056de536ca8be8a79bdb823b994

    <div class="col-md-2">
    </div>

    <div class="col-md-4">

  <div class="well well-sm active"  >

<form  action="sregister.php" method="post" class="form-horizontal">
<div class="form-group">
<label for="first_name" class="col-xs-3 control-label">First Name</label>
<div class="col-xs-9">
<input type="text"  class="form-control" name="f_name" required>
</div>
</div>
<div class="form-group">
<label for="last_name" class="col-xs-3 control-label">Last Name</label>
<div class="col-xs-9">
<input type="text"  class="form-control" name="l_name" required>
</div>
</div>

<div class="form-group">
<label for="last_name" class="col-xs-3 control-label">Email id</label>
<div class="col-xs-9">
<input type="text"  class="form-control"  name="email_id" required>
</div>
</div>

<div class="form-group">
<label for="last_name" class="col-xs-3 control-label">Password:</label>
<div class="col-xs-9">
<input type="password"  class="form-control" name="pwd" required>
</div>
</div>

<div class="form-group">
<label for="last_name" class="col-xs-3 control-label">Repeat Password:</label>
<div class="col-xs-9">
<input type="password"   class="form-control" name="rpwd" required>
</div>
</div>

<div class="form-group">
<div class="col-xs-offset-4 col-xs-9">
<button type="submit" class="btn btn-primary ">Add User</button>
</div>
</div>
</form>

</div>
    </div>
</div>

    </div>
    <div class="panel-body">
     
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

