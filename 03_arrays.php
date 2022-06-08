<?php
//simple array
$cars = array("Volvo", "BMW", "Toyota");
$numbers = [1, 2, 3, 4, 5];

// print_r($cars);
// echo "<br>";
// print_r($numbers);
// echo "<br>";

// var_dump($cars);
// echo "<br>";
// var_dump($numbers);
// echo "<br>";

// echo $cars[0];

//Association Array KEY VALUE PAIR
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//echo "Peter is " . $age['Peter'] . " years old.";

//Multi-dimensional array
$people = [
    [
        'name' => 'Peter',
        'age' => '35'
    ],
    [
        'name' => 'Ben',
        'age' => '37'
    ],
    [
        'name' => 'Joe',
        'age' => '43'
    ]
];

// echo $people[0]['name'] . " is " . $people[0]['age'] . " years old.";

//json encode and decode
var_dump(json_encode($people));
echo "<br>";
var_dump(json_decode(json_encode($people)));
?>