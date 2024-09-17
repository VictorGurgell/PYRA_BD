<?php
 
$descricao = ['descricao'];
$valor = ['valor'];
$tipo = ['tipo'];
$dt_lanc = ['dt_lanc'];
 
include 'conexao.php';
 
$insert_lan = "INSERT INTO  VALUES
            (null, '$descricao', '$valor', '$tipo', '$dt_lanc', null, null)";
 
$test = $conexao->query($insert_fun);
 
if($test){
    echo "<script>alert('inserido com sucesso'); history.back() </script>";
}
 
?>