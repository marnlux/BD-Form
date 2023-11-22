<?php
if(isset($_POST["submit"]))
{
    include_once("config.php");

  $nome = $_POST["nome"];
  $endereco = $_POST["endereco"];
  $numerotel = $_POST["telef"];
  $email = $_POST["email"];

  $response = mysqli_query($conexao,
   "INSERT INTO cliente(nome, endereco, numerotel, email) VALUES('$nome', '$endereco', '$numerotel', '$email')");
}

?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="box-m">
        <h1>Registrar Cliente</h1>
        <section class="box-g">
            <form action="form1.php" method="post">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Inserir nome"> <br> <br>
                <label for="">Endereço</label>
                <input type="text" name="endereco" id="endereco" placeholder="Inserir endereço"> <br> <br>
                <label for="">Telefone</label>
                <input type="text" name="telef" id="telef"  placeholder="Inserir número de telefone"> <br> <br>
                <label for="">E-mail</label>
                <input type="text" name="email" id="email"   placeholder="Inserir E-mail"> <br> <br>
        
        
                <button><a href="naveg.html">Retornar</a></button>
                <input type="submit" name="submit" id="submit">

            </form>
        </section>
        

    </section>
   
    

</body>
</html>