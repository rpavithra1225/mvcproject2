<?php
include 'header.php';
session_start();
?>

<head>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body class="bg-overlay">
    <div class="row">
        <img src="img/icon.png" height="200" width="200" class="img-rounded center-block">
        <label class="col-md-10"></label>
        <h1 align="center">To-Doist</h1>
        <label class="col-md-10"></label>
        <h4 align="center">An easy way to organize and manage your to-do list</h4>
        <br><br>
        <label class="col-md-10"></label>
        <div class="col-xs-2 col1 center-block">
            <?php
            if(isset($_SESSION['userID'])){
                ?>
            <a href="index.php?page=tasks&action=all"
               type="button" class="btn btn-primary btn-lg"
               style="background:#06425C ; color: white"
               border-style="0px">Get Started!
            </a>
               <?php
            }else{
                ?>
            <a href="index.php?page=accounts&action=login"
               type="button" class="btn btn-primary btn-lg"
               style="background:#06425C ; color: white"
               border-style="0px">Get Started!
            </a>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>


