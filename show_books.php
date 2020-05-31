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
<th>books name</th>
<th>books rating</th>
<?php $result = mysqli_query($link,"select * from users_books where users_id='$_GET[id]'")  or die( mysqli_error($link));
while($row = mysqli_fetch_array($result))
{?>
<tr>
    <td><?php echo $row['books_name']; ?> </td>
    <td><?php echo $row['books_rating']; ?> </td>
</tr>
<?php	
}
?>
</table>
</div>
</div>