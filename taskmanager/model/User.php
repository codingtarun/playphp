<?php

namespace Model;

use Model\Model;

class User extends Model
{
    private $table = 'users';

    private $columns = [
        'username',
        'email',
        'password'
    ];

    public function __construct()
    {
        parent::__construct($this->table, $this->columns);
    }
}
