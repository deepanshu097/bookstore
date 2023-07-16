<?php include'/xampp/htdocs/BookStore/components/navbar.php'?>

<?php 
if(!isset($_SESSION['admin_id'])):
  header('location:login.php');
endif;
?>
<div class="body container-fluid  ">
      <section class=" col-lg-10 col-md-10 col-12  py-4  ">
        <div class="pl-5" >
      <form action="post_book_backend.php" method="post" enctype="multipart/form-data" class="container-fluid col-lg-10 col-md-10 col-12  py-4 my-4 card ">
       
      <div class=" book-image  pb-4">
        <label class="col-lg-6 col-md-6 col-3 ">Choose Image </label>
        <input class="book-url col-lg-7 col-md-7 col-12 form-img " name="image" type="file" placeholder="Enter Url" required>
      </div> 
      <div class=" book-name  pb-4">
        <label class="col-lg-3 col-md-3 col-12">Title</label>
        <input class="book-url col-lg-7 col-md-7 col-12 form-control" name="title" type="text" placeholder="Enter Title" required>
      </div>
      <div class=" book-name  pb-4">
        <label class="col-lg-3 col-md-3 col-12 ">Price</label>
        <input class="book-url col-lg-7 col-md-7 col-12 form-control " name="price" type="text" placeholder="Enter Price" required>
      </div>
      <div class=" book-name pb-4">
        <label class="col-lg-3 col-md-3 col-12">Description</label>
        <textarea type="text" name="description" class="book-url col-lg-7 col-md-7 col-12 form-control"  rows="15" placeholder="Enter description" required></textarea>
        
      </div>
      <div class="btn pb-4">
        <button type="submit"  class="btn-secondary col-lg-5 col-md-5 col-12 form-control text-center" name="post"> Post</button>
      </div>
      </form>
      </div>
      </section>
    
</div>
<?php include'/xampp/htdocs/BookStore/components/footer.php'?>
