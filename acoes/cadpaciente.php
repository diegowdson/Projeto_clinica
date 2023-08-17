<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
        }
        .voltar a{
    margin-top: 1rem;
    color: white;
    font-size: 1rem;
    background-color:#2A4380; 
    padding: 15px 32px;
    text-align: center;
    display: inline-block;
    border-radius: 10px;
}

.voltar a:hover{
    background:rgb(27, 181, 228);
}
    </style>
    
</head>
<body>

    
<?php
    include("conexao.php");

  $nome= $_POST['nome'];
  $telefone = $_POST['telefone'];
  $cidade = $_POST['cidade'];
  $sexo = $_POST['sexo'];
  $orientacao = $_POST['orientacao'];
  $estadocivil = $_POST['estado_civil'];
  $convenio =$_POST['convenio_paciente'];
  $carteirinha = $_POST['numero_carteira'];
  $abordagem = $_POST['abordagem'];
  $dtentradaprof = date('Y-m-d');
   /* if ($senha !== $confirma_senha) {
        echo"As senhas não correspondem. Por favor, verifique novamente.";
    }
    else{*/
        
        $sql = "INSERT INTO pacientes (nome_paciente,cidade_paciente,tel_paciente,sexo_paciente,orientacao_paciente,estado_civil_paciente,
        convenio_paciente,carterinha,Abordagem_paciente,data_cadastro) 
        VALUES ('$nome', '$cidade', '$telefone','$sexo','$orientacao',' $estadocivil',
        '$convenio','$carteirinha','$abordagem', '$dtentradaprof')";
    
    
    if(mysqli_query($conexao,$sql)){
        echo "Usuário cadastrado com sucesso.";
    
    } else {
        echo "Erro encontrado. Usuário não cadastrado: " . mysqli_connect_error($conexao);
    }

   

    mysqli_close($conexao);
?>
 <h2 class="voltar"><a href="../index.php">Home</a></h2>
</body>
</html>