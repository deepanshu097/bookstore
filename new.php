<html>
<head>
<title></title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    html{
        margin:0px;
        padding: 0px;
    }
   form .btn{
        background-color: cornflowerblue;
        border:none;
    }
    form .btn:hover{
        background-color:white;
        border:1px solid cornflowerblue ;
    }
    form label{
        cursor:grab;
    }
    form .input_field{
    border: cornflowerblue solid 1px;
    background-color:aliceblue;
    
    }


    form .add_row{
        border: cornflowerblue solid 1px ;
        border-radius: 10px;
        background-color:aliceblue;
    }
</style>
</head>
<body>

<form action="">
<div class="col-lg-10 col-md-10 col-sm-11 col-xs-11 mx-auto">

<div class="container-fluid row add_row col-lg-12 col-md-12 col-sm-11 col-xs-11 my-4 py-4  float-center d-md-flex d-lg-flex justify-content-between mx-auto " id="add_row">
        
    <div class="col-lg-2 col-md-2 col-sm-11 col-xs-11 p-0" id="name_div">
        <label class="mr-1 col-lg-12 col-md-12 col-sm-11 col-xs-11">Name :</label>
        <input type="text" name="name" id="name" class="input_field col-lg-12 col-md-12 col-sm-11 col-xs-11 rounded">
    </div>

    <div class="col-lg-2 col-md-2 col-sm-11 col-xs-11 p-0" id="lname_div"> 
        <label class="mr-1 col-lg-12 col-md-12 col-sm-11 col-xs-11">Last name :</label>
        <input type="text" name="l_name" id="l_name" class="input_field col-lg-12 col-md-12 col-sm-11 col-xs-11 rounded">
    </div >

    <div class="col-lg-2 col-md-2 col-sm-11 col-xs-11 p-0" id="phone_div">
        <label class="mr-1 col-lg-12 col-md-12 col-sm-11 col-xs-11 ">Phone no. :</label>
        <input type="text" name="Phone" id="phone" class="input_field col-lg12 col-md-12 col-sm-11 col-xs-11 rounded">
    </div>

    <div class="col-lg-2 col-md-2 col-sm-11 col-xs-11 container-fluid  px-lg-0 mx-0" id="radio_div" >
        <label class="col-lg-11 col-md-11 col-sm-11 col-xs-11 mx-auto px-lg-0">Gender :</label>

        <div class="col-lg-11 col-sm-11 col-xs-11 row d-lg-flex mx-auto px-0 ">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 px-0 d-sm-flex d-xs-flex">
                <label class="mr-2">Male 
                <input type="radio" name="gender" value="male" id="gender" class=" mx-1 radio_field rounded"></label>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-11 col-xs-11 d-sm-flex d-xs-flex px-lg-0 ">
                <label class=" ">Female
                <input type="radio" name="gender" value="female" id="gender" class="mx-1 radio_field  rounded"></label>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-11 mx-4 px-0 remove" id="remove_btn_div">
        <button name="remove" id="remove_btn" class=" btn mt-lg-4 pt-lg-1 col-lg-12 m-0 ">Remove</button>
    </div>

</div>

    <div class="add_row col-lg-3 col-md-3 col-sm-8 col-xs-8 py-4 float-right mx-auto" id="add_btn_div">
    <button name="add_btn" id="add_btn" class="col-lg-12 col-md-12 col-sm-8 col-xs-8 col-3 btn mt-lg-2 pt-lg-1 ">Add rows</button>
    <br>
    <button type="submit"name="add_btn" id="add_btn"
     class="col-lg-12 col-md-12 col-sm-8 col-xs-8 col-3 btn mt-lg-2 pt-lg-1">Submit</button>
    </div>

</div>

</form>

<script>
    function add_row(){
        var bodydiv=document.getElementById("add_row");
        var innerdiv=document.getElementById("");
}
    </script>
</body>
</html>