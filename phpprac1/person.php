<?php

class Person{
	protected $name = 'Julian';
	protected $dateOfBirth;

	public function getName(){
		return $this->name;
	}
}

$person = new Person();
echo $person->getName();