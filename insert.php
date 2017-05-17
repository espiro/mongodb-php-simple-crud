<?php 

	require('inc/collectionOBJ.php');

	$msg = '';
	$empty_username = false;
	$empty_email = false;

	if(isset($_GET['save'])){

		if(empty($_GET['username'])){
			$empty_username = true;
		}

		if(empty($_GET['email'])){
			$empty_email = true;
		}

		if(!empty($_GET['username']) && !empty($_GET['email'])){

		$data = [
				"username" => $_GET['username'],
				"email" => $_GET['email']
		];

		$users->insert($data);
		$msg = 'New User Added';

		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php require('inc/cdn.php');?>
	<title>insert data</title>
</head>
<body class="container">
<?php require('inc/menu.php');?>
<div class="row">
	<div class="col-md-6">
	<?php if($msg != null):?>
		<div class="alert alert-success"><?= $msg?></div>
	<?php endif; ?>
		<form method="get">
		<div class=<?php if($empty_username == true) { echo "alert-danger"; }?>>
			Username : <input class="form-control" type="text" name="username">
		</div>
		<div class=<?php if($empty_email == true) { echo "alert-danger"; }?>>
			Email : <input class="form-control" type="text" name="email">
		</div>
		<button class="btn btn-info" type="submit" name="save">
			<i class="glyphicon glyphicon-ok"></i>
		</button>
</form>
	</div>
</div>
</body>
</html>