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
//this is how you print something  $data contains the record that was selected on the table.

//print_r($data);
?>


<form id="form1">

    ID: <input type="text" name="id" value="<?php {echo $data->id;} ?>" readonly><br>
    Email: <input type="text" name="email" value="<?php echo $data->owneremail; ?>" readonly><br>
    Owner Id: <input type="text" name="ownerid" value="<?php echo $data->ownerid; ?>" readonly><br>
    Task Created Date: <input type="text" name="createddate" value="<?php echo $data->createddate; ?>" readonly><br>
    Task Due Date: <input type="text" name="duedate" value="<?php echo $data->duedate; ?>" readonly><br>
    Task Message: <input type="text" name="message" value="<?php echo $data->message; ?>" readonly><br>
    Whether task has been completed?: <input type="text" name="isdone" value="<?php echo $data->isdone; ?>" readonly><br>
</form>

<input type="submit" value="Edit" id="form1" 
       onclick="window.location='index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>';">
<br>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2">
    <button type="submit" name="delete" form="form2" value="delete">Delete</button>
</form>




<script type="text/javascript" charset="UTF-8">
    function edit_task(){

    } 
</script>

</body>
</html>