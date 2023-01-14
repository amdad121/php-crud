<?php $page_title = 'Add :: CRUD'; ?>
<?php include 'header.php'; ?>
<?php include 'Database.php'; ?>

<?php 
	if (isset($_POST['submit'])) {
		$data = array (
			$name = $_POST['name'],
			$email = $_POST['email'],
			$phone = $_POST['phone'],
			$age = $_POST['age']
			);

		$db = new Database();
		$query = "INSERT INTO user (name, email, phone, age, now) VALUES (:name, :email, :phone, :age, now())";
		$dta = array(
			':name' => $name,
			':email' => $email,
			':phone'	=> $phone,
			':age'	=> $age
			);
		$result = $db->create($query, $dta);
		$alert = 'User Added';
	}
 ?>
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default" style="margin-top: 50px">
            <div class="panel-heading clearfix">
                <span class="btn"><b>ADD</b></span>
                <span class="pull-right "><a class="btn btn-default" href="index.php">Back</a></span>
            </div>
            <div class="panel-body">
            <?php if (isset($alert)) {
                echo '<div class="alert alert-success alert-dismissable">'.$alert.'</div>';
            } ?>
                <form action="add.php" class="form-horizontal" method="POST">
                    <div class="form-group">
                        <label for="name" class="control-label col-md-2">Name : </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-md-2">Email : </label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="control-label col-md-2">Phone : </label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="age" class="control-label col-md-2">Age : </label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="age" name="age">
                        </div>
                    </div>
                    <button class="btn btn-default pull-right" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>