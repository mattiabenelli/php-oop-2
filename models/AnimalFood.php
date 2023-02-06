<?php 

    class AnimalFood extends AllProducts{

        public $product_weight;
        public $product_ingredients;
    
        public function __construct($product_name, $product_breed, $product_price, $product_weight, $product_ingredients)
        {
            parent:: __construct($product_name, $product_breed, $product_price);
            $this->product_weight = $product_weight;
            $this->product_ingredients = $product_ingredients;
        }
    }

?>