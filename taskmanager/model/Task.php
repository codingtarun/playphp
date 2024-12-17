<?php

namespace Model;

use Model\Model;

class Task extends Model
{
    /**
     * 
     * Extending this model means all the functions from Model is available in this class.
     * 
     */

    private $table = 'tasks';

    private $columns = [
        'task'
    ];

    public function __construct()
    {
        parent::__construct($this->table, $this->columns);
    }
}
