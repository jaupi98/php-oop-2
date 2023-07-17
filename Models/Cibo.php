<?php
    class Cibo extends Prodotti{
        public $weight;
        public $ingredients;

        public function __construct(String $_name, String $_image, String $_price, String $_category, Float $_weight, String $_ingredients){
            //this->name = $_name...
            parent::__construct($_name, $_image, $_price, $_category);
            $this->weight = $_weight;
            $this->ingredients = $_ingredients;

        }
    }
?>