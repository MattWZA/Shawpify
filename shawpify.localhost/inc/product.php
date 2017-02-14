<?php

	class Product
	{
		public $name;
		public $price;
		public $reviews;
		public $rating;
		public $images = array();

		function __construct($_name, $_price, $_reviews, $_rating, $_images){
			$this->name = $_name;
			$this->price = $_price;
			$this->reviews = $_reviews;
			$this->rating = $_rating;
			if(is_array($_images)){
				$this->images = $_images;
			} else {
				if (isset($images)){
					add_image($_images);
				}
			}
		}
		function set_name($new_name){
			$name = $new_name;
		}

		function get_name(){
			return $name;
		}

		function set_price($new_price){
			$price = $new_price;
		}

		function get_price(){
			return $price;
		}

		function add_image($new_image){
			array_push($images, $new_image);
		}

		function set_images($new_images){
			$images = $new_images;
		}

		function get_images(){
			return $images;
		}

		function set_reviews($new_reviews){
			$reviews = $new_reviews;
		}

		function get_reviews(){
			return $reviews;
		}

		function set_rating($new_rating){
			$rating = $new_rating;
		}

		function get_rating(){
			return $rating;
		}
	}

	