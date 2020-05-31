<?php
include("header.php");
include("db.php");
?>
<div class="panel panel-default">
<div class="panel-heading">
<h2>
<a class="btn btn-success" href="add_user.php">add user</a>
<a class="btn btn-info pull-right" href="index.php">back</a>
</h2>
</div>
<div class="panel panel-body">
<table class="table table-striped">
<th>user name</th>
<th>add books</th>
<th>add books</th>
<th>show recommended books</th>
<?php $result=mysqli_query($link,"select * from users");
while($row=mysqli_fetch_array($result))
{?>
<tr><td><?php echo $row['username']; ?> </td>
<td>
<form action="add_books.php">
<input type="submit" name="add_books" class="btn btn-primary" value="add books">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
</form>
</td>

<td>
<form action="show_books.php">
<input type="submit" name="show_books" class="btn btn-primary" value="show books">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
</form>
</td>
<td>
<form action="user_recommendation.php">
<input type="submit" name="show_books" class="btn btn-primary" value="show recommendation">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
</form>
</td>


</tr>
<?php	
}
?>
</table>
</div>
</div>