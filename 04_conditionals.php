<?php
date_default_timezone_set("Asia/Kuala_Lumpur"); // Set timezone to UTC+8

/*

<       Less than
>       Greater than
<=      Less than or equal to
>=      Greater than or equal to
==      Equal to
===     Identical to
!=      Not equal to
!==     Not identical to

*/

$age = 20;

// if($age >= 18) {
//     echo 'You are old enough to vote';
// }else{
//     echo 'You are not old enough to vote';
// }

$t = date("H");

// echo $t;


// if ($t < 12){
//     echo "Good Morning";
// }elseif($t <= 17){
//     echo "Good Afternoon";
// }else{
//     echo "Good Evening";
// }

$posts = ['First Post'];

// if(!empty($posts)){
//     echo $posts[0];
// } else {
//     echo 'No Post';
// }

// echo !empty($posts) ? $posts[1] : 'No Post';

// $first_post = $posts[0] ?? null;
// echo $first_post;

$fav_color = 'green';

switch ($fav_color) {
    case 'red':
        echo "Your fav color is red";
        break;
    case 'blue':
        echo "Your fav color is blue";
        break;
    case 'green':
        echo "Your fav color is green";
        break;
    default:
        echo "Your fav color is not red, blue or green";
}
