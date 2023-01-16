<?php

if(isset($_GET['did']))
{
    $did = $_GET['did'];
    
  $deleteq =    mysqli_query($connection, "delete from event_notification where faculty_id ='{$did}'") or die(mysqli_error($connection));
     
  if($deleteq)
  { 
      echo "<script>alert('Record Deleted');</script>";
  }
}

$selectq = mysqli_query($connection, "select * from event_notification") or die(mysqli_error($connection));
$count = mysqli_num_rows($selectq);
echo $count . " Records Found";

while($rowdata = mysqli_fetch_array($selectq))
{
    echo "<tr>";
    echo "<td>{$rowdata['faculty_id']}</td>";
    echo "<td>{$rowdata['event_date']}</td>";
    echo "<td>{$rowdata['event_name']}</td>";
    echo "<td>{$rowdata['event_details']}</td>";
    echo "<td>{$rowdata['sender_name']}</td>";
     echo "<td> <a href='edit-product.php?eid={$rowdata['faculty_id']}'><img style='width:16px;' src='myimages/edit-icon.png'>Edit</a> | <a href='display-product.php?did={$rowdata['pro_id']}'><img style='width:16px;' src='myimages/delete-icon.png'> Delete</a> </td>";
    echo "</tr>";
}


?>
                             
                                    
                                    
                                    
                                    
                          