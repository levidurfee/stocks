<?php
date_default_timezone_set('America/New_York');
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__FILE__));
function autoloadClass($class) {
    $class = str_replace("levidurfee\StockData\\", "", $class);
    $classFile = ROOT . DS . 'src' . DS . $class . '.php';
    if(is_readable($classFile)) {
        require_once($classFile);
    }
}
spl_autoload_register('autoloadClass');
