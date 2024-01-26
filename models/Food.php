<?php
    require_once __DIR__ . '/Product.php';

    class Food extends Product {
        protected $calories;
        protected $fats;

        function __construct(string $name, string $description, string $imageUrl, float $price, Category $category, Int $calories, Int $fats) {
            parent::__construct($name, $description, $imageUrl, $price, $category);
            $this->calories = $calories;
            $this->fats = $fats;
        }

        public function getCalories(): Int {
            return $this->calories;
        }

        public function setCalories(Int $calories) : void {
            $this->calories = $calories;
        }

        public function getFats(): Int {
            return $this->fats;
        }

        public function setFats(Int $fats) : void {
            $this->fats = $fats;
        }
    }