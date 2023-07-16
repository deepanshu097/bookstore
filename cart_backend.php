<?php 
include('connectdb.php');
session_start();

$query_id = $_GET['id'];
$prod_name = $_GET['title'];
$prod_count =$_GET['book_count'];
$prod_price=$_GET['price'];
$total_price = $prod_count*$prod_price;

# Extracting all cart data from books database 

$sql = "SELECT * FROM books WHERE book_id='$query_id'";

$result = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($result);

#checking cart item present in data or not
$user_id = $_SESSION["user_id"];
$result=mysqli_query($con,"SELECT * FROM  cart WHERE book_id='$query_id' AND user_id=$user_id");
$row_count=mysqli_num_rows($result);

#checking if the result is null then insert detail into cart 

if($row_count==0){
    # inserting data into cart by id 
    $user_id = $_SESSION["user_id"];
    $sql="INSERT into cart(user_id,prod_name,prod_price,total_price,prod_count,book_id) VALUE('$user_id','$prod_name','$prod_price','$total_price','$prod_count','$query_id')";

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