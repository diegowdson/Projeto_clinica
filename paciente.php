<?php
   session_start();
   if(!isset($_SESSION['email'])){
       header('location:login.php');
   }

    include "acoes/conexao.php";
    // PUXA DADOS DA TABELA CIDADES
    $sql_cidades = "SELECT * FROM cidade order by codcidade";
    $result_cidades = mysqli_query($conexao, $sql_cidades);
    // PUXA DADOS DA TABELA SEXO
    $sql_sexo = "SELECT * FROM sexo order by codsexo";
    $result_sexo = mysqli_query($conexao, $sql_sexo);
    //PUXA DADOS DA TABELA ORIENTAÇÃO
    $sql_orientacao = "SELECT * FROM orientacao order by codorientacao";
    $result_orientacao = mysqli_query($conexao, $sql_orientacao);
    //PUXA DADOS DA TABELA ESTADO CIVIL
    $sql_estado_civil = "SELECT * FROM estado_civil order by cod_estado_civil";
    $result_estado_civil = mysqli_query($conexao, $sql_estado_civil);
    //PUXA DADOS DA TABELA CONVENIO
    $sql_convenio = "SELECT * FROM convenio order by codconvenio";
    $result_convenio = mysqli_query($conexao, $sql_convenio);
    //PUXA DADOS DA TABELA ABORDAGEM
    $sql_abordagem = "SELECT * FROM Abordagem order by codabordagem";
    $result_abordagem = mysqli_query($conexao,$sql_abordagem);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
            <div class="nav">

                <nav>
                    <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="paciente.php">Cadastro do Paciente</a></li>
                    <li><a href="profissional.php">Cadastro do Profissional</a></li>
                    <li><a href="listapaciente.php">Consulta da Listagem</a></li>
                    </ul>
                </nav>
            </div>

        

        <div id="formulario">

            
            <h1 class="h1">Cadastro Paciente</h1>
        
            <form   action="acoes/cadpaciente.php" method="POST">
                <div class="input-grup">
                    <!--1 NOME-->
                    <label for="nome">Nome do  Paciente:</label>
                    <input type="text" name="nome" required>
                </div>
                <div class="input-grup">
                    <!--2 TELEFONE-->
                    <label for="telefone">Telefone:</label>
                    <input type="tel"  name="telefone" required>
                </div>
                <div class="input-grup">
                    <!--3 CIDADE-->
                    <label for="cidade">Cidade:</label>
                    <select  name="cidade" id="">
                    <?php
                        while ($row = mysqli_fetch_assoc($result_cidades)){
                            echo '<option value="'.$row['codcidade'].'"name="cidade">'.$row['nomecidade'].'</option>';
                        }
                        //quando é escolhido a opção no select, o código faz uma varredura no banco de dados e arquiva a opção que foi escolhida.
                        ?>
                    </select>
                </div>

                <div class="input-grup">
                    <!--4 SEXO-->
                    <label for="sexo">Sexo:</label>
                    <select  name="sexo" id="">
                    <?php
                        while ($row = mysqli_fetch_assoc($result_sexo)){
                            echo '<option value="'.$row['codsexo'].'"name="sexo">'.$row['nomesexo'].'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="input-grup">
                    <!--5 ORIENTAÇÃO-->
                    <label for="orientacao">Orientação</label>
                    <select name="orientacao" id="">
                    <?php
                       while ($row = mysqli_fetch_assoc($result_orientacao)){
                        echo '<option value="'.$row['codorientacao'].'"name="orientacao">'.$row['nomeorientacao'].'</option>';
                    }
                        ?>
                        
                    </select>
                </div>

                <div class="input-grup">
                    <!--6 ESTADO_CIVIL-->
                    <label for="estado_civil">Estado Civil:</label>
                    <select name="estado_civil" id="">
                    <?php
                        while ($row = mysqli_fetch_assoc($result_estado_civil)){
                            echo '<option value="'.$row['cod_estado_civil'].'"name="estado_civil">'.$row['nomeestado_civil'].'</option>';
                        }
                        ?>
                        
                    </select>
                </div>


                <div class="input-grup">
                    <!--7 CONVENIO PACIENTE-->
                    <label for="convenio_paciente">Convenio Paciente</label>
                    <select name="convenio_paciente" id="">
                    <?php
                        while ($row = mysqli_fetch_assoc($result_convenio)){
                            echo '<option value="'.$row['codconvenio'].'"name="convenio_paciente">'.$row['nomeconvenio'].'</option>';
                        }
                        ?>
                       

                    </select>
                </div>

                <div class="input-grup">
                    <!--8 NUMERO CARTEIRA-->
                    <label for="numero_carteira">Numero da carteira:</label>
                    <input type="number" name="numero_carteira">
                </div>

                <div class="input-grup">
                    <!--8 ABORDAGEM-->
                    <label for="abordagem">Abordagem</label>
                    <select name="abordagem" id="">
                    <?php
                        while ($row = mysqli_fetch_assoc($result_abordagem)){
                            echo '<option value="'.$row['codabordagem'].'"name="abordagem">'.$row['nomeabordagem'].'</option>';
                        }
                        ?>
                          
                    </select>
                </div>

               
                <div class="button">
                    <button type="submit" name="bt_cadastrar">Cadastrar</button>
                    
                </div>

            

            </form>

        </div>
      
</body>
</html>