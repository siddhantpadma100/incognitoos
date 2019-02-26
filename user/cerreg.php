<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>registration</title>
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
    
    
    <style type="text/css">
    	
         

    </style>
</head>

<<<<<<< HEAD:user/cerreg.php
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
    
    <div class="absolute-wrapper"> </div>
    <!-- Menu -->
<?php include "sidebar.php";?>
         </div>          
        </div>
    <div class="col-md-10 content">
              <div class="panel panel-default">
                 <div class="panel-heading"><h2>Registration Form</h2></div>
                   <div class="panel-body">
                      <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Fill the Details</h3>
        <br>
      </div>
            <form method="post" action="sregister.php" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-12">
                  <div class="">
                    <label>1. Aadhaar Number</label>
                    <br>
                    <input class="form-control" type="text" style="width:70%;height: 40px;" name="aadhar_no" maxlength="12" placeholder="Aadhaar Number" required>
                    <br>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="">
                    <label>2. Name of Entrepreneur /Applicant as printed on Aadhaar Card</label>
                    <br>
                    <input class="form-control" type="text" name="e_name" maxlength="70" placeholder="Name of Entrepreneur /Applicant as printed on Aadhaar Card" style="width:70%;height: 40px;" required>
                    <br>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="">
                    <label>3. Social Category</label>
                    <br>

                    

                    <select class="form-control"  name="category" style="width:70%;height: 40px;" required>

                      <option value="">Select Social Category</option>
=======
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Registration Form</h1>
			</div>
            <form method="post" action="sregister.php" enctype="multipart/form-data">
            	<div class="row">
            		<div class="col-md-12">
            			<div class="">
            				<label>1. Aadhaar Number</label>
            				<br>
            				<input class="form-control" type="text" style="width:70%;height: 40px;" name="aadhar_no" maxlength="12" placeholder="Aadhaar Number" required>
            			</div>
            		</div>
            		<div class="col-md-12">
            			<div class="">
            				<label>2. Name of Entrepreneur /Applicant as printed on Aadhaar Card</label>
            				<br>
            				<input class="form-control" type="text" name="e_name" maxlength="70" placeholder="Name of Entrepreneur /Applicant as printed on Aadhaar Card" style="width:70%;height: 40px;" required>
            			</div>
            		</div>
            		<div class="col-md-12">
            			<div class="">
            				<label>3. Social Category</label>
            				<br>
            				<select class="form-control"  name="category" style="width:70%;height: 40px;" required>
            					<option value="">Select Social Category</option>
>>>>>>> ad8868d678bc68c147a7065cc757e23d5f0fbd76:user/licregform/cerreg.php
                                <option value="General">General</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                                <option value="OBC">OBC</option>
                            </select>
                            <br>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="">
                    <label>4. Gender</label>
                    <br>
                    <select class="form-control"  name="gender" style="width:70%;height: 40px;" required>
                      <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <br>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="">
                    <label>5. Physically handicapped</label>
                    <br>
                    <select class="form-control" name="physi_handy" style="width:70%;height: 40px;" required>
                      <option selected="selected" value="">Select Any</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                    <br>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="">
                    <label>6. Name of Enterprise / Business</label>
                    <br>
                    <input class="form-control" type="text" name="b_name" maxlength="200" placeholder="Name of Enterprise / Business" style="width:70%;height: 40px;" required>
                    <br>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="">
                    <label>7. Type of Organisation</label>
                    <br>
                    <select class="form-control" name="org_type" style="width:70%;height: 40px;" required>
                                <option value="">Select Type of Organisation</option>
                                <option value="Proprietorship Firm">Proprietorship Firm</option>
                                <option value="Hindu Undivided Family">Hindu Undivided Family</option>
                                <option value="Partnership Firm">Partnership Firm</option>
                                <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                                <option value="Co-operative Society">Co-operative Society</option>
                                <option value="Private Limited">Private Limited</option>
                                <option value="Public Limited">Public Limited</option>
                                <option value="Self Help Group">Self Help Group</option>
                                <option value="Society">Society</option>
                                <option value="Trust">Trust</option>
                            </select>
                            <br>
                  </div>
                </div>
                <div class="col-md-12">
                        <div class="">
                            <label class="text-left">8. PAN </label>
                            
                            <br>
                            <input class="form-control" type="text" placeholder="PAN" name="pan_no" maxlength="10" style="width:70%;height: 40px;" required>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="">
                            <label class="text-left">9. Location of Plant (Address) </label>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="">
                            <input class="form-control" type="text" name="plant_address" maxlength="200" placeholder="Flat / Door No." style="width:70%;height: 40px;" required>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-12">
                       <div class="">                                         
                       <input class="form-control" type="text"  placeholder="Name of Premise / Building" name="build_name" maxlength="200" style="width:70%;height: 40px;" required>
                       <br>
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="">                                         
                       <input class="form-control" type="text" placeholder="Road/ Street" name="road_name" maxlength="200" style="width:70%;height: 40px;" required>
                       <br>
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="">                                         
                       <input class="form-control" type="text" placeholder="Area / Locality" name="area_name" maxlength="200" style="width:70%;height: 40px;" required>
                       <br>
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="">                                         
                       <input class="form-control" type="text" placeholder="City" name="city" maxlength="200" style="width:70%;height: 40px;" required>
                       <br>
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="">                                         
                       <input class="form-control" type="text" placeholder="PIN" name="pin_code"  maxlength="6" style="width:70%;height: 40px;" required>
                       <br>
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="">                                         
                       <select class="form-control" name="state" style="width:70%;height: 40px;" required>
                             <option value="">Select State</option>
                             <option value="387">ANDAMAN AND NICOBAR ISLANDS</option>
                             <option value="388">ANDHRA PRADESH</option>
                             <option value="389">ARUNACHAL PRADESH</option>
                             <option value="390">ASSAM</option>
                             <option value="391">BIHAR</option>
                             <option value="392">CHANDIGARH</option>
                             <option value="393">CHHATISGARH</option>
                             <option value="394">DADRA AND NAGAR HAVELI</option>
                             <option value="395">DAMAN AND DIU</option>
                             <option value="396">DELHI</option>
                             <option value="397">GOA</option>
                             <option value="398">GUJARAT</option>
                             <option value="399">HARYANA</option>
                             <option value="400">HIMACHAL PRADESH</option>
                             <option value="401">JAMMU AND KASHMIR</option>
                             <option value="402">JHARKHAND</option>
                             <option value="403">KARNATAKA</option>
                             <option value="404">KERALA</option>
                             <option value="405">LAKSHADWEEP</option>
                             <option value="406">MADHYA PRADESH</option>
                             <option value="407">MAHARASHTRA</option>
                             <option value="408">MANIPUR</option>
                             <option value="409">MEGHALAYA</option>
                             <option value="410">MIZORAM</option>
                             <option value="411">NAGALAND</option>
                             <option value="412">ODISHA</option>
                             <option value="413">PONDICHERRY</option>
                             <option value="414">PUNJAB</option>
                             <option value="415">RAJASTHAN</option>
                             <option value="416">SIKKIM</option>
                             <option value="417">TAMIL NADU</option>
                             <option value="457">TELANGANA</option>
                             <option value="418">TRIPURA</option>
                             <option value="420">UTTAR PRADESH</option>
                             <option value="419">UTTARAKHAND</option>
                             <option value="421">WEST BENGAL</option>
                       </select>                                    
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="form-group">                                         
                        <br>
                        <input class="form-control" type="text" class="" placeholder="District" name="dist_name" style="width:70%;height: 40px;" required>
                        
                                                        
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="form-group">
                           <label>10. Mobile No</label>
                           <br>
                           <input class="form-control" type="text" placeholder="Mobile No." name="mob_no" maxlength="10" style="width:70%;height: 40px;" required>
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="form-group">
                         <label class="text-left">11. Email ID</label>
                         <br>
                         <input class="form-control" type="email" placeholder="Email ID" name="email_id" maxlength="70" style="width:70%;height: 40px;" required>
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="form-group">
                         <label>12. Date of Commencement of Business</label>
                         <br>
                         <input class="form-control" type="date" name="commence_date" value="YYYY-MM-DD" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" style="width:70%;height: 40px;" required>
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="form-group">
                         <label >13. Bank Account Number</label>
                         <br>
                         <input class="form-control" type="text" placeholder="Bank Account Number" name="acc_no"  maxlength="20" style="width:70%;height: 40px;" required>
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="form-group">
                          <label class="text-left">14. IFSC Code</label>
                          <br>
                          <input class="form-control" type="text" placeholder="IFSC Code" name="ifsc"  maxlength="20" style="width:70%;height: 40px;" required>
                       </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                           <label>15. Main Business Activity of Enterprise</label>
                           <br>
                           <select class="form-control"  name="business_activity" style="width:70%;height: 40px;" required>
                        <option value="">Select Activity of Enterprise</option>
                        <option value="Manufacturer">Manufacturer</option>
                        <option value="Service provider">Service provider</option>
                      </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                           <label class="text-left">16. NIC 2 Digit Code -  Choose primary Business Activity</label>
                           <br>
                        <div>
                        <input type="text" class="form-control" placeholder="First select Main Business Activity of Enterprise" class="form-control" name="nic" style="width:70%;height: 40px;" required>               
                        </div>
                     
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="text-left">17. Additional details about Business</label>
                          <br>
                          <input type="text" class="form-control" placeholder="Additional details " name="business_details" id="additional_details" value="" style="width:70%;height: 40px;" required>
                        </div>
                    </div>
                             
                       <div class="col-md-12">
                          <div class="form-group">
                            <label class="text-left">18. Number of employees</label>
                            <br>
                            <input type="text" class="form-control" placeholder="Number of employees" name="investment" style="width:70%;height: 40px;" required>
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="form-group">
                         <label>19. Investment in Plant and Machinery (Amount in Lacs)</label>
                         <br>
                          <input type="text" class="form-control" placeholder="Investment" name="attachment" id="Investment" value="" style="width:70%;height: 40px;" required>
                          
                       </div>
                    </div>
                    <div class="col-md-12">
                        <div class="">
                          <label>20. Attachment :Incometax </label>
                          
                          <input type="file" name="attachment" placeholder="(Attach Scan copy of aadhar card) or Update later">
                            
                          
                          <br>

                          
                                                             
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block" name="" style="width:70%;">SUBMIT</button>
                    <br>
              </div>
            </form>
    </div>
  </div>
                   </div>
              </div> 
    </div>
    </div>                
    <footer class="pull-left footer">
            <p class="col-md-12">
                <hr class="divider">
               
            </p>
        </footer>

</body>
</html>