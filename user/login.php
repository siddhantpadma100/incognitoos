 <!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap4 -->
    <link href="../lib/Content/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- custom styles -->
    <link href="../lib/Content/uikit.css" rel="stylesheet" type="text/css">
    <link href="../lib/Content/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)">
	<!--script start-->

   <!--script end-->
   <style>
    .page-footer {
        background-color: black;
    }
</style>

    <title>User Login</title>
  </head>
  <body>

    <!--Start::language Translation--> 
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- end::language Translation -->
    
	<!--Navbar Start -->
	<div style="background-color:#33BEFF; text-align: center">
                <div class="row">
                    <div class="col-sm-3 col-md-3 ">
                       
                          <img src="../lib/images/logoba.png" hspace="1" vspace="1" />
                     
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
                        <img alt="MSME" src="../lib/images/swach-bharat.png" hspace="5" vspace="5" />
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
	<article class="card-body">
	<a href="" class="float-right btn btn-outline-primary">User Login</a>
	<h4 class="card-title mb-4 mt-1">User Login</h4>
	<p>
    <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i> &nbsp; Login via Twitter</a>
    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> &nbsp; Login via Gmail</a>
	</p>
  <hr>
  <form action="slogin.php" method="post" >
    <div class>
      <i class="fa fa-user"></i>
        <input name="uname" class="form-control" placeholder="Email or login" type="text" required>
    </div> <!-- form-group// -->

    <div>
      <i class="fa fa-lock"></i>

        <input name="password" class="form-control" placeholder="******" type="password" required>
    </div> <!-- form-group// -->  

    <div class="row">
        <div class="col-md-6">
            <div>
                <button type="submit" class="btn btn-primary btn-block"> Login  </button>
            </div> <!-- form-group// -->
        </div>
        <div class="col-md-6 text-right">
            <a class="small" href="forgot.php">Forgot password?</a>
        </div>                                            
    </div> <!-- .row// -->                                                                  
</form>
</article>
</div> <!-- card.// -->
</div>
</div>
  </div>
  
  
   <div class="col-md-4">
    
  </div>
  
  <!--form end-->


   
 
  </body>
</html>