<?php
// autoloader.php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    require_once( str_replace('\\', '/', $class) . '.php');
});