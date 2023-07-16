<?php 
include 'connectdb.php';
include 'components/navbar.php';

function order_id(){
    $limit=100;
    $user_id = $_SESSION['user_id'];
    $random_no = rand(999,$limit);
    $time = time();
    $id="OD".$random_no.$time.$user_id;
    return $id;
}

?>