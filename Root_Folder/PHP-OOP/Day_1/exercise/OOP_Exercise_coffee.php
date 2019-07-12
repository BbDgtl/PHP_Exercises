<?php

/*
	Part 1 :

	Create a class 'CoffeeCup' with these properties :
		- quantity (cl)
		- brand (brand of coffee)
		- temperature

	All properties are private

	Create all getters and setters for this class.

	Use example :

	$myCoffee = new CoffeeCup();
	$myCoffee->setQuantity(20);
	$myCoffee->setBrand('Malongo');
	$myCoffee->setTemperature(65);
*/

/*
	Part 2 :

	Create these methods :
		- sip : Accept one integer as parameter which match the quantity we want to drink.
		When calling this method, program will display 'Remain XX cl of coffee'

		Example :
		$myCoffee->sip(3);

		- refill : no arguments and just fill to maximum
		When calling this method, program will display 'Mug full again';
		Example :
		$myCoffee->refill();

*/

/*
	Part 3 :

	Now we save the max. volume of the mug (cl) in the object.
	You need to add another properties $volume
	We define the volume of the mug when creating the object but can't edit later.

	Example :
	$myCoffee = new CoffeeCup(20); // Mug with 20 cl volume
	$otherCoffee = new CoffeeCup(33); // Another mug with 33 cl volume

*/


/*
	Part 4 : 
	Change the method 'refill' to make the fill automatic
*/

/* 
	Part 5 :
	- Delete the setQuantity() method.
		We can no longer edit the quantity of the coffee.
		We can only fill ou sip the cup.
	- During the creation of the cup, make the quantity automatically define at the maximum possible (volume of the cup).
	- Delete the setBrand() method. You can't change the brand once the coffe is in the cup.
	- Change the constructor to also accept the brand of the cup as an argument.
	- Replace the setTemperature method by reHeat() and coolDown().
		Both of them will accept, as argument, the number of degree to add or remove to the temperature.
		Both of them will display the new temperature of the coffee.
	- Add the temperature as an argument in your constructor.

*/

/* 

	Step 6 :
	
	Edit the sip() method to make sure it's enough coffee left in the cup.
	If there is not enough coffee, define the quantity to 0
	Display also a message, example : "You sipe X cl, left Y cl of coffee" 

	Now we should be able to run this code :

	$myCoffee = new CoffeeCup(20, 'Malongo', 65); // 20 cl, brand Malongo, 65 °C

	while($myCoffee->getQuantity() > 0) { // While there is coffee in my cup
	    $quantityToSip = rand(1, 6);
	    $myCoffee->sip($quantityToSip);
	    $myCoffee->coolDown(1.5); // Cup loose 1.5 °C on each sip
	}

*/

class CoffeeCup
{
	// ***** Properties ***** \\
	private $quantity;
	private $brand;
	private $temperature;
	private $volume;

	public function __construct($volume, $brand, $temperature)
	{
		$this->brand = $brand;
		$this->quantity = $volume;
		$this->temperature = $temperature;
	}

	// ***** Methods ***** \\
	// ? Quantity method
	public function getQty()
	{
		return $this->quantity;
	}

	// ? Brand method
	public function getBrand()
	{
		return $this->brand;
	}

	// ? Temperature method
	public function reHeat($tempToAdd)
	{
		$this->temperature = $this->temperature + $tempToAdd;
		echo 'The new temperature is : ' . $this->temperature . ' degrees.';
	}
	public function coolDown($tempToSubtract)
	{
		$this->temperature = $this->temperature - $tempToSubtract;
		echo 'The new temperature is : ' . $this->temperature . ' degrees.';
	}

	public function getTemp()
	{
		return $this->temperature;
	}

	// ? Sip method
	public function sip(int $amtToDrink)
	{
		$this->quantity = $this->quantity - $amtToDrink;
		if ($amtToDrink > $this->quantity) {
			$this->quantity = 0;
			echo 'You have no more coffee' . '<br>';
		}
		echo $this->quantity . 'cl of coffee remaining.' . '<br>';
	}

	// ? Refill method
	public function refill()
	{
		$this->quantity = $this->volume;
		echo 'Mug full again.' . '<br>';
	}

	public function __toString()
	{
		return "My coffee : " . $this->quantity . ', ' . $this->brand . ', ' . $this->temperature . ' degrees';
	}
}

$myCoffee = new CoffeeCup(20, 'Malongo', 65); // 20 cl, brand Malongo, 65 °C

while ($myCoffee->getQty() > 0) { // While there is coffee in my cup
	$quantityToSip = rand(1, 6);
	$myCoffee->sip($quantityToSip);
	$myCoffee->coolDown(1.5); // Cup loose 1.5 °C on each sip
}

$myCoffee->sip(3);
$myCoffee->refill();

$otherCoffee = new CoffeeCup(33, 'Folgers', 43);
