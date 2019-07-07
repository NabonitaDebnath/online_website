<?php
    include 'includes\common.php';
    if(isset($_GET['Pid'])&& is_numeric($_GET['Pid'])){
        $item_id=$_GET['Pid'];
        $user_id=$_SESSION['User_id'];
    $user_query_insert="INSERT INTO users_items(User_id,Item_id,Status) VALUES ('$user_id','$item_id','Added to cart')";
    mysqli_query($con,$user_query_insert)or die(mysqli_error($con));
    header('location:product.php');
    }
    