<?php

    class Product {
        protected $name;
        protected $description;
        protected $imageUrl;
        protected $price;
        protected $category;

        function __construct(String $name, String $description,String $imageUrl, Float $price, Category $category) {
            $this->name = $name;
            $this->description = $description;
            $this->imageUrl = $imageUrl;
            $this->price = empty($_SESSION['name']) ? $price : $this->getDiscount($price);
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
        
        public function getPrice() : Float {
            return $this->price;
        }

        public function setPrice(Float $price) : void {
            $this->price = $price;
        }

        protected function getDiscount($price) : Float {
            return $price -= ($price * (20 / 100));
        }
    }