<?php
    class Food extends Product{
        public $weight;
        public $ingredients;

        
        public function __construct(String $_name, String $_image, Float $_price, String $_category, Float $_weight , String $_ingredients){

            // $this->name = $_name;
            // $this->image = $_image;
            // $this->price = $_price;
            // $this->category = $_category;
            parent::__construct($_name, $_image, $_price, $_category);
            $this->weight = $_weight;
            $this->ingredients = $_ingredients;
        }
    }

?>