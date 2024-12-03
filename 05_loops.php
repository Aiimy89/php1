<?php
/*------------For Loop------------*/

/*
** Syntax
    for(initialize; condition; increment){
    //code to be executed
    }
*/

// for($x =0; $x <= 10; $x++){
//     echo "Number $x <br>";
// }

/*------------While Loop------------*/

/*
** Syntax
    while(condition){
    //code to be executed
    }
*/
// $x = 1;
// while($x <= 15){
//     echo "Number $x <br>";
//     $x++;
// }

/*------------Do While Loop------------*/

/*
** Syntax
    do{
    //code to be executed
    } while(condition);
*/

// $x =4;

// do{
//     echo "Number $x <br>";
//     $x++;
// } while($x <=0);

/*------------Foreach Loop------------*/

/*
** Syntax
    foreach($array as $value){
    //code to be executed
    }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

// for($x = 0; $x < count($post); $x++){
//     echo $post[$x];
// }

// foreach($posts as $post){
//     echo $post;
// }

// foreach($posts as $index => $post){
//     echo $index +1 . '-' . $post . '<br>';
// }

$person = [
    'first_name' => 'Braddy',
    'last_name' => 'Alan',
    'email' => 'brad@example.com'
];

foreach($person as $key => $value){
    echo "$key - $value<br>";
}