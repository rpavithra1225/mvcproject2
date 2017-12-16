<?php
    include 'header.php';
    include 'navbar.php';
    include 'todolistheader.php';
       //print utility\htmlTable::genarateTableFromMultiArray($data);
        print utility\htmlTable::generateListFromArray($data);
        include 'add_task_btn_render.php';
        include 'navbarfoot.php';
        include 'footer.php';

?>
    <!--<form action="index.php?page=tasks&action=create" id="form1">
        <button type="submit" form="form1" value="create" style="color: #fff; border-style:none ; background-color: #3ce7d0;">ADD NEW TASK</button>
    </form>-->

