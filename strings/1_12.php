<?php 
// Имеется набор данных, разделенных запятыми (формат CSV), например файл, экспортированный из Excel или базы данных. Требуется извлечь записи и поля в формат, с которым удобно работать в PHP.

$fh = fopen('./test.csv', 'r') or die('cant open ./test.csv');

echo '<table>';
while($csv_line = fgetcsv($fh)){
    echo '<tr>';
    for($i=0; $i<count($csv_line); $i++){
        echo '<td>';
         echo htmlentities($csv_line[$i]);
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
fclose($fh) or die('cant open ./test.csv');
    
