<?php

/*
	Using the Animal/Robot/Human exercise.

	- Step 1 :
		Think about the nature of your classes. At least one of them will never be instantiate...
		You need to turn them into abstract class.
		Maybe change some methods to make it abstract methods.
		Tips : If you pay attention, many of our classes can 'talk' or 'make a sound'

	- Step 2 :
		Some of your classes can do the same job.
		Actually they have the same 'role'.
		Use an interface to abstract all of this.

	- Step 3 :

		In a main program :

		1. Create an array of animals and humans (randomly cats, dogs or humans)
		2. Create an array of human/robots (randomly generated)
		3. Create a script where :
			- You loop ten times
			- Each time, you randomly pick one animal (or human) in the first array
			- The randomly pick element should make a sound
		4. Create a script where :
			- You loop ten times
			- Each time, you randomly pick a human (or a robot) in the second array
			- The randomly pick element should work.
			Each object should be displayed before working.
			Example : 'The woman Madonna, who is blond, is going to work'.

			