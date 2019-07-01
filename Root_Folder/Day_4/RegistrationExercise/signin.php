<!--	-- Part 1 :
	   		Create two pages:
	            - signin.php: User registration page, with the following fields:
	            - Name
	            - First name
	            - E-mail
	            - Password
	            - Confirmation of password
	            - Checkbox "Subscribe to the newsletter"
 -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Registration Page</title>
  <style>
    article {
      width: 80%;
      float: left;
    }

    input {
      margin: .5rem;
    }
  </style>
</head>

<body>
  <article>
    <form action="recap-signin.php" method="POST">
      <label for="name">Name:
        <input type="text" name="lastName" placeholder="Last Name" value="" required>
        <input type="text" name="firstName" placeholder="First Name" value="" required>
      </label>
      <br>
      <label for="email">Email:
        <input type="email" name="email" placeholder="Email Address" value="" required>
      </label>
      <br>
      <label for="password">Password:
        <input type="password" name="password" placeholder="password" value="" required>
        <input type="password" name="passwordConfirmation" placeholder="password confirmation" value="">
      </label>
      <br>
      <label for="checkbox">Subscribe to our newsletter?</label>
      <input id="checkBox" type="checkbox" name="checkbox" value="Subscribe to the newsletter?" checked>
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </article>

</body>

</html>