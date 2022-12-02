<!DOCTYPE html>
<html>
<head>

    <title>Minha pagina</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
  
<body>
      
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

<form action="testelogin.php"  id="login" method="post">
    <div class="container">
    <label for="login"><b>Login</b></label>
    <input type="text" placeholder="Digite seu Login" name="login" required>

    <label for="senha"><b>Senha</b></label>
    <input type="password" placeholder="Digite a senha" name="senha" required>

    <button type="submit" name="entrar">Entrar</button>
    <label>
      <input type="checkbox" checked="checked" name="lembreme"> Lembre - me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="cadastro.php"><button type="button" class="cadastrar">Cadastrar</button></a>
    <span class="psw">Esqueceu a <a href="#">senha?</a></span>
  </div>
</form>
      </main>
	
      </center>      
    <!-- Footer Section -->
    <footer>
        <center><h4>Produzido em 2022, pelos alunos da uninorte!</h4></center>
    </footer>
</body>
</html>


