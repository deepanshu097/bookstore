<?php 
include('connectdb.php');

$query_id = $_GET['id'];
$book_count =$_GET['book_count'];
$price=$_GET['price'];
$total_price = $book_count*$price;

# Extracting all cart data from books database 

$sql = "SELECT * FROM books WHERE book_id='$query_id'";

$result = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($result);

#checking cart item present in data or not

$result=mysqli_query($con,"SELECT * FROM  cart WHERE book_id='$query_id'");
$row_count=mysqli_num_rows($result);

#checking if the result is null then insert detail into cart 

if($row_count==0){
    # inserting data into cart by id 
    $sql="INSERT into cart(price,total_price,product_count,book_id) VALUE('$price','$total_price','$book_count','$query_id')";
    $add_cart_by_id=mysqli_query($con,$sql);
    if($add_cart_by_id){
        $_SESSION['$msg']['$success'];
        header('Location:index.php');
    }else{
        $_SESSION['$msg']['$failed'];
        header('Location:index.php');
    }}
    else{
        echo "already added to cart";
        header('Location:index.php');
    }

?>