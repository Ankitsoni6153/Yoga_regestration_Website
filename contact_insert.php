<!DOCTYPE html>
<html>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "test_db");
if($conn === false)
{
echo "ERROR: Could not connect.";
}
$name = $_REQUEST['name'];
$email_id = $_REQUEST['email_id'];
$reg_no = $_REQUEST['reg_no'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$sql = "INSERT INTO contact_us VALUES ('$name','$email_id','$reg_no','$subject','$message')";
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