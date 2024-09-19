<?php
class InvalidPriceException extends Exception {}

class Product {
    public $title;
    public $price;
    public $image;
    public $category;
    public $itemType;

    public function __construct($title, $price, $image, Category $category, $itemType) {
        if ($price <= 0) {
            throw new InvalidPriceException('Il prezzo deve essere maggiore di 0.');
        }
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->itemType = $itemType;
    }

    public function getProductDetails() {
        return "Title: $this->title, Price: $this->price €, Category: {$this->category->name}, Type: $this->itemType";
    }
}
?>
