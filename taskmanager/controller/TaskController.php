<?php

// TASKS 
// Creating object of the task class
$task = new Model\Task;
// fetching all the tasks

// Check if request method is post  i.e user is trying to store something
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    // get the infomration form request and store it into a varibale
    $data = [
        'task' => $_POST['task']
    ];

    if ($action === 'insert') {

        // We have data , we can now store it. 
        $task->insert($data);
    }
    if ($action === 'update') {
        $id = $_POST['id'];
        $task->update($id, $data);
        $editTask = $task->get($id);
    }
}


if (isset($_GET['action']) && ($_GET['action'] === 'delete')) {
    $id = $_GET['id'];
    $task->delete($id);
}
if (isset($_GET['action']) && ($_GET['action'] === 'edit')) {
    $id = $_GET['id'];
    $editTask = $task->get($id);
}
// Always keep fething functionn the bottom of the code to get latest data
$tasks = $task->getAll();
