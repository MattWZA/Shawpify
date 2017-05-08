<?php

include_once "vocal.php";
include_once "locomotion.php";

abstract class Animal implements Vocal, Locomotion {
	protected $name;
	protected $moveSpeed;

	public function __construct($name, $moveSpeed){
		if(gettype($name) != "string"){
			die("input error");
		}
		$this->name = $name;
		$this->moveSpeed = $moveSpeed;
	}

	abstract public function sayHello();
	abstract public function sayGoodbye();
	
	public function makeAngryNoises(){
		echo "Grrrrr....<br>";
	}

	public function walk($distance){
		echo $this->name . ' has moved ' . $distance . 'metres, in ' . $distance / $this->moveSpeed . 'seconds.<br>';
	}

	public function run($distance){
		echo $this->name . ' has moved ' . $distance . 'metres, in ' . $distance / ($this->moveSpeed*2) . 'seconds.<br>';
	}
}