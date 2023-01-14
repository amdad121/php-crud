<?php $page_title = 'Home :: CRUD'; ?>
<?php include 'header.php'; ?>
<?php include 'Database.php'; ?>

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default" style="margin-top: 50px">
        <div class="panel-heading clearfix">
            <span class="btn"><b>CRUD</b></span>
            <span class="pull-right "><a class="btn btn-default" href="add.php">Add</a></span>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $db = new Database();
                        $query = "SELECT * FROM user ORDER BY now DESC";
                        $result = $db->read($query);
                        $i = 1;
                        while ($row = $result->fetch(PDO::FETCH_OBJ)) :
                     ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->phone; ?></td>
                        <td><?php echo $row->age; ?></td>
                        <td><?php echo $row->now; ?></td>
                        <td><a class="btn btn-primary" href="edit.php?id=<?php echo $row->id; ?>">Edit</a> <a onclick="return confirm('Do you want to delete this?')" class="btn btn-danger" href="delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>