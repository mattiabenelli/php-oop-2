<?php 

    class AllProducts{
        public $product_name;
        public $product_breed;
        public $product_price;
    

        function __construct($product_name, $product_breed, $product_price)
        {
            $this->product_name = $product_name;
            $this->product_breed = $product_breed;
            $this->product_price = $product_price;
        }
    }
?>