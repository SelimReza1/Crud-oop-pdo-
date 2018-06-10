<?php
spl_autoload_register(function ($class) {
    include $class . ".php";
});
?>

<?php
$student = new Student();
if (isset($_REQUEST['create'])) {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $age = $_REQUEST['age'];
    $department = $_REQUEST['department'];

    $student->setID($id);
    $student->setName($name);
    $student->setEmail($email);
    $student->setAge($age);
    $student->setDepartment($department);
    $student->insert();
    header('Location:index.php');
}

?>
<?php
function readById($no)
{
    $student = new Student();
    return $qresult = $student->readById($no);
}

?>
<?php
$student = new Student();
if (isset($_REQUEST['update'])) {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $age = $_REQUEST['age'];
    $department = $_REQUEST['department'];
    $no = $_REQUEST['no'];

    $student->setID($id);
    $student->setName($name);
    $student->setEmail($email);
    $student->setAge($age);
    $student->setDepartment($department);
    $student->update($no);
    header('Location:index.php');
}

?>
<?php
$student = new Student();
if (isset($_REQUEST['nssl'])) {
    $no = $_REQUEST['nssl'];
    $student->destroy($no);
    header('Location:index.php');
}
?>