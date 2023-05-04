<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">

<head>
  <title>Data Types</title>
</head>

<body>
  Part 1.
  <br />
  <?php
  echo "Twinkle, Twinkle little star.";
  ?>
  <br />
  <?php
  $string1 = "Twinkle";
  $string2 = "star";

  echo "$string1, $string1 little $string2.";
  ?>
  <br />
  <?php
  $string1 = "Hello";
  $string2 = "buddy";

  echo "$string1, $string1 little $string2.";
  ?>

  <br />
  Part 2.
  <br />

  <?php
  $x = 10;
  $y = 7;
  ?>

  <?php echo $x + $y; ?><br />
  <?php echo $x - $y; ?><br />
  10 * 7 = <?php echo $x * $y; ?><br />
  10 / 7 = <?php echo $x / $y; ?><br />
  10 % 7 = <?php echo fmod($x, $y); ?><br />
  
  Part 3.
  <br />

  1. Set Variable $variable to 8.
  <br />
  Output: <?php
    $variable = 8;
    echo "Value is now $variable."
  ?><br />

  2. Add 2.
  <br />
  Output: <?php $variable += 2; echo "Value is now $variable."; ?><br />

  3. Subtract 4.
  <br />
  Output: <?php $variable -= 4; echo "Value is now $variable."; ?><br />

  4. Multiply by 5.
  <br />
  Output: <?php $variable *= 5; echo "Value is now $variable."; ?><br />

  5. Divide by 3.
  <br />
  Output: <?php $variable /= 3; echo "Value is now $variable."; ?><br />

  6. Increment value by one.
  <br />
  Output: <?php $variable++; echo "Value is now $variable."; ?><br />

  7. Decrement value by one.
  <br />
  Output: <?php $variable--; echo "Value is now $variable."; ?><br />

  Part 4.
  <br />
  <?php
    $around = "around";

    echo 'What goes' . ' ', $around, ' ', 'comes' . ' ', $around, '.';
  ?>

  
</body>

</html>