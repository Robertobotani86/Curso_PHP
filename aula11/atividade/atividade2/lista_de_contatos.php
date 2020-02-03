<?php
$contacts = array();
$contacts [] = "Roberto";
$contacts [] = "995964142";

$contacts [] = "Ana Paula";
$contacts [] = "985124560";

$contacts[] = "Carlos";
$contacts [] = "921137020";

$contacts [] = "Maria Flora";
$contacts [] = "985901030";


?>
<!doctype>
<html>
    <head>
        <title>Lista de Contatos</title>
        <meta charset="UTF-8"/>    
    </head>
    <body>
        <h1>Lista de Contatos</h1>
         
            
        <?php for ($i = 0; $i < count($contacts) ; $i = $i + 2){ ?>
        <p>Nome: <?= $contacts[$i] ?></p>
        <p>Telefone:<?= $contacts[$i + 1] ?></p>
        <hr>
 
            
      <?php } ?>
</body>

</html>