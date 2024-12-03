<?php
    // Simple array
    $numbers = [1, 3, 23, 32];
    $fruits = array('apple', 'orange', 'banana');

//    var_dump($numbers);

// echo $fruits[2];

// Assosciative Array
$colors = [
    1 => 'Red',
    3 => 'Grey',
    2 => 'Green;'
];

// echo $colors[3];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'Braddy',
    'last_name' => 'Alan',
    'email' => 'brad@example.com'
];

// echo $person ['first_name'];

$people = [
    [
        'first_name' => 'Braddy',
        'last_name' => 'Alan',
        'email' => 'brad@example.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Alan',
        'email' => 'john@example.com'
    ],
    [
        'first_name' => 'Stones',
        'last_name' => 'Alan',
        'email' => 'stones@example.com'
    ]
];

// echo $people[1]['email'];

var_dump(json_encode($people));