<?php
include 'header.php';
include 'navbar.php';
?>



<div class="container">
<form id="form1">

    ID: <input type="text" name="id" value="<?php {echo $data->id;} ?>" readonly><br>
    Email: <input type="text" name="email" value="<?php echo $data->owneremail; ?>" readonly><br>
    Owner Id: <input type="text" name="ownerid" value="<?php echo $data->ownerid; ?>" readonly><br>
    Task Created Date: <input type="text" name="createddate" value="<?php echo $data->createddate; ?>" readonly><br>
    Task Due Date: <input type="text" name="duedate" value="<?php echo $data->duedate; ?>" readonly><br>
    Task Message: <input type="text" name="message" value="<?php echo $data->message; ?>" readonly><br>
    Whether task has been completed?: <input type="text" name="isdone" value="<?php echo $data->isdone; ?>" readonly><br>
</form>

    <div class ="row">
        <div class="Edit"></div>
<input type="submit" value="EDIT TASK" id="form1"
       onclick="window.location='index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>';"
       style="color: #fff; border-style:none ; background-color: #3ce7d0; align-self: right; padding: 5px">
<br>
    </div>
    <div class="delete">
<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2">
    <button type="submit" name="delete" form="form2" value="delete" style="color: #fff; border-style:none ; background-color: red; align-self: right; padding: 5px">DELETE TASK</button>
</form>
    </div>
</div>

</div>



<?php
include 'navbarfoot.php';
include 'footer.php';

?>