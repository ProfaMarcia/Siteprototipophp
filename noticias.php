<!DOCTYPE html>
<html>
<head>

    <title>Minha pagina</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
  
<body width="600">
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
  <h2>8 TENDÊNCIAS DE TECNOLOGIA E INOVAÇÃO EM 2022</h2>
  <iframe width="450" height="250" src="https://www.youtube.com/embed/WPgn7DPTlAo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>
 <section>
  <h2>Notícias quentes</h2>
  <table width="400">
	<tr>
	<td align="center" >
	<img src="https://i0.wp.com/gizmodo.uol.com.br/wp-content/blogs.dir/8/files/2022/09/tiktok-1.jpg?resize=800%2C480&ssl=1" height="150" width="250">
	<p><a href="https://gizmodo.uol.com.br/tiktok-ja-da-sinais-de-desaceleracao-nas-horas-gastas-por-usuarios/">TikTok já dá sinais de desaceleração nas horas gastas por usuários.</a></p>
	</td><td>&nbsp;</td>
	<td align="center" >
	<img src="https://i0.wp.com/gizmodo.uol.com.br/wp-content/blogs.dir/8/files/2022/09/iphone-14-traz-vidro-traseiro-removivel-para-facilitar-consertos-e-reparos.jpg?resize=800%2C480&ssl=1" height="150" width="250">
	<p><a href="https://gizmodo.uol.com.br/iphone-14-traz-vidro-traseiro-removivel-para-facilitar-consertos-e-reparos/">iPhone 14 traz vidro traseiro removível para facilitar consertos e reparos</a></p>
	</td>
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