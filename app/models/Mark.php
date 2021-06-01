<?php
require_once(ROOT.'/helpers/database.php');

class Mark
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addMark($data)
    {
        $this->db->query('INSERT INTO mark (mark,subject_id, student_id) values (:mark, :subject_id, :student_id)');
        // Bind values
        $this->db->bind(':mark', $data['mark']);
        $this->db->bind(':subject_id', $data['subject_id']);
        $this->db->bind(':student_id', $data['student_id']);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteMark($id)
    {
        $this->db->query('DELETE FROM mark where id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



    public function getMarkById($id)
    {
        $this->db->query('SELECT * FROM mark WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }



    public function getMarksByStudentId($id )
    {
        $this->db->query('SELECT M.mark, S.name FROM mark M join subject S on M.subject_id = S.id where M.student_id = :id');
        $this->db->bind(':id', $id);

        return $this->db->resultSet();
    }
}
