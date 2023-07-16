<?php include'components/navbar.php'?>
    <div class="body container-fluid d-flex mx-auto">
    <section class="container-fluid col-lg-11 col-md-11 col-12 mx-auto">
        <div class="row container-fluid mt-1 mx-auto ">

        <?php include('connectdb.php');
            $sql12="SELECT * FROM BOOKS";
              $result=mysqli_query($con,$sql12);

              while($data = mysqli_fetch_assoc($result)){
            ?>

        <div class="card shadow col-lg-2 col-md-2 col-12 text-center my-2 mx-1">

            <div class="my-1">
                <img src="./image/<?php echo $data['url']; ?>" alt="" class=" img-fluid card-img-top product-img rounded"></img>
            </div>

            <div class=" text-center ">
            <h5 class="title card-title my-1"><?php echo $data['title']?></h5>
            <h5 class="price my-1"><small class="px-2"><s>$price</s><?php echo $data['prod_price']; ?></small></h5>
            <p class="description card-text my-2"><?php echo $data['description']; ?></p>
            </div>

       
            <div class="my-1 ">
            <a type="submit" href=cart_backend.php?id=<?php echo $data['book_id']?>&book_count=1&price=<?php echo $data['prod_price'];?>&title=<?php echo $data['title'];?> onclick="add_to_cart" class="btn btn-warning my-2">Add to cart</a>
            </div>
            <div class="my-1 ">
            <a type="submit" href=cart_backend.php?id=<?php echo $data['book_id']?>&book_count=1&price=<?php echo $data['prod_price'] ?> onclick="add_to_cart" class="btn btn-dark my-2">View product </a>
            </div>
   

          <?php  if(isset($_SESSION["admin_id"]) ){?>
            <div class="my-1 ">
            <a type="submit" href=cart_backend.php?id=<?php echo $data['book_id']?> onclick="add_to_cart" class="btn btn-secondary my-2">Edit</a>
            <a type="submit" href=cart_backend.php?id=<?php echo $data['book_id']?> onclick="add_to_cart" class="btn btn-danger my-2">Delete</a>
            </div>

          <?php }?>

        </div>
          <?php }?>
    </section>
        
  </div>

<?php include'components/footer.php'?>
