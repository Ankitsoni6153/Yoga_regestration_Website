
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registered Student</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
     
</head>
<header id="header" class="header">
    <div class="header-top bg-theme-colored border-top-theme-colored2-2px sm-text-center">
      <div class="container">
        <div class="row">          
          <div class="col-md-10">
              <h2 style="color:aqua">
            <marquee> Welcome To Admin Panel </marquee>  </h2>
          </div>
          <div class="col-md-2">
              <p style="color:#f00">
           Hello, <?php echo $_SESSION['name']; ?>
           <a href="logout.php" class="btn btn-dark btn-circled btn-theme-colored2 btn-xl mr-10 pr-30 pl-30">Log Out</a> </p>
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
              <li><a href="notification.php">Event Notification</a></li>
              <li><a href="home.php">Registered Student</a></li>
              <li><a href="home_contact.php">Enquiry data</a></li>
              <li><a href="signup.php">Create Users</a></li>
             </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
<body>
 <h1>Welcome, <?php echo $_SESSION['name']; ?></h1>
     <br>
    
     <h2 style="text-align: center;">Registered Student <span class="text-theme-colored2">For Yoga</span> </h2>
     <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_fifomona.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" style="text-align: center;"></lottie-player>
    
     <div class="table table-striped table-bordered">
      
<table id="" class="table table-striped table-bordered">
            <tbody>
                <tr>
                    <th>Student Name:</th>
                    <th>Regestration No:</th>
                    <th>Email Id:</th>
                    <th>Phone No:</th>
                    <th>Course</th>
                    <th>Event Name</th> 
                    <th>Action</th>
                                     
                </tr>
            </tbody>
            <tbody>
     <?php
$conn=new mysqli('localhost','root','','test_db',);
if($conn->connect_error)
{
    echo"unable to connect";
    echo 'br';
}
else{
   
    $query=mysqli_query($conn,"SELECT * FROM eventreg");
    if(mysqli_num_rows($query)>0)
    {
        while($rowdata=mysqli_fetch_assoc($query))
        {
         echo" <tr>";
         echo "<td>{$rowdata['student_name']}</td>";
         echo "<td>{$rowdata['reg_no']}</td>";
         echo "<td>{$rowdata['email_id']}</td>";
         echo "<td>{$rowdata['phone_no']}</td>";
         echo "<td>{$rowdata['course']}</td>";
         echo "<td>{$rowdata['event_name']}</td>";
         echo "<td> Edit   Delete</td>";
         echo "</tr>";

        }
    }
}
?>
        </tbody>
   </table>
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


</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>