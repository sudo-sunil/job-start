<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jobstart | Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  </head>
  <body>
          
    </header>
      </div>
	  
	  
	  
	  <?php
	  
	  
		$id=$_SESSION['id'];
		$sql1 = "SELECT * FROM signup WHERE id='$id'";

		$result = $conn->query($sql1);
	
		$row = $result->fetch_assoc();
	
	  
	  
	  echo'
	  
	  
	  
	  
       <div class="main">
            <section class="sign-in">
                <div class="container1">
                     <div class="container" style="padding-bottom: 100px;">
                          <div class="row">
                                <div class="col-sm-4">
                                  <img src="data:image/jpeg;base64,'.base64_encode( $row['dp'] ).'" class="card-img-top" style="width: 100%;margin-top: 150px;margin-left: 25px;" src="images/person_3.jpg" alt="Candidate DP">
                           
								 
								 </div>
                                 <div class="col-sm-8" style="margin-top: 55px;margin-left: 0px;padding-left: 55px;">
                                  <a href="editdetails.php"><span class="rounded bg-primary py-2 px-3 text-white" style="float: right;">Edit Details</span></a>
                                <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;font-style:italic;">
                                 <h2 >General Details :  </h2></div>
                                 <hr>                               
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 >First Name : '.$row['fname'].'</h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 >Last  Name : '.$row['lname'].'</h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 >Date of Birth : '.$row['dob'].' </h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 >E-mail : '.$row['email'].' </h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 >Phone number : '.$row['pno'].'</h5></div>
                                 <div class="row" style="width: 90%;margin-top: 20px;margin-left: 40px;">
                                 <h5 >Address :  '.$row['addr'].' </h5></div>                             
                                 </div>                                   
                                </div>                                
                                 <div class="row" style="width: 100%;margin-top: 40px;margin-left: 40px;font-style:italic;">
                                 <h2 >Academic Details :  </h2></div>
                                 <hr>                                
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 ><b>Institute Name:</b> '.$row['institute_name1'].' </h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 ><b>University / Board :</b> '.$row['university1'].' </h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 ><b>Year of Commencement : </b>'.$row['yoc1'].'</h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 ><b>Year of Passing :</b> '.$row['yop1'].'</h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 ><b>Average Grade :</b> '.$row['avg_grade1'].'</h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 ><b>Achievements :</b> '.$row['achievements1'].'</h5></div>
                                 <div class="row" style="width: 100%;margin-top: 40px;margin-left: 40px;font-style:italic;">

                                 <h2 >Technical Details :  </h2></div>   
                                 <hr>                            
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 ><b>Job Experience:</b> '.$row['jobexp'].'</h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 ><b>Area of Interest :</b> '.$row['aoi'].'</h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 ><b>Languages known (software) : </b>'.$row['lksw'].'</h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-left: 40px;">
                                 <h5 ><b>Languages known (Communication) :</b> '.$row['lkcomm'].'</h5></div>
                                 <div class="row" style="width: 100%;margin-top: 20px;margin-top: 20px; margin-bottom: : 100px;margin-left: 40px;">
                                 <h5 ><b>Certificates :</b> '.$row['certi'].'</h5></div>  
                                 <hr>
                                 <div class="row" style="margin-top: 20px;margin-left: 40px;">
                                 
								 <form target="blank" method="POST" action="viewresume.php">
								<input type="hidden" name="employee_id" value="'.$id.'">
								<button class="rounded bg-primary py-2 px-3 text-white" style=" float:left " type="submit" class="w3-button w3-block bg-primary text-white">View Resume</button>
								</form>
								 
								 
                                 </div>
                              </div>  

                </div>
            </section>
        </div>
    </div>
	
	';
	
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



   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="js/main1.js"></script>

  </body>
</html>