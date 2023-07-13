<?php
   class Accessory extends Product{
        public $materials;
        public $size;

        public function __construct(String $_name, String $_image, Float $_price, String $_category, Float $_size, String $_materials){

            // $this->name = $_name;
            // $this->image = $_image;
            // $this->price = $_price;
            // $this->category = $_category;
            parent::__construct($_name, $_image, $_price, $_category);
            $this->materials = $_materials;
            $this->size = $_size;
        }
   } 
?>