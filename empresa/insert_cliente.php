<?php
 
$nome = ['nome'];
$sobrenome = ['sobrenome'];
$email = ['email'];
$telefone = ['telefone'];
$endereco = ['endereco'];
 
include 'conexao.php';
 
$insert_cli = "INSERT INTO tb_cliente VALUES
            (null, '$nome', '$sobrenome', '$email', '$telefone', '$endereco')";
 
$test = $conexao->query($insert_fun);
 
if($test){
    echo "<script>alert('inserido com sucesso'); history.back() </script>";
}
 
?>