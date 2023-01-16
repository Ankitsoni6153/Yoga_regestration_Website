<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Register</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-plugin-collection.js"></script>
</head>
<body class="">
<div id="wrapper" class="clearfix">
<header id="header" class="header">
    <div class="header-top bg-theme-colored border-top-theme-colored2-2px sm-text-center">
      <div class="container">
        <div class="row">          
          <div class="col-md-12">
              <h2 style="color:aqua">
            <marquee> Welcome To Lovely Professional University </marquee> </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
        <nav id="menuzord-right" class="menuzord default theme-colored"><a class="menuzord-brand pull-left flip mt-20 mt-sm-10 mb-sm-20 pt-5" href="index-mp-layout1.html"></a>
            <ul class="menuzord-menu onepage-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About</a></li>
              <li><a href="eventrg1.php">Register</a></li>
              <li><a href="contact.php">Notification</a></li>
                <li><a href="login2.php">Admin Login</a></li>
           </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
   <div class="main-content"> 
   <section id="home" class="divider parallax layer-overlay overlay-dark-9" data-bg-img="images/bg/bg4.jfif">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pb-100">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                 <div class="bg-lightest border-1px p-25">
                  <h4 class="text-theme-colored text-uppercase m-0"> <span class="text-theme-colored2">Yoga</span> Registration Form</h4>
                  <div class="line-bottom mb-30"></div>
                  <form action="insert.php" method="post">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                        <label for="student_name">Student Name:</label>
                       <input class="form-control" type="text" name="student_name" required id="student_name" >
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                        <label for="reg_no">Regestration No:</label>
                         <input  class="form-control required email" type="number" required name="reg_no" id="reg_no"  >
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                        <label for="email_id">Email ID:</label>
                           <input class="form-control"  type="email" required name="email_id" id="email_id" >
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                        <label for="phone_no">Phone No:</label>
                          <input class="form-control" required   type="number" name="phone_no" id="phone_no">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                        <label for="course">Course:</label>
                           <input  class="form-control" required  type="text" name="course" id="course">
                        </div>
                      </div>
                        <div class="col-sm-12">
                        <div class="form-group mb-10">
                        <label for="event_name">Event Name:</label>
                         <input class="form-control" required  type="text" name="event_name" id="event_name">
                        </div>
                      </div>
                    </div>
                      <div class="form-group mb-0 mt-20">
                      <input class="btn btn-dark btn-theme-colored" type="submit" value="Submit">
                    </div>
                  </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 
  <footer id="footer" class="footer" data-bg-color="#20232E">
      <div class="footer-bottom" data-bg-color="#1B1D26">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-12">
            <p class="font-14 sm-text-center m-0" style="text-align:center">Copyright &copy;2022 <span class="text-theme-colored2">Reservied To</span> Ankit Kr. Soni & Ankit Kr. Mishra</p>
          </div>
          </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<script src="js/custom.js"></script>
</body>
</html>