<?php
require_once('./partials/_head.php');
require_once('./app/config/autoloader.php');
require_once('./controller/TaskController.php');
?>

<body>
    <?php require_once('./partials/_navbar.php'); ?>
    <div class="container-fluid bg-grey-100 min-vh-100 d-flex justify-content-center">
        <div class="taskmanager-box mt-4" style="width: 50%;">
            <div class="card shadow-sm my-3">
                <div class="card-body">
                    <h5 class="card-title">Add New Task</h5>
                    <form action="#" method="post">
                        <input type="hidden" name="action" value="insert">
                        <div class="mb-3">
                            <label for="inputTask" class="form-label">Add Task</label>
                            <input type="text" class="form-control" name="task" id="task" placeholder="Add task" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Add
                        </button>
                    </form>
                </div>
            </div>
            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <h5 class="card-title">Add New Task</h5>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Task</th>
                                <th scope="col">Status</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tasks as $key => $task) { ?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1; ?></th>
                                    <td><?php echo $task->task; ?></td>
                                    <td><?php echo $task->status; ?></td>
                                    <td>
                                        <form action="http://127.0.0.1:8000/taskmanager/index.php" method="POST">
                                            <div class="btn-group">
                                                <a class="btn btn-sm btn-primary" href="http://127.0.0.1:8000/taskmanager/edit.php?action=edit&id=<?php echo $task->id; ?>">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <input type="hidden" name="action" value="delete">
                                                <input type="hidden" name="id" value="<?php echo $task->id; ?>">
                                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('./partials/_footer-script.php') ?>
</body>

</html>