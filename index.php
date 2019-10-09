<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login FB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <?php require './fb-init.php'; ?>
        <?php if(isset($_SESSION['access_token'])):?>
            <a href="">Logout</a>
        <?php else:?>
            <a href="<?php echo $login_url;?>">Login With Facebook</a>
        <?php endif;?>
    </div>   
</div>

</body>
</html>
