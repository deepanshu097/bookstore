<?php 
include('connectdb.php');
session_start();

if(isset($_POST['submit'])){

$email = $_POST['email'];
$password = $_POST['password'];

if(isset($email) && isset($password)){
$email=stripcslashes($email);
$password=stripcslashes($password);
}

$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);
$sec_password=md5($password);

$sql="SELECT * FROM users WHERE email='$email' AND password='$sec_password' ";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
$data=mysqli_fetch_assoc($result);
$_SESSION["email"]=$data['email'];
$_SESSION["name"]=$data['name'];
$_SESSION["user_id"]=$data["user_id"];
$_SESSION["role"]="user";
if($rows>0){
    $_SESSION["msg"]="loggedin successfully  ";
    header('location:index.php');
}
else{
    $sql="SELECT * FROM admin WHERE email='$email' AND password='$sec_password' ";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
$data=mysqli_fetch_assoc($result);
    
$_SESSION["admin_id"]=$data['admin_id'];
$_SESSION["role"]="admin";
$_SESSION["name"]=$data["name"];
if($rows>0){ 
    echo '<script>alert("welcome admin");</script>';
    header('location:admin.php');
}else{
    header('location:login.php');
}
}

}
?>