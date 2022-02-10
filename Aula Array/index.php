<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="form.php" method="post">

   Nome........:<input type="text" name="nome"><br>
   Sobrenome:<input type="text" name="sobrenome"><br>
   Sexo..........:<input type="text" name="sexo"><br> 
   Mensagens:<input type="text" name="comentarios"><br>
   Senha........:<input type="password" name="senha"><br>
   
    Escolha seus Hobbes:<br>
    Ler<input type="checkbox" name="hobbes[]" value="Ler">
    <br>
    Patinar<input type="checkbox" name="hobbes[]" value="Patinar">
    <br> 
    Atuar<input type="checkbox" name="hobbes[]" value="Atuar">
    <br>


    Escolha seus Carros:<br>
    Camaro<input type="checkbox" name="Carros[]" value="Camaro">
    <br>
    Audi X6<input type="checkbox" name="Carros[]" value="Audi X6">
    <br> 
    Hilux<input type="checkbox" name="Carros[]" value="Hilux">
    <br>

    
    Escolha sua modalidade de esporte Favorita:
    <select name="esportes[]" id="esportes[]">
        <option value="Futebol">Futebol</option>
        <option value="Basquete">Basquete</option>
        <option value="Volei">Volei</option> 
    </select>
    <input type="submit" name="enviar" value="Enviar">
    <input type="reset" name="limpar" value="Limpar">
</form>



</body>
</html>