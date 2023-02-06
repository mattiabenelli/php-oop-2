<?php 

    class AnimalProducts extends AllProducts{

        public $product_material;
        public $product_size;
    }

    // Nome tipo material
    public function SetProductMaterial($product_material)
    {
        $this->product_material = $product_material;
    }
    public function GetProductMaterial()
    {
        return $this->product_material;
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