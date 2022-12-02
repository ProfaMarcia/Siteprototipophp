
<?php 


include("conexao.php");

$sql = "SELECT * FROM teste";

 $sql = mysqli_query($conect, $sql);
    
    while($rows_teste = mysqli_fetch_array($sql)){
        echo "Nome do curso: ".$rows_teste['nome'].$rows_teste['sobrenome']."<br>";
    }









?>