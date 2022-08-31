<?php
$fruits = ['apple', 'banana', 'orange', 'pineapple', 'strawberry'];

//count() gets the length of the array
//echo count($fruits).'<br>';

//search array for a value in_array()
//var_dump (in_array('strawberry', $fruits));

//add to the beginning of the array array_push()
array_push($fruits, 'grape');
array_push($fruits, 'peach');

//add to the end of the array_unshift
array_unshift($fruits, 'kiwi');
print_r($fruits);

//remove from the end an array array_pop()
array_pop($fruits);
print_r($fruits);

//remove from the beginning array_shift()
array_shift($fruits);
print_r($fruits);

//remove a specific value from the array unset()
unset($fruits[2]);
print_r($fruits);

//split the array into 2 arrays array_chunk()
array_push($fruits, 'mango');
$chunkedArray = array_chunk($fruits, 2);
print_r($chunkedArray);

$arr1 = [1, 2, 3, 4, 5];
$arr2 = [6, 7, 8, 9, 10];
print_r($arr1);
print_r($arr2);

//merge 2 arrays array_merge()
$mergedArray = array_merge($arr1, $arr2);
print_r($mergedArray);

//array_combine() uses the first array parameter as keys and the second array as values
$colours = ['red', 'green', 'blue'];
$shapes = ['circle', 'square', 'triangle'];
$combined = array_combine($colours, $shapes);
print_r($combined);

//array_keys returns an array of the keys of an array
$keys = array_keys($combined);
print_r($keys);

//array_flipped() flips the key and value
$flipped = array_flip($combined);
print_r($flipped);

//range() generates an array of the min and max parameters
$numbers = range(1,20);
print_r($numbers);

//array_map() allows you to iterate over an array and modify its elements using a callback function. The callback function will then be executed on each of the array's elements.
$newNumbers = array_map(function($number){
    return "Number: ${number}";
}, $numbers);
print_r($newNumbers);

$lessThanTen = array_filter($numbers, function($number){
    return $number < 10;
});
print_r($lessThanTen);

//reduce() reduces the array to a single value. The callback function will be executed on each element of the array, and the result will be stored in the accumulator parameter.
$sum = array_reduce($numbers, function($total, $number){
    return $total + $number;
}, 0);

var_dump($sum);

?>