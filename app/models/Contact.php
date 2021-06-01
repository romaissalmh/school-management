<?php
require_once(ROOT.'/helpers/database.php');

class Contact
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addContact($data)
    {
        $this->db->query('UPDATE contact SET email = :email , phonenumber = :phonenumber , fax = :fax, adress = :adress where id = 18');
        // Bind values
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phonenumber', $data['phonenumber']);
        $this->db->bind(':fax', $data['fax']);
        $this->db->bind(':adress', $data['adress']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getContactById($id)
    {
        $this->db->query('SELECT * FROM contact WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }



    public function getContacts()
    {
        $this->db->query('SELECT * FROM Contact');
        return $this->db->single();

    }
}
