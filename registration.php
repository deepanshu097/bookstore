<?php 
include('connectdb.php');

    $name=$_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password=mysqli_real_escape_string($con,stripcslashes($password));

    $sec_pass=md5($password);
    $msg='';
    $sql = "select * from users where email='$email' ";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if($num>0){
        $msg= 'already exist';
        $_SESSION['msg']=$msg;
        header('LOCATION:signup.php');
    }else{
        $mysql = "insert into users(name,contact,email,password) values('$name','$contact','$email','$sec_pass')";
        $result=mysqli_query($con,$mysql);
        if($result){
            $msg= 'Registered successfully';
            $_SESSION['msg']=$msg;
            header('LOCATION:signup.php');
        }else{
            $msg= 'not able to Register ';
            $_SESSION['msg']=$msg;
            header('LOCATION:signup.php');
        }


    }

?>