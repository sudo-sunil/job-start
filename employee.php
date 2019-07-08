<!DOCTYPE html>
<html lang="en">
<?php


 require "connect.php";

 session_start();
 $id = $_SESSION['id'];
 ?>
  <head>
    <title>Jobstart | Details </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">  
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #f1f1f1;
    }

    #regForm {
      background-color: #ffffff;
      margin: 100px auto;
      font-family: inherit;
      padding: 40px;
      width: 70%;
      min-width: 300px;

    }

    h1 {
      text-align: center;  
    }

    input {
      padding: 10px;
      width: 100%;
      font-size: 17px;
      font-family: inherit;
      border: 1px solid #aaaaaa;
      border-radius: 0.25rem;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
      display: none;
    }

    button {
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 17px;
      font-family: inherit;
      cursor: pointer;
    }

    button:hover {
      opacity: 0.8;
    }

    #prevBtn {
      background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;  
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }

    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #4CAF50;
    }
</style>
<body>
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <header class="site-navbar py-1" role="banner">
      <div class="container">
        <div class="row align-items-center">        
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Job<strong>start</strong></a></h1>
          </div>
          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="employee.php">Home</a></li>
        		<li><a href="applnstatus.php">View Application Status</a></li>              
                <li ><a href="contact.php">Contact</a></li>
                <li><a href="applyjob.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Apply for Job</span></a></li>
                <li><a href="logout.php"><span class="rounded bg-primary py-2 px-3 text-white">Logout</span></a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 col-xl-2 text-right d-block">           
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>     
	  
	  
	 
	 
	 <?php
	 
$db = mysqli_connect("localhost","root","","jobstart"); //keep your db name
$sql = "SELECT pfillstatus FROM signup WHERE id='$id'";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);


$pfillstatus = $result['pfillstatus'];

if($pfillstatus==0)
{
	echo'
	 
	 
	  
    </header>
    <div class="unit-5 overlay" style="background-image: url("images/apply.png");">
      <div class="container text-center">
        <h2 class="mb-0">Post a Job</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Post a Job</span></p>
      </div>
    </div>
    <form method="Post" id="regForm" action="uploads.php" enctype="multipart/form-data">
      
	  
	  <div>
	     <h1>General Details:</h1>
      <div class="tab">
        <p><input type="text" placeholder="First name"   id="fname" name="fname"></p>
        <p><input type="text" placeholder="Last name"   name="lname"></p>
        <p><input type="text" placeholder="Date Of Birth (yyyy-mm-dd)"   name="dob"></p>
        <p><input type="text" placeholder="Phone Number"   name="pno"></p>
        <p><input type="text" placeholder="E-mail"   name="email"></p>
        <p><input type="text" placeholder="Address"   name="addr"></p>
      </div>
      </div>
      <div>
        <h1>Academic Details:</h1>

        <div class="tab"> 
        <p><font color="red">* Include complete academic details of graduation</font></p>            
        <div class="form-group fieldGroup">
            <div>
            <p><input type="text" placeholder="Institute Name"   name="institute_name1"></p>
            <p><input type="text" placeholder="University / Board"   name="university1"></p>
            <p><input type="text" placeholder="Year Of Commencement"   name="yoc1"></p>
            <p><input type="text" placeholder="Year Of Passing"   name="yop1"></p>
            <p><input type="text" placeholder="Average Grade"   name="avg_grade1"></p>
            <p><input type="text" placeholder="Achievements"   name="achievements1"></p>      
                
            </div>
        </div>
        <br /><br /><br />
        <div>
		<p><font color="red">* Include complete academic details of HSC</font></p>
                 <p><input type="text" placeholder="Institute Name"   name="institute_name2"></p>
            <p><input type="text" placeholder="University / Board"   name="university2"></p>
            <p><input type="text" placeholder="Year Of Commencement"   name="yoc2"></p>
            <p><input type="text" placeholder="Year Of Passing"   name="yop2"></p>
            <p><input type="text" placeholder="Average Grade"   name="avg_grade2"></p>
            <p><input type="text" placeholder="Achievements"   name="achievements2"></p> 
        </div>

          <br /><br /><br />
        <div>
		<p><font color="red">* Include complete academic details of SSC</font></p>
                <p><input type="text" placeholder="Institute Name"   name="institute_name3"></p>
            <p><input type="text" placeholder="University / Board"   name="university3"></p>
            <p><input type="text" placeholder="Year Of Commencement"   name="yoc3"></p>
            <p><input type="text" placeholder="Year Of Passing"   name="yop3"></p>
            <p><input type="text" placeholder="Average Grade"   name="avg_grade3"></p>
            <p><input type="text" placeholder="Achievements"   name="achievements3"></p>        
            
        </div>
        
        </div>
      </div>
      <div>
        <h1>Technical Details:</h1>
        <div class="tab">   
            <p><input type="text" placeholder="Job Experience"   name="jobexp"></p>
            <p><input type="text" placeholder="Area of Interest"   name="aoi"></p>
            <p><input type="text" placeholder="Languages known (Software)"   name="lksw"></p>
            <p><input type="text" placeholder="Languages known (Communication)"   name="lkcomm"></p>
            <p><input type="text" placeholder="Certifications"   name="certi"></p>
        </div>
      </div>
     <div>
        <h1>Upload Resume:</h1>
        <div class="tab">
            <div id="cid_303" class="form-input">
              <input type="file" id="resume" name="resume" class="form-upload validate[upload]" data-imagevalidate="yes" data-file-accept="pdf" accept="pdf" data-file-maxsize="10240" data-file-minsize="0" data-file-limit="0" data-component="fileupload">
              <label for="fileupload"><font color="red"> * Upload your resume in pdf format (Max size 10 MB )</font></label>
              <input type="file" id="dp" name="dp" class="form-upload validate[upload]" data-imagevalidate="yes" data-file-accept="jpg, jpeg, png" accept="jpg, jpeg, png" data-file-maxsize="10240" data-file-minsize="0" data-file-limit="0" data-component="fileupload">
              <label for="fileupload"><font color="red">* Upload your photo in jpg / jpeg / png format (Max size 10 MB )</font></label>
            </div>
          </div>
      </div> 
      <div style="overflow:auto;">
        <div style="float:right;">
          <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="rounded bg-primary py-2 px-3 text-white">Previous</button>
          <button type="button" id="nextBtn" onclick="nextPrev(1)" class="rounded bg-primary py-2 px-3 text-white">Next</button>
        </div>
      </div>
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
    </form>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="row">
              <div class="col">
                <h3 class="footer-heading mb-4">For Candidates</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Register</a></li>
                  <li><a href="#">Find Jobs</a></li>                  
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col">
                <h3 class="footer-heading mb-4">For Employers</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Employer Account</a></li>
                  <li><a href="#">Find Candidates</a></li>
                  <li><a href="#">Terms &amp; Policies</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>  
            </div>
          </div>
          <div class="col">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li>
                <span class="d-block text-white">Address</span>
                69 , Arenja Corner, Sector 42, Vashi, Navi Mumbai, Mumbai, Maharashtra, India (400703).
              </li>
              <li>
                <span class="d-block text-white">Telephone</span>
                +91 022 2789 0437
              </li>
              <li>
                <span class="d-block text-white">Email</span>
                support@jobstart.in
              </li>
            </ul>            
          </div>
        </div>       
      </div>
    </footer>
  </div>
  ';
  
}
else
{
include('profile.php');
}  
  
  
  
  
  ?>
  
  
  
  
  
  <script>
    $(document).ready(function(){
        //group add limit
        var maxGroup = 10;       
        //add more fields group
        $(".addMore").click(function(){
            if($('body').find('.fieldGroup').length < maxGroup){
                var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            }else{
                alert('Maximum '+maxGroup+' groups are allowed.');
            }
        });        
        //remove fields group
        $("body").on("click",".remove",function(){ 
            $(this).parents(".fieldGroup").remove();
        });
    });
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }
    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      // if (n == 1) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }
    // function validateForm() {
    //   // This function deals with validation of the form fields
    //   var x, y, i, valid = true;
    //   x = document.getElementsByClassName("tab");
    //   y = x[currentTab].getElementsByTagName("input");
    //   // A loop that checks every input field in the current tab:
    //   for (i = 0; i < y.length; i++) {
    //     // If a field is empty...
    //     if (y[i].value == "") {
    //       // add an "invalid" class to the field:
    //       y[i].className += " invalid";
    //       // and set the current valid status to false
    //       valid = false;
    //     }
    //   }
    //   // If the valid status is true, mark the step as finished and valid:
    //   if (valid) {
    //     document.getElementsByClassName("step")[currentTab].className += " finish";
    //   }
    //   return valid; // return the valid status
    // }
    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
    </script>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/main.js"></script>  
  </body>
</html>