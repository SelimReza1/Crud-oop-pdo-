<?php include 'header.php'?>
<?php include_once 'userController.php'?>
<?php
spl_autoload_register(function ($class){
   include $class.".php";
});
?>
<?php
$no = $_REQUEST['no'];
$st=readById($no);
?>
<div class="container">
    <div class="card mt-5 offset-2" style="width: 70%;float: none">
        <div class="card-header">
            <h2>Create Student</h2>
        </div>
        <div class="card-body" >
            <form action="userController.php" method="post">
                <div class="form-group">
                    <label for="id">Id:</label>
                    <input type="number" id="id" name="id" value="<?php echo $st['id']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $st['name']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $st['email']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" value="<?php echo $st['age']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" id="department" name="department" value="<?php echo $st['department']?>" class="form-control">
                </div>
                <input type="hidden" name="no" value="<?php echo $st['no']?>">
                <div class="form-group">
                    <button type="submit" class="btn btn-info" name="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'?>

