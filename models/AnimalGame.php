<?php 

    class AnimalGame extends AllProducts{

        public $product_characteristics;
        public $product_size;
    }

    // Nome tipo material
    public function SetProductCharacteristics($product_characteristics)
    {
        $this->product_characteristics = $product_characteristics;
    }
    public function GetProductCharacteristics()
    {
        return $this->product_characteristics;
    }
    
    // misure oggetto
    public function SetProductSize($product_size)
    {
        $this->product_size = $product_size;
    }
    public function GetProductSize()
    {
        return $this->product_size;
    }

?>