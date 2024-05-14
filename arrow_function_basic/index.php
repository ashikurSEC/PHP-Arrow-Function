<?php 

/*
$greet = function () {
    return "Hello World!";
};

var_dump( $greet() );

*/

/*

$greet = fn () => 'Hey';

var_dump( $greet() );

*/

//! Argument

// $greet = fn ( $message ) => $message;

// var_dump( $greet( 'Hey' ));



//! Summation 

// $add = fn ( $left, $right) => $left + $right;

// var_dump( $add (10, 20));

$users = [['id' => 1, 'name' => 'Ashikur'], ['id' => 2, 'name' => 'Priya']];

$ids = array_map(fn ( $users ) => $users['name'], $users);

var_dump( $ids);