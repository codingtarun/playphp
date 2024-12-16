<?php
require_once('./app/config/autoloader.php');
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
    <title>PHP | Taskmanager </title>
</head>

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
    <script src="http://127.0.0.1:8000/taskmanager/assets/bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/taskmanager/assets/js/jquery-3.7.1.js"></script>
</body>

</html>