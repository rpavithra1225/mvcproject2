<?php
include 'header.php' ?>

    <body class="bg">
    <div class="container" id="formcon">
    <div class="row">
        <div class="mx-auto col-md-8">
            <!-- form user info -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Sign up here to get started</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" id="form1">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="fname" id="first_name" required data-validation-required-message="Please enter your name." autocomplete="off"
                                      placeholder="John" ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="lname" id="last_name" required data-validation-required-message="Please enter your gender." autocomplete="off"
                                       placeholder="Doe" ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-8">
                                <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off"
                                       placeholder="john@gmail.com" ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Birthday</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name = "birthday" id="birthday" data-date-format="yyyy-mm-dd" required data-validation-required-message="Please enter your birthday." autocomplete="off"
                                       placeholder="2017-12-11" ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="gender" id="gender" required data-validation-required-message="Please enter your gender." autocomplete="off"
                                       placeholder="Male" ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                            <div class="col-lg-8">
                                <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number." autocomplete="off"
                                       placeholder="890675845" ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" name="password" id="password" required data-validation-required-message="Please enter your password" autocomplete="off"
                                       placeholder="Enter Password" ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-7" id="buttondiv">
                                <button type="submit" formaction="index.php?page=accounts&action=register" formmethod="POST" class="btn btn-success"><i class="fa fa-sign-in"></i> Register</button>
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
include 'footer.php';
?>