<?php
 $loc=$_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/vendor/autoload.php";
 include_once "$loc";
 use uboighar\sql_operation\config;
 use uboighar\sql_operation\insertdata;
 $insert=new insertdata();
 
    
 
     $tablename="carousel"; 
     $result=$insert->read($tablename); 
     $count=mysqli_num_rows($result);
 
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

<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <?php
    $active="active";
    $aria="true";
    for ($i=0;$i<$count;$i++)
    {

  
    ?>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $i?>" class="<?php echo $active ?>" aria-label="Slide 1"></button>
     
     <?php
     $active="";
     $aria="";
    }
     ?>
  </div>
  <div class="carousel-inner">
   
    <?php
       $active="active";
        
    
       if(mysqli_num_rows($result)>0)
       {
       
         $root="http://localhost/Book_Store_Demo/images/banner/";
           while($row=mysqli_fetch_assoc($result))
           {
        
       ?>    
      
    <div class="carousel-item <?php echo $active?>">
      <img src="<?php echo $root.trim($row['image'])?>" class="d-block w-100" alt="..." style="">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $row['CarouselTitle']?></h5>
        <p><?php echo $row['CarouselCaption']?></p>
      </div>
    </div>
    <?php
       $active="";
              
    }
}
      ?> 
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</body>
</html>