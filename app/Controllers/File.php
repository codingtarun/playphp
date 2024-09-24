<?php
class File
{
    function displayContent($filename): bool
    {
        $result = true;
        try {
            echo "Reading the content of the file<br/>";
            $content = file_get_contents($filename);
            echo "Displaying the content of the file<br/>";
            echo $content;
        } catch (\Throwable $th) {
            $result = false;
        }

        return $result;
    }
}
