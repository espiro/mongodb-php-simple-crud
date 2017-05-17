<?php
require('inc/collectionOBJ.php');
$data = $users->find();  
?>
<!DOCTYPE html>
<html>
<head>
    <?php require('inc/cdn.php');?>
	<title>Users List</title>
</head>
<body class="container">
<?php require('inc/menu.php');?>
<table class="table table-hover table-striped table-border">
	<thead>
	<tr>
		<td colspan="4">
			<a class="btn btn-sm btn-danger" href="remove.php?all=ok">
				<i class="glyphicon glyphicon-remove"></i>
				Remove All Users
			</a>
		</td>
	</tr>
		<tr>
			<td>Username</td>
			<td>Email</td>
			<td>Update</td>
			<td>Delete</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach($data as $item):?>
		<tr>
			<td><?= $item['username']?></td>
			<td><?= $item['email']?></td>
			<td><a class="btn btn-sm btn-info" href="edit.php?user=<?= $item['username']?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
			<td><a class="btn btn-sm btn-danger" href="remove.php?user=<?= $item['username']?>"><i class="glyphicon glyphicon-trash"></i></a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>
