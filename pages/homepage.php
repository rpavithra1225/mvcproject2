<?php include 'header.php';

    session_start();
    if(isset($_SESSION['userID'])) {
        echo $_SESSION['userID'];
        include 'all_tasks.php';
    }
     else{
        include 'login.php';
    }
    ?>

<?php include 'footer.php'?>