<?php include 'header.php';

    session_start();
    if(isset($_SESSION['userID'])) { ?>

        <h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
        <h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>
        <h1><a href="index.php?page=accounts&action=logout">Logout</a></h1>

    <?php

    }
     else{
        include 'login.php';
    }
    ?>

<script src="js/scripts.js"></script>

<?php include 'footer.php'?>