<?php 
 function printStar($number)
 {
      $star=1;
     
      for($i=0;$i<$number;$i++)
      {
        $output='';
        

        //Making Spaces
        for($k=0;$k<=$number-$i;$k++)
        {
            $output.=" ";
        }

        for($j=0;$j<$star;$j++)
        {
            $output.="*";
        }

        $star+=2;
        
       echo  $output.PHP_EOL;
      }
 }

 printStar(10);

?>