<?php
if(isset($_POST['peso']) && $_POST['altura']){
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];  
    
    $imc = $peso / ($altura * $altura);

    echo "Voce possue um IMC de; <br>" .round($imc, 2)."<br><br> Voce esta: <br>";

    if($imc < 18.5){
        echo"Abaixo do peso";
    }
    if($imc > 18.5  && $imc <24.9){
        echo"Peso normal";
    }
    if($imc > 25  && $imc <29.9){
        echo"Acima do peso";
    }
    if($imc > 30  && $imc <34.9){
        echo"Bem acima do peso";
    }elseif($imc > 35){
        echo"Davy Jones 2015";
    }




}if(isset($_POST['numerador']) && $_POST['multiplicadorDireita']){
 $numerador = $_POST['numerador'];
 $multiplicadorDireita = $_POST['multiplicadorDireita'];  
 
 for($i = 1; $i <= $multiplicadorDireita; $i++){
     echo $numerador ." * ".$i." = " .$numerador*$i . "<br>"; 
 }



}if(isset($_POST['primeiroNum']) && $_POST['segundoNum'] && $_POST['terceiroNum'] && $_POST['quartoNum']){

    $media = ($_POST['primeiroNum'] + $_POST['primeiroNum'] + $_POST['terceiroNum'] + $_POST['quartoNum'] ) /4;
    echo "<h3>Média do Aluno</h3>";
    echo "Sua média é; ". $media . "<br>";




}if(isset($_POST['num1'])&& $_POST['L2num1']){

    $primeiroVetor = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4']);
    $segundoVetor = array($_POST['L2num1'], $_POST['L2num2'], $_POST['L2num3'], $_POST['L2num4']);

    $answer = array();

    for($i = 0; $i < 4; $i++){
        $placeholder = $primeiroVetor[$i] * $segundoVetor[$i];
        array_push($answer, $placeholder);
        echo $answer[$i] ."<br>";
    }

}else{
    require_once "index.html";
    
}

 echo "<br><a href=\"index.html\"> Acessar arquivo inicial para responder aos outros formularios</a>"; 
 ?>