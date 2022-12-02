<?php 

error_reporting();
/// session_start inicia a sessão 
require('conexao.php');
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
// If form submitted, insert values into the database.
if (isset($_POST['entrar'])){
        // removes backslashes
	        $query = "SELECT * FROM `usuarios` WHERE login='$login'
and senha='".$senha."'";
	$result = mysqli_query($conect,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	
        if($rows==1){
			  $_SESSION['login'] = $login;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Usuário/ou senha incorreta.</h3>
<br/>Clique para fazer o login <a href='login.php'>Login</a></div>";

	}
	
	
}
?>