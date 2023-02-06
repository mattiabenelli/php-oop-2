<?php 
    include __DIR__ .'/database.php';

    $product_1_food = new AnimalFood('Royal Canin Mini Adult', 'Cane', '$43,99', '545g', 'prosciutto, riso');
    $product_1_product = new AnimalProducts('Voliera Wilma in Legno', 'uccel', '$184,99', 'legno', 'M: L 83 x P 67 x H 153 cm');
    $product_1_game = new AnimalGame('Kong Classic', 'Cane', '$13,49', 'Galleggia e rimbalza', '8,5 cm x 10 cm');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            echo "<pre>";
            var_dump($product_1_food);

            echo "<pre>";
            var_dump($product_1_product);
            
            echo "<pre>";
            var_dump($product_1_game);
        ?>
    </body>
</html>