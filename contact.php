<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Notifications</title>
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
              <h2 style="color: aqua">
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
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="about/bg/y3.jpg">
      <div class="container pt-120 pb-60">
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Event & Enquiry</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li><a href="eventrg1.php">Register</a></li>
                <li><a href="aboutus.php">Register</a></li>
                <li><a href="contact.php">Contact Us or Notification</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br />
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-6">
            <h3 class="line-bottom mt-0 mb-30"> <span class="text-theme-colored2"> If any doubt </span> then contact us !</h3>
              <form id="contact_form" name="contact_form" class="" action="contact_insert.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <small>*</small></label>
                    <input name="name" id="name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="email_id" id="email_id" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject <small>*</small></label>
                    <input name="subject" id="subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Reg No:</label>
                    <input name="reg_no" id="reg_no"  class="form-control" type="text" required placeholder="Enter Regestration No">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea name="message" id="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
              <input class="btn btn-dark btn-theme-colored" type="submit" value="Submit">
              </div>
            </form>
          </div>
          <div class="col-md-6">
          <h3 class="font-28 mt-0"><span class="text-theme-colored2">Event </span> Notification</h3>
          <div class="table table-striped table-bordered">
          <table style="height:50% ;"   class="table table-striped table-bordered">
          <tr>
                        
                        <th>Event date</th>
                        <th>Event Name:</th>
                        <th>Event Details</th>
                        <th>Sender Name</th>
                  </tr>
          </table>
          <marquee direction="up">
      <table style="height:50% ;"  id="" class="table table-striped table-bordered">
         <tbody>
           <?php
      $conn=new mysqli('localhost','root','','test_db',);
      if($conn->connect_error)
      {
          echo"unable to connect";
          echo 'br';
      }
      else{
         
          $query=mysqli_query($conn,"SELECT * FROM event_notification");
          if(mysqli_num_rows($query)>0)
          {
              while($rowdata=mysqli_fetch_assoc($query))
              {
               echo" <tr>";
               echo "<td>{$rowdata['event_date']}</td>";
               echo "<td>{$rowdata['event_name']}</td>";
               echo "<td>{$rowdata['event_details']}</td>";
               echo "<td>{$rowdata['sender_name']}</td>";
              
              
               echo "</tr>";
      
              }
          }
      }
      ?>
              </tbody>
         </table>
         </marquee>
      </div>
          </div>
        </div>
      </div>
    </section>
  

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
</div>
<script src="js/custom.js"></script>
</body>
</html>