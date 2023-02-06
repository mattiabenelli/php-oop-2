<?php 

    class AnimalFood extends AllProducts{

        public $product_weight;
        public $product_ingredients;
    }

    // Nome tipo material
    public function SetProductWeight($product_weight)
    {
        $this->product_weight = $product_weight;
    }
    public function GetProductWeight()
    {
        return $this->product_weight;
    }
    
    // misure oggetto
    public function SetProductIngredients($product_ingredients)
    {
        $this->product_ingredients = $product_ingredients;
    }
    public function GetProductIngredients()
    {
        return $this->product_ingredients;
    }

?>