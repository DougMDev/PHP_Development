<?php

/*
- String
- Integar
- Float
- Boolean
- Arrays
- Object
- NULL
- Resource
*/

/*
Variables must be prefixed with $
Must start with a letter or underscore
*/

$name = "Doug"; //String
$age = 26; //Int
$is_tall = true; //Bool
$cash = 20.43; //Float

echo $name;
echo $age;
echo $cash;
echo $is_tall;

echo $name . ' is ' . $age . ' years old.';
echo "${name} is ${age} years old.";

echo 5 + 5;

//Constanse never change
define('HOST', 'localhost');
define('DB_NAME', 'dev_dv');
?>