<?php

/*
    Continue the exercise on RPG
    
    - Step 1 :

        Create the Monster class, which represent an enemy.
        Monsters have private properties :
            - type (Like 'Mountain Elf', 'Cheezy Zombie', etc.)
            - description (du genre 'Il semble affamé et prêt à tout')
            - health points
            - attack points
        
        Public method :
            - hurt($hp) : Hurt an enemy

        When we create a monster, we have to specify at least :
            - Type
            - Health points

    - Step 2 : 
        Create a class 'Actor', which will be the 'mother class' of Character and Monster.
        Think about the classes and properties that can be shared in the Actor class.
        Créer la classe Actor, qui sera la classe mère de Character et Enemy.
    Example :
 */

$player = new Character();

$anEnemy = new Monster('Cheezy Zombie', 140);

/* A monster is hurt */
$anEnemy->hurt(50);

/* Player is hurt */
$player->hurt(10);

$anEnemy->hurt(100); /* The monster should be dead now */

/*
    - Step 3 :
        Make sure monsters can also carry equipments.
        Create the method 'loot()' which return all the objects carried by the monster, only if it's dead.

    Example :
 */

$item1 = new Equipment(/* ... */);
$item2 = new Equipment(/* ... */);
$item3 = new Equipment(/* ... */);
$item4 = new Equipment(/* ... */);

$player = new Character();
$monster = new Monster('Dundy Crocodile', 300);

$monster->addItem($item1);
$monster->addItem($item2);
$monster->addItem($item3);
$monster->addItem($item4);

$monster->hurt(400); /* He's dead, Jim */

$items = $monster->loot();
$player->addItems($items);
