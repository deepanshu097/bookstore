<?php 
class Car{
    public $name;
    public $brand;
    public $price ;

    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
       return $this->name;
    }
    function set_brand($brand){
        $this->brand=$brand;
    }
    function get_brand(){
       return $this->brand;
    }

}

$car = new Car(); 
$car->set_name("wagnor");
$car->set_brand("maruti ");


#armstrong no 
function armstrong($number){
$count=0;
$temp=$number;
$sum=0;
$rem=0;
$total=0;

#for finding no of digits

while($number!=0){
    $number=(int)($number/10);
    $count++;
}
$digits = $count;

while($temp!=0){
$rem=$temp%10;
$temp=(int)$temp/10;
$sum=$sum+pow($rem,$digits);
}
 return $sum;

}
/*$num=2;
$n=armstrong($num);
 echo $n;
if($n==$num){
    echo "yes";
}
else
{
    echo "no";
}
*/
if(isset($_POST['submit'])){
    if(isset($_POST['choose'])=='armstrong'){

        $choose=$_POST['choose'];
    $num=$_POST['number'];
    $k=armstrong($num);
    if($num==$k){
        $result= "yes,its armstrong number";
    }
    else
    {
        $result= "no,its not armstrong number";
    }
}

else if(isset($_POST['choose'])=='prime'){
    $result= "no,its prime number";
}
else if(isset($_POST['choose'])=='odd'){
}
else if(isset($_POST['choose'])=='even'){
}

}


?>


<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
                        input[type=text]{
               border: none;
            }
            input[type=text]:focus{
                border-color: burlywood;
            }
        </style>
    </head>
    <body>
       <div class="container mx-auto text-center py-4 my-5 border card">
        <form action="oops.php" method="post" >
        <h4 class="my-4">check for Armstrong number</h4>
            
            <input type="text" name="number" class="my-2 mx-3 " placeholder="enter valid number"required>
            <select name="choose" class="my-2 mx-3 " required>
                <option>choose</option>
                <option value="prime">Prime number</option>
                <option value="armstrong">Armstrong number</option>
                <option value="odd">Odd</option>
                <option value="even">even</option>
            </select>
            <button type="submit" name="submit" class="btn btn-secondary">submit</button>
        </form>
        <h5>Result : </h5><p><?php echo $result; ?></p>
        <?php echo $choose; ?>
        </div>
    </body>
</html>