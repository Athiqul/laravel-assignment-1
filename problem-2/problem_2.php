<?php 
//Get the files
$data=file_get_contents('para.txt');

function word_count(string $data){
    $wordCount=0;
    $charCount=0;
    for($i=0;$i<strlen($data);$i++)
    {
        
         if(($data[$i]>='A' && $data[$i]<="Z") || ($data[$i]>='a' && $data[$i]<="z")||($data[$i]>='0' && $data[$i]<='9'))
         {
          $charCount++;
         }else{
    
            //If word is valid then word count increased
            if($charCount>0)
            {
            
                $wordCount++;
                $charCount=0;
            }
    
            //if spaces , others are not allowed
    
            $charCount=0;
         } 
         
         
    }
    return $wordCount;
}

echo word_count($data);




//expected output 10

?>