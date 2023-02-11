<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1,2,3,4];

// Using the array function to create an array of strings
$fruits = array('aaple', 'orange', 'pear');

var_dump($fruits);
echo $fruits[1];

/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
  1 => 'red',
  4 =>  'blue',
  6 => 'green'
];

echo $colors[4];

$hex = [
  'red' => "#f00",
  'blue' => '#0f0',
  'green' => '#00f',
];

echo $hex['blue'];

/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person

$person = [
  'first_name' => 'chris',
  'last_name' => 'vargas',
  'email_address' => 'email@email.com'
];

echo $person['first_name'];

// Array of people
$people = [
  [
  'first_name' => 'chris',
  'last_name' => 'vargas',
  'email_address' => 'email@email.com'
  ],
  [
  'first_name' => 'John',
  'last_name' => 'Smith',
  'email_address' => 'email@email.com'
  ],[
  'first_name' => 'Jane',
  'last_name' => 'Doe',
  'email_address' => 'email@email.com'
  ],
];

echo $people[2]['last_name'];

// Encode to JSON
var_dump(json_encode($people));

// Decode from JSON
$jsonobj = '{"first_name":"Chris","last_name": "Vargas","email":"email@gmail.com"}';
var_dump(json_decode($jsonobj));
?>