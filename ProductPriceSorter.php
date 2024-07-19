<?php

class ProductPriceSorter implements Sorter
{

  public function sort(array $products, $method = null): array
  {

    $size = count($products);
    $temp = 0;

    for ($i = 0; $i < $size; ++$i)
     {
      for ($j=0; $j < $size - 1; $j++)
       { 
         if($products[$j]['price'] > $products[$j + 1]['price'])
         {
            $temp = $products[$j];
            $products[$j] = $products[$j + 1];
            $products[$j + 1] = $temp;
            
         }
      }
    }

    return SortingOrder::Order($products,$method);

    
    



  }
}
