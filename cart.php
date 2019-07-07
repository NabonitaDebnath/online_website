<?php
    include 'includes\common.php';
    if(!isset($_SESSION['Email'])){
        header('location:index.php');
    }
?>
<html>
    <head>
        <title>Cart Page</title>
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
                margin-top:30%;;
            }
            #tabble{
                background-color: rgba(128,128,128,0.1);
            }
            
            </style>
    </head>
    <body>
        <?php
            include 'includes\header.php';
        ?>
        <br><br><br><br><br>
    <center>
        <div class="container">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $id=NULL;
                        $user_id = $_SESSION['User_id'];
                        $query = "SELECT items.Price AS Price, items.Pid AS Pid ,items.Name AS Name FROM users_items JOIN items ON users_items.Item_id = items.Pid WHERE users_items.User_id='$user_id' and Status='Added to cart'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id =$id . $row["Pid"] . ","; 
                                    echo "<tr><td>" . "#" . $row["Pid"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?Id=".$row["Pid"]."' > Remove</a></td></tr>";
                                      
                                }
                                $id = rtrim($id, ",");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
    <!--<center>
        <div class="container">
             <div class="table-responsive">
                 <table class="table">
                     <tbody>
                         
                         <tr>
                             <th >Item Number</th>
                             <th >Item Name</th>
                             <th >Price</th>
                             <th> </th>
                         </tr>
                         
                         <tr id="tabble">
                             <td> </td>
                             <td><strong>Total</strong></td>
                             <td><strong>Rs 0</strong></td>
                             <td><a href="success.php"  class="btn btn-primary">Confirm Order</a></td>
                         </tr>
                     </tbody>
                 </table>
            </div> -->  
        </div>
    </center>
    <?php
            include 'includes\footer.php';
    ?>
    </body>
</html>
