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
    //PUXA DADOS DA TABELA ESPECIALIDADES
    $sql_especialidades = "SELECT * FROM especialidades order by codespecialidades";
    $result_especialidades = mysqli_query($conexao, $sql_especialidades);
    //PUXA DADOS DA TABELA CONSELHO DE CLASSE 
    $sql_conselho_classe = "SELECT * FROM conselho_classe order by codconselho";
    $result_conselho_classe = mysqli_query($conexao, $sql_conselho_classe);
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
                    <li><a href="listpaciente.php">Consulta da Listagem</a></li>
                    </ul>
                </nav>
            </div>

        
        
        <div id="formulario">

            
            <h1 class="h1">Cadastro Profissional</h1>
        
            <form action="acoes/cadprof.php" method="post">
                <div class="input-grup">
                    <label for="">Nome do  Profissional:</label>
                    <input type="text" name="nome">
                </div>
                <div class="input-grup">
                    <label for="">Telefone:</label>
                    <input type="number" name="telefone">
                </div>
                <div class="input-grup">
                    <label for="">Cidade:</label>
                    <select name="cidade" id="">
                    <?php
                        while ($row = mysqli_fetch_assoc($result_cidades)){
                            echo '<option value="'.$row['codcidade'].'"name="cidade">'.$row['nomecidade'].'</option>';
                        }
                        //quando é escolhido a opção no select, o código faz uma varredura no banco de dados e arquiva a opção que foi escolhida.
                        ?>
                    </select>
                </div>

                <div class="input-grup">
                    <label for="">Sexo:</label>
                    <select name="sexo" id="">
                    <?php
                        while ($row = mysqli_fetch_assoc($result_sexo)){
                            echo '<option value="'.$row['codsexo'].'"name="sexo">'.$row['nomesexo'].'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="input-grup">
                    <label for="">Orientação</label>
                    <select name="orientacao" id="">
                   <?php
                        while ($row = mysqli_fetch_assoc($result_orientacao)){
                            echo '<option value="'.$row['codorientacao'].'"name="orientacao">'.$row['nomeorientacao'].'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="input-grup">
                    <label for="">Estado Civil:</label>
                    <select name="estado_civil" id="">
                    <?php
                        while ($row = mysqli_fetch_assoc($result_estado_civil)){
                            echo '<option value="'.$row['cod_estado_civil'].'"name="estado_civil">'.$row['nomeestado_civil'].'</option>';
                        }
                        ?>
                        
                    </select>
                </div>

                <div class="input-grup">
                    <label for="">Especialidades</label>
                    <select name="especialidades">
                    <?php
                        while ($row = mysqli_fetch_assoc($result_especialidades)){
                        echo '<option value="'.$row['codespecialidades'].'"name="especialidades">'.$row['nomeespecialidades'].'</option>';
                        }
                        ?>      
                    </select>
    
                </div>

                <div class="input-grup">
                    <label for="">Conselho de Classe:</label>
                    <select name="conselho_classe">

                    <?php
                        while ($row = mysqli_fetch_assoc($result_conselho_classe)){
                            echo '<option value="'.$row['codconselho'].'"name="conselho_classe">'.$row['nomeconselho'].'</option>';
                        }
                        ?>
                        
               
                    </select>

                    
                </div>

                <div class="input-grup">
                    <label for="numero_Conselho">Numero do Conselho</label>
                    <input id="numero_Conselho" type="number" value="Numero do Conselho" name="numero_Conselho"  required>
                </div>


                <div class="input-grup">
                    <label for="">Abordagem</label>
                    <select name="abordagem" id="">

                    <?php
                        while ($row = mysqli_fetch_assoc($result_abordagem)){
                            echo '<option value="'.$row['codabordagem'].'"name="abordagem">'.$row['nomeabordagem'].'</option>';
                        }
                        ?>
                        
                            
                    
                    </select>
                </div>

                <div class="button">
                    <button type="submit">Cadastrar</button>
                    
                </div>

            

            </form>

        </div>

        
</body>
</html>