<!DOCTYPE html>
<html>
<head>

    <title>Minha pagina</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
  
<body>
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

?>  
    <!-- Header Section -->
    <header>
       <h1><marquee direction="down" width="700" height="80" behavior="alternate">Geeks para Tech</marquee></h1>
       <h3>Um portal de tecnologia para geeks</h3>
    </header>
      
    <!-- Menu Navigation Bar -->
    <nav class="menu">
        <a href="index.php">INÍCIO</a>
        <a href="noticias.php">NOTÍCIAS</a>
        <a href="cursos.php">CURSOS</a>
        <div class="menu-log">
            <a href="login.php">LOGIN</a>
        </div>
      </nav>
      
    <!-- Body section -->
    <main class = "body_sec">
	<br>
 <center>       

<h1>EXCLUSÃO DO CONTA DE USUÁRIO</h1>

 <?php

	
//Pega os dados do id do cliente logado
  $loginuser = $_SESSION['login'];
  
//conectando com o localhost - mysql
include 'conexao.php';
    
error_reporting(0);
	
	echo '<form id="pesquisa" name="pesquisa" method="post" action="">';   

    echo '<center><table><td align="center"><h3>Digite o cpf para exclusão</h3></td></tr>
              
      <tr><td align="center"><input name="cpf" type="text" required /></td></tr>';
    echo '<tr><td>Deseja realmente excluir o seu cadastro?</td></tr>';
    echo '<tr><td>Se clicar em excluir, excluirá o cadastro.</td></tr>';        

    echo '<tr>
      <td align="center"><p>
        <input name="excluir" type="submit" id="excluir" value="Excluir"/> </table></center> ';
	
	if(isset($_POST['excluir'])){
	$cpf = $_POST['cpf'];
	$sql = "DELETE FROM usuarios WHERE login='$loginuser' AND cpf='$cpf'";
	if(mysqli_query($conect, $sql)){
    echo "<script>
alert('Seu cadastro foi excluido com sucesso!');
window.location='login.php';
</script>";


session_destroy(); //pei!!! destruimos a sessão ;)

session_unset(); //limpamos as variaveis globais das sessões

	} 
	else{
    echo "Erro ao deletar os dados $sql. " 
                                  . mysqli_error($conect);
}
	}	
	
	?>