<?php
$method = $_SERVER["REQUEST_METHOD"];
?>
<?php if ($method == "GET") { ?>

    <!DOCTYPE html>

    <html>
        <head>
            <title>Calculadora</title>        
            <meta charset="UTF-8"/>

        </head>
        <body>
            <form method="POST" />
            <p>
            <h1>Calculadora</h1>
        </p>  
        <p>
            <label>Name:</label>
            <input type="text" name="name"/>
        </p>
        <p>
            <label>Sobrenome:</label>
            <input type="text" name="last_name"/>
        </p>
        <p> 
            <label>Numero1:</label>
            <input type="number" name="n1"/>

        </p>      
        <p> 
            <label>Nunero2:</label>
            <input type="number" name="n2"/>
        </p>
        <p>
            <label>Operação:</label>
            <select name="op">
                <option value = "+">Soma</option>
                <option value =" -">Sub</option>
                <option value ="*">Mult</option>
                <option value ="/">Sub</option>
            </select>
        </p>             
        <p>
            <button type="submit">Calcular</button>

        </p>


    </form>
    </body>

    </html>


<?php } else if ($method == "POST") { ?>


    <!doctype html >


    <html>
        <head>
            <title>Calculadora</title>
            <meta charset="UTF-8">
        </head>

        <body>
            <form method= " POST" />
            <p>
            <h1>Calculadora</h1>
        </p>  
        <p>
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $name; ?>"/>
        </p>
        <p>
            <label>Sobrenome:</label>
            <input type="text" name="last_name" value="<?php echo $last_name; ?>"/>
        </p>
        <p> 
            <label>Numero1:</label>
            <input type="number" name="n1" value="<?php echo $n1; ?>"/>

        </p>      
        <p> 
            <label>Nunero2:</label>
            <input type="number" name="n2" value="<?php echo $n2; ?>"/>
        </p>
        <p>
            <label>Operação:</label>
            <select name="op" >
                <option value = "+"<?= $op == "+" ? "selected" : "" ?> >Soma</option>
                <option value ="-" <?= $op == "-" ? "selected" : "" ?>>Sub</option>
                <option value ="*" <?= $op == "*" ? "selected" : "" ?> >Mult</option>
                <option value ="/" <?= $op == "/" ? "selected" : "" ?>>Sub</option>
            </select>       
        </p>             
        <p>
            <button type="submit">Calcular</button>

        </p>


    </form>



    </body>

    <?php
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $full_name = "$name $last_name";

    echo "$name $last_name; o resultado é: ";

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $op = $_POST["op"];


    if ($op == "+") {
        echo $n1 + $n2;
    } else if ($op == "-") {
        echo $n1 - $n2;
    } else if ($op == "*") {
        echo $n1 * $n2;
    } else if ($op == "/") {
        echo $n1 / $n2;
    }
    ?> 
    </body>

    </html>
<?php } ?>