<?php

for($x = 0; $x <= 10; $x++) {
    echo 'Number ' . $x . '<br>';
}

$y = 1;

while($y <= 15) {
    echo "Number is ${y}" . "<br>";
    $y = $y + 1;
}

$person = [
    'first_name' => 'Doug',
    'last_name' => 'Mowat',
    'email' => 'DougMDev@outlook.com'
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
}


?>