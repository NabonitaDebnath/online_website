<?php
    include 'includes\common.php';
    if(!isset($_SESSION['Email'])){
        header('location:index.php');
    }
    $user_id=$_SESSION['User_id'];
    /*$item_id=$_GET['itemsid'];*/
    
   $query = "UPDATE users_items SET Status='Confirmed' WHERE User_id=" . $user_id . " AND Status='Added to cart' ";
    mysqli_query($con, $query) or die(mysqli_error($con));

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Success Page</title>
         <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascripit" src="bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .row_style{
                margin-top:10px;
            }
            footer{
                padding:10px 0px;
                background-color:#101010;
                color:#9d9d9d;
                bottom:0;
                width:100%;
                margin-top:8%;
            }
            #successs{
                padding-top:5%;
            }
        </style>
    </head>
    <body>
       <?php
            include 'includes\header.php';
        ?>
        <br><br><br> 
        <div class="container-fluid" id="successs">
            <div class="jumbotron">
            <center>
                <h3><strong>Your order is confirmed. Thank you for shopping with us.</strong></h3><hr>
                
                <h3><a href="product.php">Click Here</a> to purchase any other item.</h3>
            </center>
            </div>
        </div>
        <?php
            include 'includes\footer.php';
        ?>
         
    </body>
</html>
