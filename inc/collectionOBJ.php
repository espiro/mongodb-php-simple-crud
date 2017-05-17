<?php

	echo '<h1>Simple CRUD Operation With MongoDB And PHP</h1>';
	echo '<h5>[hashemy.majid@gmail.com]</h5>';

	$m = new MongoClient();
	echo "Connected to Mongo Server via : <b>$m</b><br/>";
	
	$db = $m->myDB;
	echo "Database Selected : <b>$db</b><br/>";
	
	$users = $db->users;
	echo 'Collection selected : <b>Users</b><br/>';
?>