<?php 

/*autoload classes here*/

spl_autoload_register(function ($class_name) {
    include 'components/class/' .$class_name . '.class.php';
});