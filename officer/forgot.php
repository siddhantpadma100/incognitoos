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
    <script type="text/javascript">

</script>


    <title>Officer Login</title>
  </head>
  <body>
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
  


<div class="container">
<div class="row">
  <div class="col-md-4">
    
  </div>
 <div class="col-md-4">
    
<div class="card">
<article class="card-body">
  <a href="" class="float-right btn btn-outline-primary">Admin Login</a>
  <h4 class="card-title mb-4 mt-1">Admin Login</h4>
 
  <hr>
  <form action="slogin.php" method="post"> 
    <div class="form-group input-icon">
      <i class="fa fa-user"></i>
        <input name="uname" class="form-control" placeholder="Email or login" type="email">
    </div> <!-- form-group// -->

    <div class="form-group input-icon">
      <i class="fa fa-lock"></i>

        <input name="password" class="form-control" placeholder="******" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
    </div> <!-- form-group// -->  

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Login  </button>
            </div> <!-- form-group// -->
        </div>
        <div class="col-md-6 text-right">
            <a class="small" href="#">Forgot password?</a>
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
       <?php include "footer.php";?>
  </body>
</html>