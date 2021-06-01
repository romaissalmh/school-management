<?php
require_once(ROOT.'/helpers/database.php');

class Observation
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addObservation($data)
    {
        $this->db->query('INSERT INTO observations (student_id, teacher_id, subject_id, observation) values (:student_id, :teacher_id, :subject_id, :observation)');
        // Bind values
        $this->db->bind(':student_id', $data['student_id']);
        $this->db->bind(':subject_id', $data['subject_id']);
        $this->db->bind(':teacher_id', $data['teacher_id']);
        $this->db->bind(':observation', $data['observation']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteObservation($id)
    {
        $this->db->query('DELETE FROM observations where id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            console_log("done");
            return true;
        } else {
            console_log("not done");
            return false;
        }
    }


    

    public function getObservationById($id)
    {
        $this->db->query('SELECT * FROM observations WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }



    public function getObservations($id)
    {
        $this->db->query('SELECT U.first_name as student_name,B.name as subject_name, R.family_name as teacher_family_name , R.first_name as teacher_first_name , O.observation FROM observations O join student S on S.id = O.student_id join users U on U.id = S.user_id join teacher T on T.id = O.teacher_id join Users R ON R.id = T.user_id join subject B on B.id = O.subject_id where S.parent_id = :id order by O.student_id ASC');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }
}
