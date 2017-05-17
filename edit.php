<?php 

require('inc/collectionOBJ.php');

if(isset($_GET['user'])){
$data = $users->findOne(["username" => $_GET['user']]);
}
if (isset($_GET['update'])){
	$users->update(
			["username" => $_GET['current_user']],
			['$set'	=> ["username" => $_GET['new_username'] , "email" => $_GET['new_email']]]
		);
	header('Location: show.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<?php require('inc/cdn.php');?>
	<title>Update User Info</title>
</head>
<body class="container">
<?php require('inc/menu.php');?>
<div class="row">
	<div class="col-md-6">
		<form method="get">
		<input type="hidden" name="current_user" value="<?= $_GET['user']?>" />
	Username:<input class="form-control" type="text" name="new_username" value="<?= $data['username']?>"/>
	Email:<input class="form-control" type="text" name="new_email" value="<?= $data['email']?>" />
	<input class="btn btn-info" type="submit" name="update" value="Update">
</form>
	</div>
</div>
</body>
</html>