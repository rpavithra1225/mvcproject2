<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?homepage"><i class="icon-home icon-white"></i>Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=tasks&action=all">My Tasks</a>
            </li>
        </ul>
    </div>
    <div class="pull-right">
        <ul class="nav pull-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Welcome,User
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=accounts&action=show"><i class="icon-user"></i>View Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?page=accounts&action=logout"><i class="icon-off"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
</body>

<main role="main" class="container">
    <div class="starter-template">