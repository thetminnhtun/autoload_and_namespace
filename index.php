<?php 

/**
 * autoload.php file will be automatically include files which has class or function
 * whenever invoke the class or call functions
 */

include './vendor/autoload.php';

// use Earth\Animal\Dog;
// use Earth\Person\Man;

echo '<h3>Classmap Autoload</h3>';
new Circle; 
new Square; 

echo '<hr>';

echo '<h3>PSR-4 Autoload</h3>';
new Earth\Person\Man; 
new Earth\Animal\Dog;

echo '<hr>';

echo '<h3>Files Autoload</h3>';
today(); 
tomorrow();
yesterday();

sum(1, 2);