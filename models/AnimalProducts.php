<?php 

    class AnimalProducts extends AllProducts{

        public $product_material;
        public $product_size;

        public function __construct($product_photo, $product_name, $product_breed, $product_price, $product_material, $product_size)
        {
            parent:: __construct($product_photo, $product_name, $product_breed, $product_price);
            $this->product_material = $product_material;
            $this->product_size = $product_size;
        }
    }
?>