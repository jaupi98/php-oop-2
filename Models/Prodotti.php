<?php
    class Prodotti{
        public $name;
        public $image;
        public $price;
        public $category;

        public function __construct(String $_name, String $_image, String $_price, String $_category){
            $this->name = $_name;
            $this->image = $_image;
            $this->price = $_price;
            $this->category = $_category;
        }

    }
?>