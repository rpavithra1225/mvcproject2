<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//New task has to be linked to the current session user id
//Hence, Owner id field is non-editable and derived from session id.
$ownerid = implode(" ",$data);
?>

<form action="index.php?page=tasks&action=create" method="post" id="form2">

    <!--Id: <input type="text" name="id"><br>-->
    Email: <input type="text" name="owneremail"><br>
    Owner Id: <input type="text" name="ownerid" value="<?php echo $ownerid; ?>" readonly><br>
    Task Created Date: <input type="text" name="createddate"><br>
    Task Due Date: <input type="text" name="duedate"><br>
    Task Message: <input type="text" name="message"><br>
    Whether task has been completed?: <input type="text" name="isdone"><br>
    <input type="submit" form = "form2" value="Submit">
</form>

<script src="js/scripts.js"></script>
</body>
</html>