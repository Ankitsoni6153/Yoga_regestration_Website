<!DOCTYPE html>
<html>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "test_db");
if($conn === false)
{
echo "ERROR: Could not connect.";
}
$student_name = $_REQUEST['student_name'];
$reg_no = $_REQUEST['reg_no'];
$email_id = $_REQUEST['email_id'];
$phone_no = $_REQUEST['phone_no'];
$course = $_REQUEST['course'];
$event_name = $_REQUEST['event_name'];
$sql = "INSERT INTO eventreg VALUES ('$student_name','$reg_no','$email_id','$phone_no','$course','$event_name')";
if(mysqli_query($conn, $sql))
{
header("Location: eventrg1.php");
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