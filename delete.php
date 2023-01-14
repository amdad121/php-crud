<?php $page_title = 'Delete :: CRUD'; ?>
<?php include 'header.php'; ?>
<?php include 'Database.php'; ?>

<?php

	if (isset($_GET['id'])) {

		$id = (int)$_GET['id'];
	
		$db = new Database();
		$res = $db->delete($id);
		header('location: index.php');
	}

?>

<?php include 'footer.php'; ?>