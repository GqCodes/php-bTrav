<?php
/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;
  if ($age >= 18) {
    echo 'You are old enough to vote';
  } else {
    echo 'sorry you are not old enought to vote';
  }


  // elseif
$t = date('H');

if ($t < 12) {
  echo 'Good morning';
} elseif($t < 17) {
  echo 'Good afternoon';
} else {
  echo 'Good Morning';
}

// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.
$posts = ['First Post'];

if (!empty($posts)) {
  echo 123;
} else {
  echo 'No Posts';
}

// ternary for an else if
echo !empty($posts) ? $posts[0] : "no posts";

// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL
$first_Posts = $posts[0] ?? null;


/* -------- Switch Statements ------- */
$fav_color = 'red';

switch ($fav_color) {
  case 'red':
    echo 'Your fav color is red';
    break;
  case 'blue':
    echo 'Your fav color is blue';
    break;
  case 'green':
    echo 'Your fav color is green';
    break;
  default:
    echo 'your fav color is not red, green or blue';
    break;
}
?>