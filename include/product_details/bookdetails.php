<?php
 $loc=$_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/vendor/autoload.php";
 include_once "$loc";
 use uboighar\sql_operation\config;
 use uboighar\sql_operation\insertdata;
 $insert=new insertdata();
 
  //this is product details read
  $id=$_REQUEST['id'];
  $table=$_REQUEST['table'];
     $insert->productdetails($id,$table);
     $result=$insert->productdetails($id,$table); 
    

  
?> 


<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Book Details|UBoiGhar</title>
  <?php 
 include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/link.php");
?>

  <style>

 
  </style>
</head>

<body>
	
<?php include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/include/header_footer_carousel/header.php");?>
<!-- Slider Start -->
 
<div class="container card " style="background-color: #c8f7f7;margin-bottom: 100px;">
    <h2 class="text-center m-3   card rounded-pill" style="background-color: #ed9dd1;"><b>Book Details</b></h2>

    <div class="row justify-content-center">
         <div class="col-3 card m-3  rounded" style="background-color: #c5f0e;">
           
			<div id="carouselExampleControlsNoTouching" class="carousel slide m-2" data-bs-touch="false" data-bs-interval="false">
				<div class="" >
      <?php
      while($row=mysqli_fetch_assoc($result)){
        
      
      ?>
				  <div class="">
					<img src="<?php echo "http://localhost/Book_Store_Demo/images/sellbook/".trim($row['book_image'])?>" class="d-block w-100" alt="..." style="height:300px ;">
				  </div>
				   
				   
				</div>
				 
			  </div>
         </div>
         <div class="col-5 m-3">
           <address class="">
               <p><b>Book Title: </b><?php echo $row['book_title']?></p>
               <p><b>Book Author: </b><?php echo $row['book_author']?></p>
               <p><b>Book Edition: </b><?php echo $row['book_edition']?></p>
               <p><b>Price: </b><?php echo $row['price']?></p>
               <p><b>Mobile Number: </b><?php echo $row['mobile']?></p>
			   <label for="number"><b>Quantity:</b></label>
			   <input type="number" placeholder="" value="1" style="width:80px ;" class="rounded"><br>
             <a href="cart.php">  <button class="btn   rounded-pill   m-2 fa-solid fa-cart-plus" style="background-color:#ed9dd1 ;"><span class="ml-2">Add to Cart</span></button></a>
			 
           </address>
         </div>
<?php
 }
?>

    </div>
</div>
<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/include/header_footer_carousel/footer.php");?>	
 
  
  
  
  
  
  </body>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>
   