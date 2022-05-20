<?php
// Требуется вывести имеющееся число с разделителями групп разрядов и дробной части по стандартам денежных сумм. Например, вы хотите вывести цены товаров в корзине покупателя.

$number = 1234.56;
$usa = new NumberFormatter("en-US", NumberFormatter::CURRENCY);
$formatted = $usa->format($number);
echo $formatted;