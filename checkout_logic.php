<?php 
include "connectdb.php";
include "function_cart.php";

if(isset($_POST['pay'])){

global $total_prod,$paying_total,$order_id;
$order_prod_id=[];
$bool='false';
$r='false';
$c_id=$_SESSION['user_id'];
$c_email = $_SESSION['email'];
$c_name = $_SESSION['name'];
$order_id= order_id();

#extracting data from cart 

$sql="SELECT *
FROM cart WHERE user_id=$c_id";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);

while($data = mysqli_fetch_assoc($result)){
    
    $prod_id = $data['prod_id'];
    $prod_name = $data['prod_name'];
    $prod_price = $data['prod_price'];
    $total_price = $data['total_price'];
    $prod_count = $data['prod_count'];
    $total_prod += $prod_count;
    $paying_total += $total_price;
    
    $order_prod_id[ $prod_id]=[$prod_name,$prod_price,$prod_count];   
}


#inserting data into order_placed table 

$sql = "INSERT INTO order_placed(order_id,user_id,c_name,c_email,prod_count,total_price) VALUE ('$order_id','$c_id','$c_name','$c_email','$total_prod','$paying_total')";
$result=mysqli_query($con,$sql);

if($result>0 ){    
    $bool=='true';

}

#inserting data into ordered_prod table

    foreach($order_prod_id as $key=>$value){
        $prod_id=$key;
        $prod_name=$value[0];
        $prod_price=$value[1];
        $prod_count=$value[2];
        $date=$value[3];
        
      // "INSERT INTO(order_id,prod_name,prod_price,prod_count,prod_id)
                // VALUE('$order_id','$prod_name','$prod_price','$prod_count','$prod_id')";
                $sql1 =  " INSERT INTO ordered_prod(order_id,prod_name,prod_price,prod_count,prod_id) VALUES('$order_id','$prod_name','$prod_price','$prod_count','$prod_id')";
                $result= mysqli_query($con,$sql1);
                if($result>0){
                    header('location:orders.php');
                    $sql="DELETE FROM CART WHERE user_id='$c_id'";
                    $result=mysqli_query($con,$sql);
                    if($result>0){
                        header('location:orders.php');
                    }
                }
        echo ($order_id." ".$prod_id." ".$prod_name." ".$prod_price." ".$prod_count."<br> ");
     } 
    }
 ?>


