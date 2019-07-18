<?php

class FlowerManager
{
  public function getFlowers()
  {
    require_once 'database.php';

    $flowerQuery = 'SELECT * FROM flowers';
    $row = $flowerQuery->fetch(PDO::FETCH_ASSOC);

    echo $row['flowers_name'] . '<br>';
    echo $row['flowers_price'] . ' ' . '€' . '<br><br>';
    echo '<img height="200px" src="images/' . $row['images'] . '"><br><br>';
  }
}
