<?php 
//Требуется удалить пропуски в начале или конце строки, например чтобы убрать лишние пробелы из данных, введенных пользователем, перед их проверкой.

$remove_left_spaces = ltrim('       test string with spaces');
echo '       test string with spaces'.PHP_EOL;
$remove_right_spaces = rtrim('test string with spaces  ');
echo $remove_left_spaces;