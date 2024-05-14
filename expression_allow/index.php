<?php 

// $user = null;

$user = ['name' => 'Alex'];


function gerResult ( $user ) {
    if ( !$user ) {
        return 'Hey';
    }
    return 'Hey ' . $user['name'];
}


var_dump( gerResult( $user ));