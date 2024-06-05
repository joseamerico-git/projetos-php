<?php

	require_once 'conexao.php';
    $vet_crv = $_POST['crv'];
	$vet_cpf = $_POST['cpf'];
	$vet_nome = $_POST['nome'];
	$vet_celular = $_POST['celular'];
	$vet_end = $_POST['end'];
	
	
	
	
	$sql=("INSERT INTO veterinario (VET_CRV, VET_CPF, VET_NOME, VET_CELULAR, VET_END) values ('$vet_crv','$vet_cpf', '$vet_nome', '$vet_celular','$vet_end')");
	
				if (mysqli_query($conn, $sql)){
			  echo "Salvo com sucesso";
			}else {
			  echo "Erro".$sql."<br>".mysqli_error($conn);
			}
             
	




?>