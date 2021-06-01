<?php
require_once(ROOT.'/helpers/database.php');

class Paragraph
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addParagraph($data)
    {
        $this->db->query('INSERT INTO paragraph (title, paragraph, image_url) values (:title, :paragraph, :image_url)');
        // Bind values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':paragraph', $data['description']);
        $this->db->bind(':image_url', $data['image_url']);
     
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteParagraph($id)
    {
        $this->db->query('DELETE FROM paragraph where id = :id');
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


    public function getParagraphByTitle($title)
    {
        $this->db->query('SELECT * FROM paragraph WHERE title = :title');
        // Bind values
        $this->db->bind(':title', $title);
        $this->db->single();

        // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getParagraphById($id)
    {
        $this->db->query('SELECT * FROM paragraph WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }



    public function getParagraphs()
    {
        $this->db->query('SELECT * FROM paragraph');
        return $this->db->resultSet();
    }
}
