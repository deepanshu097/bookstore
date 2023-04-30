<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include 'components/all_css.php';?>
<link rel="stylesheet" href="components/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <?php include 'components/navbar.php';?>

 
<div class=" login container-fluid img">
  <div class="col-md-5 col-lg-5 col-11  py-4 my-4 mx-auto float-right  ">
<form action="registration.php" method="post" class=" text-center" >
<div class="form-row d-inline  my-4  ">
<div class="my-4 pb-4 "><h4 class="text-secondary mb-4 pb-4">Signup</h4></div>

<div class="col-md-10 col-lg-10 col-12 mb-3 mx-auto mt-4 d-flex pt-4 text-center">
  <label for="validationServer01" class="col-md-3 col-lg-3 col-3 "> Name</label>
  <input type="text" class="form-control col-md-9 col-lg-9 col-8" name="name" id="validationServer01" value="" required>
</div>

<div class="col-md-10 col-lg-10 col-12 mb-3 mx-auto d-flex text-center">
  <label for="validationServer01" class="col-md-3 col-lg-3 col-3 "> Contact no.</label>
  <input type="text" class="form-control col-md-9 col-lg-9 col-8" name="contact" id="validationServer01" value="" required>
</div>

<div class="col-md-10 col-lg-10 col-12 mb-3 mx-auto d-flex text-center">
  <label for="validationServer01" class="col-md-3 col-lg-3 col-3 "> Email</label>
  <input type="email" class="form-control col-md-9 col-lg-9 col-8" name="email" id="validationServer01" value="" required>
</div>

<div class="col-md-10 col-lg-10 col-12 mb-3 mx-auto text-center d-flex">
  <label for="validationServer02" class="col-md-3 col-lg-3 col-3">Create Password</label>
  <input type="password" class="form-control  col-md-9 col-lg-9 col-8" name="password" id="validationServer02" value=""  required>  
</div >

<div class="col-md-12 col-lg-10 col-12 my-3  ">
<button class="btn btn-secondary col-2 text-center " type="submit">Signup</button>
</div>

</div>
</form>
</div>
</div>



<?php include 'components/footer.php' ?>
  </body>
</html>