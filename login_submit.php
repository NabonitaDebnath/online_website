<?php
    require 'includes\common.php';
    
    $email=$_POST['email'];
    $email= mysqli_real_escape_string($con,$email);
    $password=$_POST['password'];
    $password= mysqli_real_escape_string($con,$password);
    $password= md5($password);
    $fetch_data="SELECT Id,Email FROM users WHERE Email='$email' AND Password='$password'";
    $select_query_fetched=mysqli_query($con,$fetch_data)or die(mysqli_error($con));
    if(mysqli_num_rows($select_query_fetched)==0){
        $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
        header('location: login.php?error=' . $error);
    }
    
    else{
        $row=mysqli_fetch_array($select_query_fetched);
        
        $_SESSION['User_id']=$row['Id'];
        $_SESSION['Email']=$row['Email'];
         header('location:product.php');
        
    }

