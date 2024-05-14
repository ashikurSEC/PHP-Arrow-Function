<?php 

$name = 'Ashikur Rahman';

// $greet = function () use ($name) {
//     return "Hey " . $name;
// };

// $greet = function () {
//     return "Hey". $GLOBALS['name'];
// };


$greet = fn ( ) => 'Hey '.$name;

var_dump( $greet());