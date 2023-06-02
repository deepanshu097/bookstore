<?php
include('connectdb.php');

if (isset($_POST['post'])) {

$imagename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "./image/".$imagename;

$image=$_FILES['image']['name'];
$title=$_POST['title'];
$price=$_POST['price'];
$description=$_POST['description'];

$sql="insert into books(title,url,price,description) values('$title','$imagename','$price','$description')";
$result = mysqli_query($con,$sql);

if (move_uploaded_file($tempname, $folder)) {
    
} else {
   
}

if ($result){
    echo "<h3>  Image uploaded successfully!</h3>";
    $_SESSION['msg']=' uploaded successfully';
    header('Location:post_book.php');
}
else{
    echo "<h3>  Failed to upload image!</h3>";
    $_SESSION['msg']='could not upload successfully';
    header('Location:post_book.php');
}
}

?>
