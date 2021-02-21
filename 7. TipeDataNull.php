<?php

$name = "Mikhael";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Mikhael";
unset($contoh);

$contoh = "Julian";
$contoh = null;

var_dump(isset($contoh));

// is_null berfungsi untuk mengecek apakah nilai dari suatu variable adalah null
// unset digunakan untuk menghapus variable sehingga tidak bisa kita gunakan kembali
// isset digunakan untuk mengecek apakah datanya null dan variable tersebut itu ada atau tidak 

?>