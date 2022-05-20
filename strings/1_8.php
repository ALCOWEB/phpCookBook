<?php
//Требуется привести символы к верхнему или нижнему регистру либо иным образом изменить регистр символов строки. Например, имена в списке должны начинаться с прописных букв, но остальные буквы должны быть строчными.

$strFirsLetttUp = ucfirst('its a lower case string');
$strFirsWordLetltUp = ucwords('its a lower case string');
echo $strFirsLetttUp.PHP_EOL;
echo $strFirsWordLetltUp.PHP_EOL;
