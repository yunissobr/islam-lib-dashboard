<?php
class Article
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function save($article)
    {
        $this->db->query('INSERT INTO `articles`(`title`, `content`, `type`) VALUES (:title,:content,:type)');

        // Binding values
        $this->db->bind(':title', $article['title']);
        $this->db->bind(':content', $article['content']);
        $this->db->bind(':type', $article['type']);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($article)
    {
        $this->db->query('UPDATE `articles` SET
                         `title`=:title,
                         `content`=:content,
                         `type`=:type
                         WHERE `id` = :id
                         ');

        // Binding values
        $this->db->bind(':id', $article['id']);
        $this->db->bind(':title', $article['title']);
        $this->db->bind(':content', $article['content']);
        $this->db->bind(':type', $article['type']);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function del($id)
    {
        $this->db->query('DELETE FROM `articles` WHERE id = :id');
        // Binding values
        $this->db->bind(':id', $id);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function sel_by_id($id)
    {
        $this->db->query('SELECT * FROM articles WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    public function sel_by_type($type)
    {
        $this->db->query('SELECT * FROM articles WHERE type = :type');
        $this->db->bind(':type', $type);
        return $this->db->resultSet();
    }
    public function sel_all()
    {
        $this->db->query('SELECT * FROM `articles`');
        return $this->db->resultSet();
    }
}