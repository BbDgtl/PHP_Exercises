<?php

/*
- Exercice : 
-- Part 1 :
	Based on the 'character' exercise, make sure that, if its characteristic "Attak" or "Defense" are greater than 9, an additional message is displayed:
	<div class="alert">
    	<strong>Congratulations !</strong> Your character is ready to fight.</strong>
	</div>
-- Part 2 : 
		Add a conddition, if it is below 5, display message :

        <div class="alert">
            <strong>Wait !</strong> Your charachter is too weeeakk!
        </div>
*/

$charIMG = '<img src ="../Day_1/imgs/drizzt.png">';
$lastName = 'Do\'Urden';
$firstName = 'Drizzt';
$characteristics = array(
  'alignment' => 'Chaotic Good',
  'age' => 140,
  'attack points' => 31,
  'defense points' => 50
);

if ($characteristics['attack points'] || $characteristics['defense points'] > 9)
  echo '<div class="alert">
          <strong>Congratulations ! Your character is ready to fight!</strong>
        </div>';
else if ($characteristics['attack points'] || $characteristics['defense points'] < 5)
  echo '<div class="alert">
          <strong>Wait ! You are too weak!</strong>
        </div>';
