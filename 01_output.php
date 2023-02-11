<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

/* ------- Outputting Content ------- */

// Echo - Output strings, numbers, html, etc
echo 'Hello';
echo 123;
echo '<h1>Hello</h1>';

// print - Similar to echo, but a bit slower
print 'Hello';

// print_r - Gives a bit more info. Can be used to print arrays
print_r('Hello');
print_r([1, 2, 3]);

// var_dump - Even more info like data type and length
var_dump('Hello');
var_dump([1, 2, 3]);

// Escaping characters with a backslash
echo "Is your name O\'reilly?";

// If there is more content after the PHP, such as this file, you do need the ending tag. Otherwise you do not.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    <?php echo 'title'; ?>
  </h1>
</body>
</html>