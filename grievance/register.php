<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Grievance</title>
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
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



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

<?php include "nav.php";?>

    <div class="container-fluid main-container">
        <div class="col-md-2 sidebar">
            <div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <div class="absolute-wrapper"> </div>
    <!-- Menu -->
<?php include "sidebar.php";?>
            </div>          
        </div>
        <div class="col-md-10 content">
              <div class="panel panel-default">
                 <div class="panel-heading"><h2>Grievance Form</h2></div>
                   <div class="panel-body">
                    <form action="sregister.php" method="post">
	                    <h3>Fill the Details</h3>
	                    <br>
    <p class="hint-text"></p>
        <div class="form-group">
      <div class="row">
        <div class="col-xs-12">
        	<input type="text" class="form-control" name="f_name" placeholder="First Name" style="width:40%;height: 40px;" required>
        
      </div>          
        </div>
        <br>
        <div class="form-group">

            <input type="text" class="form-control" name="l_name" placeholder="Last Name" style="width:40%;height: 40px;" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email_id" placeholder="Email id" style="width:40%;height: 40px;" required>
        </div>
        <div class="form-group">
            <input type="text" pattern="[7-9]{1}[0-9]{9}" class="form-control" name="mob_no" style="width:40%;height: 40px;" placeholder="Mobile number" required="required">
        </div>
        <div class="form-group">

            <textarea cols="30" rows="5" class="form-control" name="description" placeholder="Description" style="width:40%;height: 150px;" required></textarea> 
        </div>        
       
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="" style="width:40%;">SUBMIT</button>
        </div>

                    </form>
                    <br>
                    </div>
             
       
        <footer class="pull-left footer">
            <p class="col-md-12">
                <hr class="divider">
               
            </p>
        </footer>
    


    </body>    
</html>