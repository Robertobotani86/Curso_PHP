
<?php


// A variavel $email e uma string

$email = "beto@email.com";

// A variavel $age e um int
$age = 26 ;

// A variavel $height e um float
$height = 1.73;

// A variavel $male e um boolean
$male = true;

// Comparação
// Maior que
$allowed = $age > 18;
// menor que 
$minorAge = $age < 18;
// maior igual 
$majorAge =  $age >= 18;
// menor igual 
$minorAge = $age <=17 ;

//igualdade
$compare = (15 ==10);
//identico
$compare = 15 === '15';
//comparar strings 
$validPassword = "12345" === "12345";

//and-> &&
$allowedAndCompare = ($age > 18) && (15 == 10);
//or -> ||(pipe)
$allowedOrCompare = ($age > 18) || (15==10);


// Resultado 1 =14
$result1 = 5+7*2/2+3-1;
// Resultado 2 = 
$result2 = (5+7)* 2/(2+3-1);

//Array numerico 
$results = array();
$results[] = $email;
$results[] = $age;        
$results[] = $height;
$results[] = $male;
$results[] = $allowed;
$results[] = $compare;


echo "<pre>";
var_dump($results);
echo "</pre>";


//Array Associativo
$resultsAssoc = array() ;
$resultsAssoc["email"]= $email;
$resultsAssoc["idade"]= $age;
$resultsAssoc["altura"]= $height;
$resultsAssoc["masculino"]= $male;
$resultsAssoc["permitido"]= $allowed;
$resultsAssoc["comparacao"]= $compare;
$resultsAssoc["permitidoAndComparação"] = $allowedAndCompare;
$resultsAssoc["permitidoOrComparação"] = $allowedOrCompare;
$resultsAssoc["resuldado1"]= $result1;
$resultsAssoc["resuldado2"]= $result2;

echo "<pre>";

var_dump($resultsAssoc);

echo "</pre>";


?>





