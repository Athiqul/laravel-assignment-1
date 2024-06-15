<?php 
//Get the files
$data=file_get_contents('para.txt');

//get number of paragraphs or new lines there

echo  str_word_count($data);
//expected output 10

?>