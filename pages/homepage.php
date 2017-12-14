<?php include 'header.php'?>


<h1>
    <?php

    //this how to print some data;
    echo $data['site_name'];

    ?> </h1>

<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>

<?php include 'login.php'?>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>


<script src="js/scripts.js"></script>

<?php include 'footer.php'?>