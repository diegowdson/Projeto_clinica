<?php 
//Criando a variável $Con e atribuindo a ela a conexão com o banco de dados 
$conexao = mysqli_connect('localhost:3306','root','12345','sistema_clinica');

if(!$conexao){ // Verificando se a variável não foi alimentada, ou seja, recebeu erro.
  echo "Erro de conexão: " . mysqli_connect_error(); //apresentando a mensagem de erro.
} 
/*
else {
  echo "Conexão realizada com sucesso! "; //apresentando a mensagem de sucesso.
}
*/


 /*$host     = "127.0.0.1";
 $user     = "root";
 $password = "12345";
 $dbname   = "sistema_clinica";

 // CONEXAO
 $con = mysqli_connect($host, $user, $password, $dbname);
 //$con = mysqli_connect('localhost:3306','root','12345','sistema_clinica');
 // TESTAR CONEXAO
 if(mysqli_connect_error()) {
     echo "<p>ERRO: (" . mysqli_connect_errno($con) . ") " . mysqli_connect_error($con) . "</p>";
     exit;
 } else {
     // echo "<p>Conexão realizada com sucesso!</p>";
 }
*/
 //fecha conexao
//$Con->close();
?>