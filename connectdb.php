<?php
global $con;
 $con = mysqli_connect('localhost','root');
mysqli_select_db($con,'bookstore');
if($con){
    $msg= 'connected';
}
else{
    $error = 'database not connected';
}

?>