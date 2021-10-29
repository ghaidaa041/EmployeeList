<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    $sql="insert into `crud` (name,email,mobile) 
    values('$name','$email','$mobile')";

    $res=mysqli_query($con,$sql);

    if($res){
        header('location:display.php');
    }else{
        die(mysqli_error($con));

    }



}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Employees List</title>
  </head>
  <body>
    <div class="container my-5">

    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Enter Your Name" name ="name" autocomplete="off">
    </div> 

    <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter Your Email" name ="email" autocomplete="off">
    </div> 

    <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control"  placeholder="Enter Your Mobile Number" name ="mobile" autocomplete="off">
    </div> 

  <button type="submit" class="btn btn-primary"name = "submit" >Submit</button>
</form>


    </div>

</body>
</html>