<?php

echo 'Name : ';
echo 'Mikhael Julian';
echo "\n";

echo "Name : ";
echo "Mikhael\t Julian\t Ramardi\n";

echo <<<MIK
Cara membuat string yang cepat 
Dimana kita membutuhkan enter yang banyak
Kita dapat menggunakan Heredoc \n
MIK;

echo <<<'MIK'
Cara membuat string yang cepat 
Dimana kita membutuhkan enter yang banyak
Kita dapat menggunakan Nowdoc
MIK;


// Di php \t digunakan untuk tab dan \n untuk enter, Kita harus menggunakan double quote untuk menggunakan ini
// Nowdoc menggunakan single quote dan Heredoc tidak menggunakan single quote
// Perbedaan Heredoc dan Nowdoc adalah Nowdoc tidak dapat Parsing String

?>