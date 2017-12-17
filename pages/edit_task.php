<?php
include 'header.php';
include 'navbar.php';

?>
<div class="container" id="formcon">
    <div class="row">
        <div class="mx-auto col-md-8">
            <!-- form user info -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Update Task Details</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" id="form1">
                        <div class="form-group row">
                            <label class="col-lg-5 col-form-label form-control-label">Message</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="message" id="message" required data-validation-required-message="Please enter task message." autocomplete="off"
                                       value="<?php echo $data->message; ?>" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-5 col-form-label form-control-label">Task Due Date</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="duedate" id="duedate" required data-validation-required-message="Please enter due date." autocomplete="off"
                                       value="<?php echo $data->duedate; ?>"  >
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-5 col-form-label form-control-label">Whether Task has been completed or not?</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name = "isdone" id="isdone" required data-validation-required-message="Please enter task completion details." autocomplete="off"
                                       value="<?php echo $data->isdone; ?>" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <!--<label class="col-lg-3 col-form-label form-control-label"></label>-->
                            <div class="col-lg-10">
                                <!-- <button type="button" id="form1" class="btn btn-secondary" value="Cancel"style="border-style:none; background:red; color: #fff">-->
                                <button type="submit"
                                       id="form1"
                                       formaction="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>"
                                        formmethod="POST"
                                       class="btn btn-primary btn-sm"
                                       style="border-style:none; background:#3ce7d0; color: #fff;height:30px;width:150px;">
                                SAVE CHANGES </button>
                                <label class="col-sm-1"></label>
                                <button type="submit" id="form1" formaction="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " formmethod="post" class="btn btn-primary btn-sm" style="border-style:none; background:red; color: #fff;
                                height:30px;width:150px;">DELETE</button>
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
    include 'navbarfoot.php';
    include 'footer.php';
    ?>
