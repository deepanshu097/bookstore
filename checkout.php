<?php session_start();  if(!isset($_SESSION['user_id'])){
    header("location:login.php");
  } ?>
<section class="pay m-auto border" style="border:1px solid black;text-align:center;">

<div class="col pay text-center ">
    <h4 class="col">total products</h4>
    <p class="col"><?php 
    echo $_SESSION["product_count"]; ?></p>
</div>

<div class="col pay text-center">
    <h4 class="col">total amount </h4>
    <p class="col"><?php echo $_SESSION["total_price"];?></p> 
</div>
<p>click to pay</p>
<form action="checkout_logic.php" method="POST" >
<button type= "submit" name="pay" >pay</button>
</form>
</section>