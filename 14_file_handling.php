<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

if (file_exists($file)) {
    // echo readfile($file);
    $handle = fopen($file, 'r'); // fread = file open, r = mode read
    $contents = fread($handle, filesize($file)); // fread = file read take in handle and length
    fclose ($handle); // file close 
    echo $contents;
} else {
    $handle = fopen($file, 'w'); // w = write
    $contents = 'Au' . PHP_EOL . 'Mas' . PHP_EOL . 'Azaz'; // PHP_EOL = line break
    fwrite($handle, $contents);
    fclose($handle);
}
