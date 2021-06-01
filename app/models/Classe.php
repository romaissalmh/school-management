<?php
require_once(ROOT.'/helpers/database.php');

class Classe
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addClass($data)
    {
        $this->db->query('INSERT INTO class (level_id,grade,groupNum) values (:level_id,:grade,:groupNum)');
        // Bind values
        $this->db->bind(':level_id', $data['level_id']);
        $this->db->bind(':grade', $data['grade']);
        $this->db->bind(':groupNum', $data['groupNum']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteClass($id)
    {
        $this->db->query('DELETE FROM class where id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getClassByGradeGroupe($grade,$groupNum)
    {
        $this->db->query('SELECT * FROM Class WHERE grade = :grade AND groupNum = :groupNum');
        // Bind values
        $this->db->bind(':grade', $grade);
        $this->db->bind(':groupNum', $groupNum);
        $this->db->single();

        // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getClassById($id)
    {
        $this->db->query('SELECT * FROM class WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getClasses()
    {
        $this->db->query('SELECT c.id ,l.name, c.level_id , c.grade , c.groupNum FROM class c join level l on c.level_id = l.id');
        return $this->db->resultSet();
    }

    public function getClassesByLevel($id){
        $this->db->query('SELECT c.id ,l.name, c.level_id , c.grade , c.groupNum FROM class c join level l on c.level_id = l.id where c.level_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }
}
