<?php
include 'db/connect.php';
if(isset($_GET['deleteid'])){ 
    $id=$_GET['deleteid']; // pegando o dado deleteid e guardando dentro da variavel id

    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    if ($result) {
        echo "Dados deletados com sucesso!";
    } else{
        die(mysqli_error($con));
    }
}

?>