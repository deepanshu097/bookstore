<?php session_start();  ?>
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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BookStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-3">
    <li class="nav-item active">
        <a class="nav-link mt-4" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
  <?php if(isset($_SESSION['role']) && ($_SESSION["role"] == "admin")){ ?>
      <li class="nav-item ">
        <a class="nav-link mt-4" href="post_book.php">Post Book <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link mt-4" href="post_book.php">View Book <span class="sr-only">(current)</span></a>
      </li>
    <?php } ?>
       
      <?php if(isset($_SESSION['role']) && ($_SESSION["role"] == "user")){ ?>
      <li class="nav-item ">
        <a class="nav-link mt-4" href="gallary.php">Books Gallary <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link mt-4" href="cart.php">Cart <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link mt-4" href="orders.php">orders <span class="sr-only">(current)</span></a>
      </li>
  <?php } ?>

    </ul>
      <ul class="navbar-nav form-inline my-2 my-lg-0">

<?php if(isset($_SESSION['role'])): ?>
  
        <li class="nav-item mt-4">
          <a class="nav-link " href="#">
    <?php if(isset($_SESSION['name']))
    echo $_SESSION["name"];
    ?>
          <span class="sr-only">(current)</span></a>
       </li>

    <li class="nav-item mt-4">
      <a class="nav-link " href="logout.php" tabindex="-1" >Logout<span class="sr-only">(current)</span></a>
    </li>
 <?php  endif;?>

 <?php if(!isset($_SESSION['role'])): ?>
    <li class="nav-item mt-4">
          <a class="nav-link " href="login.php">Login<span class="sr-only">(current)</span></a>
    </li>
   <li class="nav-item mt-4">
      <a class="nav-link " href="signup.php" tabindex="-1" >Signup<span class="sr-only">(current)</span></a>
    </li>
    <?php endif;?>
    </ul>
  </div>
</nav>

