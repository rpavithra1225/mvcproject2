<?php
    include 'header.php';
    include 'navbar.php';
    include 'todolistheader.php';
?>

<?php
        //print utility\htmlTable::genarateTableFromMultiArray($data);
        print utility\htmlTable::generateListFromArray($data);
?>
<?php
include 'navbarfoot.php';
include 'footer.php';?>