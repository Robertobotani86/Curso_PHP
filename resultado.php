<?php


$name = $_GET["name"];
$last_name = $_GET["last_name"];
$n1  =  $_GET["n1"];
$n2  =  $_GET["n2"];
$op =   $_GET["op"];

if($op == "+"){
    $result = $n1 + $n2;
}else if($op == "-"){
    $result = $n1 - $n2;
}else if($op == "*"){
    $result = $n1 * $n2;
}else if($op == "/"){
    $result = $n1 / $n2;
}else {
    $result = "Operação invalida. Tente novamente";
}
    ?>

<!doctype>


<html>
    <head>
        <title>Resultado</title>
        <meta charset="utf-8"/>
        
    </head>
    <body>
        <h1><?php echo "$name $last_name";?></h1>
        <p>O resultado é:<?php echo $result ;?></p>
    </body>
    
    
</html>
     
               



        