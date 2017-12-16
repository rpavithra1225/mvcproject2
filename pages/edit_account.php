<?php
include 'header.php';
include 'navbar.php';
//include 'todolistheader.php';
?>
<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-6">
            <!-- form user info -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">My Profile</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" id="form1">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" name="fname" id="first_name" required data-validation-required-message="Please enter your name." autocomplete="off"
                                       value="<?php echo $data->fname; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" name="lname" id="last_name" required data-validation-required-message="Please enter your gender." autocomplete="off"
                                       value="<?php echo $data->lname; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-7">
                                <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off"
                                       value="<?php echo $data->email; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Birthday</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" name = "birthday" id="birthday" data-date-format="yyyy-mm-dd" required data-validation-required-message="Please enter your birthday." autocomplete="off"
                                       value="<?php echo $data->birthday; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" name="gender" id="gender" required data-validation-required-message="Please enter your gender." autocomplete="off"
                                       value="<?php echo $data->gender; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                            <div class="col-lg-7">
                                <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number." autocomplete="off"
                                       value="<?php echo $data->phone; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-7">
                                <input type="password" class="form-control" name="password" id="password" required data-validation-required-message="Please enter your password" autocomplete="off"
                                       value="<?php echo $data->password; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" id="form1" class="btn btn-secondary" value="Cancel"style="border-style:none; background:red; color: #fff">
                                <input type="button" id="form1" action="index.php?page=accounts&action=edit" method="POST" class="btn btn-primary" value="Save Changes" style="border-style:none; background:#3ce7d0; color: #fff">
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
//include 'navbarfoot.php';
include 'footer.php';

?>
