<?php

/**
 * 
 * Autoloader function to automatically loading the required files and classes.
 * 
 */

spl_autoload_register(function ($filename) {
    require($filename . '.php');
});
