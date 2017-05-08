<?php

include_once "animal.php";

class Person extends Animal {
	public function sayHello(){
		echo "Hello, my name is " . $this->name . "<br>";
	}
	public function sayGoodbye(){
		echo "Goodbye, I'll see you later.<br>"	;
	}
	
}

