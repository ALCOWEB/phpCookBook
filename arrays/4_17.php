<?php
//Задача. Требуется реализовать собственную процедуру сортировки.
$tests =['test1.php', 'test10.php', 'test11.php', 'test2.php'];
usort($tests, function($a, $b){
                if($a<$b) {return 1;} else {return -1;}
            }); 

var_dump($tests);