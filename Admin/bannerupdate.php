<?php
$loc=$_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/vendor/autoload.php";
include_once "$loc";
use uboighar\sql_operation\config;
use uboighar\sql_operation\insertdata;
$insert=new insertdata();
$table="carousel";
$filename="banner.php";

 if(isset($_REQUEST['submit']))
 {
  $insert->update($_REQUEST,$table,$filename);
 }

?>