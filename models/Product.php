<?php

    class Product {
        protected $name;
        protected $description;
        protected $imageUrl;
        protected $price;
        public $category;

        function __construct(String $name, String $description,String $imageUrl, Float $price, Category $category) {
            $this->name = $name;
            $this->description = $description;
            $this->imageUrl = $imageUrl;
            $this->price = $price;
            $this->category = $category;
        }

        public function getName() : String {
            return $this->name;
        }

        public function setName(String $name) : void {
            $this->name = $name;
        }

        public function getDescription() : String {
            return $this->description;
        }

        public function setDescription(String $description) : void {
            $this->description = $description;
        }
        public function getImageUrl() : String {
            return $this->imageUrl;
        }

        public function setImageUrl(String $imageUrl) : void {
            $this->imageUrl = $imageUrl;
        }
        
        public function getPrice($logged) : Float {
            return $logged ? $this->price -= ($this->price * (20 / 100)) : $this->price;
        }

        public function setPrice(Float $price) : void {
            $this->price = $price;
        }
    }