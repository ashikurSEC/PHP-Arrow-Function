<?php 

$string = 'alexander';

$split = str_split( $string );

$result = array_map(fn( $char, $count ) => [
    'char'  => $char,
    'count' => $count
], array_unique( $split ), array_count_values( $split ));

echo "<pre>"; 
var_dump( $result );
echo "</pre>";