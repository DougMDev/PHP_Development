<?php

$x = 26;

function regiterUser($email) {
    global $x; //Sets a Global Scope
    echo "User Registered - ${email} ";
}

regiterUser("DougMDev@outlook.com");

function sum($n1, $n2) {
    return $n1 + $n2;
}

$number = sum(12, 4);
echo $number;

?>