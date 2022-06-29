<?php

//strlen($string); gives length of string

//strpos($string, 'o') First occurance of character

//strrpose($string, 'o') Last occurance of character

//strrev($string); Reverse a String

//strtolower($string); Lowercase

//strtoupper($string) Uppercase

//str_replace("World", "Everyone", $string); String Replace <replace> <replacewith>


//substr($string, 0, 5); Specified characters
//substr($string, 5); Everything after this

//if (str_starts_with($string, "Hello"));
//if (str_ends_with($string, "Hello"));

$string2 = "<h1>Hello</h1>";
$string3 = "<script>alert(1)</script>";
echo $string2;
// echo $string3;   -- Opens you up to attack
echo htmlspecialchars($string3);
?>