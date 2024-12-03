<?php
/*------------PHP Data types-------------*/
/*

- String      Series of characters surrounded by quotes
- Integer     Whole number
- Float       Decimal number
- Boolean     true/false 
- Array       Special variable that can hold more than 1 value
- Object      A class
- NULL        Empty variable
- Resource    Special variable that holds a resorce
*/

/*----------Variable Rules---------*/
/*
- Variable must be prefixed with $
- Variable must start with a letter or underscore
- Variable cant start with a number
- Variable can only contain alpha-numeric characters and underscore (A-z, 0-9, _)
- Variable is case-sensitive
*/

$name = "Brad"; // String
$age = 30; // Int
$has_kids = false; // Bool
$cash_on_hand = 10.22; // Float

// echo "${name} is ${age} years old";

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo DB_NAME;