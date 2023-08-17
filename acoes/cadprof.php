<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
  $especialidades =$_POST['especialidades'];
  $conselhoclasse = $_POST['conselho_classe'];
  $numeroConselho = $_POST['numero_Conselho'];
  $abordagem = $_POST['abordagem'];
  $dtentradaprof = date('Y-m-d');
   /* if ($senha !== $confirma_senha) {
        echo"As senhas não correspondem. Por favor, verifique novamente.";
    }
    else{*/
        
        $sql = "INSERT INTO prof(nomeprof,cidadeprof,telprof,sexoprof,orientacaoprof,estado_civilprof,
        especialidade_prof,Abordagem,conselho_classeprof,num_conselho,dataentprof) 
        VALUES ('$nome', '$cidade', '$telefone','$sexo','$orientacao',' $estadocivil',
        '$especialidades','$abordagem',' $conselhoclasse','$numeroConselho', '$dtentradaprof')";
    
    
    if(mysqli_query($conexao,$sql)){
        echo "Usuário cadastrado com sucesso.";
    } else {
        echo "Erro encontrado. Usuário não cadastrado: " . mysqli_connect_error($conexao);
    }

   

    mysqli_close($conexao);
?>

</body>
</html>