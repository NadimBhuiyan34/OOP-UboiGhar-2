<?php
 $loc=$_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/vendor/autoload.php";
include_once "$loc";
use uboighar\sql_operation\config;
use uboighar\sql_operation\insertdata;
 //this is read data part
  $insert=new insertdata();
  $tablename="request_book"; 
  $requestbook=$insert->read($tablename); 
   
  
  
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Earn Money|UBoiGhar</title>
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

<body id="top">
 
<?php include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/include/header_footer_carousel/header.php");?>


<!-- Slider Start -->
<section class="">
	<img src="http://localhost/Book_Store_Demo/images/form_banner/earnmoney.jpg" alt="" style="width: 100%;">
</section>
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center">
                <h2>Earn Money</h2>
                <div class="divider mx-auto my-4"></div>
                <p>This is a short video, which helps beginners to sell their unused books via our online system. It will helps a seller to sell their unused books with a good price.
                     Sell easily set books ads and publish the ads in the system. On the other hand, Buyer can view and buy the books.</p>

                     <p>Sell needs to fill up some requirements as like:</p>
                     <p>1. Fill the below form with valid data</p>
                     <p>2. Give Clear Information</p>
                     

                     <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="checkbox" checked autocomplete="off"> Eran Money
                        </label>
                      </div>
            </div>
        </div>
    </div>
</div>

 
<div class="container">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Active Order</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Processing Order</button>
          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Completed Order</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <table class="table table-bordered">
                <thead>
                
                  <tr>
                    <th>Oder No</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Edition</th>
                    <th>Quantity</th>
                    <th>Address</th>
                    <th>Book Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  while($row=mysqli_fetch_assoc($requestbook))
                  {

                  
                  ?>
                  <tr>
                    <td><?php echo $row['id']  ?></td>
                    <td><?php echo $row['book_title']  ?></td>
                    <td><?php echo $row['book_author']  ?></td>
                    <td><?php echo $row['book_edition']  ?></td>
                    <td><?php echo $row['book_quantity']  ?></td>
                    <td><?php echo $row['mobile']  ?></td>
                    <td><?php echo $row['address']  ?></td>
                    <td><?php echo $row['book_image']  ?></td>
                    <td><button class="btn btn-success">ACCEPT</button></td>
                  </tr>
                  <?php
                   }  
                  ?> 
                   
                </tbody>
              </table>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Oder No</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Edition</th>
                    <th>Quantity</th>
                    <th>Book Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Object Oriented Programming</td>
                    <td>Thomas H. Cormen</td>
                    <td>5th</td>
                    <td>2</td>
                    <td>Image</td>
                    <td><button class="btn btn-success">ACCEPT</button></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Object Oriented Programming</td>
                    <td>Thomas H. Cormen</td>
                    <td>5th</td>
                    <td>2</td>
                    <td>Image</td>
                    <td><button class="btn btn-success">ACCEPT</button></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Object Oriented Programming</td>
                    <td>Thomas H. Cormen</td>
                    <td>5th</td>
                    <td>2</td>
                    <td>Image</td>
                    <td><button class="btn btn-success">ACCEPT</button></td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Oder No</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Edition</th>
                    <th>Quantity</th>
                    <th>Book Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Object Oriented Programming</td>
                    <td>Thomas H. Cormen</td>
                    <td>5th</td>
                    <td>2</td>
                    <td>Image</td>
                    <td><button class="btn btn-success">ACCEPT</button></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Object Oriented Programming</td>
                    <td>Thomas H. Cormen</td>
                    <td>5th</td>
                    <td>2</td>
                    <td>Image</td>
                    <td><button class="btn btn-success">ACCEPT</button></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Object Oriented Programming</td>
                    <td>Thomas H. Cormen</td>
                    <td>5th</td>
                    <td>2</td>
                    <td>Image</td>
                    <td><button class="btn btn-success">ACCEPT</button></td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div> <!-- /form -->
</div>
				 
			 
			 
 
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
   