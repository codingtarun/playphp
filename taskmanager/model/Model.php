<?php

namespace Model;

use App\Core\Database;

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

    /**
     * Returns all the resouces
     *
     * @return object
     */

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $this->db->query($query);
        return $this->db->getAll();
    }


    /**
     * 
     * Insert a new resource & returns the ID of new resource
     *
     * @param array $data
     * @return int
     * 
     */
    public function insert(array $data)
    {
        $query = "INSERT INTO " . $this->table . " (" . implode(", ", $this->columns) . ") VALUES (:" . implode(", :", $this->columns) . ")";
        $this->db->query($query);
        foreach ($data as $column => $value) {
            $this->db->bind(':' . $column, $value);
        }
        if ($this->db->execute()) {
            return 1;
        } else {
            return 0;
        }
    }
    /**
     * Deletes the resource
     *
     * @param int $id
     * @return bool
     * 
     */
    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return $this->db->getError();
        }
    }
    /**
     * 
     * Returns the specific resource
     * 
     * @param int $id
     * @return object
     * 
     */
    public function get(int $id): object
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->getFirst();
    }

    /**
     * 
     * Update the given resource
     * 
     * @param int $id 
     * @param array $data
     * 
     * @return bool
     * 
     */

    public function update(int $id, array $data): bool
    {
        $query = "UPDATE " . $this->table . " SET task=:task WHERE id=:id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->bind(':task', $data['task']);
        if ($this->db->execute()) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * 
     * User login function
     * Check if user exists based on email and return user
     * Check password
     * 
     * @param array $data
     * @return object
     * 
     */

    public function login($data)
    {
        $query = "SELECT * FROM users WHERE email=:email";
        $this->db->query($query);
        $this->db->bind(':email', $data['email']);
        $this->db->execute();
        $user = $this->db->getFirst();
        if (!empty($user)) {
            // Validate password 
            if (password_verify($data['password'], $user->password)) {
                return $user;
            } else {
                return 1;
            }
        } else {
            return 2;
        }
    }
}
