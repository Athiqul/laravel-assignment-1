<?php 
function wordReverse(string $str)
{
   //return strrev($str);
   $len=strlen($str);
   $rev="";
   for($i=$len-1;$i>=0;$i--)
   {
     $rev.=$str[$i];
   }

   return $rev;
}

$stringInputValue="I love programming";

$wordSplit=explode(" ",$stringInputValue);

foreach($wordSplit as $word)
{
    echo wordReverse($word).' ';
}
//expected output I evol gnimmargorp
?>