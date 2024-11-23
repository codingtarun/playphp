<?php

class File // Creating a class.
{
    function displayContect($fileName): bool // Class method to display the content of the file.
    {
        $result = true; // declaring aproperty of the method and assiging value to it.

        try {
            echo "Reading file content<br>";
            $content = file_get_contents($fileName); // reading the content of the file.
            echo "Displaying file content<br>";
            echo $content;
            echo "<hr>";
        } catch (\Throwable $th) {
            $result =  false;
        }
        return $result;
    }
}

$objFile = new File(); // creating instance of the class
$objFile->displayContect('file_1.txt'); // Calling the method using the instance and passing the required argument
$objFile->displayContect('file_2.txt'); // Calling the method again using the instance with different argument.
