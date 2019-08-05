<?php 

/*
	Step 1 :

		Create a user table in your database.
		A user is represented by a first name, last name and email.

	Step 2 :

		Create a controller named 'UserController'.
		For now, it's empty.

	Step 3 :

		- Create a route '/users'.
		This route will call the method 'show' of the controller.

		- In the controller, create the method 'show'.
		This method will query the database to get all the users.
		It will display the view 'users'

		- Create a view 'users.blade.php'
		This view will be used to display all the users.
	
	Step 4 : 

		- Create a template to use it in every page.
		- Create an header and a footer to be use in this template.
		- The page 'users.blade.php' should now use the template

    Step 5 : 
    	Make sure the title of the page is optionnal.
		If you don't specify the value of the title, it'll display 'My Website'

	Step 6 :

		- Create a view 'login.php'
		This view will display a form with one input : email.
		The form will use the 'POST' method.

		- Create a route '/login' attached to this view.
		This route only display the view

	Step 7 :

		When clicking on submit button from '/login', it should query the database
		to find the user corresponding to the mail.
		So you should define the 'action' of your form to 'user'.

		You have to :
			- Create a view 'user.blade.php'
			This view will display all the informations about a user.
			- Create a new route '/user' that use POST method
			This route will call a new method in your controller.
			- This method, in your controller, should retrieve all the data from the POST protocol
			And then query the database to get the informations about this user.
			Then call the view 'user'
?>