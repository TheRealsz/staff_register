<?php
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome = $_POST['nome'];
    $funcao = $_POST['funcao'];
    $admissao = $_POST['admissao'];
    $endereco = $_POST['endereco'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $tel = $_POST['tel'];
    $phone = $_POST['phone'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $nasc = $_POST['nasc'];

    $strcon = mysqli_connect("localhost", "root", "", "company") or die ("Error" . mysqli_error);
    $sql = "INSERT INTO funcionarios VALUES (
    '".$nome."', 
    '".$funcao."', 
    '".$admissao."', 
    '".$endereco."', 
    '".$complemento."', 
    '".$cidade."', 
    '".$estado."', 
    '".$cep."', 
    '".$tel."', 
    '".$phone."', 
    '".$cpf."', 
    '".$rg."', 
    '".$email."', 
    '".$nasc."')";

    if (mysqli_query($strcon, $sql)) {
        echo "<script>alert('Funcionário cadastrado com sucesso!')</script>";
    } else {
        echo "Error: ". $sql. "<br>". mysqli_error($strcon);
    }
    mysqli_close($strcon);
 }
?>