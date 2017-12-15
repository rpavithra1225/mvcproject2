<?php include 'header.php';

    if(key_exists('userID', $_SESSION)) { ?>

        <h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
        <h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>

    <?php

    }
     else{
        include 'login.php';
    }
    ?>

<script src="js/scripts.js"></script>

<?php include 'footer.php'?>