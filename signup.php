<?php
    include 'includes\common.php';
    if(isset($_SESSION['Email'])){
        header('location:product.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Sign Up</title>
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
                margin-top:9%;
            }
        </style>
    </head>
    <body>
        <?php
            include 'includes\header.php';
        ?>
        <br><br><br>
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <form method="POST" action="signup_script.php">
                        <h1>SIGN UP</h1>
                        <div class="form-group">                    
                            <input type="text" name="name" class="form-control"  placeholder="Name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><!--<?php //echo $_GET['m1'] ?>-->
                        </div>
                        <div class="form-group">
                            <input type="password" maxlength="7" class="form-control" name="password" placeholder="Password" required >
                        </div>
                        <div class="form-group">
                            <input type="number"  class="form-control" name="contact" placeholder="Contact" maxlength="10" size="10" required><!--<?php //echo $_GET['m2'] ?>-->
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
            include 'includes\footer.php';
        ?>
    </body>
</html>
