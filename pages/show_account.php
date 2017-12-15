<?php
include 'header.php';
include 'navbar.php'
?>

<form action="index.php?page=accounts&action=edit&id=<?php echo $data->id; ?>" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>
    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="Update">
</form>

<?php
include 'navbarfoot.php';
include 'footer.php';?>



