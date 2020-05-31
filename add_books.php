<?php

session_start();
if(isset($_GET['id'])){
	 $_SESSION['id']=$_GET['id'];
 }
include("header.php");
include("db.php");


if(isset($_POST['submit']))
{

   $sql = "INSERT INTO users_books(users_id,books_name,books_rating)
VALUES ('$_SESSION[id]','$_POST[booksname]','$_POST[booksrating]')";

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
<form action="add_books.php" method="post">
<div class="form-group">
<label for="username">booksname</label>
<input type="text" name="booksname" id="booksname" class="form-control" required>
</div>
<div class="form-group">
<label for="booksrating">bookrating</label>
<input type="number" name="booksrating" id="booksrating" class="form-control" required>
</div>
<div class="form-group">
<input type="submit" name="submit" value="submit" class="btn btn-primary" required>
</div>
</form>