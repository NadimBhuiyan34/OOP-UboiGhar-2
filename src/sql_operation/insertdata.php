<?php
namespace uboighar\sql_operation;
class insertdata extends config{
 
public function sellbook($post)
{
     
    if(isset($_POST['submit'])){
        $booktitle=$_POST['booktitle'];
        $bookauthor=$_POST['bookauthor'];
        $bookedition=$_POST['bookedition'];
        $bookquantity=$_POST['bookquantity'];
        $bookprice=$_POST['price'];
        $mobile=$_POST['mobile'];
        $bookimage=$_FILES['bookimage'];
        $imagename=$bookimage['name'];
        $image_tmp_name=$bookimage['tmp_name'];
        
        $sql="INSERT INTO `sellbook`(`book_title`, `book_author`, `book_edition`, `book_quantity`,`price`, `mobile`, `book_image`) VALUES ('  $booktitle',' $bookauthor',' $bookedition','$bookquantity','$bookprice','$mobile','  $imagename')";
        $result=mysqli_query($this->conn,$sql);
    
        
        if(!empty( $bookimage))
        {
            $loc= $_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/images/sellbook/";
            $image= move_uploaded_file ( $image_tmp_name,$loc.$imagename);
        }
        else
        {
            echo "your file is empty";
        }
        if($result)
        {
           
             echo "<script> alert('Data Successfully inserted')</script>";
            // header("locationL:index.php");
         
        }
        else
        {
            echo "<script> alert('Data not inserted')</script>";
        }
    
    }

 
}
public function requestbook($post)
{
     
    if(isset($_POST['submit'])){
        $booktitle=$_POST['booktitle'];
        $bookauthor=$_POST['bookauthor'];
        $bookedition=$_POST['bookedition'];
        $bookquantity=$_POST['bookquantity'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $bookimage=$_FILES['bookimage'];
        $imagename=$bookimage['name'];
        $image_tmp_name=$bookimage['tmp_name'];
        $sql="INSERT INTO `request_book`(`book_title`, `book_author`, `book_edition`, `book_quantity`, `mobile`, `address`, `book_image`) VALUES ('$booktitle','$bookauthor','$bookedition','$bookquantity',' $mobile','$address','$imagename')";
        $result=mysqli_query($this->conn,$sql);
    
       
        if(!empty( $bookimage))
        {
            $loc= $_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/images/requestbook/";
            $image= move_uploaded_file ( $image_tmp_name,$loc.$imagename);
        }
        else
        {
            echo "your file is empty";
        }
        if($result)
        {
           
             echo "<script> alert('Data Successfully inserted')</script>";
            // header("locationL:index.php");
         
        }
        else
        {
            echo "<script> alert('Data not inserted')</script>";
        }
    
    }

 
}
public function donatetbook($post)
{
     
    if(isset($_POST['submit'])){

        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        $booktitle=$_POST['booktitle'];
        $bookauthor=$_POST['bookauthor'];
        $bookedition=$_POST['bookedition'];
        $bookquantity=$_POST['bookquantity'];
        $bookimage=$_FILES['bookimage'];
        $imagename=$bookimage['name'];
        $image_tmp_name=$bookimage['tmp_name'];
        $sql="INSERT INTO `donate_book`(`fullname`, `email`, `address`, `mobile`, `book_title`, `book_author`, `book_edition`, `book_category`, `book_image`) VALUES ('$fullname','$email','$address','$mobile','$booktitle','$bookauthor','$bookedition','$bookquantity',' $imagename')";
        $result=mysqli_query($this->conn,$sql);
    
        if(!empty( $bookimage))
        {
            $loc= $_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/images/donatebook/";
            $image= move_uploaded_file ( $image_tmp_name,$loc.$imagename);
        }
        else
        {
            echo "your file is empty";
        }
        if($result)
        {
           
             echo "<script> alert('Data Successfully inserted')</script>";
            // header("locationL:index.php");
         
        }
        else
        {
            echo "<script> alert('Data not inserted')</script>";
        }
    
    }

 
}
public function carousel($post)
{
     
    if(isset($_POST['submit'])){

        $bannertitle=$_POST['bannertitle'];
        $bannercaption=$_POST['bannercaption'];
        $bannerimage=$_FILES['bannerimage'];
        $imagename=$bannerimage['name'];
        $image_tmp_name=$bannerimage['tmp_name'];
        $sql="INSERT INTO `carousel`(`image`, `CarouselTitle`, `CarouselCaption`) VALUES ('$imagename','$bannertitle','$bannercaption')";
        $result=mysqli_query($this->conn,$sql);
    
        if(!empty( $bannerimage))
        {
            $loc= $_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/images/banner/";
            $image= move_uploaded_file ( $image_tmp_name,$loc.$imagename);
        }
        else
        {
            echo "your file is empty";
        }
        if($result)
        {
           
             echo "<script> alert('Data Successfully inserted')</script>";
            // header("locationL:index.php");
         
        }
        else
        {
            echo "<script> alert('Data not inserted')</script>";
        }
    
    }

 
}
public function read($tablename)
{
     $this->table=$tablename;
    
    $sql="SELECT * FROM $this->table";
    $result=mysqli_query($this->conn,$sql) or die("Query faild");
    return $result;
   
  
}
public function productdetails($id,$tablename)
{
       $this->id=$id;
       $this->table=$tablename;

         
        $sql="SELECT * FROM $this->table Where id=$this->id";
        $result=mysqli_query($this->conn,$sql) or die("Query faild");
         return $result;
   
   
  
}
public function delete($post,$tablename,$filename)
{
    $this->table=$tablename;
    $this->file=$filename;
  $id=$_REQUEST['did'];
  
  $sql="DELETE FROM $this->table WHERE id=$id";
$delete=mysqli_query($this->conn,$sql) or die("Query faild");
if($delete)
{
    header("location:$this->file");
}
else{
    echo "Data not deleted";
}
}
public function carouselupdate($post,$tablename)
{
    $id=$_REQUEST['uid'];
    $this->table=$tablename;
    
    $sql="SELECT * FROM $this->table WHERE id=$id";
    $update=mysqli_query($this->conn,$sql) or die("Query faild");
     $row=mysqli_fetch_assoc($update);
     return $row;
}
public function update($post,$tablename,$filename)
{
 
    $this->table=$tablename;
    $this->file=$filename;
   

     if(isset($_REQUEST['update']))
     {
         
        $id=$_REQUEST['uid'];
        $bannertitle=$_REQUEST['bannertitle'];
        $bannercaption=$_REQUEST['bannercaption'];
        $bannerimage=$_FILES['bannerimage'];
        $imagename=$bannerimage['name'];
        $image_tmp_name=$bannerimage['tmp_name'];
        $sql="UPDATE `carousel` SET `image`='$imagename',`CarouselTitle`='$bannertitle',`CarouselCaption`='$bannercaption' WHERE id=$id";
        $result=mysqli_query($this->conn,$sql);
        if(!empty( $bannerimage))
        {
            $loc= $_SERVER['DOCUMENT_ROOT']."/Book_Store_Demo/images/banner/";
            $image= move_uploaded_file ( $image_tmp_name,$loc.$imagename);
        }
        else
        {
            echo "your file is empty";
        }
        if ($result) {
      
            // echo "<script>alert('Successfully updated!');</script>";
            header("location:$this->file");
        
          }
          else {
            echo "Not inserted";
          }
     }
     
}

}