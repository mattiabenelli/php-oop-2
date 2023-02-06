<?php 

include __DIR__ .'/models/AllProducts.php';
include __DIR__ .'/models/AnimalFood.php';
include __DIR__ .'/models/AnimalGame.php';
include __DIR__ .'/models/AnimalProducts.php';

    $product_1_food = new AnimalFood('https://th.bing.com/th/id/OIP.SEtMSh6tLTV6fmeE3rpczQHaJQ?w=158&h=198&c=7&r=0&o=5&pid=1.7', 'Royal Canin Mini Adult', '<i class="fa-solid fa-dog"></i> Cane', '$43,99', '545g', 'prosciutto, riso');
    $product_2_food = new AnimalFood('https://th.bing.com/th/id/OIP.Ma-_t2kwqg4rUd-Sr50xygHaHa?w=170&h=180&c=7&r=0&o=5&pid=1.7', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', '<i class="fa-solid fa-dog"></i> Cane', '$44,99', '600g', 'manzo, cereali');
    $product_3_food = new AnimalFood('https://th.bing.com/th/id/OIP.bT3iIEBpAMKaKz1wahI-ygHaIM?w=181&h=201&c=7&r=0&o=5&pid=1.7', 'Almo Nature Car Daily Lattina', '<i class="fa-solid fa-cat"></i> Gatto', '$34,99', '400g', 'tonno, pollo, prosciutto');
    $product_4_food = new AnimalFood('https://th.bing.com/th/id/OIP.hRv6RXqTJITMe1rnsUjwRwHaKE?w=152&h=207&c=7&r=0&o=5&pid=1.7', 'Mangime per Pesci Guppy in Fiocchi', '<i class="fa-solid fa-cat"></i> Gatto', '$2,95', '30g', 'pesci e sottoprodotti dei pesci, cereali, lieviti, alghe');
    $products_food = [$product_1_food, $product_2_food, $product_3_food, $product_4_food];
    
    $product_1_product = new AnimalProducts('https://th.bing.com/th/id/OIP.Pl2Gb6xVNUxmLvW0wiOYNAAAAA?w=219&h=219&c=7&r=0&o=5&pid=1.7', 'Voliera Wilma in Legno', '<i class="fa-solid fa-kiwi-bird"></i> uccello', '$184,99', 'legno', 'M: L 83 x P 67 x H 153 cm');
    $product_2_product = new AnimalProducts('https://th.bing.com/th/id/OIP.uayGKxC2cqDi0G550y2y7wHaHa?w=214&h=214&c=7&r=0&o=5&pid=1.7', 'Cartucce Filtranti per Filtro EasyCrystal', '<i class="fa-solid fa-fish"></i> Pesce', '$2,29', 'Materiale espanso', 'ND');
    $products_product = [$product_1_product, $product_2_product];
    
    $product_1_game = new AnimalGame('https://th.bing.com/th/id/OIP.1a6Zea-x4mcC2EG_eMrskgHaHa?w=204&h=204&c=7&r=0&o=5&pid=1.7', 'Kong Classic', '<i class="fa-solid fa-dog"></i> Cane', '$13,49', 'Galleggia e rimbalza', '8,5 cm x 10 cm');
    $product_2_game = new AnimalGame('https://th.bing.com/th/id/OIP.bZEJYOQHe3oIEgKogr-qXAAAAA?w=216&h=216&c=7&r=0&o=5&pid=1.7', 'Topini di peluche Trixie', '<i class="fa-solid fa-cat"></i> Gatto', '$4,99', 'Morbido con codina in corda', '8,5 cm x 10 cm');
    $products_games = [$product_1_game, $product_2_game];
?>