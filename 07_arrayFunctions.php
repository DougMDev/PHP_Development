<?php

    // $fruits = ["Apple", "Bannana", "Grape", "Orange"];

    // echo count($fruits);
    // var_dump(in_array('Apple', $fruits));

    // $fruits[] = "Melon";
    // array_push($fruits, 'blueberry', 'strawberry');
    // array_unshift($fruits, "mango");
    // print_r($fruits);

    // array_pop($fruits); //Remove Last
    // array_shift($fruits); //Remove First
    // print_r($fruits);

    // unset($fruits[3]); //Index also removed
    // print_r($fruits);

    // $chunkedArray = array_chunk($fruits, 3);
    // print_r($chunkedArray);

    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];
    $arr3 = array_merge($arr1, $arr2);
    // print_r($arr3);
    $arr4 = [...$arr1, ...$arr2];
    // print_r($arr4);

    $a = ["green", "red", "yellow"];
    $b = ["apple", "strawberry", "bannana"];

    $c = array_combine($a, $b);
    //print_r($c);

    $keys = array_keys($c);
    // print_r($keys);

    $flipped = array_flip($c);
    //  print_r($flipped)

    $numbers = range(1, 20);
    // print_r($numbers);

    $new_numbers = array_map(function($number) {
        return "Number ${number}";
    }, $numbers);
    // print_r($new_numbers);


    $lessThan10 = array_filter($numbers, fn($number) =>
    $number <=10);

    // print_r($lessThan10);

    //Carry holds current number
    $sum = array_reduce($numbers, fn($carry, $number) =>
    $carry + $number);

    var_dump($sum);
?>