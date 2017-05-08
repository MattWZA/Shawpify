<?php

include_once "dog.php";
include_once "person.php";

$animals = array(new Dog("Sassie", 3), new Person("Sasha", 2));

foreach ($animals as $animal) { 
	echo get_class($animal).'<br>';
	$animal->sayHello();
	$animal->walk(50);
	$animal->sayGoodbye();
	echo '<br>';
}

