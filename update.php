<?php include 'header.php'; ?>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default" style="margin-top: 50px">
            <div class="panel-heading clearfix">
                <span class="btn"><b>CRUD</b></span>
                <span class="pull-right "><a class="btn btn-default" href="add.php">Add</a></span>
            </div>
            <div class="panel-body">
                <form action="" class="form-horizontal">
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
                            <input type="numbar" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="age" class="control-label col-md-2">Age : </label>
                        <div class="col-md-10">
                            <input type="numbar" class="form-control" id="age" name="age">
                        </div>
                    </div>
                    <button class="btn btn-default pull-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>