<?php
 session_start();
 if(!isset($_SESSION['email'])){
	 header('location:login.php');
 }
/*if (!isset($_SESSION)){
   session_start();
} */
/*if ($_SESSION["LOGADO"] == false){
	header("Location: formlogin.php");
}
*/
include_once("acoes/conexao.php");
//include_once("db/biblioteca.php");

/*if (empty($_POST["parametro"])){
  $sql = 'SELECT * FROM pacientes';	
} else {*/
	
  $bucapor = $_POST["busca"];
  $parametro = $_POST["parametro"]; 
  
  if ($bucapor == "nome"){
  	$condicao = "where login like '%$parametro%'";
  }
  else if ($bucapor == "email"){
  	$condicao = "where email like '%$parametro%'";
  }  
//update nome da tabela set nome do campo = 'novo valor' where id = codid   
//date_format(data_cadastro,'%d/%m/%Y') as data_cadastro *formatar a data pelo select
  //$sql = "SELECT * FROM pacientes " . $condicao;	
 $sql= "Select cod_paciente,nome_paciente,nomecidade,tel_paciente,nomesexo,nomeorientacao as orientacao_paciente,nomeestado_civil as estado_civil_paciente,nomeconvenio as convenio_paciente,carterinha,nomeabordagem,date_format(data_cadastro,'%d/%m/%Y') as data_cadastro
from pacientes
INNER JOIN cidade
on pacientes.cidade_paciente = cidade.codcidade
INNER JOIN sexo
on pacientes.sexo_paciente = sexo.codsexo
INNER JOIN orientacao
on pacientes.orientacao_paciente = orientacao.codorientacao
INNER JOIN estado_civil
on pacientes.estado_civil_paciente = estado_civil.cod_estado_civil
INNER JOIN Abordagem
on pacientes.Abordagem_paciente = Abordagem.codabordagem
INNER JOIN convenio
on pacientes.convenio_paciente = convenio.codconvenio".$condicao;

//}

 //echo $sql;
$resultado = mysqli_query($conexao,$sql);

$usuarios = mysqli_fetch_all($resultado,MYSQLI_ASSOC);

mysqli_free_result($resultado);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/lista.css">
	<title>Document</title>
</head>
<body>

	  <div class="corpo">
	 
	    <br>
	    <h1>Lista de pacientes Cadastrados</h1>
	    <br>
	    <h2 class="voltar"><a href="index.php">Home</a></h2>
	  
	 
	    <?php 	  
	  //session_start();
	  //echo $_SESSION['TST'];
	  
	   if (!empty($usuarios)){
	  
	  
	  
	  
	    ?><br><br>
    <table>
		  
		  <tr>

		     <th>Cod Paciente</th>
		     <th>Nome Paciente</th>
			 <th>Telefone Paciente</th>
			 <th>Cidade</th>
			 <th>Sexo</th>
			 <th>Orientação</th>
			 <th>Estado Civil</th>
		     <th>Convenio</th>
		     <th>carteira</th>
		     <th>Data Cadastro</th>

		     <td colspan="8"></td>

		 </tr>
		      <?php foreach($usuarios as $usuario){	?> 
			   <tr class="tr">
					<td><?php echo $usuario["cod_paciente"] ?></td>			 
					<td> <?php echo $usuario["nome_paciente"] ?> </td>	
					<td> <?php  echo "&nbsp" . $usuario["tel_paciente"] ?></td>
					<td> <?php  echo "&nbsp" . $usuario["nomecidade"] ?></td>
					<td><?php echo htmlspecialchars($usuario["nomesexo"] ) ?></td>
					<td><?php echo htmlspecialchars($usuario["orientacao_paciente"])  ?></td>
					<td><?php echo htmlspecialchars($usuario["estado_civil_paciente"])  ?></td>
					<td><?php echo htmlspecialchars($usuario["convenio_paciente"])  ?></td>
					<td><?php echo htmlspecialchars($usuario["carterinha"])  ?></td>
					<td><?php echo htmlspecialchars($usuario["data_cadastro"])  ?></td>

			    </tr>
		  
				<?php } ?>
	</table>
	   
	   <?php
	   } else {
		   echo "Registro não encontrado!";
	   }
	   ?>
	  
	 </div>
</body>
</html>







