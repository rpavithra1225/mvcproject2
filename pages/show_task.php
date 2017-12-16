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
                        <h4 class="mb-0">View Task</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" id="form1">
                            <div class="form-group row">
                                <label class="col-lg-5 col-form-label form-control-label">Message</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="message" id="message" required data-validation-required-message="Please enter task message." autocomplete="off"
                                           value="<?php echo $data->message; ?>"readonly >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-5 col-form-label form-control-label">Task Created Date</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="createddate" id="createddate" autocomplete="off"
                                           value="<?php echo $data->createddate; ?>" readonly >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-5 col-form-label form-control-label">Task Due Date</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="duedate" id="duedate" required data-validation-required-message="Please enter due date." autocomplete="off"
                                           value="<?php echo $data->duedate; ?>" readonly >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-5 col-form-label form-control-label">Email</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" name="owneremail" id="owneremail" required data-validation-required-message="Please enter email address." autocomplete="off"
                                           value="<?php echo $data->owneremail; ?>" readonly >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-5 col-form-label form-control-label">Whether Task has been completed or not?</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name = "isdone" id="isdone" required data-validation-required-message="Please enter task completion details." autocomplete="off"
                                           value="<?php echo $data->isdone; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <!--<label class="col-lg-3 col-form-label form-control-label"></label>-->
                                <div class="col-lg-10">
                                    <!-- <button type="button" id="form1" class="btn btn-secondary" value="Cancel"style="border-style:none; background:red; color: #fff">-->
                                                                      <a class="btn btn-primary btn-sm"
                                       href="index.php?page=tasks&action=edit&id=<?php echo $data->id;?>"
                                       style="border-style:none; background:#3ce7d0; color: #fff;height:30px;width:150px;"
                                       role="button">UPDATE</a>
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
//print utility\htmlTable::genarateTableFromMultiArray($data);
include 'navbarfoot.php';
include 'footer.php';

?>

