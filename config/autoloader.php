<?php
spl_autoload_register(function ($filename) {
    require($filename . '.php');
});
