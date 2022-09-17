<?php
include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store/include/config.php");
$id=$_REQUEST['id'];
 
$sql="SELECT * FROM carousel WHERE id=$id";
$update=mysqli_query($con,$sql) or die("Query faild");
 $row=mysqli_fetch_assoc($update);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container w-50 card py-2">
     <div class="card-header">
     <h4 class="center">Insert Slider</h4>
     </div>
   <form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3 ">
    <label for="CarouselTitle" class="form-label">Banner Title</label>
    <input type="text" class="form-control" id="CarouselTitle" name="bannertitle"value="<?php echo $row['CarouselTitle']?>" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Banner Caption</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="bannercaption"value="<?php echo $row['CarouselCaption']?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Banner Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="bannerimage">
  </div>
   
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $bannertitle=$_POST['bannertitle'];
    $bannercaption=$_POST['bannercaption'];
    $bannerimage=$_FILES['bannerimage'];
    $image_name=$bannerimage['name'];
    $image_tmp_name=$bannerimage['tmp_name'];
    // $qur= "INSERT INTO carousel ( `image`, `CarouselTitle`, `CarouselCaption`) VALUES ( ' $image_name', '$bannertitle', '  $bannercaption')";
    $sql="UPDATE carousel SET `image`='[$image_name]',`CarouselTitle`='[$bannertitle]',`CarouselCaption`='[$bannercaption]' WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if ($result) {
  
        echo "<script>alert('Successfully updated!');</script>";
    
      }
      else {
        echo "Not inserted";
      }
      if(!empty( $image_name))
      {
          $loc= $_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/images/banner/";
          move_uploaded_file ( $image_tmp_name,$loc.$image_name);
      }
      else
      {
          echo "your file is empty";
      }
}


?>