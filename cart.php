<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'components/all_css.php'?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="components/style.css">
    <title>BookStore</title>
  </head>
  <body >
    <?php include'components/navbar.php'?>
    <div class="text-center  my-2">
         <h1 class="text-secondary">BookStore Cart</h1>
  </div>
<div class="container-fluid row  mx-auto cart-body d-lg-flex">

<div class="container-fluid col-lg-9 col-md-9 col-11 my-4 mx-auto ">
 
<section class=" ">
  
  <?php include('connectdb.php');

$sql1= "SELECT b.title,b.description,b.price,c.product_count,c.total_price,c.product_count,b.url,c.product_id
        FROM books b
        JOIN cart c
        ON  (b.book_id = c.book_id)";

    $result = mysqli_query($con,$sql1);
    if(mysqli_num_rows($result)==0){
      $comment="Shop Now";
      echo "<a href='index.php'>$comment</a>";
    }
    while($data=mysqli_fetch_assoc($result)){
    ?>
      <div class="container-fluid row p-3  mx-auto my-2 border rounded ">
          <div class="cart-img col-10 col-lg-2 col-md-2  ">
            <img class=" img-fluid rounded img-cart img-thumbnail" alt="product image" name="col-12 col-lg-10 col-md-10" src=./image/<?php echo $data['url'] ?> >
          </div>
          <div class="col-10 col-lg-2 col-md-2  ml-1 mt-3 pt-4 ">
            <p><?php echo $data['title']?></p>
          </div>
       
          <div class="row col-10 col-lg-1 col-md-1 mt-3 pt-4 mx-1 ">
            <p>price <?php echo $data['price']?></p>
          </div>
          <div class="total col-10 col-lg-2 col-md-2 mt-3  mx-1 pt-lg-4  ">
            <p>total price <?php echo '$'.$data['total_price']?></p>
          </div>
          <form action="update.php" method="POST"class=" col-10 col-lg-3 col-md-3 mt-2  mx-1 ">
            <div class="row container-fluid d-lg-flex d-between-space border">
           
            <input type="hidden"  name="price" value="<?php echo $data['price']?>" >

            <input type="hidden"  name="product_id" value="<?php echo $data['product_id']?>">

            <div class="pt-4 mt-2 " >
              <label class="  ">Qty</label>
              <input type="number" min="1" max="5" name="product_count" style="border-color:grey;" value="<?php echo $data['product_count'] ;?>" class=" text-center mx-1 px-0  border-0 rounded" >
            </div>
            <div class=" pt-4  ml-lg-4">
              <button type="submit" class="col btn btn-secondary" value="">confirm</button>
              </div>
            </div>
          </form>
      
          <div class=" pt-4  ml-lg-4 ">
          <a type="submit" href=remove.php?id=<?php echo $data['product_id']?> onclick="" class="btn btn-danger my-2">Remove</a>
          </div>
      </div>

    <?php }?>
    </section>
    </div>

  <div class="checkout col-lg-3 col-md-3 col-11 my-4 mx-auto">
        <section class="card my-2">
            <div class="my-3 mx-auto ">
              <h2 class="my-3  text-center">checkout</h2>
                <form action="checkout.php" method="POST" class="checkout ">
                <?php 
                  global $total,$product_count,$product_id_array;
                      $sql1= "SELECT *
                              FROM cart" ;

                      $result = mysqli_query($con,$sql1);
                      while($data=mysqli_fetch_assoc($result)){
                        $product_id_array[]=array_push($product_id_array,$data['product_id']);
                        
                        $product_count+=$data['product_count'];
                        $total +=$data['total_price']; 
                      }
                ?>
                  <div class="d-flex py-3 mx-2">
                    <label class="col">No. of items </label> 
                    <input type="text" class="col border rounded mx-lg-4" value="<?php echo $product_count ; ?>" readonly>
                  </div >
                  <input type="hidden" name="product_id" value="<?php echo $data['product_id'] ; ?>">
                  
                  <div class="d-flex mx-2">
                    <label class="col">total price </label><input type="text" class="col border rounded mx-lg-4" value="<?php echo '$'.$total ; ?> "readonly>
                  </div>

                  <div class=" my-lg-4 my-col-2 text-right mx-4  ">
                  <button class="btn btn-success ">checkout</button>
                  </div>
                </form>
            </div>

        </section>
    </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php include'components/footer.php'?>
  </body>
</html>