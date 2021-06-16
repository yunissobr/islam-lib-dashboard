<?php
class Asset
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function save($asset)
    {
        $this->db->query('INSERT INTO `assets`(`title`, `description`, `type`, `section`,`file_content`) 
        VALUES (:title,:description,:type ,:section,:file_content)');

        // Binding values
        $this->db->bind(':title', $asset['title']);
        $this->db->bind(':description', $asset['description']);
        $this->db->bind(':type', $asset['type']);
        $this->db->bind(':section', $asset['section']);
        $this->db->bind(':file_content', $asset['file_content']);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($asset)
    {
        $this->db->query('UPDATE `assets` SET
                         `title`=:title,
                         `description`=:description,
                         `type`=:type,
                         `section`=:section,
                         `file_content`=:file_content
                         WHERE `id` = :id
                         ');

        // Binding values
        $this->db->bind(':id', $asset['id']);
        $this->db->bind(':title', $asset['title']);
        $this->db->bind(':description', $asset['description']);
        $this->db->bind(':type', $asset['type']);
        $this->db->bind(':section', $asset['section']);
        $this->db->bind(':file_content', $asset['file_content']);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function del($id)
    {
        $this->db->query('DELETE FROM `assets` WHERE id = :id');
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
        $this->db->query('SELECT * FROM `assets` WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    public function sel_by_type($type)
    {
        $this->db->query('SELECT * FROM `assets` WHERE type = :type');
        $this->db->bind(':type', $type);
        return $this->db->resultSet();
    }
    public function sel_by_section($section)
    {
        $this->db->query('SELECT * FROM `assets` WHERE section = :section');
        $this->db->bind(':section', $section);
        return $this->db->resultSet();
    }
    public function sel_all()
    {
        $this->db->query('SELECT * FROM `assets`');
        return $this->db->resultSet();
    }
}