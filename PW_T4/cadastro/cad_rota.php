<?php
include '../db/connect.php';

// ***inserindo informações no banco de dados*** //
if(isset($_POST['submit'])){ // quando clicar em submit, inserir os dados em seguida
    $rota=$_POST['rota'];
    $veiculo=$_POST['veiculo'];
    $motorista=$_POST['motorista'];
    $data=$_POST['data'];
    $horario=$_POST['horario'];

    $sql="insert into `tab_rota`(rota,veiculo,motorista,data,horario)
    values('$rota','$veiculo','$motorista','$data','$horario')";
    $result=mysqli_query($con,$sql);
    if ($result) {
        // echo "Dados registrados com sucesso!";
        header('location:../rotas.php');
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
    <title>Cadastro Rota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <h1>Operação CRUD</h1>
    <div class="container my-5">
        <form method="post">

            <div class="mb-3">
                <label for="rota" class="form-label">Rota</label>
                <input type="rota" class="form-control" id="rota" placeholder="Insira a rota" autocomplete="off" autocapitalize="off" name="rota">
            </div>
            <div class="mb-3">
                <label for="veiculo" class="form-label">Veículo</label>
                <input type="text" class="form-control" id="veiculo" placeholder="Insira o Veículo" autocomplete="off" autocapitalize="off" name="veiculo">
            </div>
            <div class="mb-3"> 
                <label for="motorista" class="form-label">Motorista</label>
                <input type="text" class="form-control" id="motorista" placeholder="Insira o Motorista" autocomplete="off" autocapitalize="off" name="motorista">
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" placeholder="Insira a data" autocomplete="off" autocapitalize="off" name="data">
            </div>
            <div class="mb-3">
                <label for="horario" class="form-label">Horário</label>
                <input type="text" class="form-control" id="horario" placeholder="Insira o horário" autocomplete="off" autocapitalize="off" name="horario">
            </div>
            
            <button type="submit" clas="btn btn-primary" name="submit">Submit</button>
    </div>
</body>

</html>