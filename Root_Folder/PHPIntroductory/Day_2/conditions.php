<?php

// ** CONDITIONS **
// Test something
/* if ($condition) {
  echo 'It\'s true.';
  echo 'blabla';
} else {
  echo 'It\'s not true !';
}; */

/* if ($condition)
  echo 'It\'s true.'; */

$test = true;

if ($test == true)
  echo 'It\'s true';
else
  echo 'It\'s false';

?>

<div>
  <?php if ($test) : ?>
    <p>It is true</p>
  <?php endif; ?>
</div>

<?php

// ** COMPARISON OPERATORS **
$x = 10;
$y = 5;

if ($x == $y)
  echo 'Two values are the same' . '<br>';
else if ($x > $y)
  echo 'x value is bigger' . '<br>';
else
  echo 'y value is bigger' . '<br>';

if ($x >= $y)
  echo 'It is greater or equal to y' . '<br>';

if ($x != $y)
  echo 'Both values are different' . '<br>';

// ** TERNARY OPRATORS **
$results = ($x == $y) ? 'It\'s true.' : 'It\'s NOT true.';
echo '<br>' . $results . '<br>';

if ($x % 2 == 0)
  echo 'X is an even number';

?>