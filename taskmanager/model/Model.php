<?php

namespace Model;

use Database\Database;

class Model
{
    protected $db;
    private $table;
    private $columns;

    public function __construct(string $table, array $columns)
    {
        $this->db = new Database;
        $this->table = $table;
        $this->columns = $columns;
    }
    // GET ALL RECORD
    public function get()
    {
        $query = "SELECT * FROM " . $this->table;
        $this->db->query($query);
        return $this->db->getAll();
    }
    // INSERT A NEW RECORD 
    public function insert(array $data)
    {
        $query = "INSERT INTO " . $this->table . " (" . implode(", ", $this->columns) . ") VALUES (:" . implode(", :", $this->columns) . ")";
        $this->db->query($query);
        foreach ($data as $column => $value) {
            $this->db->bind(':' . $column, $value);
        }
        if ($this->db->execute()) {
            echo "OK";
        } else {
            echo $this->db->getError();
        }
    }
    // DESTORY A RECORD 
    public function destory($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";

        $this->db->query($query);
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return "DESTROYED";
        } else {
            return $this->db->getError();
        }
    }
}
