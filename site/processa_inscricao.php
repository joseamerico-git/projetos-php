<?php
require ('conexao.php');
 
		$usuario= $_POST['usuario']; 
		$evento = $_POST['evento'];
		$tabela = "insc_evento";
		
		
// Check connection
if (!$conn) {
    die("Problemas de conexão com o banco!: " . mysqli_connect_error());
}

$sql = "insert into insc_evento (evento,usuario) values($evento,$usuario)";

if (mysqli_query($conn, $sql)) {
    header('location:inscricao_sucesso.php');
	//*******************************************//
	
	$upd = "UPDATE evento SET vagas=(vagas-1) WHERE codigo='$evento' and vagas>=0";

		if ($conn->query($upd) === TRUE) {
			echo "Atualizado com sucesso!";
		} else {
			echo "Não foi possivel atulaizar: " . $conn->error;
		}
	
	//******************************************//
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
	
 

?>