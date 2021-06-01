<?php
require_once(ROOT.'/helpers/database.php');
class admin
{
    private $db;

    public function __construct()
    { 
        $this->db = new Database();
    }

    public function addAdmin($user_id)
    {
        //add the admin in the users table !!!!!
        $this->db->query('INSERT INTO admin (user_id) values (:user_id)');
        // Bind values
 
        $this->db->bind(':user_id', $user_id);
      
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAdminByUserId($id)
    {
        $this->db->query('DELETE FROM admin where user_id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getAdminByEmail($email)
    {
        $this->db->query('SELECT * FROM users P join admin Q on P.id=Q.user_id WHERE P.email = :email');
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

    public function getAdminById($id)
    {
        $this->db->query('SELECT * FROM users P join admin Q on P.id=Q.user_id where Q.id=:id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }



    public function getAdmins()
    {
        $this->db->query('SELECT * FROM users P join admin Q on P.id=Q.user_id ');
        return $this->db->resultSet();
    }

    public function login($email,$password)
        {
            $this->db->query('SELECT * FROM users P join admin Q on P.id=Q.user_id where email = :email');
            $this->db->bind(':email', $email);
            $row = $this->db->single();
            $hashed_password = $row->password;

    
            if ( password_verify($password,$hashed_password)) {
                return $row;
            } else {
                return false;
            }
        }
}
