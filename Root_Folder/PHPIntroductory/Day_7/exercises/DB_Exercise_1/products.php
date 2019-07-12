<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GameShop</title>
  <style>
    ul {
      list-style: none;
      display: flex;
    }

    li {
      padding: 5px;
      border: 1px solid black;
    }

    a {
      text-decoration: none;
      padding: 10px;
    }

    nav {
      display: flex;
    }

    main {
      display: flex;
    }
  </style>
</head>

<body>

  <header>
    <h1>Products Page</h1>
    <nav>
      <ul>
        <a id="ps4" href="products.php?filter=1">
          <li>PS4</li>
        </a>
        <a id="xbox one" href="products.php?filter=2">
          <li>XBONE</li>
        </a>
        <a id="switch" href="products.php?filter=3">
          <li>SWITCH</li>
        </a>
        <a id="pc" href="products.php?filter=4">
          <li>PC</li>
        </a>
      </ul>
      <ul>
        <a id="action" href="products.php?filter=ACTION">
          <li>Action</li>
        </a>
        <a id="mmo" href="products.php?filter=MMO">
          <li>MMO</li>
        </a>
        <a id="rpg" href="products.php?filter=RPG">
          <li>RPG</li>
        </a>
        <a id="fps" href="products.php?filter=FPS">
          <li>FPS</li>
        </a>
        <a id="platform" href="products.php?filter=PLATFORM">
          <li>PLATFORM</li>
        </a>
        <a id="simulation" href="products.php?filter=SIMULATION">
          <li>SIMULATION</li>
        </a>
      </ul>
      <!-- <ul>
        <a id="simulation" href="products.php?">
          <li>ALL</li>
        </a>
      </ul> -->
    </nav>
  </header>

  <main>
    <div>
      <?php

      require_once 'database.php';

      $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
      // echo 'Connection successful.' . '<br>';
      $db_name = DB_NAME;
      $db_found = mysqli_select_db($conn, $db_name);

      $filter = $_GET['filter'];

      if ($db_found) {
        // Prepare the query:
        $query = "SELECT games.title, games.image 
        FROM games INNER JOIN platform ON platform.id_platform=games.id_platform 
        WHERE platform.id_platform = $filter";
        $query2 = "SELECT title, games WHERE category = $filter";
        // Send the query to the DB

        $results = mysqli_query($conn, $query);
        $results2 = mysqli_query($conn, $query);

        while ($db_record = mysqli_fetch_assoc($results)) {
          echo '<br>';
          echo $db_record['title'] . '<br>';
          echo '<img height="300px" width="200px" src="images/' . $db_record['image'] . '">' . '<br>';
          ?>
          <button>Add To Cart</button>
        <?php
        }
      } else {
        echo "$db_name not found!";
      }

      mysqli_close($conn);
      ?>
    </div>
  </main>


</body>

</html>