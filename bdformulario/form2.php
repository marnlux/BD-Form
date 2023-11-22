
<?php
if(isset($_POST["submit"]))
{
    include_once("config.php");

  $tipo = $_POST["tipo"];
  $preco = $_POST["preco"];
  $quant = $_POST["quant"];
 

  $response = mysqli_query($conexao,
   "INSERT INTO combust(tipocomb, preco, quant) VALUES('$tipo', '$preco', '$quant')");
}

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combustível</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <section class="box-p">
        <h1>Registrar bomba de Combustível</h1>
   
    
    <section class="box-g">
        <form action="form2.php" method="post">
            <label for="">Tipo de combustível</label>
            <input type="text"  name="tipo" id="tipo"  placeholder="Dica: Gasolina, etanol, diesel..."> <br> <br>
            <label for="">Preço por litro</label>
            <input type="text"  name="preco" id="preco" > <br> <br>
            <label for="">Quantidade combustível disponível</label>
            <input type="text"  name="quant" id="quant"><br> <br>
    
            <button><a href="naveg.html">Retornar</a></button>
            <input type="submit" name="submit" id="submit">


    </section>
</section>

    </form>
</body>
</html>