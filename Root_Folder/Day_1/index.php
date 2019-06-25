<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fruit Arrayt</title>
</head>

<body>

  <?php
  // ** Exercise 1 **
  // TODO Create your first fruit array containing: "Apples, Strawberies, Pineapples, Lemons"
  // TODO Display the value of the 2nd position.
  $fruit = array(
    'Apples',
    'Strawberries',
    'Pineapples',
    'Lemons'
  );

  echo $fruit[1] . '<br>';

  // ** Exercise 2 **
  //  TODO Create an associative array that containes the number in stock for each item: 20 T-shirts, 10 Caps and 5 Shoes.
  //  TODO Display the stock of caps.
  $clothingStock = array(
    'T-Shirts' => 20,
    'Caps' => 10,
    'Shoes' => 5
  );

  echo $clothingStock['Caps'] . ' Caps <br>';

  // ** Exercise 3 **
  // TODO The clothing store has just received a new stock
  // TODO Add 5 caps.
  // TODO Add 20 shoes.
  // TODO Display the shoes stock.
  $clothingStock['Caps'] += 5;
  $clothingStock['Shoes'] += 20;
  echo $clothingStock['Shoes'] . ' Shoes <br>';

  //  ** Exercise 4 **
  // TODO You have a list of contacts,
  // TODO Each contact has a name, an email and a phone number.
  // TODO The goal of the exercise is to create an array that will contain all the information for ALL my contacts. I need to be able to access a contact's information easily and quickly.
  $contacts = array(
    'Ricardo' => array(
      'Tel' => 0677777777,
      'Email' => 'Ricardo@gmail.com'
    ),
    'Michael' => array(
      'Tel' => 0606060606,
      'Email' => 'Michael@gmail.com'
    ),
    'Emmanuel' => array(
      'Tel' => 0610101010,
      'Email' => 'manu@gmail.com'
    )
  );

  echo 'Ricardo\'s info : ' . $contacts['Ricardo']['Tel'] . '<br>';
  var_dump($contacts) . '<br>';

  // ** Exercise 5 **
  // TODO You need to create a web page with basics HTML tags.
  // TODO In this page, you'll display all the characteristics of an imaginary character,
  // TODO from a role-play game.
  // TODO The character information will be saved in variables.
  // TODO There is four (4) informations : 
  // TODO -- An avatar image
  // TODO -- The last name
  // TODO -- The first name
  // TODO -- An array of characteristics (like attak point, defense point... put everything you want)
  // TODO Use an associative array.



  ?>

</body>

</html>