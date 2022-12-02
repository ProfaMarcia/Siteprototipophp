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

<h1>PERFIL</h1>
<?php
error_reporting(0);
require('conexao.php');
     
	        $loginuser = $_SESSION['login'];
			
         	 
    $sql = "SELECT * FROM usuarios WHERE login='$loginuser'";
$res = mysqli_query($conect, $sql);
            
                        
            while ($r = mysqli_fetch_array($res)) {
           
             
         
echo '<form action="alt_perfil.php" method="post">
  <div class="container">

    <table width="400">
      <tr>
	<td width="130">
	  <label ><b>Nome</b></label>
	 <td width="300"> <input type="text" value="'.$r[nome].'" name="nome" required></td>
	</td>
	<tr>
	<td>
	  <label><b>Sobrenome</b></label></td>
	  <td><input type="text" value="'.$r[sobrenome].'"  name="sobrenome" required>
	</td>
      </tr>
	  <tr>
	  <td><label><b>Gênero</b></label></td>
       <td><select name="genero" id="genero">
           <option>'.$r[genero].'</option>
           <option>Feminino</option>
           <option>Masculino</option>
           </select></td>
    	 </tr>
	<tr>
	<td>
	 <label><b>Data de Nascimento</b></label></td>
	 <td><input type="text" value="'.$r[dt_nascimento].'" name="nascimento" style="float: left"></td>
      <tr>
	<td>
	  <label><b>Profissão</b></label></td>
	  <td><input type="text"  value="'.$r[profissao].'" name="profissao" required></td>
	  </tr>
	  <tr>
	<td>
	  <label><b>CPF</b></label></td>
	 <td> <input type="text"  value="'.$r[cpf].'" name="cpf" required>
	</td>
      </tr>
	  <tr>
	<td>
	  <label><b>Telefone</b></label></td>
	  <td><input type="text"  value="'.$r[telefone].'" name="telefone" required>
	</td>
	</tr>
	<tr>
	<td>
	  <label><b>Cidade</b></label></td><td>
	  <input type="text" value="'.$r[cidade].'" name="cidade" required>
	</td>
      </tr>
	  <tr>
	<td>
	  <label><b>Estado</b></label></td><td>
	  <input type="text" value="'.$r[estado].'" name="estado" required>
	</td>
	 </tr>
	<tr>
	<td>
	  <label><b>Pais</b></label></td>
	  <td><input type="text" value="'.$r[pais].'" name="pais" required>
	</td>
      </tr>
      <tr>
	<td>
	  <label><b>Login</b></label></td><td>
	  <input type="text" value="'.$r[login].'" name="login" required>
	</td>
	</tr>
	<tr>
	<td>
	  <label><b>Senha</b></label></td><td>
	  <input type="password" value="'.$r[senha].'" name="senha" required>
	</td>
      </tr>
    

<tr><td></td><td>
 <div class="container">
    <button type="submit">Atualizar</button>
  </div>
</td>
  </div></td>
  <tr/>
  <tr><td></td><td>
  <center><a href="deletar.php">Deletar a conta!</a></center>
  </table>
</form>';
	 
  }
?>
      </main>
	
      </center>      
    <!-- Footer Section -->
    <footer>
        <center><h4>Produzido em 2022, pelos alunos da uninorte!</h4></center>
    </footer>
</body>
</html>
