<?php
    include 'header.php';
    include 'navbar.php';
    ?>

    <div class="container" style="background: aliceblue; padding:50px">
        <h4><i>To-Do List</i></h4>
    <div class="table" style="box-sizing: border-box;">
    <?php
        //print utility\htmlTable::genarateTableFromMultiArray($data);
        print utility\htmlTable::genarateTableFromArray($data);
    ?>
    </div><br>
    <div class="button">
    <input type="submit" value="ADD NEW TASK" id="form1"
       onclick="window.location='index.php?page=tasks&action=create'"
       style="color: #fff; border-style:none ; background-color: #3ce7d0; align-self: right; padding: 5px">
    </div>
    </div>
<?php
    //include 'add_task_btn_render.php';
    include 'navbarfoot.php';

?>

    <!--<form action="index.php?page=tasks&action=create" id="form1">
        <button type="submit" form="form1" value="create" style="color: #fff; border-style:none ; background-color: #3ce7d0;">ADD NEW TASK</button>
    </form>-->

