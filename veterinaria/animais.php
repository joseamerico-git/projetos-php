<?php
	$ANI_CODIGO = $_POST['codigo'];
	$ANI_ALERGICO = $_POST['alergico'];
	$ANI_NOME = $_POST['nome'];
	$ANI_TIPO = $_POST['tipo'];
	$ANI_IDADE = $_POST['idade'];
	$ANI_RACA = $_POST['raca'];
	
	require_once 'conexao.php';
	
	$sql=("INSERT INTO animais (ANI_ALERGICO, ANI_NOME, ANI_TIPO, ANI_IDADE, ANI_RACA) values ('$ANI_ALERGICO','$ANI_NOME', '$ANI_TIPO', '$ANI_IDADE','$ANI_RACA')");
	
				if (mysqli_query($conn, $sql)){
			  echo "Salvo com sucesso";
			}else {
			  echo "Erro".$sql."<br>".mysqli_error($conn);
			}
             
	
	







?>