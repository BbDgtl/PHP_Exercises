<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Encryption</title>
</head>

<body>
  <?php

  /* 

    It is necessary to HASH passwords BEFORE storing them in DATABASES 
  
    Nowadays, we don't use SHA1 or MD5 to hash passwords because it is
    now vulnerable because of machines with high computing power.

    We want to use a 'SALT' : an additional string, which aims to make 
    a password more complex before HASHING.

    Weak salt & weak algorithm for generating a hash, for example: */

  // ! $salt = 'myS4lt387ez';
  // ! $hash = md5($password . $salt); 
  // ! or
  // ! $hash = sha($password . $salt);
  // ! These are DANGEROUS and outdated.

  /* 
    The password_hash() FUNCTION simplifies your code, making it more
    secure.
    When you need to hash a password, use this function and it will 
    return the hash which can be stored in the DATABASE. (It's using
    the 'BCRYPT' algorithm).

  */

  if (isset($_POST['hash'])) {
    $hashedPass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // * Salt is RANDOMLY generated.
    echo $hashedPass;
    // * saves this $hasedPass in the database.
  }

  if (isset($_POST['confirmPassword'])) {
    $hashDB = '';
    if(password_verify($_POST['password'], $hashDB)){
      echo 'Password matches';
    } else {
      echo 'Password invalid';
    }
  }

  ?>

  <p>Register</p>
  <form action="" method="POST">
    <input type="text" name='password'>
    <input type="submit" name='hash'>
  </form>

  <hr>

  <p>Login</p>
  <form action="" method="POST">
    <input type="text" name='password'>
    <input type="submit" name='confirmPassword'>
  </form>

</body>

</html>