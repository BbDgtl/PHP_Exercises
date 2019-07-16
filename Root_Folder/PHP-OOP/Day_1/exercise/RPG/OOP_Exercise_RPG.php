<?php 

/* 

	Imagine a Role-Playing Game.
	There are several types of characters: Humans, Orcs and Elves.

	Each character has:
		> A name
		> Health points (default 100)
		> Points of attack (default 10)
		> Defense points (default 5)
		> A war-cry (eg "Attaaaaaack!")

	Each type of character has particular characteristics:
		> Humans have a +1 bonus on all types of weapons (see weapon below).
		> The Orcs have +2 attack and defense but -10 life.
		They start with 90 HP, 12 Atk and 7 dfs.
		> The Elves have -3 in defense. So they start with 2 defenses.
		Elves can flee any fight by sacrificing 20 life.
		When an Elf wins a fight, he wins 2 defense and 2 life.


	-- Step 1 :

	Create a Character class.
	This class will implement all attributes and methods common to the characters.

	Set up different type of character. You must be able to create Elves, Orcs or Humans.
	Example : 
	$elf = new Character('Elf');
	$orc = new Character('Orc');

	-- Step 2 :

	Orcs are not understood by anyone.
	Their war cry is now: "wwouogrouroulou mlll !!"

	-- Step 3 :

	There are several types of equipment: armor, sword, others (you can add as many as you want).

	Each equipment is designated by a name and a description of the item.
	Equipment also gives a special bonus.

	For example: an armor can give +5 in defense, a +3 sword in attack.
	There is even some object that gives +10 in attack but decreases defense.

	Create an Equipment class.
	This class will implement all the attributes and methods common to the devices.

	Set up the different types of equipment. You must be able to create multiple equipment.
	(I leave you free to your imagination for the creation of weapon and specific power ....)
	For example :
	$sword = new equipment("Death Sword", 10, 0, 0); // 10 atk bonus, 0 def bonus, 0 life bonus;
	$jewel = new equipment("Grace Necklace", 0, 0, 5); // 0 atk bonus, 0 def bonus, 5 life bonus;


	-- Step 4 :
	
	A character can now hold an equipment.
	You have to change the Character class and add a new property : $equipment;
	You can add/remove/display the equipment for a character (create a method for each action)

	Implement the fact that a character has (or not) an inventory.
	
	-- Step 5 :

	A character can now hold many equipments.
	It's actually an 'inventory' of equipments.
	Change the type of $equipment => It's now an array.

	A character may have several equipments but:
	- It can only be equipped with 4 objects in total.
	- It can only be equipped with 2 swords at a time.
	- He can only wear one armor.

	Change your function to 'add'/'remove'/'display' an equipement.
	Now it will add/remove/display to the inventory.

	-- Step 6 :

	Create a method call 'getStats()'
	This method will display all the stats of my Character.
	It should take into account the bonus of equipments.









