<?php 

    class AnimalGame extends AllProducts{

        public $product_characteristics;
        public $product_size;

        public function __construct($product_photo, $product_name, $product_breed, $product_price, $product_characteristics, $product_size)
        {
            parent:: __construct($product_photo, $product_name, $product_breed, $product_price);
            $this->product_characteristics = $product_characteristics;
            $this->product_size = $product_size;
        }
    }

?>