<?php
include '../db/connect.php';

// ***inserindo informações no banco de dados*** //
if(isset($_POST['submit'])){ // quando clicar em submit, inserir os dados em seguida
    $user=$_POST['user'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];

    $sql="insert into `crud`(user,email,number,password)
    values('$user','$email','$number','$password')";
    $result=mysqli_query($con,$sql);
    if ($result) {
        // echo "Dados registrados com sucesso!";
        header('location:../usuarios.php');
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
    <title>Cadastro Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <h1>Operação CRUD</h1>
    <div class="container my-5">
        <form method="post">

            <div class="mb-3"> 
                <label for="user" class="form-label">Usuário</label>
                <input type="text" class="form-control" id="user" placeholder="Insira o Usuário" autocomplete="off" autocapitalize="off" name="user">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="exemplo@email.com" autocomplete="off" autocapitalize="off" name="email">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="number" placeholder="1234-5678" autocomplete="off" autocapitalize="off" name="number">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" placeholder="Insira a Senha" autocomplete="off" autocapitalize="off" name="password">
            </div>
            
            <button type="submit" clas="btn btn-primary" name="submit">Submit</button>
    </div>
</body>

</html>