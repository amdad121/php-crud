<?php $page_title = 'Edit :: CRUD'; ?>
<?php include 'header.php'; ?>
<?php include 'Database.php'; ?>

<?php 
	
	$db = new Database();

 	if (isset($_POST['update'])) {

		$query = "UPDATE user SET name=:name, email=:email, phone=:phone, age=:age WHERE id=:id";
		$dta = array(
			':name' 	=> $_POST['name'],
			':email' 	=> $_POST['email'],
			':phone'	=> $_POST['phone'],
			':age'		=> $_POST['age'],
			':id'		=> $_POST['id']
			);
		$db->update($query, $dta);
		$alart = "Update is Done!";
	}
	if (isset($_GET['id'])) :

		$id = $_GET['id'];

		$result = $db->readById($id);

 ?>
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default" style="margin-top: 50px">
			<div class="panel-heading clearfix">
				<span class="btn"><b>EDIT</b></span>
				<span class="pull-right "><a class="btn btn-default" href="index.php">Back</a></span>
			</div>
			<div class="panel-body">
			<?php if (isset($_POST['update'])) {
				echo '<div class="alert alert-success alert-dismissable">'.$alart.'</div>';
			} ?>
				<form action="" class="form-horizontal" method="POST">
					<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
					<div class="form-group">
						<label for="name" class="control-label col-md-2">Name : </label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="name" name="name" value="<?php echo $result['name']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="control-label col-md-2">Email : </label>
						<div class="col-md-10">
							<input type="email" class="form-control" id="email" name="email" value="<?php echo $result['email']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="control-label col-md-2">Phone : </label>
						<div class="col-md-10">
							<input type="number" class="form-control" id="phone" name="phone" value="<?php echo $result['phone']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="age" class="control-label col-md-2">Age : </label>
						<div class="col-md-10">
							<input type="number" class="form-control" id="age" name="age" value="<?php echo $result['age']; ?>">
						</div>
					</div>
					<button class="btn btn-default pull-right" name="update">Submit</button>
				</form>
			</div>
		</div>
	</div>
<?php endif ?>

<?php include 'footer.php'; ?>