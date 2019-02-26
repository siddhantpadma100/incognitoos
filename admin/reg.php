
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

<!--Start::language Translation--> 
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- end::language Translation -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script>
    function printData()
    {
    <%
            String clgg = request.getParameter("clg");
            String deptt = request.getParameter("dept");
            String ayearr = request.getParameter("ayear");
        %>
        var panel = document.getElementById("tbl");
        var printWindow = window.open(" ", " ", "height = 1000%, width = 1000%");
        printWindow.document.write("<html><head><title>Academic year-wise report</title>");
        printWindow.document.write("<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'");
        printWindow.document.write("</head><body><br><h2>");
        var clg = "<%=clgg%>";
        var dept = "<%=deptt%>";
        var a_year = "<%=ayearr%>";
        printWindow.document.write("<center>"+clg+"<center><br>");
        printWindow.document.write("<div style='float: left'>Dept: "+dept+"</div>");
        printWindow.document.write("<div style='float: right'>Year: "+a_year+"</div>");
        printWindow.document.write(panel.innerHTML);
        printWindow.document.write("</body></html>");
        printWindow.document.close();
            setTimeout(function () {
                printWindow.print();
            }, 50);
            return false;
    }
</script>

<!------ Include the above in your HEAD tag ---------->
<?php 
include "nav.php";?>
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
    <div class="panel-body">
      <h2>Academic year-wise report</h2>

      <form method="POST" action="#">
        form
              
      </form>
                
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





