<?php
 $loc=$_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/vendor/autoload.php";
 include_once "$loc";
 use uboighar\sql_operation\config;
 use uboighar\sql_operation\insertdata;
 $insert=new insertdata();
 $tablename="carousel";
 $filename="banner.php";
 if(isset($_REQUEST['update']))
 {
   $insert->update($_REQUEST,$tablename,$filename);
 }
 else
 {
  $row=$insert->carouselupdate($_REQUEST,$tablename);
 }
  

  //this is carousel read  
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
     
     
  
    <?php include_once "sidebar.php"?>
    
    <?php include_once "header.php"?>
    <div class="container w-50 card py-2 mt-3">
     <div class="card-header">
     <h4 class="center">Insert Slider</h4>
     </div>
        
   <form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3 ">
    <label for="CarouselTitle" class="form-label">Banner Title</label>
    <input type="text" class="form-control" id="CarouselTitle" name="bannertitle" required value="<?php echo $row['CarouselTitle'] ?>">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Banner Caption</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="bannercaption" required value="<?php echo $row['CarouselCaption'] ?>">
  </div>
  <div class="mb-3">
    <img src="<?php echo "http://localhost/Book_Store_Demo/images/banner/".trim($row['image'])?>" alt="" style="height:100px;width:100%">
 
    <input type="file" class="form-control" id="exampleInputPassword1" name="bannerimage" required value="<?php echo $row['image'] ?>">
  </div>
   
  <button type="submit" class="btn btn-primary" name="update">Submit</button>
  
</form>
   </div>
     
    
    
        </div>
          
     
</body>
</html>