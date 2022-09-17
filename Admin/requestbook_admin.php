<?php
 $loc=$_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/vendor/autoload.php";
include_once "$loc";
use uboighar\sql_operation\config;
use uboighar\sql_operation\insertdata;
 //this is read data part
  $insert=new insertdata();
  $tablename="request_book"; 
  $insert->read($tablename);
  $result=$insert->read($tablename); 
  //this is delete part 
  if(isset($_REQUEST['did']))
 {
  $filename="requestbook_admin.php";
  $table="request_book";
   $insert->delete($_REQUEST,$table,$filename);
   

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include_once "sidebar.php"?>
    
    <?php include_once "header.php"?>
<div class="container mt-3">
              
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Book Title</th>
        <th>Book Author</th>
        <th>Book Edition</th>
        <th>Book Quantity</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Book Image</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
       while($row=mysqli_fetch_assoc($result))
       {

       
      ?>
      <tr>
        <td><?php echo $row['book_title']?></td>
        <td><?php echo $row['book_author']?></td>
        <td><?php echo $row['book_edition']?></td>
        <td><?php echo $row['book_quantity']?></td>
        <td><?php echo $row['mobile']?></td>
        <td><?php echo $row['address']?></td>
        <td><img src="<?php echo "http://localhost/Book_Store_Demo/images/sellbook/".trim($row['book_image'])?>" alt="" style="height:100px;width:100px"></td>
        <td>
          <a href="requestbook_admin.php?did=<?php echo $row['id']?>">
          <button type="submit" class="fa-solid fa-trash-can btn-white btn btn-sm ml-2" name="delete"></button></a>
          <a href="requestbook_admin.php?id=<?php echo $row['id']?>"><button type="submit" class="fa-solid fa-pencil ml-3 btn-white btn btn-sm "></button>
        </a>
        </td>
        
        
      </tr>
      <?php
       }
      ?> 
    </tbody>
  </table>
</div>

</body>
</html>
