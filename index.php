<?php 
    include __DIR__ .'/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Document</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="row">
                <?php foreach($products_food as $product){ ?>
                    <div class="card">
                        <img src="<?php echo $product->product_photo; ?>">
                        <div class="product-title"><?php echo $product->product_name; ?></div>
                        <div class="product-description"><?php echo $product->product_breed; ?></div>
                        <div class="product-description">Prezzo: <?php echo $product->product_price; ?></div>
                        <div class="product-description">Peso netto: <?php echo $product->product_weight; ?></div>
                        <div class="product-description">Ingredienti: <?php echo $product->product_ingredients; ?></div>
                    </div>
                <?php } ?>
                
            </div>
        </div>
    </body>
</html>