<!DOCTYPE html>
<?php

 require "connect.php";

 session_start();
 $id = $_SESSION['id'];

?>
<html lang="en">
  <head>
    <title>Jobstart | Application Status </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/w3.css">
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
    </header>
	
	
	
	
	
	
	
<?php


$sql = "SELECT * FROM jobdet WHERE job_id NOT IN (SELECT jobdet.job_id FROM jobdet,applyjob WHERE applyjob.job_id=jobdet.job_id AND applyjob.employee_id='$id')
";

$sql = "SELECT jobdet.company, jobdet.title, jobdet.job_type, applyjob.status FROM jobdet,applyjob WHERE applyjob.job_id=jobdet.job_id AND applyjob.employee_id='$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
			
				
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{	
					$company=$row['company'];
					$title=$row['title'];
					$job_type=$row['job_type'];
					$status=$row['status'];
					
					if($status==0)
					{
						$statusword="Application Sent";
					}
					elseif($status==1)
					{
						$statusword="Accepted";
					}
					else
					{
						$statusword="Rejected";
					}
					
					
					echo'
					
				<br />
				  <div class="w3-container" style="">
					 <div class="w3-card-4" style="width:50%;margin:auto;">
					   <header class="w3-container w3-light-grey">
						  <h3 style="margin-top: 10px">'.$company.'</h3>
						</header>
						<div class="w3-container">
						  <hr>
						  <h5>Job Title : '.$title.' &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Job Type :'.$job_type.' </h5>
						  <h5>Application Status : '.$statusword.'</h5>
						</div>
					 </div>
				  </div>
				<br />



					
					
					
					
					
					
					
					';
				}
				
		
} 
else 
{
	echo "0 results";
}

	
	
	
	
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	
	
    

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