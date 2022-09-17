<?php
include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store/include/config.php");
$id=$_REQUEST['id'];
$sql="DELETE FROM carousel WHERE id=$id";
$delete=mysqli_query($con,$sql) or die("Query faild");
if($delete)
{
    header("location:banner.php");
}
else{
    echo "Data not deleted";
}
?>