<?php
require_once(ROOT . '/helpers/database.php');
class Tutor
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addParent($user_id)
    {
        $this->db->query('INSERT INTO parent (user_id) values (:user_id)');
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
        $this->db->query('SELECT * FROM users P join parent Q on P.id=Q.user_id where email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    public function getParentByEmail($email)
    {
        $this->db->query('SELECT * FROM users P join parent Q on P.id=Q.user_id WHERE P.email = :email');
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
    public function getParentById($id)
    {
        $this->db->query('SELECT P.family_name, P.first_name, P.password, Q.id, P.address, P.dateOfBirth, P.phonenumber1, P.phonenumber2, P.phonenumber3, P.email  FROM users P join parent Q on P.id=Q.user_id WHERE Q.id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
        // Check row

    }
    public function deleteParentByUserId($id)
    {
        $this->db->query('DELETE FROM parent where user_id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getChildren($id){
        $this->db->query('SELECT U.family_name, U.first_name, S.id   FROM student S join parent Q on Q.id=S.parent_id join users U on U.id = S.user_id WHERE Q.id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
        // Check row
    }
}
