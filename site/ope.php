<?php
require_once 'classes/Usuario.php';
use classes\Usuario;

require_once 'erros_yes.php';
header("Content-type: text/html; charset=utf-8"); 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior

$nome = $_POST['login'];
$senha = $_POST['senha'];

$usuario = new Usuario();
$usuario->setNome($nome);

if($usuario->findLogin($nome, $senha)){
    
    $_SESSION['id'] = $usuario->getId();
    $_SESSION['login'] = $usuario->getNome();
    $_SESSION['email'] = $usuario->getEmail();
    $_SESSION['senha'] = $usuario->getSenha();
    $_SESSION['dataCadastro'] = $usuario->getDataCadastro();
    
    
    
    
									   header('location:efetivar.php');
									}
								 
					// mysqli_close($conn);


else{
      unset($_SESSION['id']);
      unset ($_SESSION['login']);
      unset ($_SESSION['email']);
      unset($_SESSION['senha']);
      unset($_SESSION['dataCadastro']);
   echo "usuario ou senha invalidos! </br> <a href='index.html'> voltar</a> <br> <a href='cadastro_usuario.php'>Cadastrar-se</a> </html>";
  //header('location:cadastrar.php');;
 
  
   
  }
  

?>