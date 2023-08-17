<?php 
//fazer conexão,consulta no bd
$email_bd = "diegofonseca@gmail.com";
$senha_bd = 123;

if(isset($_POST['bt_logar'])){
  session_start();
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $_SESSION['email'] = $email;

//verificar se form é igual ao dados do bd .

if($email == $email_bd && $senha == $senha_bd){

  //login
  header('location:index.php');

}else{
  echo"<script>alert('E-mail e/ou senha incorretos!')</script>";
}


}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="login-page">
       
       <form  class="form" action="login.php" method="POST">
          <label for="">
          E-mail:
          <input type="email" name="email">  
          </label>
          <label for="">
          Senha:
          <input type="password" name="senha">  
          </label>
          <button type="submit" name="bt_logar">
            Logar
          </button>

       </form>

    </div>
</body>
</html>