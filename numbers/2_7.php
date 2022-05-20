<?php
//Требуется генерировать случайные числа с неравномерным распределением, чтобы некоторые числа появлялись чаще других. Например, серия показов рекламных баннеров должна распределяться пропорционально количеству показов, оставшихся для каждой рекламной кампании.

function rand_weighted($numbers){
    $total = 0;
    foreach($numbers as $number => $weight){
        $total += $weight;
        $distrubution[$number] = $total;
    }
    $rand = mt_rand(0, $total - 1);
    foreach($distrubution as $number => $weight){
        if($rand < $weight){return $number;}
    }
}

$ads = array('ford' => 12234, // Реклама, оставшиеся показы
'att' => 33424,
'ibm' => 16823);
$ad = rand_weighted($ads);
var_dump($ad);
