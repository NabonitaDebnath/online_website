<?php
    include 'includes\common.php';
     if(!isset($_SESSION['Email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Settings Page</title>
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
                margin-top:21%;;
            }
            </style>
    </head>
    <body>
        <?php
            include 'includes\header.php';
        ?>
        <br><br><br><br><br>
    
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-4 col-xs-offset-4">
                    <h3><strong>Change Password</strong></h3>
            <form action="setting_script.php" method="POST">
                <div class="form-group">
                    
                    <input type="password" maxlength="10" name="old-password" placeholder="Old Password" class="form-control">
                </div> 
                <div class="form-group">
                   
                   <input type="password" maxlength="10" name="new-password" placeholder="New Password" class="form-control">
                </div>
                <div class="form-group">
                    
                   <input type="password" maxlength="10" name="re-new-password" placeholder="Re-type New Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Change</button>
               
            </form>
                </div>
            </div>
        </div>
        <?php
            include 'includes\footer.php';
        ?>
    </body>
</html>
