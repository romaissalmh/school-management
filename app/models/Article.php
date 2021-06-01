<?php
require_once(ROOT.'/helpers/database.php');

class Article
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addArticle($data)
    {
        $this->db->query('INSERT INTO article (title, description, image_url, type) values (:title, :description, :image_url, :type)');
        // Bind values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':image_url', $data['image_url']);
        $this->db->bind(':type', $data['type']);
     
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteArticle($id)
    {
        $this->db->query('DELETE FROM article where id = :id');
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


    public function getArticleByTitle($title)
    {
        $this->db->query('SELECT * FROM article WHERE title = :title');
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

    public function getArticleById($id)
    {
        $this->db->query('SELECT * FROM article WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        return $this->db->single();
    }



    public function getArticles()
    {
        $this->db->query('SELECT * FROM article');
        return $this->db->resultSet();
    }
    public function getRecentArticles()
    {
        $this->db->query('SELECT * FROM article ORDER BY id DESC LIMIT 8');
        return $this->db->resultSet();
    }
    public function getArticlesWithFilter($filter)
    {
        $this->db->query('SELECT * FROM article where type = :filter');
        $this->db->bind(':filter', $filter);
        return $this->db->resultSet();
    }


    public function getArticlesOfStudents()
    {
        $this->db->query("SELECT * FROM article where type = 'Primary' or type = 'Middle' or type = 'Secondary'");
       
        return $this->db->resultSet();
    }
}
