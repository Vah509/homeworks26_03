<?php
/**
 * Created by PhpStorm.
 * User: VAHTANG
 * Date: 31.03.2016
 * Time: 22:23
 */
echo "<pre>";

function autoloader_class ($class){
    $class= getcwd() . DIRECTORY_SEPARATOR . 'lib'. DIRECTORY_SEPARATOR . $class . '.php';
    if ( ! file_exists($class)){
        throw new Exception (' class file is not found :' . $class . "\n");
    }
    include_once ($class);

    try {
    }
    catch (Exception $e){
        echo 'Autoloader_class ERROR: '. $e;
    }
}

spl_autoload_register ('autoloader_class');

$vehicle = new Car();
echo $vehicle->go_To('Tbilisi') . '<br>';

$vehicle = new Bycikle();
echo $vehicle->go_To('Tbilisi') . '<br>';

$vehicle = new Boat();
echo $vehicle->go_To('Tbilisi') . '<br>';