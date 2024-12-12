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

    /**
     * 
     * Display the specified resource.
     *
     * @param  int  $id  The ID of the resource to display.
     * @return \Illuminate\Http\Response  CHECK RETURN TYPE THEN MENTION HERE
     * 
     */
    public function show($id) {}

    /**
     * 
     * Display all resources
     * 
     */
    public function viewAll()
    {
        $tasks =  $this->get();
        return $tasks;
    }

    /**
     * 
     * Store the resource
     * 
     * @param array $data The data to update the resource
     * 
     * @return bool
     * 
     */
    public function store($data)
    {
        return $this->insert($data);
    }
    /**
     * 
     * Update the specified resource
     * 
     * @param int $id  The ID of the resource to be updated.
     * @param array $data The data to update the resource
     * 
     * @return bool
     * 
     */

    public function update($id, $data) {}

    /**
     * 
     * Removes the specified resource
     * 
     * @param int $id The ID of the resource to delete
     * 
     * @return bool
     * 
     */

    public function delete($id)
    {
        return $this->destory($id);
    }
}
