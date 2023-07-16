<?php include 'components/navbar.php'; ?>
<?php if(!isset($_SESSION['user_id'])){
    header("location:login.php");
  } ?>

<?php include 'connectdb.php';

$user_id = $_SESSION["user_id"];
$sql = "SELECT op.order_id,o_prod.prod_name,o_prod.prod_price,o_prod.prod_count,o_prod.prod_id,op.date from ordered_prod o_prod JOIN order_placed op ON (o_prod.order_id=op.order_id) WHERE op.user_id='$user_id'";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if($rows>0){
    while($data=mysqli_fetch_assoc($result)){
        $prod_name = $data['prod_name'];
$date = $data['date'];?>





<a href="index.php">home</a>
<p><?php echo $prod_name ?></p>
<p><?php echo $date ?></p>
<?php }
} ?>
<?php include 'components/footer.php' ?>