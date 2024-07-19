<?php



interface Sorter
{
    public function sort(array $products, $method = null): array;
}
