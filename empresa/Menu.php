<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssMenu.css">
</head>
<body>
    <center>
        <img src="logo.png" alt="logo" class="logo"><br>
            <h2 style="font-size: 120px;
    color: white;
    position: absolute;
    margin-top: -8%;
    margin-left: 36%;">Bem-vindo</h2>
            <span> <div class="div"><?php 
                session_start();
                if (isset($_SESSION['nm_funcionario'])){
                    $nome = $_SESSION['nm_funcionario'];
                    echo "<h2 style='font-size: 50px;
                    color: black;
                    position: absolute;
                    margin-top: -7%;
                    margin-left: 1%;
                    background-color: #ffffff;
                    width: 20%;
                    height: 15%;
                    border-radius: 10px;'> Olá $nome</h2>";
                } else{
                    echo "<script>alert('Você não está logado!'); history.back() </script>";
                }
                ?></span><br>
                <span>  
                    <a href="logout.php">
                    <span style="
                    color: grey;
                    font-size: 40px;
                    position: absolute;
                    margin-top: -4%;
                    margin-left: -41.2%;
                    
                    border-radius: 10px;
                    width: 5% "> Sair </span>
                    </a>
                </span></div>
                <a href="cadCliente.html"><button> CLIENTE </button></a><br>
                <a href="cadFuncionario.html"><button> FUNCINÁRIO </button></a><br>
                <a href="cadFornecedor.html"><button> FORNECEDOR </button></a><br>
                <a href="cadCategoria.html"><button> CATEGORIA </button></a><br>
                <a href="cadLancamento.html"><button> LANÇAMENTO </button></a>
            </div>
        </center>
</body>
</html>