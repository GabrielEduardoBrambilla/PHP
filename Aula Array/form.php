
<?php
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$sexo = $_POST["sexo"];
$comentarios = $_POST["comentarios"];
$senha = $_POST["senha"];
echo "Seu nome é " . $nome . " " . $sobrenome . "<br>";
echo "O sexo informado foi " . $sexo . "<br>";
echo "A senha digitada é " . $senha . "<br>";
echo "Você comentou o seguinte: <br>" . $comentarios . "<br>";

//HOBBES
if(isset($_POST['hobbes'])) {
    echo "Os hobes escolhidos foram:<br/>";
    foreach($_POST['hobbes'] as $hobbes) {
        echo $hobbes . "<br>";
    }
}
else {
    echo "Nenhum hobbe foi escolhido ;-;<br/>";
}

//CARROS
if(isset($_POST['Carros'])) {
    echo "Você selecionou os seguintes Carros:<br/>";

    foreach($_POST['Carros'] as $carros) {
        echo $carros . "<br>";
    }
}
else {
    echo "Nenhum carro foi selecionado ;-;<br/>";
}


//ESPORTE
if(isset($_POST['esportes'])) {
    echo "Você selecionou o seguinte esporte:<br/>";

    foreach($_POST['esportes'] as $esportes) {
        echo $esportes . "<br>";
    }
}
else {
    echo "Nenhum esporte foi selecionado ;-;<br/>";
}

?>