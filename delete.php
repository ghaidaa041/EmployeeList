<?php
include 'connect.php';

f(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `crud` where id=$id"; 

    $res=mysqli_query($con,$sql);

    if($res){
        // header('location:display.php');
        echo "rrr";
    }else{
        die(mysqli_error($con));

    }


?>