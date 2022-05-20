<?php
// Требуется узнать, содержит ли строка заданную подстроку, например проверить, содержит ли адрес электронной почты знак @.
$string = 'someAddress@mail.ru';
if (strpos($string, '@') !== false){
    echo "в строке есть @";
}

// решение в книге
// if (strpos($_POST['email'], '@') === false) {
//     print 'There was no @ in the e-mail address!';
//     }