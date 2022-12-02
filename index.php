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

    <section>  
    <!-- Body section -->
    <main class = "body_sec">
        <section id="Content">
            <h3>O que é tecnologia?</h3>
            <p>
                O termo “tecnologia” vem do grego tekhne que significa “técnica, arte, ofício”, juntamente com a palavra logos, também grega, que refere-se ao “conjunto dos saberes”. A tecnologia é um objeto de estudo constante da ciência e da engenharia que envolve vários instrumentos, técnicas e métodos que visam a resolução de situações problemáticas.
                De acordo com o dicionário Michaelis, “tecnologia” é 
                             
            </p>

            <ul>
                <li> Tratado das artes em geral. </li>
                    <li>
                    Conjunto dos processos especiais relativos a uma determinada arte ou indústria. 
                </li>
                <li>
                    Linguagem peculiar a um ramo determinado do conhecimento, teórico ou prático. </li>
            </ul>
        </section>
		
		
      </main>
      <br>
      <br>
      <br>
      <br>
      
    <!-- Footer Section -->
    <footer>
        <center><h4>Produzido em 2022, pelos alunos da uninorte!</h4></center>
    </footer>
</body>
</html>