<?php

session_start();

if( $_SESSION['login'])
   {
 echo "Bem-Vindo(a):<font color='red'> ".$_SESSION['login']."</font>"; 
 echo "<br>
  <a href='perfil.php'>Perfil</a><br>
     <a href='logout.php'>Sair</a>";
 }else{
     header('Location: login.php');
    } 

	
//Pega os dados do id do cliente logado
  $loginuser = $_SESSION['login'];
  
//conectando com o localhost - mysql
include 'conexao.php';
    
           
//Pega os dados do formulário
$nome	= $_POST ["nome"];
$sobrenome = $_POST ["sobrenome"];
$genero	= $_POST ["genero"];	
$nascimento = $_POST ["nascimento"]; 
$profissao = $_POST ["profissao"];
$cpf = $_POST ["cpf"];
$telefone = $_POST ["telefone"];
$cidade = $_POST ["cidade"];
$estado = $_POST ["estado"];
$pais = $_POST ["pais"];
$login = $_POST ["login"];
$senha = $_POST ["senha"];

             
    // Altera os dados do cliente pelo id do cliente logado.
    
    $altera = "UPDATE usuarios SET nome='$nome', sobrenome='$sobrenome', genero='$genero',
	dt_nascimento='$nascimento', profissao='$profissao', cpf='$cpf', telefone='$telefone', cidade='$cidade',
	estado='$estado', pais='$pais', login='$login', senha='$senha' WHERE login='$loginuser'";
   
if(mysqli_query( $conect,$altera))
{  

echo "<script>
alert('Seu cadastro foi atualizado com sucesso!');
window.location='perfil.php';
</script>"; 
}
else
{  
echo "Atualização falhou; ".mysqli_error($altera);  
}
	
	
	
	
	?>