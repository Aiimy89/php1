<?php

    function registerUser($email) {
        echo "$email registered";
    }

    // registerUser('Brad');

    function sum($n1 = 9, $n2 = 0){
        return $n1 + $n2;
    }

//    echo sum();

   $c = fn($c1, $c2) => $c1-$c2;

   echo $c(10,3);