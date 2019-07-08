<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jobstart | Login</title>
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
  </head>
  <body>
    <?php 
    session_start();
    if( isset($_SESSION['id']) )
    {
    echo' 
     <header class="site-navbar py-1" role="banner">
          <div class="container">
            <div class="row align-items-center">           
              <div class="col-6 col-xl-2">
                <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Job<strong>start</strong></a></h1>
              </div>
              <div class="col-10 col-xl-10 d-none d-xl-block">
                <nav class="site-navigation text-right" role="navigation">
                  <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="employee.php"><h4><b>'.$_SESSION["id"].'</b></h4></a></li>
                    <li><a href="logout.php"><span class="rounded bg-primary py-2 px-3 text-white"> logout</span></a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-6 col-xl-2 text-right d-block">          
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
              </div>
            </div>
          </div>        
        </header>   
    </div>
     ';      
    include('emloyee.php');       
    }
    else
    {
    echo '   
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="active"><a href="login.php"><span class="rounded bg-primary py-2 px-3 text-white"> Login</span></a></li>
                    <li><a href="signupp.php"><span class="rounded bg-primary py-2 px-3 text-white"> SignUp</span></a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-6 col-xl-2 text-right d-block">              
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
              </div>
            </div>
          </div>         
        </header>
      </div>
       <div class="main">
            <section class="sign-in">
                <div class="container1">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                            <a href="signupp.php" class="signup-image-link">Create an account</a>
                        </div>
                        <div class="signin-form">
                            <h2 class="form-title">Login</h2>
                            <form method="post" class="register-form" id="login-form" action="dblogin.php">
    							             <div class="form-group">
                                    <label for="user_type"><i class="zmdi zmdi-email"></i></label>
                                    <select required type="text" name="user_type" class="dropdown">
    								                    <option value="NULL">Select User Type</option>
    								                    <option value=1>Employer</option>
    								                    <option value=2>Employee</option>
    								                </select>
                                </div>   						
                                <div class="form-group">
                                    <label for="uid"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="uid" id="uid" placeholder="User ID"/>
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="pass" id="pass" placeholder="Password"/>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                                </div>
                            </form>                    
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>';
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



   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="js/main1.js"></script>

  </body>
</html>