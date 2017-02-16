<?php

	class Product
	{
		public $name;
		public $price;
		public $reviews;
		public $rating;
		public $images = array();

		function __construct($name, $price, $reviews, $rating, $images){
			$this->name = $name;
			$this->price = $price;
			$this->reviews = $reviews;
			$this->rating = $rating;
			if(is_array($images)){
				$this->images = $images;
			} else {
				if (isset($images)){
					add_image($images);
				}
			}
		}
		
		function set_name($name){
			$this->$name = $name;
		}

		function get_name(){
			return $name;
		}

		function set_price($price){
			$this->$price = $price;
		}

		function get_price(){
			return $price;
		}

		function add_image($image){
			array_push($this->$images, $image);
		}

		function set_images($images){
			$this->$images = $images;
		}

		function get_images(){
			return $images;
		}

		function set_reviews($reviews){
			$this->$reviews = $reviews;
		}

		function get_reviews(){
			return $reviews;
		}

		function set_rating($rating){
			$this->$rating = $rating;
		}

		function get_rating(){
			return $rating;
		}
	}

	