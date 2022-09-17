<?php
include_once($_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/include/config.php");
if(isset($_POST['submit']))
{
    $booktitle=$_POST['booktitle'];
    $booauthor=$_POST['bookauthor'];
    $bookedition=$_POST['edition'];
    $bookprice=$_POST['price'];
    $bookimage=$_FILES['image'];
    $image_name=$bookimage['name'];
    $image_tmp=$bookimage['tmp_name'];
    $sql= "INSERT INTO newcollectionbook ( `booktitle`, `bookauthor`, `bookedition`,`bookprice`,`bookimage`) VALUES ( '  $booktitle', '$booauthor', '$bookedition','$bookprice','$image_name')";
    $result=mysqli_query($con,$sql);

    if ($result) {
  
       echo "data insert";
    
      }
      else {
        echo "Not inserted";
      }
      if(!empty( $image_name))
      {
          $loc= $_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/Admin/admin/images/newcollection/";
          
          move_uploaded_file ( $image_tmp,$loc.$image_name);
        
      }
      else
      {
          echo "your file is empty";
      }

}
$query="SELECT * FROM newcollectionbook";
  $result=mysqli_query($con,$query) or die("Query faild");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Collection Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-3 card w-50">
 <div class="card-header">
     <h1>Insert New Collection</h1>
 </div>
  <form action="" method="post" enctype="multipart/form-data">
      
    <div class="mb-3 mt-3">
      <label for="title">Book Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter book title" name="booktitle" required>
    </div>
    <div class="mb-3">
      <label for="author">Book Author</label>
      <input type="text" class="form-control" id="author" placeholder="Enter book author" name="bookauthor" required>
    </div>
    <div class="mb-3">
      <label for="edition">Book Edition</label>
      <input type="text" class="form-control" id="author" placeholder="Enter book edition" name="edition" required>
    </div>
    <div class="mb-3">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" placeholder="Enter book price" name="price"required>
    </div>
    <div class="mb-3">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="image" placeholder="Enter book  image" name="image" required>
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
<div class="container mt-3 bg-white p-5 overflow-auto mb-5" style="width:800px ;color:black;height:300px">
          
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Book Title</th>
                <th>Book Author</th>
                <th>Book Edition</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
               $active="active";
                
            
               if(mysqli_num_rows($result)>0)
               {
                //  $loc="include/images/";
                 $loc= $_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/images/newcollection/";
                   while($row=mysqli_fetch_assoc($result))
                   {
                
               ?>    
              <tr>
                <td><?php echo $row['booktitle']?></td>
                <td><?php echo $row['bookauthor']?></td>
                <td><?php echo $row['bookedition']?></td>
                <td><?php echo $row['bookprice']?></td>
                <td><img src="images/newcollection/<?php echo $row['bookimage']?>" alt="" style="width:50px;height:50px"></td>
                <td><a class="fa-solid fa-pencil  text-success" href="update.php?id=<?php echo $row['id']?>"></a><a class="fa-solid fa-trash-can ml-5 text-danger" href="delete.php?id=<?php echo $row['id']?>"></a></td>
          
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
