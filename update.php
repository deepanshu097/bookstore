<?php if(!isset($_SESSION['user_id'])){
    header("location:login.php");
  } ?>
<?php
include('connectdb.php');
    #updating book count

    $prod_count = $_POST['prod_count'];
    $prod_id = $_POST['prod_id'];
    $prod_price = $_POST['price'];

    $total_price = $prod_count * $prod_price ; 

    $sql ="UPDATE `cart` SET prod_count = '$prod_count', total_price ='$total_price'
    WHERE `cart`.`prod_id` ='$prod_id' ";
    $update_result = mysqli_query($con,$sql);
    if($update_result){
        header('Location:cart.php'); 
    }

?>