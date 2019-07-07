<?php
    include 'includes\common.php';
   
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Product Page</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascripit" src="bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            footer{
                padding:10px 0px;
                background-color:#101010;
                color:#9d9d9d;
                bottom:0;
                width:100%;
                margin-top:0;
            }
            img{
                height: auto;
            }
        </style>
    </head>
    <body>
        <?php
            include 'includes\header.php';
            include 'includes\check_if_added.php';
        ?>
        <br><br><br>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have  the best cameras,watches and shirts for you.No need to hunt around,we have all in one place.</p>
            </div>
            <div class="row text-center">       <!--cameras-->
                <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <img src="img/5.jpg" alt="Canon EOS" >
                        <div class="caption">
                            <h3><strong>Cannon EOS</strong></h3>
                            <p>Price:Rs. 36000.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(1)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                            <!--<button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                   </div>
                </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="Sony DSLR" class="img-responsive">
                        <div class="caption">
                            <h3><strong>Sony DSLR</strong></h3>
                            <p>Price:Rs. 40000.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(2)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                           <!-- <button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="Sony DSLR" class="img-responsive">
                        <div class="caption">
                            <h3><strong>Sony DSLR</strong></h3>
                            <p>Price:Rs. 50000.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(3)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                           <!-- <button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="Olympus DSLR" class="img-responsive">
                        <div class="caption">
                            <h3><strong>Olympus DSLR</strong></h3>
                            <p>Price:Rs. 80000.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(4)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                            <!--<button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                    </div>
                </div> 
                
            </div>
            
            <div class="row text-center">       <!--watches-->
                <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <img src="img/18.jpg" alt="Titan Model" >
                        <div class="caption">
                            <h3><strong>Titan Model #301</strong></h3>
                            <p>Price:Rs. 13000.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(5)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                            <!--<button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                   </div>
                </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="Titan Model" class="img-responsive">
                        <div class="caption">
                            <h3><strong>Titan Model #201</strong></h3>
                            <p>Price:Rs. 3000.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(6)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                           <!-- <button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="HMT Milan" class="img-responsive">
                        <div class="caption">
                            <h3><strong>HMT Milan</strong></h3>
                            <p>Price:Rs. 8000.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(7)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                            <!--<button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/21.jpg" alt="Faber Luba" class="img-responsive">
                        <div class="caption">
                            <h3><strong>Faber Luba #111</strong></h3>
                            <p>Price:Rs. 18000.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(8)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                            <!--<button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row text-center">       <!--shirts-->
                <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <img src="img/22.jpg" alt="h&m" class="img-responsive">
                       <div class="caption">
                            <h3><strong>H&M</strong></h3>
                            <p>Price:Rs. 800.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(9)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                            <!--<button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                   </div>                         
                </div>
                
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/23.jpg" alt="Luis Phil" class="img-responsive">
                        <div class="caption">
                            <h3><strong>Luis Phil</strong></h3>
                            <p>Price:Rs. 1000.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(10)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                            <!--<button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/24.jpg" alt="John Zok" class="img-responsive">
                        <div class="caption">
                            <h3><strong>John Zok</strong></h3>
                            <p>Price:Rs. 1500.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(11)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                            <!--<button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/25.jpg" alt="Faber Luba" class="img-responsive">
                        <div class="caption">
                            <h3><strong>Jhalsani</strong></h3>
                            <p>Price:Rs. 1300.00</p>
                            <?php
                                if(!isset($_SESSION['Email'])){
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                                }else{
                                    if(check_if_added(12)){
                                        echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                    }else{
                            ?>
                            <a href="cart-add.php?Pid=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                    }
                                }
                            ?>
                            <!--<button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <?php
            include 'includes\footer.php';
        ?>
    </body>
</html>
