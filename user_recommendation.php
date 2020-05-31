<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--jquery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<head>

<div class="container">

<h2><div class="well text-center">book recomendation for you:</div>

<?php
include("db.php");
include("recommend.php");

$books=mysqli_query($link,"select * from users_books");

$matrix=array();

while($book=mysqli_fetch_array($books))
{

    $users=mysqli_query($link,"select username from users where id=$book[users_id]") or die( mysqli_error($link));
    $username=mysqli_fetch_array($users);
    $matrix[$username['username']][$book['books_name']] = $book['books_rating'];
}

$users=mysqli_query($link,"select username from users where id='$_GET[id]'");
$username=mysqli_fetch_array($users);

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



<?php
$recommendation = array();
$recommendation = getRecommendation($matrix,$username['username']); 

foreach($recommendation as $book=>$rating)
{
?>
<tr>
    <td><?php echo $book; ?> </td>
    <td><?php echo $rating; ?> </td>
</tr>
<?php	
}
?>
</table>
</div>
</div>