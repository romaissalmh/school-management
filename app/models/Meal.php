<?php
require_once(ROOT.'/helpers/database.php');

class Meal
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addMeal($data)
    {
        $this->db->query('UPDATE meal SET sunday = :sunday, monday = :monday, tuesday = :tuesday, wednesday=:wednesday, thursday = :thursday where id = 2');
        // Bind values
        $this->db->bind(':sunday', $data['sunday']);
        $this->db->bind(':monday', $data['monday']);
        $this->db->bind(':tuesday', $data['tuesday']);
        $this->db->bind(':wednesday', $data['wednesday']);
        $this->db->bind(':thursday', $data['thursday']);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    

   


    public function getMealById($id)
    {
        $this->db->query('SELECT * FROM meal WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }


   
}
