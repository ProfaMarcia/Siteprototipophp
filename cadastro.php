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

<h1>CADASTRO USUÁRIOS</h1>

<form action="cadastrar.php" method="post">
  <div class="container">

    <table width="400">
      <tr>
	<td width="130">
	  <label ><b>Nome</b></label>
	 <td width="300"> <input type="text" placeholder="Digite seu Nome" name="nome" required></td>
	</td>
	<tr>
	<td>
	  <label><b>Sobrenome</b></label></td>
	  <td><input type="text" placeholder="Digite seu Sobrenome" name="sobrenome" required>
	</td>
      </tr>
	  <tr>
	  <td>
	    <label><b>Gênero</b></label></td><td>
	    <input type="radio" name="genero" value="masculino">Masculino<br>
	    <input type="radio" name="genero" value="feminino">Feminino<br>
	</td>
	 </tr>
	<tr>
	<td>
	 <label><b>Data de Nascimento</b></label></td>
	 <td><input type="date" name="nascimento" style="float: left"></td>
      <tr>
	<td>
	  <label><b>Profissão</b></label></td>
	  <td><input type="text" placeholder="Digite seu Profissão" name="profissao" required></td>
	  </tr>
	  <tr>
	<td>
	  <label><b>CPF</b></label></td>
	 <td> <input type="text" placeholder="Digite seu CPF" name="cpf" required>
	</td>
      </tr>
	  <tr>
	<td>
	  <label><b>Telefone</b></label></td>
	  <td><input type="text" placeholder="Digite seu Telefone" name="telefone" required>
	</td>
	</tr>
	<tr>
	<td>
	  <label><b>Cidade</b></label></td><td>
	  <input type="text" placeholder="Digite seu Cidade" name="cidade" required>
	</td>
      </tr>
	  <tr>
	<td>
	  <label><b>Estado</b></label></td><td>
	  <input type="text" placeholder="Digite seu Estado" name="estado" required>
	</td>
	 </tr>
	<tr>
	<td>
	  <label><b>Pais</b></label></td>
	  <td><input type="text" placeholder="Digite seu Pais" name="pais" required>
	</td>
      </tr>
      <tr>
	 <td> <label><b>Login</b></label></td><td>
	  <input type="text" placeholder="Digite seu Login" name="login" required>
	  </td>
      </tr>
      <tr>
	 <td><label><b>Senha</b></label></td><td>
	  <input type="password" placeholder="Digite a senha" name="senha" required>
	</td>
      </tr>
  

<tr><td></td><td>
 <div class="container">
    <button type="submit" name="cadastrar">Cadastrar</button>
  </div>
</td>



  </div></td>
  </table>
</form>

      </main>
	
      </center>      
    <!-- Footer Section -->
    <footer>
        <center><h4>Produzido em 2022, pelos alunos da uninorte!</h4></center>
    </footer>
</body>
</html>

