<?php
/* Algoritmo que verifica se
determinado número é par ou impar*/
$numeroAverificar = 4;
$verificador = $numeroAverificar % 2;
 if( 0 == $verificador){
     echo "O numero é par\n";
 }
else 
 echo "O numero é Impar\n";

 /* Programa que verifica os valores
numéricos de 1 á 100 e apresente no final o
seu somatório e a média*/

$somatorio = 0;

echo "Numeros de 1 a 100\n";
for($i = 1; $i <101; $i++){
    echo "\n$i";
    $somatorio = $somatorio + $i;
}

echo "\nA soma dos numero é igual a $somatorio";
$somatorio = $somatorio / 2 ;
echo "\nA média dos numero é igual a $somatorio\n\n";

/* algoritmo que funcione como uma
calculadora com as operações básicas. Utilize o switch*/
$operacao = "*" ;
$primeiroNumero = 5;
$segundoNumero = 5;

switch($operacao){
    case "*":
        $resultadoConta = $primeiroNumero * $segundoNumero;
        break;
    case "/":
        $resultadoConta = $primeiroNumero / $segundoNumero;
        break;
    case "+":
        $resultadoConta = $primeiroNumero + $segundoNumero;
        break;
    case "-":
        $resultadoConta = $primeiroNumero - $segundoNumero;
        break;

    default:
        echo "Somente numeros";
        break;
}
    echo "O resultado foi $resultadoConta";
    

/*algoritmo que calcule a tabuada de 1 a 10*/
$multiplicadorDireita = 1 ;
$multiplicadorEsquerda = 1 ;
for($multiplicadorDireita = 1; $multiplicadorDireita < 11; $multiplicadorDireita++){
    for($multiplicadorEsquerda = 1; $multiplicadorEsquerda < 11; $multiplicadorEsquerda++){
    $resultado = $multiplicadorEsquerda * $multiplicadorDireita;
    echo "$multiplicadorEsquerda * $multiplicadorDireita = $resultado\n";
    }
    echo "\n\n";
}

/* Ler dois valores e imprimir uma das três
mensagens a seguir:
1- "Números iguais", caso os números sejam iguais
2- "Primeiro é maior", caso o primeiro seja maior que o
segundo;
3- "Segundo maior", caso o segundo seja maior que o
primeiro.

Prof fiquei com duvidas de como faria para ler esses numeros e de onde eu 
leria eles mas achei esse código nos slide echo "Upload ".$i.": <input type='text' name='".$i."'/><br/>"; 
e pensei q deveria ser ele então utilizei mas não tenho certeza se esta certo"

*/

$primeiroValor = "Primeiro Valor";
$segundoValor =  "Segundo Valor";
echo "Upload ".$primeiroValor.": <input type='text' name='".$primeiroValor."'/><br/>";
echo "Upload ".$segundoValor.": <input type='text' name='".$segundoValor."'/><br/>";

$primeiroValor = "3";
$segundoValor =  "2";
	if ($segundoValor == $primeiroValor)
		echo "\nNúmeros iguais";
	else if ($segundoValor < $primeiroValor)
		echo "\nPrimeiro é maior";
	else if ($segundoValor > $primeiroValor)
		echo "\nSegundo maior";


?>
