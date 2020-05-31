<?php
include("header.php");
include("db.php");


if(isset($_POST['submit']))
{

   $sql = "INSERT INTO users(username)
VALUES ('$_POST[username]')";

if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
   
}
?>
<div class="panel panel-default">
<div class="panel-heading">
<h2>
<a class="btn btn-success" href="add.php">Add book</a>
<a class="btn btn-info pull-right" href="index.php">back</a>
</h2>
</div>
<div class="panel-body">
<form action="add_user.php" method="post">
<div class="form-group">
<label for="username">username</label>
<input type="text" name="username" id="username" class="form-control" required>
</div>
<div class="form-group">
<input type="submit" name="submit" value="submit" class="btn btn-primary" required>
</div>
</form>