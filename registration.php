<?php 
include('connectdb.php');

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