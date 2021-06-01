<?php
require_once(ROOT.'/helpers/database.php');

class ExtraActivity
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addExtraActivity($data)
    {
        $this->db->query('INSERT INTO activity (activity_desc, student_id, type) values (:activity_desc, :student_id, :type)');
        // Bind values
        $this->db->bind(':activity_desc', $data['activity_desc']);
        $this->db->bind(':student_id', $data['student_id']);
        $this->db->bind(':type', $data['type']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteExtraActivity($id)
    {
        $this->db->query('DELETE FROM activity where id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



    public function getExtraActivityById($id)
    {
        $this->db->query('SELECT * FROM activity WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }



    public function getActivitiesByStudentId($id )
    {
        $this->db->query('SELECT * FROM activity where student_id = :id');
        $this->db->bind(':id', $id);

        return $this->db->resultSet();
    }
}
