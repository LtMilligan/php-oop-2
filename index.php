<?php


require_once './classes/Category.php';
require_once './classes/Type.php';
require_once './classes/Product.php';
require_once './classes/Products.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Animal Shop</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center fw-bold"><i class="fa-solid fa-paw"></i> Pelosetti Shop <i class="fa-solid fa-paw"></i></h1>
        <div class="row g-4">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4">
                    <div class="card h-100 product-card">
                        <img src="<?php echo $product->image; ?>" class="card-img-top bg-white img-fluid" alt="<?php echo $product->title; ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold"><?php echo $product->title; ?></h5>
                            <p class="product-price fw-bold">€<?php echo $product->price; ?></p>
                            <p class="product-category"><span class="fw-bold">Categoria:</span> <?php echo $product->category->icon . ' ' . $product->category->name; ?></p>
                            <p class="product-type"><span class="fw-bold">Tipo:</span> <?php echo $product->itemType; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>