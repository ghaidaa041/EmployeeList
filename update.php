<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql = "Select * from `crud` where id=$id";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    $sql="update `crud` set id=$id , name='$name' ,email='$email',mobile='$mobile' where id=$id";

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
    <input type="text" class="form-control"  placeholder="Enter Your Name" name ="name" autocomplete="off"
    value = <?php echo $name ;?>
    >
    </div> 

    <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter Your Email" name ="email" autocomplete="off"
    value = <?php echo $email ;?>
    >
    </div> 

    <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control"  placeholder="Enter Your Mobile Number" name ="mobile" autocomplete="off"
    value = <?php echo $mobile ;?>
    >
    </div> 

  <button type="submit" class="btn btn-primary"name = "submit" >Update</button>
</form>


    </div>

</body>
</html>