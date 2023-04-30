<?php 
session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo 'successful';
}
else{
    echo ' failed';
}

mysqli_select_db($con,'bookstore');

$email = $_POST['email'];
$password = $_POST['password'];

$sql =" select * from users where email='$email' && password='$password'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);

if($num=0){
    echo 'invalid credentials';
    $_SESSION['email'] = $email;
    header('location:login.php');
}
else{
    header('location:index.php');
}
?>