<?php
/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($x = 0; $x <= 10; $x++) {
  echo $x;
}

/* ------------ While Loop ------------ */
/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
$x = 1;
while ($x <= 15) {
  echo "Number $x '<br>'";
  $x++;
}

/* ---------- Do While Loop --------- */
/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/

$a = 1;
do {
  echo "Number $a <br>";
  $a++;
} while ($a <= 10);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

for ($x = 0; $x < count($posts); $x++) {
  echo "$posts[$x] <br> <br>";
}

foreach ($posts as $post) {
  echo "$post <br>";
}

// Use the keys within the loop for an associative array

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

foreach ($person as $key => $value) {
  echo "$key - $value <br>";
}
