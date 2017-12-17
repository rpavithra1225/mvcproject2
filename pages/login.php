<?php
include 'header.php';
?>


<body class="bg">
<div class="container" id="divcon">
    <div class="card-body">
    <form class="form-horizontal" role="form" method="POST" action="index.php?page=accounts&action=login">
        <div class="col-lg-40">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h3 align="center">Sign in to access your to-do list</h3>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-lg-40">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <label class="sr-only" for="email">E-Mail</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               required data-validation-required-message="Please enter your email address."
                               placeholder="you@example.com" required autofocus>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-lg-40">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password"
                                   required data-validation-required-message="Please enter your email address."
                                   placeholder="Password" required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
            </div>
        </div>
            <div class="col-lg-40">

            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                    <a class="btn btn-link" style="color: darkred" href="index.php?page=accounts&action=register">Or Sign up here to get started!</a>
                </div>
            </div>

            </div>

    </div>
    </form>
</div>
</div>

<?php
include 'footer.php';
?>