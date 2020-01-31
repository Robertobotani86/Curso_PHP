
<?php 
$method = $_SERVER["REQUEST_METHOD"];




if ($method == "GET"){
    $name ="";
    $number ="";
}else if ($method =="POST"){
    $name = $_POST["name"];
    $number = $_POST["number"];
    }
   
?>



<!doctype html>

<html>
    <head>
        <title>Lista de Contatos</title>
    <meta charset="UTF-8">
</head>
<body>
    <form >
    <h1>Adicionar Contatos</h1>
   <p>
    <label>Nome:</label>
    <input type="text" name="name"/>
    </p>
    <p>
        <label>Numero:</label>
        <input type="text" name="number"/>
        </p>
        <p>
            <input type="submit" value="Salvar"/>
        </p>
        
    </form>
        <hr>
        <h2>Lista de Contatos</h2>
        <?php 
       
      
       
    
</body>    
    
    
</html>