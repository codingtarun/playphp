<?php
require_once '../../config/config.php';
include_once ROOT_DIR . 'components/header/_header.php';

// Check if the form is submitted

if (isset($_POST['btnSave'])) {
    $title = $_POST['txtTitle'];
    $slug = $_POST['txtSlug'];
    $excrept = $_POST['txtExcrept'];
    $body = $_POST['txtBody'];
    $status = $_POST['slctStatus'];
    $category = $_POST['slctCategory'];
    $user = $_SESSION['user']['name'];

    // Input validation 

};

?>

<body>
    <?php include_once ROOT_DIR . 'components/navbar/_adminNavbar.php'; ?>
    <div class="container-fluid mt-3">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        Post | Create
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="txtTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="txtTitle" name="txtTitle" placeholder="Enter Title">
                            </div>
                            <div class="mb-3">
                                <label for="txtSlug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="txtSlug" name="txtSlug" placeholder="Enter Slug">
                            </div>
                            <div class="mb-3">
                                <label for="txtExcrept" class="form-label">Excrept</label>
                                <textarea class="form-control" id="txtExcrept" name="txtExcrept"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="txtBody" class="form-label">Body</label>
                                <textarea class="form-control" id="txtBody" name="txtBody"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="slctStatus" class="form-label">Status</label>
                                <select class="form-select" aria-label="Default select example" id="slctStatus" name="slctStatus">
                                    <option selected>Select Status</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Published">Published</option>
                                    <option value="Archived">Archived</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="slctCategory" class="form-label">Category</label>
                                <select class="form-select" id="slctCategory" name="slctCategory">
                                    <option selected>Select Category</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Published">Published</option>
                                    <option value="Archived">Archived</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="btnSave" class="form-control" id="btnSave">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once ROOT_DIR . 'components/footer/_footer-scripts.php'; ?>
</body>

</html>