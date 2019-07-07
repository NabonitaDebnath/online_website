<?php
 include 'includes\common.php';
 if(isset($_GET['Id'])&& is_numeric($_GET['Id'])){
     $item_id=$_GET['Id'];
     $user_id=$_SESSION['User_id'];
     
    $query = "DELETE FROM users_items WHERE User_id='$user_id' AND Item_id='$item_id' ";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    header('location:cart.php');
 }
