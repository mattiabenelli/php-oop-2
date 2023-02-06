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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&family=Fredoka+One&family=Montserrat:wght@500&family=Open+Sans&family=PT+Sans:wght@700&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
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
                <?php foreach($products_product as $product){ ?>
                    <div class="card">
                        <img src="<?php echo $product->product_photo; ?>">
                        <div class="product-title"><?php echo $product->product_name; ?></div>
                        <div class="product-description"><?php echo $product->product_breed; ?></div>
                        <div class="product-description">Prezzo: <?php echo $product->product_price; ?></div>
                        <div class="product-description">Peso netto: <?php echo $product->product_material; ?></div>
                        <div class="product-description">Ingredienti: <?php echo $product->product_size; ?></div>
                    </div>
                <?php } ?>
                <?php foreach($products_games as $product){ ?>
                    <div class="card">
                        <img src="<?php echo $product->product_photo; ?>">
                        <div class="product-title"><?php echo $product->product_name; ?></div>
                        <div class="product-description"><?php echo $product->product_breed; ?></div>
                        <div class="product-description">Prezzo: <?php echo $product->product_price; ?></div>
                        <div class="product-description">Peso netto: <?php echo $product->product_characteristics; ?></div>
                        <div class="product-description">Ingredienti: <?php echo $product->product_size; ?></div>
                    </div>
                <?php } ?>
                
                
            </div>
        </div>
    </body>
</html>