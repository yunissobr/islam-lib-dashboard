<?php
class Tasbeeh
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function save($tasbeeh)
    {
        $this->db->query('INSERT INTO `tasbeehs`(`tasbeeh`) VALUES (:tasbeeh)');

        // Binding values
        $this->db->bind(':tasbeeh', $tasbeeh);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($new_tasbeeh, $id)
    {
        $this->db->query('UPDATE `tasbeehs` SET
                         `tasbeeh`=:new_tasbeeh
                         WHERE `id` = :id
                         ');

        // Binding values
        $this->db->bind(':id', $id);
        $this->db->bind(':new_tasbeeh', $new_tasbeeh);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function del($id)
    {
        $this->db->query('DELETE FROM `tasbeehs` WHERE id = :id');
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
        $this->db->query('SELECT * FROM tasbeehs WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    public function sel_all()
    {
        $this->db->query('SELECT * FROM `tasbeehs`');
        return $this->db->resultSet();
    }
}