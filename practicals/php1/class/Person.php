<?php

class Person{
	protected $name;
	protected $dateOfBirth;

	public function __construct($name, $dateOfBirth){
		$this->name = $name;
		$this->dateOfBirth = $dateOfBirth;
	}
	public function __get($prop){
		if ($prop=="age"){
			$age = (new DateTime())->diff($this->dateOfBirth);
			return $age->y;
		}
		return $this->$prop;
	}
	public function __set($prop, $value){
		$this->$prop = $value;
	}
}


