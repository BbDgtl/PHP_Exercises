<?php

class UserManager
{
  public function login($email, $password)
  {
    // TODO 1 - Connect to the DB
    require_once 'database.php';

    // TODO 2 - Query the DB
    // TODO 2.1 Prepare the query
    $userQuery = 'SELECT * FROM users WHERE email=? AND password=?';
    $userPrep = $pdo->prepare($userQuery);

    $userPrep->bindValue(1, $email);
    $userPrep->bindValue(2, $password);

    // TODO 2.2 - Execute the query
    $userPrep->execute();
    // var_dump($userPrep);

    // TODO 2.3 - Fetch/Get the results
    $row = $userPrep->fetch(PDO::FETCH_ASSOC);
    // var_dump($row);

    // TODO 3 - Return False OR the User
    if ($row) {
      // User exists. Create the User and return.
      require_once 'User.php';
      $user = new User($row['user_id'], $row['email_address']);
      // var_dump($user);
      return $user;
    } else {
      // ! No user found in DB
      return false;
    }
  }
}
