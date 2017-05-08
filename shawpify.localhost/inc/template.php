<?php
include_once "config.php";

class Template{
	private $template;
	private $content;
	private $hasNext;
	private $noOfResults;

	public function __construct($template, $content){
		//Should validate arguments before we continue
		$this->load($template, $content);
	}

	public function __get($val){
		if($val=="hasNext"){
			return $this->$val;
		} elseif ($val=="noOfResults") {
			return $this->noOfResults;
		} else {
			die("Cannot access private property Template::$val");
		}
	}

	public function output(){
		$record = current($this->content);
		$html = $this->template;

		foreach ($record as $key=>$val) {
			$html = str_replace("{".$key."}", $val, $html);
		}

		if(!next($this->content)){
			$this->hasNext = false;
		}

		return $html;
	}

	public function load ($template, $content){
		$this->template = file_get_contents(ROOT."/templates/$template", true);
		$this->content = $content;
		$this->hasNext = true;
		$this->noOfResults = sizeof($this->content);
	}
}



//Test case

$contentExample = array(
	array(
		"name" => "First product",
		"price" => "$24.99",
		"description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna."
	),
	array(
		"name" => "Second product",
		"price" => "$34.99",
		"description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna."
	),
	array(
		"name" => "Third product",
		"price" => "$44.99",
		"description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna."
	),
	array(
		"name" => "Forth product",
		"price" => "$54.99",
		"description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna."
	),
	array(
		"name" => "Fifth product",
		"price" => "$64.99",
		"description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna."
	),
	array(
		"name" => "Sixth product",
		"price" => "$74.99",
		"description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna."
	)
);

/*
$test = new Template("product_thumbnail.html", $contentExample);

while ($test->hasNext) {
	echo $test->output();
}
*/