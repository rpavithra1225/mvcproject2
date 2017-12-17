<?php
include 'header.php';
session_start();
?>

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

<?php
include 'footer.php';
?>


