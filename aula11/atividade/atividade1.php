 <?php

$numbers = array();
$numbers[]= 1;
$numbers[]= 4;
$numbers[]= 8;
$numbers[]= 123;
$numbers[]= 76;
$numbers[]= 20;
 
$length = count($numbers);

echo "<h5>Quantidade de elementos: $length </h5>";



for ($i = 0;$i < $length ;$i++){
    echo "<p>$numbers[$i]</p>";
    
}
echo "Fim de Programa";