<?php include 'header.php'?>
<div class="container">
    <div class="card mt-5 offset-2" style="width: 70%;float: none">
        <div class="card-header">
            <h2>Create Student</h2>
        </div>
        <div class="card-body" >
            <form action="userController.php" method="post">
                <div class="form-group">
                    <label for="id">Id:</label>
                    <input type="number" id="id" name="id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" class="form-control">
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" id="department" name="department" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info" name="create">Create Student</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'?>

