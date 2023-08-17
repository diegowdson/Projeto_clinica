<?php /*
//iniciar uma nova sessão 
session_start();
//chamar nossa conexão 
require_once 'conexao.php';

if(isset($_POST['bt_cadastrar'])){
    //pegar os dados postados e fazer o escape
    $nome = mysqli_real_escape_string($con,$_POST['nome']);
    $telefone = mysqli_real_escape_string($con,$_POST['telefone']);
    $cidade = mysqli_real_escape_string($con,$_POST['cidade']);
    $sexo = mysqli_real_escape_string($con,$_POST['sexo']);
    $orientacao = mysqli_real_escape_string($con,$_POST['orientacao']);
    $estado_civil = mysqli_real_escape_string($con,$_POST['estado_civil']);
    $convenio_paciente = mysqli_real_escape_string($con,$_POST['convenio_paciente']);
    $numero_carteira = (mysqli_real_escape_string($con,$_POST['numero_carteira']));
    $abordagem = (mysqli_real_escape_string($con,$_POST['abordagem']));
    $dataEntrada =(mysqli_real_escape_string($con,$_POST['data_entrada']));



    //instrução SQL

    $sql= "INSERT INTO pacientes(nome_paciente,cidade_paciente,tel_paciente,sexo_paciente,orientacao_paciente,estado_civil_paciente,convenio_paciente,carterinha,abordagem_paciente,data_cadastro) VALUES ('$nome','$cidade','$telefone','$sexo','$orientacao','$estado_civil','$convenio_paciente','$numero_carteira','$abordagem','$dataEntrada')";

    //Executar instrução SQL e vereficar sucesso
    if(mysqli_query($con,$sql)){
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
        header('location:../index.php');
    }else{
        $_SESSION['mensagem'] = "Não foi possivel cadastrar";
        header('location:../index.php');

    }

    //fechar conexão 

    mysqli_close($con);



}
*/
?>