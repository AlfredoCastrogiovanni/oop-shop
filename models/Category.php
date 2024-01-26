<?php

    class Category {
        protected $name;

        function __construct(String $name) {
            $this->name = $name;
        }

        public function getName() : String {
            return $this->name;
        }
    }