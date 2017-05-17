<?php 

require('inc/collectionOBJ.php');
if(isset($_GET['user'])){
$users->remove(["username" => $_GET['user']]);
}else if (isset($_GET['all'])) {
$users->remove();
}

header('Location: show.php');

?>