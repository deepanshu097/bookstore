<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'components/all_css.php'?>
    <link rel="stylesheet" href="components/style.css">
    <title>BookStore</title>
  </head>
  <body>
    <?php include'components/navbar.php'?>
    <div class="body container-fluid d-flex">
 
<section class="col-lg-11 col-md-11 col-12 mx-auto">
<div class="row mt-1 mx-auto ">

<?php include('connectdb.php');
if(isset($_SESSION['success'])){
  echo $_SESSION['success'];
}
    $sql12="SELECT * FROM BOOKS";
      $result=mysqli_query($con,$sql12);
      while($data = mysqli_fetch_assoc($result)){
    ?> 
<div class="card shadow col-lg-2 col-md-2 col-12 text-center my-3  mx-1 ">

<div class="my-2">
    <img src="./image/<?php echo $data['url']; ?>" alt="" class=" img-fluid card-img-top product-img rounded"></img>
</div>

<div class=" text-center ">
<h5 class="title card-title my-2"><?php echo $data['title']?></h5>
<h5 class="price my-2"><small class="px-2"><s>$price</s><?php echo $data['price']; ?></small></h5>
<p class="description card-text my-2"><?php echo $data['description']; ?></p>
</div>

<div class="my-2 ">
<a type="submit" href=cart_backend.php?id=<?php echo $data['book_id']?>&book_count=1&price=<?php echo $data['price'] ?> onclick="add_to_cart" class="btn btn-warning my-2">Add to cart</a>
</div>

</div>
<?php }?>
</section>
 
</div>

<script>
  function add_to_cart(){
    
    if(<?php session_start();$_session['msg'] ?>=='success' ){
      alert("added to cart");
    }
    else{
      alert("already added to cart");
    } 
  }
</script>

    <?php include'components/footer.php'?>
  </body>
</html>