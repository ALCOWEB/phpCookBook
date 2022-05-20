<?php
//Требуется заменить подстроку другой строкой, например скрыть все цифры номера кредитной карты, кроме четырех последних, перед выводом.

$card_numder =isset($_POST['card_number']) ? $_POST['card_number'] : "1233 5455 5889 9987";
$card_number_save = substr_replace($card_numder, "****", -4, 4);
//echo $card_number_save;