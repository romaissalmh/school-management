<?php
require_once(ROOT.'/helpers/database.php');



class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addUser($data)
    {
        $this->db->query('INSERT INTO users (email, password, family_name, first_name, dateOfBirth, address, phonenumber1, phonenumber2, phonenumber3, role) values (:email, :password, :family_name, :first_name, :dateOfBirth, :address, :phonenumber1, :phonenumber2, :phonenumber3, :role)');
        // Bind values
        $hash_pwd = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password',$hash_pwd );
        $this->db->bind(':family_name', $data['lastname']);
        $this->db->bind(':first_name', $data['firstname']);
        $this->db->bind(':dateOfBirth', $data['birthdate']);
        $this->db->bind(':address', $data['adress']);
        $this->db->bind(':phonenumber1', $data['phonenumber1']);
        $this->db->bind(':phonenumber2', $data['phonenumber2']);
        $this->db->bind(':phonenumber3', $data['phonenumber3']);
        $this->db->bind(':role', $data['role']);

        // Execute
        if ($this->db->execute()) {
            //return true;
            $this->db->query(' SELECT LAST_INSERT_ID() as id');
            return $this->db->single();
        } else {
            return false;
        }
    }

    public function deleteUser($id)
    {
        $this->db->query('DELETE FROM users where id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
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

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM users WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }



    public function getUsers()
    {
        $this->db->query('SELECT * FROM users');
        return $this->db->resultSet();
    }

  
}
