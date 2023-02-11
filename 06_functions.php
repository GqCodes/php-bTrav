<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
  - Functions have their own local scope as opposed to global scope
*/
function register_user($email)
{
  echo "$email registered";
}
register_user('chris');


function sum($n1 = 4, $n2 = 5)
{
  return $n1 + $n2;
}
echo sum();

// Assigning anonymous functions to variables. Often used for closures and callback functions
$subtract = function ($n1, $n2) {
  return $n1 - $n2;
};
echo $subtract(10, 5);

$multiply = fn ($m1, $m2) => $m1 * $m2;
echo $multiply(2, 3);
