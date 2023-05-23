<?php
include '../db/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <header class="header" href="header.php">
        Página Inicial<br>
        <a href="../usuarios.php">Gerenciar Usuários</a><br>
        <a href="../rotas.php">Gerenciar Rotas</a><br>
        <a href="../mensagens.php">Gerenciar Mensagens</a>
    </header>
</body>
</html>
