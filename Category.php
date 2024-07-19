<?php


class Catalog
{
  private $products;

  public function __construct(array $product)
  {
    $this->products = $product;
  }

  public function getProducts(Sorter $sorter,  $method = null)
  {
    return $sorter->sort($this->products, $method);
  }
}
