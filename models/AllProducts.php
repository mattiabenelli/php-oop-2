<?php 

    class AllProducts{
        public $product_photo;
        public $product_name;
        public $product_breed;
        public $product_price;
    

        function __construct($product_photo, $product_name, $product_breed, $product_price)
        {
            $this->product_photo = $product_photo;
            $this->product_name = $product_name;
            $this->product_breed = $product_breed;
            $this->product_price = $product_price;
        }
    }
?>