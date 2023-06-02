<?php 
include('connectdb.php');


$email = $_POST['email'];
$password = $_POST['password'];

if(isset($email) && isset($password)){
$email=stripcslashes($email);
$password=stripcslashes($password);
}

$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);

$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
$data=mysqli_fetch_assoc($result);

if($row>0){
    $_SESSION['name']=$data['name'];
    $_SESSION['role']=['admin'];
    print_r($data);
    header('location:book1.php');
}



?>