<?php
    
    function check_if_added($item_id){
        $con=mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
        $user_id=$_SESSION['User_id'];
        
        $user_query="SELECT * FROM users_items WHERE Item_id='$item_id' AND User_id='$user_id' AND Status='Added to cart' ";
        $result=mysqli_query($con,$user_query)or die(mysqli_error($con));
        if(mysqli_num_rows($result)>=1){
            return 1;
        }
        else{
            return 0;
        }
        
    }

