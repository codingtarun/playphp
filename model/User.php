<?php

namespace Model;

use Database;

class User
{
    private $db;
    public function __construct()
    {
        $this->db =  new Database\Database;
    }
    public function getAll()
    {
        $this->db->query("SELECT * FROM `users`");
        return $this->db->getAll();
    }
    public function getById($id)
    {
        $this->db->query("SELECT * FROM `users` WHERE `id` = :id");
        $this->db->bind(':id', $id);
        return $this->db->getFirst();
    }
    public function create($data)
    {
        $insert = "INSERT INTO users (
            name,
            email,
            password
        ) VALUES (
            :name,
            :email,
            :password
        )";

        $this->db->query($insert);
        // foreach ($data as $key => $value) { // looping throuught the data array and storing the results 
        //     $this->db->bind(':' . $key, $value);
        // }
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        if ($this->db->execute()) {
            echo "OK";
        } else {
            echo $this->db->getError();
        }
    }
    public function updateById($id, $data)
    {
        $update = "UPDATE users SET name = :name, email = :email , password = :password WHERE id =:id";
        $this->db->query($update);
        $this->db->bind(':id', $id);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        if ($this->db->execute()) {
            echo "UPDATED";
        } else {
            echo $this->db->getError();
        }
    }

    public function deleteById($id)
    {
        $delete = "DELETE FROM `users` WHERE `id` = :id";
        $this->db->query($delete);
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return "DELETED";
        } else {
            echo $this->db->getError();
        }
    }
    public function count()
    {
        $this->db->query("SELECT * FROM users");
        return $this->db->rowCount();
    }
}
