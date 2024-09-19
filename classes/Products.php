<?php

$categoryDogs = new Category('Cani', '<i class="fa-solid fa-shield-dog"></i>');
$categoryCats = new Category('Gatti', '<i class="fa-solid fa-shield-cat"></i>');

try {
    $products = [
        new Product('ProLife 12kg', 62.99, './img/dog-food-bag.jpg', $categoryDogs, ItemType::Food),
        new Product('Cuccia in tessuto sfoderabile', 19.99, './img/cuccia-gatto.jpg', $categoryCats, ItemType::Home),
        new Product('Guinzaglio da addestramento', 13.49, './img/guinzaglio-addestramento.jpg', $categoryDogs, ItemType::Other),
        new Product('Tiragraffi con pallina', 9.99, './img/tiragraffi-con-pallina.jpg', $categoryCats, ItemType::Toy),
        new Product('Snack anatra e lamponi', 3.99, './img/snack-gatto-anatra.jpg', $categoryCats, ItemType::Food),
        new Product('Pallina da tennis', 3.49, './img/pallina-da-tennis.jpg', $categoryDogs, ItemType::Toy),
        new Product('Ciotola elegante', 24.99, './img/ciotola-elegante.jpg', $categoryDogs, ItemType::Home),
        new Product('Frisbee galleggiante', 6.99, './img/frisbee-galleggiante.jpg', $categoryDogs, ItemType::Toy),
        new Product('Topini con piuma', 7.99, './img/topini-con-piuma.jpg', $categoryCats, ItemType::Toy),
        new Product('Cuccia XL in tessuto sfoderabile', 29.99, './img/cuccia-cane.jpg', $categoryDogs, ItemType::Home),
        new Product('Guanto cardatore', 9.99, './img/guanto-cardatore.jpg', $categoryCats, ItemType::Other),
        new Product('Deodorante spray al talco', 9.99, './img/deodorante-spray-talco.jpg', $categoryDogs, ItemType::Other),
    ];
} catch (InvalidPriceException $e) {
    echo "Errore: " . $e->getMessage();
}


?>