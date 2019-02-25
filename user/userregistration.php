 <!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap4 -->
    <link href="content/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- custom styles -->
    <link href="content/uikit.css" rel="stylesheet" type="text/css">
    <link href="content/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--script start-->
	
	<script src="js/bootstrap.min.js"></script>
	
   <!--script end-->
   <style>
     

</style>

    <title>New Registration</title>
  </head>
  <body>
	<!--Navbar Start -->
	<div style="background-color:#33BEFF; text-align: center">
                <div class="row">
                    <div class="col-sm-3 col-md-3 ">
                       
                          <img src="Images/logoba.png" hspace="1" vspace="1" />
                     
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-6 hidden-xs">
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
                    </div>
                    <div class="col-sm-3 col-md-3 col-xs-3 hidden-xs">
                        <img alt="MSME" src="Images/swach-bharat.png" hspace="5" vspace="5" />
                    </div>
                </div>
            </div>
            <br>
    
	<!-- Navbar End -->
	
	<!--form start-->

<div class="container">
	<div class="row">
		<div class="col-md-4">
    
		</div>
		
		
	<div class="col-md-4">
	
<div class="card">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i> &nbsp; Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> &nbsp; Login via Gmail</a>
	</p>
	<p class="divider-text">
        <span>OR</span>
    </p>

	<form action="sregister.php" method="post">
	
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="glyphicon glyphicon-user"></i> </span>
		 Full Name: <input name="f_name" type="text"  class="form-control" placeholder="Full name" required>
		</div>
    </div> <!-- form-group// -->
	
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="glyphicon glyphicon-envelope"></i> </span>
		 
        <input name="email_id" class="form-control" placeholder="Email address" type="email" required>
		</div>
    </div> <!-- form-group// -->
	
	
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="glyphicon glyphicon-phone"></i> </span>
		
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+971</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="mob_no" class="form-control" placeholder="Phone number" type="text" required>
		</div>
    </div> <!-- form-group// -->
	
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="glyphicon glyphicon-lock"></i> </span>
		
        <input name="password" class="form-control" placeholder="Create password" type="password" required>
    </div>
    </div>	<!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="glyphicon glyphicon-lock"></i> </span>
		
        <input  class="form-control" placeholder="Repeat password" type="password" required>
		</div>
    </div> <!-- form-group// -->  

	
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
		
		
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->
</div>
</div>
</div>

 <?php include "footer.php";?>
</body>
</html>



