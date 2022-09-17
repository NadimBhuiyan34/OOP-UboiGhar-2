<?php
 $loc=$_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/vendor/autoload.php";
include_once "$loc";
use uboighar\sql_operation\config;
use uboighar\sql_operation\insertdata;
 
 if(isset($_POST['submit'])){
    
    $insert=new insertdata();
 
    $insert->sellbook($_POST);
 }
 

 
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Sell Book|UBoiGhar</title>
  <?php  include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/link.php");?>
<style>
    *[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
</style>
</head>

<body>
 
<?php include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/include/header_footer_carousel/header.php");?>

 
 
<section class="">
 
	<img src="http://localhost/Book_Store_Demo/images/form_banner/sell.jpg" alt="" style="width: 100%;">
</section>
<section class="" style="background-color: #f4f9fc;">

 
<div class="container mt-2 ">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center">
                <h2>Unused Book Selling Processes</h2>
                <div class="divider mx-auto my-4"></div>
                <p>This is a short video, which helps beginners to sell their unused books via our online system. It will helps a seller to sell their unused books with a good price.
                     Sell easily set books ads and publish the ads in the system. On the other hand, Buyer can view and buy the books.</p>

                     <p>Sell needs to fill up some requirements as like:</p>
                     <p>1. Fill the below form with valid data</p>
                     <p>2. Give Clear Information</p>
                     

                     <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="checkbox" checked autocomplete="off"> SELL YOUR BOOKS
                        </label>
                      </div>
            </div>
        </div>
    </div>
</div>

 
<div class="container ">
    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
        <h2>Sell Book</h2>
        <br>

        

        <br>
        <br>
        
       
        <div class="form-group">
            <div class="col-sm-11">
                <input type="text" id="book title" placeholder="Book Title" class="form-control" autofocus require name="booktitle">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-11">
                <input type="text" id="book author" placeholder="Book Author" class="form-control" autofocus require name="bookauthor">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-11">
                <input type="text" id="book edition" placeholder="Book Edition" class="form-control" autofocus require name="bookedition">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-11">
                <input type="text" id="book quality" placeholder="Book Quantity" class="form-control" autofocus require name="bookquantity">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-11">
                <input type="text" id="book quality" placeholder="Book Price" class="form-control" autofocus require name="price">
            </div>
        </div>

      
       
        <div class="form-group">
           
            <div class="col-sm-11">
                <input type="phoneNumber" id="phoneNumber" placeholder="Your Phone number" class="form-control" require name="mobile">
               
            </div>
        </div>

        <div class="form-group" >
           
          
        </div>

        <div class="form-group" style="padding-left: 20px; color: gray;">
            <label for="exampleFormControlFile1">Book Image</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="bookimage">
          </div>
        <div class="form-group" style="padding-left: 20px; color: gray;">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          
          </div>

         
          
    
        
        </div> 
      
            
    
    </form>  <!-- /form -->
</div>
				 
			 
			 
</section>
	 
<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/include/header_footer_carousel/footer.php");?>		
   

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
   