<?php
require_once(ROOT . '/helpers/database.php');
class Student
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addStudent($user_id)
    {
        $this->db->query('INSERT INTO student (user_id) values (:user_id)');
        // Bind values

        $this->db->bind(':user_id', $user_id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users P join student Q on P.id=Q.user_id where email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        $hashed_password = $row->password;


        if ( password_verify($password,$hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    public function getStudentByEmail($email)
    {
        $this->db->query('SELECT * FROM users P join student Q on P.id=Q.user_id WHERE P.email = :email');
        // Bind values
        $this->db->bind(':email', $email);
        $this->db->single();
        // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getStudentById($id)
    {
        $this->db->query('SELECT Q.class_id, P.family_name, P.first_name, P.password, Q.id, P.address, P.dateOfBirth, Q.parent_id, P.phonenumber1, P.phonenumber2, P.phonenumber3, P.email, C.groupNum, L.name as level , C.grade FROM users P join student Q on P.id=Q.user_id join class C on C.id = Q.class_id join Level L on C.level_id = L.id WHERE Q.id = :id');
        // Bind values
        
        $this->db->bind(':id', $id);
        return $this->db->single();
        // Check row
        
    }
    public function deleteStudentByUserId($id)
    {
        $this->db->query('DELETE FROM student where user_id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    

}
