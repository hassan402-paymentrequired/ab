<?php


class SortingOrder
{
    public static function Order($products, $method)
    {
        switch ($method) {
            case "acending":
                return $products;
            case "decending":
                return array_reverse($products);
            default:
                return $products;

        }
    }
}
