<?php 

// function greet ( ) {
//     return "Hey";
// }

// var_dump( greet());


// $greet = function () {
//     return "Hello World";
// };

// var_dump( $greet());

$user = [
    [
        'id'    => 1,
        'name'  => 'Ashik'
    ],

    [
        'id'    => 2,
        'name'  => 'Priya'
    ]
];


$ids = array_map(function ( $user){
    return $user['id'];
}, $user);

echo "<pre>";
var_dump( $ids );
echo "</pre>";