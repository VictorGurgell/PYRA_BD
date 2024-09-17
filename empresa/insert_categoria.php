<?php
 
$nome = ['nome'];
$descricao = ['descricao'];
 
include 'conexao.php';
 
$insert_cat = "INSERT INTO tb_categoria VALUES
            (null, '$nome', '$descricao')";
 
$test = $conexao->query($insert_fun);
 
if($test){
    echo "<script>alert('inserido com sucesso'); history.back() </script>";
}
 
?>