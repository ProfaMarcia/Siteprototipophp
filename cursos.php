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
     header('Location: login.php');//aqui vai para a página de login.
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
 <center>       
<section>
  
 <section>
  <h2>Cursos Gratuitos</h2>
  <table width="600">
	<tr>

	<td align="center">
	<h3>DIO | Codifique o seu futuro global agora</h3>
	<img src="https://hermes.digitalinnovation.one/assets/diome/logo.png" height="130" width="350">
	<p><a href="https://www.dio.me">Domine as tecnologias utilizadas pelas empresas mais inovadoras do mundo de forma gratuíta e profissional!</a></p>
	</tr>
	<tr>
	<td align="center" >
	<h3>Fundação Bradesco - Escola Virtual</h3>
	<img src="http://s3.amazonaws.com/futurabucket2017/wp-content/uploads/2019/02/06030257/parceiro-fundacaobradesco-e1549434559481.png" height="250" width="250">
	<p><a href="https://www.ev.org.br">A Escola Virtual é um portal educacional que disponibiliza cursos livres, gratuitamente, na modalidade a distância. </a></p>
	</td>
	</tr>
	<tr>
	<td></td>
	</tr>

  
  </table>
</section>
</section>
 </center> 
      </main>
      <br>
            
    <!-- Footer Section -->
    <footer>
        <center><h4>Produzido em 2022, pelos alunos da uninorte!</h4></center>
    </footer>
</body>
</html>

