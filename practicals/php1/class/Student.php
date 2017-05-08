<?php
include_once('Person.php');

class Student extends Person{
	protected $classList = array();
	
	public function __construct($name, $dateOfBirth, $classList){
		$this->classList = $classList;
		parent::__construct($name, $dateOfBirth);
	}

	public function __get($prop){
		if ($prop=="classList") {
			return implode(' | ', $this->classList);
		}
		return parent::__get($prop);
	}
}

