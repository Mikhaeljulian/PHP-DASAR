<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore in number : ";
var_dump(1_241_241_241);

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating Point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore di floating point : ";
var_dump(1_123.123);

echo "Integer Overflow : ";
var_dump(9223372036854775808);

// var_dump berfungsi untuk mengidentifikasi
// tanda ( _ ) didalam angka akan di abaikan, kita dapat menggunakanya sebagai pemisah
// bilangan float di php di tandakan dengan tanda ( . )
// 9223372036854775807 adalah nilai max dari int, jika melebihi maka akan dianggap float oleh php

?>