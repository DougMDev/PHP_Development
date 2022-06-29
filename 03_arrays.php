<?php

//Simple Array
$numbers = [1, 34, 342, 19294];
$fruits = array('apple', 'bannana', 'grapes');

print_r($numbers);

echo $fruits[1];

//Associative Array
$colors = [
    1 => 'red',
    2 => 'blue',
    7 => 'yellow'
];

$myCol = $colors[7];
echo $myCol;

$people = [
    [
    'first_name' => 'Brad',
    'last_name' => 'Stevens',
    'email' => 'brad213@gmail.com'
    ],
    [
    'first_name' => 'Laura',
    'last_name' => 'Willow',
    'email' => 'lwillow@gmail.com'
    ],
    [
    'first_name' => 'Charlie',
    'last_name' => 'Hamilton',
    'email' => 'charliehh12@gmail.com'
    ],
];
echo $people[1]['email'];

var_dump(json_encode($people));
?>