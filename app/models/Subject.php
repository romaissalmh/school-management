<?php
require_once(ROOT.'/helpers/database.php');

class Subject
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addSubject($data)
    {
        $this->db->query('INSERT INTO subject (name) values (:name)');
        // Bind values
        $this->db->bind(':name', $data['name']);
        
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteSubject($id)
    {
        $this->db->query('DELETE FROM subject where id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getSubjectByName($name)
    {
        $this->db->query('SELECT * FROM subject WHERE name = :name');
        // Bind values
        $this->db->bind(':name', $name);
        $this->db->single();

        // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getSubjectById($id)
    {
        $this->db->query('SELECT * FROM subject WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }



    public function getSubjects()
    {
        $this->db->query('SELECT * FROM subject');
        return $this->db->resultSet();
    }
}
