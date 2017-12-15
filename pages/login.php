<head>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<div id="form">
        <div class="container">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
                <div id="userform">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#signup"  role="tab" data-toggle="tab">Sign up</a></li>
                        <li><a href="#login"  role="tab" data-toggle="tab">Log in</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="signup">
                            <form id="signup" action="index.php?page=accounts&action=register" method="post">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>First Name<span class="req">*</span> </label>
                                            <input type="text" class="form-control" name="fname" id="first_name" required data-validation-required-message="Please enter your name." autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Last Name<span class="req">*</span> </label>
                                            <input type="text" class="form-control" name="lname" id="last_name" required data-validation-required-message="Please enter your gender." autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Birthday<span class="req">*</span> </label>
                                            <input type="text" class="form-control" name = "birthday" id="birthday" data-date-format="yyyy-mm-dd" required data-validation-required-message="Please enter your birthday." autocomplete="off">
                                                <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Gender<span class="req">*</span> </label>
                                            <input type="text" class="form-control" name="gender" id="gender" required data-validation-required-message="Please enter your gender." autocomplete="off">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Your Email<span class="req">*</span> </label>
                                    <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Your Phone<span class="req">*</span> </label>
                                    <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number." autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Password<span class="req">*</span> </label>
                                    <input type="password" class="form-control" name="password" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="mrgn-30-top">
                                    <button type="submit" class="btn btn-larger btn-block"/>
                                    Sign up
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade in" id="login">
                             <form id="login" action="index.php?page=accounts&action=login" method="POST">
                                <div class="form-group">
                                    <label> Your Email<span class="req">*</span> </label>
                                    <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Password<span class="req">*</span> </label>
                                    <input type="password" class="form-control" name="password" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="mrgn-30-top">
                                    <button type="submit" class="btn btn-larger btn-block"/>
                                    Log in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <script src="js/login.js"></script>

</body>

