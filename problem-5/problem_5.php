<?php
function sumOfGivenInt(int $input)
{
  $sum=0;
  $input=abs($input);
  while ($input){
    //Adding from last element
    $sum+=$input%10;
    //Removing last element
    $input=(int)$input/10;
  }

  return $sum;
}

echo sumOfGivenInt(62343);
//output 1
?>