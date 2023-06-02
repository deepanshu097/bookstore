<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<?php include 'components/all_css.php';?>
<link rel="stylesheet" href="components/style.css">
    <title>BookStore</title>
   
  </head>
  <body>
<?php include 'components/navbar.php';?>
 
    <div class=" login container-fluid img">
      <div class="col-md-5 col-lg-5 col-11  py-4 my-4 mx-auto float-right  ">
  <form action="validation.php" method="POST" class=" text-center" >
  <div class="form-row d-inline  my-4  ">
    <div class="my-4 text-secondary mb-4 pb-4 "><h4 class=" mb-4 pb-4">Login</h4></div>
   
    <div class="col-md-10 col-lg-10 col-12 mb-3 mt-4 pt-4 mx-auto d-flex text-center">
      <label for="validationServer01" class="col-md-3 col-lg-3 col-3 "> Email</label>
      <input type="email" class="form-control col-md-9 col-lg-9 col-8" name="email" id="validationServer01" value="" required>
    </div>

    <div class="col-md-10 col-lg-10 col-12 mb-3 mx-auto text-center d-flex">
      <label for="validationServer02" class="col-md-3 col-lg-3 col-3">Password</label>
      <input type="password" class="form-control  col-md-9 col-lg-9 col-8" name="password" id="validationServer02" value=""  required>  
    </div >
    
    <div class="col-md-12 col-lg-10 col-12 my-4 ">
    <button class="btn btn-secondary col-2 text-center mx-auto" type="submit">Login</button>
  </div>
  
</div>
</form>
</div>
</div>

   <?php include 'components/footer.php' ?>
  </body>
</html>