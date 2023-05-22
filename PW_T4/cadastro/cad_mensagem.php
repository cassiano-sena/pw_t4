<?php
include '../db/connect.php';

// ***inserindo informações no banco de dados*** //
if(isset($_POST['submit'])){ // quando clicar em submit, inserir os dados em seguida
    $usuario=$_POST['usuario'];
    $rota=$_POST['rota'];
    $data=$_POST['data'];
    $hora=$_POST['hora'];
    $descricao=$_POST['descricao'];

    $sql="insert into `tab_mensagens`(usuario,rota,data,hora,descricao)
    values('$usuario','$rota','$data','$hora','$descricao')";
    $result=mysqli_query($con,$sql);
    if ($result) {
        // echo "Dados registrados com sucesso!";
        header('location:../mensagens.php');
    } else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Mensagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <h1>Operação CRUD</h1>
    <div class="container my-5">
        <form method="post">

            <div class="mb-3"> 
                <label for="usuario" class="form-label">Usuário</label>
                <input type="text" class="form-control" id="usuario" placeholder="Insira o Usuário" autocomplete="off" autocapitalize="off" name="usuario">
            </div>
            <div class="mb-3">
                <label for="rota" class="form-label">Rota</label>
                <input type="rota" class="form-control" id="rota" placeholder="Insira a rota" autocomplete="off" autocapitalize="off" name="rota">
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" placeholder="Insira a data" autocomplete="off" autocapitalize="off" name="data">
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input type="text" class="form-control" id="hora" placeholder="Insira a hora" autocomplete="off" autocapitalize="off" name="hora">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="textarea" class="form-control" id="descricao" placeholder="Insira a Descrição" autocomplete="off" autocapitalize="off" name="descricao">
            </div>
            
            <button type="submit" clas="btn btn-primary" name="submit">Submit</button>
    </div>
</body>

</html>