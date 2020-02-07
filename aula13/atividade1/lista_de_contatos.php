<?php
session_start();

$method = $_SERVER["REQUEST_METHOD"];

if (!isset($_SESSION["contacts"])) {
    $contacts = array();
} else {
    $contacts = $_SESSION["contacts"];
}



if ($method == "POST") {

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
        <title>Lista de Contatos</title>
        <meta charset="UTF-8"/>

    </head>
    <body>
        <form method="POST" action="lista_de_contatos.php">
            <fieldset>
                <legend>Adicionar Contatos</legend>
                <p>
                    <label>Nome:</label>
                    <input type="text" name="name"/>
                </p>
                <p>
                    <label>Número</label>
                    <input type="text" name="phone"/>
                </p>
                <p> 
                    <input type="submit" value="Adicionar"
                </p>        

        </form>
    </fieldset>

    <?php if (count($contacts) > 0) { ?>
            <h1>Lista de Contatos</h1> 
    <?php } ?>
                
                <?php for ($i = 0; $i < count($contacts); $i += 2) { ?>
            <p>Nome: <?= $contacts[$i] ?>  </p>
            <p>Telefone: <?= $contacts[$i + 1] ?>  </p>
            <hr>
        <?php } ?>

</body>
</html>

