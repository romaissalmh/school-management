<?php
require_once(ROOT.'/helpers/database.php');
class Teacher
{
    private $db;

    public function __construct()
    { 
        $this->db = new Database();
    }

    public function addTeacher($user_id)
    {
        //add the Teacher in the users table !!!!!
        $this->db->query('INSERT INTO teacher (user_id) values (:user_id)');
        // Bind values
 
        $this->db->bind(':user_id', $user_id);
      
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTeacher($id)
    {
        $this->db->query('DELETE FROM teacher where id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTeacherByUserId($id)
    {
        $this->db->query('DELETE FROM teacher where user_id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getTeacherByEmail($email)
    {
        $this->db->query('SELECT * FROM users P join teacher Q on P.id=Q.user_id WHERE P.email = :email');
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

    public function getTeacherById($id)
    {
        $this->db->query('SELECT P.family_name, P.first_name, P.password, P.dateOfBirth, P.address, P.phonenumber1,  P.phonenumber3,  P.phonenumber2, P.email, P.role , P.id  as user_id, Q.heure_reception, Q.id FROM users P join teacher Q on P.id=Q.user_id where Q.id=:id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getEdtTeacherById($id){
        $this->db->query('SELECT C.grade, C.groupNum, L.name as level, S.weekday , S.starting_hour , S.finishing_hour, B.name as subject FROM session S join teacher Q on S.teacher_id=Q.id join edt E on E.id = S.edt_id join subject B on B.id = S.subject_id join class C on C.id = E.class_id join level L on L.id = C.level_id where Q.id= :id');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();

    }


    public function getTeachers()
    {
        $this->db->query('SELECT P.family_name, P.first_name, P.password, P.dateOfBirth, P.address, P.phonenumber1,  P.phonenumber3,  P.phonenumber2, P.email, P.role , P.id as user_id, Q.id  FROM users P join teacher Q on P.id=Q.user_id');
        return $this->db->resultSet();
    }

    public function login($email,$password)
        {
            $this->db->query('SELECT * FROM users P join teacher Q on P.id=Q.user_id where email = :email');
            $this->db->bind(':email', $email);
            $row = $this->db->single();
            $hashed_password = $row->password;
            console_log(password_verify($password,$hashed_password) );
            if ( /*password_verify($password,$hashed_password)*/ $password=$hashed_password ) {
                return $row;
            } else {
                return false;
            }
        }
    public function updateTeacherById($id,$hr){
        //implementation
        $this->db->query('UPDATE teacher SET heure_reception= :heure_reception  where  id= :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':heure_reception', $hr);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getTeachersByLevel($id){
        $this->db->query('SELECT P.family_name, P.first_name, Q.heure_reception as heure_reception, Q.id  FROM users P join teacher Q on P.id=Q.user_id');
        //$this->db->bind(':id', $id);
        return $this->db->resultSet();

    }


     
}
