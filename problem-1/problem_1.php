<?php 
function getMinimumNumber(array $numbers) 
{
   $min=abs($numbers[0]);
   foreach($numbers as $number)
   {
     if($min>abs($number))
     {
        $min=abs($number);
     }
     
   }
   
   return $min;
}

echo getMinimumNumber([10, 12 ,15, 189, 22, 2, 34,]).PHP_EOL;
//Output 2
echo getMinimumNumber([10, -12 ,34, 12, -3,123]).PHP_EOL;
//Output 3