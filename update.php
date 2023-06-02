
<?php
include('connectdb.php');
    #updating book count

    $product_count = $_POST['product_count'];
    $product_id = $_POST['product_id'];
    $price = $_POST['price'];
    $total_price = $product_count * $price ; 
    $sql ="UPDATE `cart` SET `product_count` = '$product_count' WHERE `cart`.`product_id` ='$product_id' ";
    $update_result = mysqli_query($con,$sql);
    if($update_result){
        header('Location:cart.php'); 
    }

?>