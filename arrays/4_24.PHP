<?php
//Требуется перебрать содержимое списка данных. При этом весь список занимает много памяти или очень медленно строится
function fileLine($file){
  if(!$fh = fopen($file, 'r')) {return;}
  while(false !== ($line = fgets($fh))){
        yield $line;
  }
  fclose($fh);

}
$file = "../test.csv";
ob_start();
echo "sadasdasd"."</br>";
foreach (fileLine($file) as $line){
    echo $line."</br>";
}
//ob_clean();

ob_end_flush();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   some text here.  
</body>
</html>