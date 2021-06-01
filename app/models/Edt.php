<?php
require_once(ROOT . '/helpers/database.php');

class Edt
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function addNewEdt($class)
    {
        $this->db->query('INSERT INTO edt (class_id) values (:class_id)');
        $this->db->bind(':class_id', $class);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //   id	edt_id	teacher_id	subject_id	starting_hour	finishing_hour	weekday
    public function addLesson($edt, $teacher_id, $subject_id, $starting_hour, $finishing_hour, $weekday)
    {
        $this->db->query('INSERT INTO session (edt_id , teacher_id, subject_id, starting_hour, finishing_hour, weekday) values (:edt_id , :teacher_id, :subject_id, :starting_hour, :finishing_hour, :weekday)');
        $this->db->bind(':edt_id', $edt);
        $this->db->bind(':teacher_id', $teacher_id);
        $this->db->bind(':subject_id', $subject_id);
        $this->db->bind(':starting_hour', $starting_hour);
        $this->db->bind(':finishing_hour', $finishing_hour);
        $this->db->bind(':weekday', $weekday);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function addEdt($data)
    {
        if (!$this->getEdtByClass($data["class"])) {
            // first we create the edt and its class if it does not exists 
            // then we create the lesson 
            // the edt of this class is not created yet we should make tit
            $this->addNewEdt($data["class"]);
            // now we should add the sessions 
            $res = $this->getEdtByClass($data["class"]);
            $this->addLesson($res->id, $data["teacher1"], $data["subject1"], "8h", "9h", $data["weekday"]);
            $this->addLesson($res->id, $data["teacher2"], $data["subject2"], "9h", "10h", $data["weekday"]);
            $this->addLesson($res->id, $data["teacher3"], $data["subject3"], "10h", "11h", $data["weekday"]);
            $this->addLesson($res->id, $data["teacher4"], $data["subject4"], "11h", "12h", $data["weekday"]);
            $this->addLesson($res->id, $data["teacher5"], $data["subject5"], "13h", "14h", $data["weekday"]);
            $this->addLesson($res->id, $data["teacher6"], $data["subject6"], "14h", "15h", $data["weekday"]);
             return true ; 
            // message alert de reussite
        } else { // the edt is already created we need to add the weekly lessons
            //verify if the weekday already exists in the table !
            if (!$this->getLessonsByClass($data["class"], $data["weekday"])) {
                $res = $this->getEdtByClass($data["class"]);
                $this->addLesson($res->id, $data["teacher1"], $data["subject1"], "8h", "9h", $data["weekday"]);
                $this->addLesson($res->id, $data["teacher2"], $data["subject2"], "9h", "10h", $data["weekday"]);
                $this->addLesson($res->id, $data["teacher3"], $data["subject3"], "10h", "11h", $data["weekday"]);
                $this->addLesson($res->id, $data["teacher4"], $data["subject4"], "11h", "12h", $data["weekday"]);
                $this->addLesson($res->id, $data["teacher5"], $data["subject5"], "13h", "14h", $data["weekday"]);
                $this->addLesson($res->id, $data["teacher6"], $data["subject6"], "14h", "15h", $data["weekday"]);
                console_log("heeloo");
                return true ; 
            } else {
                console_log('Vous avez déja insére les séances de ce jour');
                return false ; 
            }
        }
        
    }
        
        

    public function deleteEdt($id)
    {
        $this->db->query('DELETE FROM edt where id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getEdtByClass($class)
    {
        $this->db->query('SELECT * FROM edt where class_id = :class_id ');
        // Bind values
        $this->db->bind(':class_id', $class);
        $this->db->single();

        // Check row
        if ($this->db->rowCount() > 0) {
            return  $this->db->single();
        } else {
            return false;
        }
    }

    public function getLessonsByClass($class, $weekday)
    {
        $this->db->query('SELECT * FROM edt e join session s on e.id = s.edt_id where s.weekday = :weekday AND e.class_id = :class_id ');
        // Bind values
        $this->db->bind(':class_id', $class);
        $this->db->bind(':weekday', $weekday);
        if ($this->db->rowCount() > 0) {
            return  true;
        } else {
            return false;
        }
    }

    public function getEdtById($id)
    {
        $this->db->query('SELECT * FROM edt WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }



    public function getEdtInfoByClass($class,$weekday)
    {
        $this->db->query('SELECT u.family_name , u.first_name , b.name FROM edt e join session s on e.id = s.edt_id join teacher t on t.id = s.teacher_id join users u on u.id=t.user_id join subject b on b.id = s.subject_id  where e.class_id = :class_id and s.weekday = :weekday');
        $this->db->bind(':class_id', $class);
        $this->db->bind(':weekday', $weekday);

        return $this->db->resultSet();
    }
}
