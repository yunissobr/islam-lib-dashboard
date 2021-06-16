<?php
class Dhiker
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function save($dhiker)
    {
        $this->db->query('INSERT INTO `adhkars`(`dhiker`, `repetitions`, `type`) VALUES (:dhiker,:repetitions,:type)');

        // Binding values
        $this->db->bind(':dhiker', $dhiker['dhiker']);
        $this->db->bind(':repetitions', $dhiker['repetitions']);
        $this->db->bind(':type', $dhiker['type']);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($dhiker)
    {
        $this->db->query('UPDATE `adhkars` SET
                         `dhiker`=:dhiker,
                         `repetitions`=:repetitions,
                         `type`=:type
                         WHERE `id` = :id
                         ');

        // Binding values
        $this->db->bind(':id', $dhiker['id']);
        $this->db->bind(':dhiker', $dhiker['dhiker']);
        $this->db->bind(':repetitions', $dhiker['repetitions']);
        $this->db->bind(':type', $dhiker['type']);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function del($id)
    {
        $this->db->query('DELETE FROM `adhkars` WHERE id = :id');
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
        $this->db->query('SELECT * FROM `adhkars` WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    public function sel_by_type($type)
    {
        $this->db->query('SELECT * FROM `adhkars` WHERE type = :type');
        $this->db->bind(':type', $type);
        return $this->db->resultSet();
    }
    public function sel_all()
    {
        $this->db->query('SELECT * FROM `adhkars`');
        return $this->db->resultSet();
    }
}