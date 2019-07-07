<?php
    include  'includes/common.php';
    if(isset($_SESSION['Email'])){
        header('location:product.php');
    }
?>
<html>
    <head>
        <title>Index Page</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascripit" src="bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
         <?php
            include 'includes/header.php';
        ?>
        
        <!--<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>-->
        
        <div id="banner_image">
            <div class="container">
                <center>
                <div id="banner_content">
                    <h1>We sell lifestyle.</h1>
                    Flat 40% OFF on premium brands<br><br>
                    <a href="product.php" class="btn btn-danger btn-lg active"><strong>Shop Now</strong></a>
                </div>
                </center>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
