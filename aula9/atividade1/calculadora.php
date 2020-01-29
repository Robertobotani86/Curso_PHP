<?php
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {
    ?>
    <!doctype html>

    <html>
        <head>
            <title>Calculadora</title>
            <meta charset="UTF-8"/>
        </head>

        <body>
            <form method ="POST">

                <h1>Calculadora</h1
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
                    <label>Numero2:</label>
                    <input type="number" name="n2"/>
                </p>

                <label>Operação:</label>
                
<p>            
                    <input type="radio" name="op" value="+"/>
                    <label>Soma</label>
                </p>
                <p>
                    <input type="radio" name="op" value="-"/>
                    <label>Subtração</label>
                </p>      
                <p>
                    <input type="radio" name="op" value="*"/>
                    <label>Multiplicação</label>              
                </p> 
                <p>
                    <input type="radio" name="op" value="/"/>
                    <label>Divisão</label>              
                </p>
                <p>
                    <input type="submit" value="Calcular"/>
                </p>           

            </form>
        </body> 

    </html>

<?php } else if ($method == "POST") { ?>

    <?php
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $full_name = "$name $last_name";

    echo "$full_name, O resultado é:  ";


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

    <!doctype html>

    <html>
        <head>
            <title>Calculadora</title>
            <meta charset="UTF-8"/>
        </head>
        <body>
            <form method="POST">

                <h1>Calculadora</h1
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
                    <label>Numero2:</label>
                    <input type="number" name="name"/>
                </p>
                <label>Operação:</label>
                
                <p>
                    <input type="radio" name="op" value="+" <?= $op == "+" ? "selected" : "" ?>/>
                    <label>Soma</label>
                </p>
                <p>
                    <input type="radio" name="op" value="-" <?= $op == "-" ? "selected" : "" ?>/>
                    <label>Subtração</label>
                </p>      
                <p>
                    <input type="radio" name="op" value="*"<?= $op == "*" ? "selected" : "" ?>/>
                    <label>Multiplicação</label>              
                </p> 
                <p>
                    <input type="radio" name="op" value="/"<?= $op == "/" ? "selected" : "" ?>/>
                    <label>Divisão</label>              
                </p>
                <p>
                    <input type="submit" value="Calcular"/>
                </p>           

            </form>
        </body> 

    </html>
<?php } ?>




