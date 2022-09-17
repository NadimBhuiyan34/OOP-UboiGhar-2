<?php
 $loc=$_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/vendor/autoload.php";
include_once "$loc";
use uboighar\sql_operation\config;
use uboighar\sql_operation\insertdata;
 //this is read data part
  $insert=new insertdata();
  $tablename="request_book"; 
  $requestbook=$insert->read($tablename); 
  $requestdata=mysqli_num_rows($requestbook);
  $tablename="sellbook"; 
  $sellbook=$insert->read($tablename); 
  $selltdata=mysqli_num_rows($sellbook);

  $tablename="donate_book"; 
  $donatebook=$insert->read($tablename); 
  $donate=mysqli_num_rows($donatebook);
  
?>

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


      <style>

html {
  background: #282828;
  text-align: center;
  font-size: 10px;
}

body {
  margin: 0;
  font-size: 2rem;
  display: flex;
  flex: 1;
  min-height: 100vh;
  align-items: center;
}

.clock {
  width: 30rem;
  height: 30rem;
  border: 7px solid #282828;
  box-shadow: -4px -4px 10px rgba(67,67,67,0.5),
                inset 4px 4px 10px rgba(0,0,0,0.5),
                inset -4px -4px 10px rgba(67,67,67,0.5),
                4px 4px 10px rgba(0,0,0,0.3);
  border-radius: 50%;
  margin: 50px auto;
  position: relative;
  padding: 2rem;
 
}

.outer-clock-face {
  position: relative;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background: #282828;
  
 
  overflow: hidden;
}

.outer-clock-face::after {
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  transform: rotate(90deg)
}

.outer-clock-face::before,
.outer-clock-face::after,
.outer-clock-face .marking{
  content: '';
  position: absolute;
  width: 5px;
  height: 100%;
  background: #1df52f;
  z-index: 0;
  left: 49%;
}

.outer-clock-face .marking {
  background: #bdbdcb;
  width: 3px;
}

.outer-clock-face .marking.marking-one {
  -webkit-transform: rotate(30deg);
  -moz-transform: rotate(30deg);
  transform: rotate(30deg)
}

.outer-clock-face .marking.marking-two {
  -webkit-transform: rotate(60deg);
  -moz-transform: rotate(60deg);
  transform: rotate(60deg)
}

.outer-clock-face .marking.marking-three {
  -webkit-transform: rotate(120deg);
  -moz-transform: rotate(120deg);
  transform: rotate(120deg)
}

.outer-clock-face .marking.marking-four {
  -webkit-transform: rotate(150deg);
  -moz-transform: rotate(150deg);
  transform: rotate(150deg)
}

.inner-clock-face {
  position: absolute;
  top: 10%;
  left: 10%;
  width: 80%;
  height: 80%;
  background: #282828;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  z-index: 1;
}

.inner-clock-face::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 16px;
  height: 16px;
  border-radius: 18px;
  margin-left: -9px;
  margin-top: -6px;
  background: #4d4b63;
  z-index: 11;
}

.hand {
  width: 50%;
  right: 50%;
  height: 6px;
  background: #61afff;
  position: absolute;
  top: 50%;
  border-radius: 6px;
  transform-origin: 100%;
  transform: rotate(90deg);
  transition-timing-function: cubic-bezier(0.1, 2.7, 0.58, 1);
}

.hand.hour-hand {
  width: 30%;
  z-index: 3;
}

.hand.min-hand {
  height: 3px;
  z-index: 10;
  width: 40%;
}

.hand.second-hand {
  background: #ee791a;
  width: 45%;
  height: 2px;
}
      </style>
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
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                   
               <!-- end dashboard inner -->
               <div class="d-flex justify-content-between">
                    <div class="card col-3 mr-3 bg-info ">
                      <h5 class="text-center border mt-2 ">Total User<i class="fa-solid fa-users ml-5 m-2" style="font-size:20px;"></i></h5>
                      <h1 class="text-center mb-2 mt-2">100</h1>
                    </div>
                    <div class="card col-3 mr-3 bg-primary">
                     <h5 class="text-center   border mt-2">Total Requested<i class="fa-solid fa-book m-2" style="font-size:20px;"></i></h5>
                     <h1 class="text-center mb-2 mt-2"><?php echo $requestdata?></h1>
                    </div>
                    <div class="card col-3 mr-3 bg-warning">
                     <h5 class="text-center border mt-2">Total Sell Book<i class="fa-solid fa-book m-2 " style="font-size:20px;"></i></h5>
                     <h1 class="text-center mb-2 mt-2"><?php echo $selltdata?></h1>
                    </div>
                    <div class="card col-3 bg-success">
                     <h5 class="text-center border mt-2">Total Donate Book<i class="fa-solid fa-book m-2" style="font-size:20px;"></i></h5>
                     <h1 class="text-center mb-2 mt-2"><?php echo $donate ?></h1>
                    </div>
               </div>
               <div class="clock">
                  <div class="outer-clock-face">
                    <div class="marking marking-one"></div>
                    <div class="marking marking-two"></div>
                    <div class="marking marking-three"></div>
                    <div class="marking marking-four"></div>
                    <div class="inner-clock-face">
                      <div class="hand hour-hand"></div>
                      <div class="hand min-hand"></div>
                      <div class="hand second-hand"></div>
                    </div>
                  </div>
                </div>
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
            <script>
           
           const secondHand = document.querySelector('.second-hand');
          const minsHand = document.querySelector('.min-hand');
          const hourHand = document.querySelector('.hour-hand');
          
          function setDate() {
            const now = new Date();
          
            const seconds = now.getSeconds();
            const secondsDegrees = ((seconds / 60) * 360) + 90;
            secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
          
            const mins = now.getMinutes();
            const minsDegrees = ((mins / 60) * 360) + ((seconds/60)*6) + 90;
            minsHand.style.transform = `rotate(${minsDegrees}deg)`;
          
            const hour = now.getHours();
            const hourDegrees = ((hour / 12) * 360) + ((mins/60)*30) + 90;
            hourHand.style.transform = `rotate(${hourDegrees}deg)`;
          }
          
          setInterval(setDate, 1000);
          
          setDate();
            </script>

 
 
            </div>
         </div>
      </div>
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