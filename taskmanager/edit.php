<?php
require_once('./partials/_head.php');
require_once('./app/config/autoloader.php');
require_once('./controller/TaskController.php');

?>

<body>
    <div class="container-fluid bg-grey-100 min-vh-100 d-flex justify-content-center">
        <div class="taskmanager-box mt-4" style="width: 50%;">
            <div class="card shadow-sm my-3">
                <div class="card-body">
                    <h5 class="card-title">Edit Task</h5>
                    <form action="edit.php" method="post">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="id" value="<?php echo $editTask->id; ?>">
                        <div class="mb-3">
                            <label for="inputTask" class="form-label">Add Task</label>
                            <input type="text" class="form-control" name="task" id="task" value="<?php echo $editTask->task; ?>" placeholder="Add task" required>
                        </div>
                        <div class="btn-group btn-sm">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Update
                            </button>
                            <a href="http://127.0.0.1:8000/taskmanager/index.php" class="btn btn-secondary btn-sm">All Tasks</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('./partials/_footer-script.php') ?>
</body>

</html>