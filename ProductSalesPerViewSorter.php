<?php

require_once("Sorter.php");
require_once("SortingOrder.php");

class ProductSalesPerViewSorter implements Sorter
{

    public function sort(array $products, $method = null): array
    {

        $size = count($products);
        $placeholder = 0;

        for ($i=0; $i < $size; $i++)
         { 

            for ($j=0; $j < $size - 1; $j++)
             { 
                $ratio = $products[$j]['sales_count'] / $products[$j]['views_count'];
                $ratio2 = $products[$j + 1]['sales_count'] / $products[$j + 1]['views_count'];

                if($ratio > $ratio2 )
                {
                    $placeholder = $products[$j];
                    $products[$j] = $products[$j + 1];
                    $products[$j + 1] = $placeholder;
                }
            }
            
        }

        return SortingOrder::Order( $products, $method );
        
     

    }
}
