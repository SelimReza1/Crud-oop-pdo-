<?php
include 'dbConnection.php';

class Student{
    private $table = 'tb_student';
    private $id;
    private $name;
    private $email;
    private $age;
    private $department;
    public function setID($id){
        $this->id=$id;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public function setDepartment($department){
        $this->department=$department;
    }
    public function insert(){
        $sql = "INSERT INTO $this->table(id , name , email , age , department) VALUES(:id , :name , :email , :age , :department)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id' , $this->id);
        $stmt->bindParam(':name' , $this->name);
        $stmt->bindParam(':email' , $this->email);
        $stmt->bindParam(':age' , $this->age);
        $stmt->bindParam(':department' , $this->department);
        return $stmt->execute();
    }

    public function readAll(){
        $sql = "select * from $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    /**
     * @param $id
     * @return mixed
     */
    public function readById($no){
        $sql = "SELECT * FROM $this->table WHERE no = :no";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':no',$no);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($no){
        $sql = "UPDATE $this->table SET id=:id, name=:name, email=:email, age=:age, department=:department WHERE no=:no";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id' , $this->id);
        $stmt->bindParam(':name' , $this->name);
        $stmt->bindParam(':email' , $this->email);
        $stmt->bindParam(':age' , $this->age);
        $stmt->bindParam(':department' , $this->department);
        $stmt->bindParam(':no' , $no);
        return $stmt->execute();
    }
    public function destroy($no)
    {
        $sql="DELETE FROM $this->table WHERE no= :no";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':no',$no);
        return $stmt->execute();

    }

}

?>