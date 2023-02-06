<?php 

include __DIR__ .'/models/AllProducts.php';
include __DIR__ .'/models/AnimalFood.php';
include __DIR__ .'/models/AnimalGame.php';
include __DIR__ .'/models/AnimalProducts.php';

    $product_1_food = new AnimalFood('Royal Canin Mini Adult', 'Cane', '$43,99', '545g', 'prosciutto, riso');
    $product_2_food = new AnimalFood('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', '$44,99', '600g', 'manzo, cereali');
    $product_3_food = new AnimalFood('Almo Nature Car Daily Lattina', 'Gatto', '$34,99', '400g', 'tonno, pollo, prosciutto');
    $product_4_food = new AnimalFood('Mangime per Pesci Guppy in Fiocchi', 'Gatto', '$2,95', '30g', 'pesci e sottoprodotti dei pesci, cereali, lieviti, alghe');
    
    
    $product_1_product = new AnimalProducts('Voliera Wilma in Legno', 'uccel', '$184,99', 'legno', 'M: L 83 x P 67 x H 153 cm');
    $product_1_game = new AnimalGame('Kong Classic', 'Cane', '$13,49', 'Galleggia e rimbalza', '8,5 cm x 10 cm');



?>