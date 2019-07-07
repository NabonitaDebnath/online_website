<?php
    include 'includes\common.php';
    if(isset($_SESSION['Email'])){
        header('location:product.php');
    }
?>
<html>
    <head>
        <title>Login Form</title>
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
            <div class="row row_style">
                <div class="col-xs-4 col-xs-offset-4">
                   
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="login_submit.php">
                            <p>Login to make a purchase</p>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" maxlength="10" class="form-control" placeholder="Password" name="password" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            
                            </form>
                        </div>
                        <div class="panel-footer">
                            Don't have an account?<a href="signup.php"><b>Register</b></a>
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
