<?php
 $loc=$_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/vendor/autoload.php";
 include_once "$loc";
 use uboighar\sql_operation\config;
 use uboighar\sql_operation\insertdata;
 $insert=new insertdata();
 //this is carousel insert
  if(isset($_POST['submit'])){
     
    
     $insert->carousel($_POST);

  }
  //this is carousel read
     $tablename="carousel"; 
     $insert->read($tablename);
     $result=$insert->read($tablename); 
     //this is carousel delete
  if(isset($_REQUEST['did']))
 {
  $table="carousel";
  $filename="banner.php";
   $insert->delete($_REQUEST,$table,$filename);
   

 }
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
    <input type="text" class="form-control" id="CarouselTitle" name="bannertitle" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Banner Caption</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="bannercaption" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Banner Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="bannerimage" required>
  </div>
   
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>
     
    
   
<!-- Table -->
<div class="container mt-3 bg-white p-5 overflow-auto mb-5" style="width:800px ;color:black;height:300px">
          
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Image Name</th>
                <th>Carousel Title</th>
                <th>Carousel Caption</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
               $active="active";
                
            
               if(mysqli_num_rows($result)>0)
               {
                 $loc="include/images/";
                   while($row=mysqli_fetch_assoc($result))
                   {
                
               ?>    
              <tr>
                <td><?php echo $row['image']?></td>
                <td><?php echo $row['CarouselTitle']?></td>
                <td><?php echo $row['CarouselCaption']?></td>
                <td>
                <a href="banner.php?did=<?php echo $row['id']?>">
                <button type="submit" class="fa-solid fa-trash-can btn-white btn btn-sm ml-2" name="delete"></button>
              </a>
              <a href="slider_update.php?uid=<?php echo $row['id']?>">
              <button type="submit" class="fa-solid fa-pencil ml-3 btn-white btn btn-sm " name="update">

              </button>
              </a>
                  
                </td>
          
              </tr>
              <?php
               $active="";
                      
            }
        }
              ?> 
              
            </tbody>
          </table>
        </div>
          
     
</body>
</html>