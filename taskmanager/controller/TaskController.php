<?php

namespace Controller;

use Model\Task;

// TASKS 
// Creating object of the task class



// fetching all the tasks

// Check if request method is post  i.e user is trying to store something
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    // get the infomration form request and store it into a varibale
    $data = [
        'task' => $_POST['task'] ?? ''
    ];

    if ($action === 'insert') {
        (new TaskController)->insert($data);
    }
    if ($action === 'update') {
        $id = $_POST['id'];
        (new TaskController)->update($id, $data);
        $editTask = (new TaskController)->show($id);
    }
    if ($action === 'delete') {
        $id = $_POST['id'];
        (new TaskController)->delete($id);
    }
}
if (isset($_GET['action']) && ($_GET['action'] === 'edit')) {
    $id = $_GET['id'];
    $editTask = (new TaskController)->show($id);
}

// Always keep fething functionn the bottom of the code to get latest data

$tasks = (new TaskController)->getAll();




class TaskController
{
    private $task;

    public function __construct()
    {
        $this->task = new Task;
    }

    public function getAll()
    {
        return $this->task->getAll();
    }
    public function insert(array $data)
    {
        $this->task->insert($data);
    }
    public function update(int $id, array $data)
    {
        $this->task->update($id, $data);
    }
    public function show(int $id): object
    {
        return $this->task->get($id);
    }
    public function delete(int $id)
    {
        $this->task->delete($id);
    }
}
