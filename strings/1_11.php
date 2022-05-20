<?php
// Требуется отформатировать данные в виде списка значений, разделенных запятыми (CSV, Comma-Separated Values), чтобы их можно было импортировать в электронную таблицу или базу данных.

//лучше использовать [], но мне было лень переписыватть исходный набор данных.
$sales = array( array('Northeast','2005-01-01','2005-02-01',12.54),
array('Northwest','2005-01-01','2005-02-01',546.33),
array('Southeast','2005-01-01','2005-02-01',93.26),
array('Southwest','2005-01-01','2005-02-01',945.21),
array('All Regions','--','--',1597.34) );

ob_start();
$file = fopen('php://output', "w") or die("cant open php://output");
foreach ($sales as $line){
    if(fputcsv($file, $line) === false){
        die("cant write $line");
    }
}
fclose($file) or die("cant close php://output");
$output = ob_get_contents();
ob_flush();
ob_end_clean();