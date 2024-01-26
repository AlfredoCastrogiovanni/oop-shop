<?php
    require_once __DIR__ . '/Product.php';

    class Kennel extends Product {
        protected $size;

        function __construct(string $name, string $description, string $imageUrl, float $price, Category $category, String $size) {
            parent::__construct($name, $description, $imageUrl, $price, $category);
            $this->size = $size;
        }

        public function getSize() : String {
            return $this->size;
        }

        public function setSize(Int $size) : void {
            $this->size = $size;
        }

    }