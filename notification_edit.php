
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Notification</title>
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
<header id="header" class="header">
    <div class="header-top bg-theme-colored border-top-theme-colored2-2px sm-text-center">
      <div class="container">
        <div class="row">          
          <div class="col-md-10">
              <h2 style="color:#f00">
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
          </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
<body>
   <section class="divider">
     <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="widget border-1px p-30">
              <h5 class="widget-title">Event Notification</h5>
              <form id="quick_contact_form" name="quick_contact_form" action="notification_insert.php" class="quick-contact-form" method="post">
                <div class="form-group">
                <label for="student_name">Event No:</label>
                       <input class="form-control" type="text" name="faculty_id" required id="faculty_id" >    </div>
                <div class="form-group">
                 </div>
                 <div class="form-group">
                <label for="student_name">Event date:</label>
                       <input class="form-control" type="date" name="event_date" required id="event_date" >    </div>
                <div class="form-group">
                 </div>
                <div class="form-group">
                <label for="student_name">Event Name:</label>
                  <input name="event_name" id="event_name" class="form-control" type="text" required="" placeholder="Event Name">
                </div>
                
                <div class="form-group">
                <label for="student_name">Event Details:</label>
                  <textarea name="event_details" id="event_details" class="form-control" required="" placeholder="Enter Details" rows="3"></textarea>
                </div>
                <div class="form-group">
                <label for="student_name">Sender Name:</label>
                  <input name="sender_name" id="sender_name"  class="form-control" type="text" required="" placeholder="Sender Name">
                </div>
                <div class="form-group">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-dark btn-theme-colored btn-sm mt-0" data-loading-text="Please wait...">Send Message</button>
                </div>
              </form>
         </div>
          </div>
        </div>
  </div>
  </section> 
   <div class="table table-striped table-bordered">
     <table id="" class="table table-striped table-bordered">
                  <tbody>
                      <tr>
                      <th>Event No:</th>
                          <th>Event date</th>
                          <th>Event Name:</th>
                          <th>Event Details</th>
                          <th>Sender Name</th>
                          
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
          echo"connected";
          $query=mysqli_query($conn,"SELECT * FROM event_notification");
          if(mysqli_num_rows($query)>0)
          {
              while($rowdata=mysqli_fetch_assoc($query))
              {
               echo" <tr>";
               echo "<td>{$rowdata['faculty_id']}</td>";
               echo "<td>{$rowdata['event_date']}</td>";
               echo "<td>{$rowdata['event_name']}</td>";
               echo "<td>{$rowdata['event_details']}</td>";
               echo "<td>{$rowdata['sender_name']}</td>";
              
               echo "<td> <a href='notification_edit.php?eid={$rowdata['faculty_id']}'><img style='width:16px;' src='myimages/edit-icon.png'>Edit</a> | <a href='notification_edit.php?did={$rowdata['pro_id']}'><img style='width:16px;' src='myimages/delete-icon.png'> Delete</a> </td>";
    
               echo "</tr>";
      
              }
          }
      }
      ?>
              </tbody>
         </table>
      </div>
     

     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>