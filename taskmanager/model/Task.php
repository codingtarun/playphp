<?php

namespace Model;

use Model\Model;

class Task extends Model
{
    private $table = 'tasks';

    private $columns = [
        'task'
    ];

    public function __construct()
    {
        parent::__construct($this->table, $this->columns);
    }
}
