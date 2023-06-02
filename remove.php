<?php 
include('connectdb.php');

# removing data from cart by id  when remove click
    $id = $_GET['id'];
    $sql = "DELETE FROM `cart` WHERE `cart`.`product_id` = '$id'";
  $result=mysqli_query($con,$sql);
  if($result){
    header('Location:cart.php');
  }
  
    ?>