<!DOCTYPE html>
<html>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "test_db");
if($conn === false)
{
echo "ERROR: Could not connect.";
}
$faculty_id = $_REQUEST['faculty_id'];
$event_date = $_REQUEST['event_date'];
$event_name = $_REQUEST['event_name'];
$event_details = $_REQUEST['event_details'];
$sender_name = $_REQUEST['sender_name'];

$sql = "INSERT INTO event_notification VALUES ('$faculty_id','$event_date','$event_name','$event_details','$sender_name')";
if(mysqli_query($conn, $sql))
{
header("Location: notification.php");
echo" data has been inserted!";

}
else
{
echo "ERROR ";
}
mysqli_close($conn);
?>
</body>
</html>