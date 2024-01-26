<?php
    require_once __DIR__ . '/Product.php';

    class Toy extends Product {
        protected $material;

        function __construct(string $name, string $description, string $imageUrl, float $price, Category $category, String $material) {
            parent::__construct($name, $description, $imageUrl, $price, $category);
            $this->material = $material;
        }

        public function getMaterial() : String {
            return $this->material;
        }

        public function setMaterial(Int $material) : void {
            $this->material = $material;
        }
    }