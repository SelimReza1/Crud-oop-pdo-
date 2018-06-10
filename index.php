<?php include 'header.php'; ?>
<?php
spl_autoload_register(function($class) {
    include $class.".php";
});
?>
<?php
$student = new Student();
?>
<div class="container">
<div class="card mt-5">
    <div class="card-header">
        <h2><span>All Student</span><span><a href="create.php" style="float: right" class="btn btn-primary">Create Student</a></span></h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Sl</th>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
            <?php $i=1;
            foreach ($student->readAll() as $st) {?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $st['id']?></td>
                <td><?php echo $st['name']?></td>
                <td><?php echo $st['email']?></td>
                <td><?php echo $st['age']?></td>
                <td><?php echo $st['department']?></td>
                <td>
                    <a class="btn btn-info" href="edit.php?no=<?php echo $st['no'];?>">Edit</a> |
                    <a  class="btn btn-danger" onclick="return confirm('Are you sure want to delete this entry?')" href="userController.php?nssl=<?php echo $st['no'];?>">Delete</a>

                </td>
            </tr>
        <?php
            $i++;
            }?>
        </table>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>