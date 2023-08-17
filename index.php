<?php 
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
   
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilohome.css">
</head>
<body>
    <div class="header">
        <h1>Psy Tech</h1>
        
        <div class="sair">
        <a href="logout.php">Sair</a>
        </div>
        
      </div>
      <div class="user">
        <?php echo "<p>Usuário {$_SESSION['email']} logado</p> <br>";?>
      </div>
      
      <div class="clearfix">
        <div class="column menu">
          <ul>
            <li><a href="paciente.php">Cadastro de Pacientes</a></li>
            <li><a href="profissional.php">Cadastro de Profissionais</a></li>
            <li> <a href="listapaciente.php">Listagem de Pacientes</a></li>
          </ul>
        </div>
      
        <div class="column_content">
            <img src="css/img/novo1.png" alt="imagem clinica">
          
         
        </div>
      </div>
      
     
      <footer>
      <div class="footer">
        <p>Todos Direitos Reservados</p>
      </div>
      </footer>
</body>
</html>