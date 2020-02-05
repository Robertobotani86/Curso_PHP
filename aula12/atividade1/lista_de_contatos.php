<?php
session_start();

$method = $_SERVER["REQUEST_METHOD"];

$contacts = array();

$contacts[] = "Ana Paula";
$contacts[] = "984521060";

$contacts[] = "João Pedro";
$contacts[] = "985604070";

$contacts[] = "Roberto";
$contacts[] = "984506080";

if ($method == "GET") {
    
} else if ($method == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    $contacts[] = $name;
    $contacts[] = $phone;

    $_SESSION["contacts"] = $contacts;
}
?>


<!doctype html>

<html>
    <head>

        <title>Adicionar Contatos</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <form method="POST" action="lista_de_contatos.php" >
            <fieldset>
                <legend>Adicionar Contato</legend>
                <p>
                    <label>Nome:</label>
                    <input type="text" name="name"/>
                </p>
                <p>
                    <label>Número:</label>
                    <input type="text" name="phone"/>
                </p>
                <p>
                    <input type="submit" value="Adicionar"/>
                </p>
        </form>
    </fieldset>                


    <h1>Lista de Contatos</h1>        

    <?php for ($i = 0; $i < count($contacts); $i += 2) { ?>
        <p>Nome:<?= $contacts[$i] ?></p>
        <p>Número:<?= $contacts[$i + 1] ?> </p>
        <hr>

    <?php } ?>



</body>

</html>
