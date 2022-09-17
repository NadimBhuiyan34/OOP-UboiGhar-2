<?php
 $loc=$_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/vendor/autoload.php";
 include_once "$loc";
 use uboighar\sql_operation\config;
 use uboighar\sql_operation\insertdata;
 $insert=new insertdata();
 
  //this is carousel read
     $tablename="sellbook"; 
     $insert->read($tablename);
     $result=$insert->read($tablename); 
    
  
?> 


<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>New Collection|UBoiGhar</title>
  <?php 
 include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/link.php");
?>
  <style>

.bt {
  background-color:white;
  border: none;
  color: white;
  
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.bt:hover {
  background-color: #3e8e41;
  color: white;
}
.clock {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    color: #17D4FE;
    font-size: 60px;
    font-family: Orbitron;
    letter-spacing: 7px;
   


}

  </style>
</head>

<body>
 
<?php include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/include/header_footer_carousel/header.php");?>
 
<marquee behavior="" direction="" style="background-color: yellow; width:100%;color: black;"> Welcome to our University Boighar</marquee>
  

 
 
 
 
<section class="gray-bg ">
	<section class="section service gray-bg ">
		<h1 class="text-center" style="margin-bottom: 100px;">Old Book</h1>
        <div class="input-group w-100 justify-content-center container mb-5">
            <div class="form-outline">
              <input id="search-input"  type="search" id="form1" class="form-control" placeholder="Search here" />
              
            </div>
            <button id="search-button" type="button" class="btn btn-primary">
              <i class="fas fa-search text-white"></i>
            </button>
          </div>
        
		   <div class="row">
			<?php 
			$table="sellbook";
			  while($row=mysqli_fetch_assoc($result))
			  {

			  
			?>
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="<?php echo "http://localhost/Book_Store_Demo/images/sellbook/".trim($row['book_image'])?>" alt="" style="height:300px;width:300px;margin-left:50px">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">


							<a href="http://localhost/Book_Store_Demo/include/product_details/bookdetails.php?id=<?php echo $row['id']?>&table=<?php echo $table?>"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
			   <?php 
			    }
			   ?>
		   </div>
	   </div>
   </section>
	 
</section>
 
 
				 
			 
	 
 
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
    <script src="  plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="http://localhost/Book_Store_Demo/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>



    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/one-page-nav-min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.meanmenu.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </body>
  </html>
   