<?php 

/*

	-- Exercise 1 :

	- Part 1

		A script ask for a number (create a form).

	- Part 2

		Create a function that expect an argument $number.
		User should now enter an integer between 1 and $number.
		Edit your function to match these constraints.
		Each time you call the function, you can generate the $number randomly if you want.

		For example : myFunction(50) -> Now the user should enter a number between 1 and 50.

	- Part 3

		We will now add checks to ensure that our program meets all our expectations.

		We know what must not happen :
			– user enter a number that is not between 1 and $number 
			- user didn't enter a number (for example, he enters some string..)

		Each error will have to be detected by the program and triggered by a specific exception.
		It is therefore necessary to manage two different classes of exception.

	-- Exercise 2 :

	- Part 1

		A program asks the user for a file name.
		For now, the program does nothing else.

	- Part 2

		Now, when the user enters the name of the file, the program will read this file and then display the contents of it.

		You must handle the case where the file does not exist.

	- Part 3

		In case the file does not exist, give the user an additional chance to enter a new file name.
		The user has 3 chances for enter a valid filename.

	-- Exercice 3 :

	Remember exercises on animals, humans, robots....

	Unfortunately, when employees work, sometimes some of these employees are injured: it is known as work accident.

	There is one in four chance that a workplace accident will occur.
	When this happens, you have to remove the employee from the worker list and put him on a list of injured workers.

	A robot can't be injured.

	Tips : When a human works, it is necessary to use a random and to raise an exception 'work accident'.

*/
