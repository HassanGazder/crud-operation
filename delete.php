<?php
include 'connect.php';
$delete = "delete from crud where ID = '".$_GET["id"]."'";
$delete1 = mysqli_query($conn, $delete);

if($delete1)
{
    header("Location:display.php");
}
else
{
    echo '<div class="alert alert-danger" role="alert">
   Data Not Deleted
      </div>';
}
?>