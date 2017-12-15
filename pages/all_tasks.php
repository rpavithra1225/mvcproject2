<?php
    include 'header.php';
    include 'navbar.php'
?>

<?php
        print utility\htmlTable::genarateTableFromMultiArray($data);
?>
<?php
include 'navbarfoot.php';
include 'footer.php';?>