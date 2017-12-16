<?php
include 'header.php';
include 'navbar.php';
?>




    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
    <form>
        <div class="form-group row">
            <label for="inputmessage3" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
            <textarea class="form-control" id="inputmessage3" name="message" value="<?php echo $data->message; ?>" readonly></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $data->owneremail; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputId3" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputId3" name="id" value="<?php echo $data->id; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputcreateddate3" class="col-sm-2 col-form-label">Task Created Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputcreateddate3" name="createddate" value="<?php echo $data->createddate; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputduedate3" class="col-sm-2 col-form-label">Task Due date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputduedate3" name="duedate" value="<?php echo $data->duedate; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputisdone3" class="col-sm-2 col-form-label">Whether Task has been completed or not?</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputisdone3" name="isdone" value="<?php echo $data->isdone; ?>" readonly>
            </div>
        </div>
    </form>
    </div>

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