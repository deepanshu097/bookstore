<?php 

session_start();
header('location:login.php');


$con = mysqli_connect('localhost','root');
if ($con){
echo 'connection successful';
}
else{
    echo ' unable to connect';
}

mysqli_select_db($con,'bookstore');
$name=$_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from users where email='$email' ";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
if($num>0){
    echo 'already exist';
}else{
    $mysql = "insert into users(name,contact,email,password) values('$name','$contact','$email','$password')";
    mysqli_query($con,$mysql);
    
}
 
?>