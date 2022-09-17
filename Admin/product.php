<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ADMIN|UBoiGhar</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/color_2.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

 
   </head>
   <body >
    
            <!-- Sidebar  -->
            <?php include_once "sidebar.php"?>
            
            <!-- end sidebar -->
            <!-- right content -->
            <!-- topbar -->
            <?php include_once "header.php"?>
               <!-- end topbar -->

               
              <!-- dashboard inner -->
 <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Product List</h2>
                           </div>
                        </div>
                     </div>
                   
          
                     
                    <!-- This is form -->
<!--                     
<div class="container mt-3 card w-50 p-2" id="form">
 <div class="card-header">
    <h1 class="text-center">Product Add</h1>
 </div>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="title">Product Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter book title" name="title">
    </div>
    <div class="mb-3">
      <label for="description">Product Description:</label>
      <input type="text" class="form-control" id="decription" placeholder="Enter description" name="description">
    </div>
    <div class="mb-3">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>
    <div class="mb-3">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image"  name="image">
    </div>
    
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div> 
<div class="bg-white container m-3">
    <button class="btn btn-primary" id="#form" style="float:right">Add Product</button>
</div>
<div class="container mt-3 card p-5">
       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
<!-- /end of the form -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style2.js"></script>
      <script>src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"</script>
   </body>
</html>