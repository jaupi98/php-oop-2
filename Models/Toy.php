<?php
   class Toy extends Product{
        public $size;
        public $features;

        public function __construct(String $_name, String $_image, Float $_price, String $_category, Float $_size, String $_features){

            // $this->name = $_name;
            // $this->image = $_image;
            // $this->price = $_price;
            // $this->category = $_category;
            parent::__construct($_name, $_image, $_price, $_category);
            $this->size = $_size;
            $this->features = $_features;
        }
   } 
?>