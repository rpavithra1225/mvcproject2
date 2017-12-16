
<!-- /*
//
//New task has to be linked to the current session user id
//Hence, Owner id field is non-editable and derived from session id.
//$ownerid = implode(" ",$data);
//*/ -->

<?php
include 'header.php';
include 'navbar.php';
//include 'todolistheader.php';
?>

<div class="container" id="formcon">
    <div class="row">
        <div class="mx-auto col-md-8">
            <!-- form user info -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Add New Task</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" id="form1">
                        <div class="form-group row">
                            <label class="col-lg-5 col-form-label form-control-label">Message</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="message" id="message" required data-validation-required-message="Please enter task message." autocomplete="off"
                                       placeholder="Enter Task Details" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-5 col-form-label form-control-label">Task Due Date</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="duedate" id="duedate" required data-validation-required-message="Please enter due date." autocomplete="off"
                                       placeholder="Enter Task Duedate" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-5 col-form-label form-control-label">Whether Task has been completed or not?</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name = "isdone" id="isdone" required data-validation-required-message="Please enter task completion details." autocomplete="off"
                                       placeholder="Enter Status 0-Not Done 1-Done">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-7" id="buttondiv">
                                <!-- <button type="button" id="form1" class="btn btn-secondary" value="Cancel"style="border-style:none; background:red; color: #fff">-->
                                <button type="submit" id="form1" formaction="index.php?page=tasks&action=store" formmethod="POST" class="btn btn-primary btn-sm" style="border-style:none; background:#3ce7d0; color: #fff;
                                height:30px;width:150px;">SAVE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>
</div>

<?php
//print utility\htmlTable::genarateTableFromMultiArray($data);
include 'navbarfoot.php';
include 'footer.php';

?>
