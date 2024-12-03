<?php
    $fruits = ['Apple', 'Orange', 'Pear'];

    //  echo count($fruits); // Get length

    // var_dump(in_array('Apple', $fruits)); // Search array

    //Add to array
    $fruits[] = 'grape';
    array_push($fruits, 'blueberry', 'strawberry'); // push = add
    array_unshift($fruits, 'mango'); // add item at the top
   
    //Remove from array
    array_pop($fruits);     // pop = remove from the bottom
    array_shift($fruits);   // shift = remove from the beginning
    //unset($fruits['0']);    // unset = remove specific item/index from array


    //Split into 2 chunks
    // $chunked_array = array_chunk($fruits, 2);
    // var_dump($chunked_array);
    // print_r($fruits);

    //Merge 2 arrays
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2]; // ... is to take value from an array

    // print_r($arr4);

    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];
    $c = array_combine($a, $b); // array combine is to set keys and values

    // print_r($c);

    $keys = array_keys($c); // take value of keys
    // print_r($keys);

    $flipped = array_flip($c); //array_flip = flip keys and values
    // print_r($flipped);

    $numbers = range(1,20);
    // print_r($numbers);

    $new_numbers = array_map(function($number){
        return "Number ${number}";
    }, $numbers);   // take original array and mapping through then return array as string

    // print_r($new_numbers);

    $less_than_10 = array_filter($numbers, fn($number) =>
    $number <= 10); // filter takes original array then takes a function of each number then return numbers that is <= 10

    // print_r($less_than_10);

    $sum = array_reduce($numbers, fn($carry, $number) =>  
    $carry + $number);     // array_reduce = reduce array to a single value (sum), $carry return value of prev iteration
    var_dump($sum);