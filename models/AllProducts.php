<?php 

    class AllProducts{
        public $product_name;
        public $product_breed;
        public $product_price;
    }

    // Nome prodotto
    public function SetProductName($product_name)
    {
        $this->product_name = $product_name;
    }
    public function GetProductName()
    {
        return $this->product_name;
    }
    
    // Nome tipo animali
    public function SetProductBreed($product_breed)
    {
        $this->product_breed = $product_breed;
    }
    public function GetProductBreed()
    {
        return $this->product_breed;
    }

    //  prezzo prodotto  
    public function SetProductPrice($product_price)
    {
        $this->product_price = $product_price;
    }
    public function GetProductPrice()
    {
        return $this->product_price;
    }


?>