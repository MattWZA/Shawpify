<?php

class MyClass{
	protected $foo;

	public function __construct($foo){
		$this->foo = $foo;
	}

	public function displayFoo(){
		echo '<p>'.$this->foo.'</p>';
	}
}

