<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>PHP OOP</h1>
    <?php
    /**
     * Including files
     */
    include_once('./app/Controllers/User.php');
    /**
     * Creating object of the User class
     * 1. Object is used to access properties and methods of the class
     * 2. Objects are also called as instance of the class
     * 3. We can create as many as we required objects of class.
     * 4. Each instance of the object is isolated and has its own set of data.
     */
    $objUser = new User(); // creating object
    $objUser->create(); // access method 'create()'


    /**
     * Files class object
     */
    include_once('./app/Controllers/File.php');
    $objFile = new File();
    echo $objFile->displayContent('./.env');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>