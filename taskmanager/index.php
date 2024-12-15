<?php
require_once('./config/autoloader.php');
require_once('./controller/TaskController.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="http://127.0.0.1:8000/taskmanager/assets/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">

    <!--Fontawesome 5-->
    <link rel="stylesheet" href="http://127.0.0.1:8000/taskmanager/assets/fontawesome-5/css/all.css">
    <title>PHP | Taskmanager!</title>
</head>

<body>
    <div class="container-fluid bg-grey-100 min-vh-100 d-flex justify-content-center">
        <div class="taskmanager-box mt-4" style="width: 50%;">
            <div class="card border-0 shadow-sm my-3">
                <div class="card-body">
                    <h5 class="card-title">Add New Task</h5>
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="inputTask" class="form-label">Add Task</label>
                            <input type="text" class="form-control" name="task" id="task" placeholder="Add task" required>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Add
                        </button>
                    </form>
                </div>
            </div>
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-body">
                    <h5 class="card-title">Add New Task</h5>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Task</th>
                                <th scope="col">Status</th>
                                <th scope="col">Optons</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tasks as $key => $task) { ?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1; ?></th>
                                    <td><?php echo $task->task; ?></td>
                                    <td><?php echo $task->status; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editTaskModal_<?php echo $task->id; ?>">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <a href='index.php?action=delete&id=<?php echo $task->id; ?>' class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="editTaskModal_<?php echo $task->id; ?>" tabindex="-1" aria-labelledby="editTaskModalLabel__<?php echo $task->id; ?>" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editTaskModalLabel_<?php echo $task->id; ?>">Edit Task</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="post">
                                                    <div class="mb-3">
                                                        <label for="inputTask" class="form-label">Update Task</label>
                                                        <input type="text" class="form-control" name="task" id="task" placeholder="Add task" value="<?php echo $task->task; ?>" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">
                                                        Update
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="http://127.0.0.1:8000/taskmanager/assets/bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/taskmanager/assets/js/jquery-3.7.1.js"></script>
</body>

</html>