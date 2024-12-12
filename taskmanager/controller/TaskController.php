<?php

// TASKS 
// Creating object of the task class
$task = new Model\Task;
// fetching all the tasks

// Check if request method is post  i.e user is trying to store something
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // get the infomration form request and store it into a varibale
    $data = [
        'task' => $_POST['task']
    ];
    // We have data , we can now store it. 
    echo $task->store($data);
}

if (isset($_GET['action']) && ($_GET['action'] === 'delete')) {
    $id = $_GET['id'];
    $task->delete($id);
}
// Always keep fething functionn the bottom of the code to get latest data
$tasks = $task->viewAll();
