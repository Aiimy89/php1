<?php
    $fruits = ['Apple', 'Orange', 'Pear'];

    //  echo count($fruits); // Get length

    // var_dump(in_array('Apple', $fruits)); // Search array

    //Add to array
    $fruits[] = 'grape';
    array_push($fruits, 'blueberry', 'strawberry');
    array_unshift($fruits, 'mango');
   
    print_r($fruits);
