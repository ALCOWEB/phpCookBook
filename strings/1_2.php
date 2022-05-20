<?php
// Требуется выделить часть строки начиная с заданной позиции (например, первые восемь символов имени пользователя, введенного на форме).

// Решение:
// $substring = substr($string, $offset, $lenght);

echo substr("some string here", 0).PHP_EOL;
echo substr("some string here", 0 , -2).PHP_EOL;
echo substr("some string here", -5 ).PHP_EOL;
echo substr("some string here", -4 , -3 ).PHP_EOL;
