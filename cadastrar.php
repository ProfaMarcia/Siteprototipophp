<html>


<?php 
 
 include("conexao.php");
 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
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


//Gravando no banco de dados !
 
//conectando com o localhost - mysql

 
  $usuario = "SELECT * FROM `usuarios` WHERE login='$login'";

	$result = mysqli_query($conect,$usuario) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	
        if($rows==0){
 
 $usuario = "SELECT * FROM `usuarios` WHERE cpf='$cpf'";

	$result = mysqli_query($conect,$usuario) or die(mysql_error());
	$row = mysqli_num_rows($result);
	
        if($row==0){
 
$query = "INSERT INTO usuarios (nome , sobrenome , genero , dt_nascimento,profissao,
 cpf,telefone,cidade,estado,pais,login,senha) VALUES ('$nome' , '$sobrenome' , 
 '$genero' , '$nascimento','$profissao',
 '$cpf','$telefone','$cidade','$estado','$pais','$login','$senha')";
 
$query = mysqli_query($conect,$query);

echo "<script>
alert('Seu cadastro foi cadastrado com sucesso!');
window.location='login.php';
</script>";
}else{

echo "<script>
alert('CPF já cadastrado!');
window.location='cadastro.php';
</script>";
}
	} else {	
echo "<script>
alert('Login já existe!!');
window.location='cadastro.php';
</script>";
}	

?> 


</html>