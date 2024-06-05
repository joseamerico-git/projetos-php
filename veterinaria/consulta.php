<?php

 require_once 'conexao.php';
 
 $con_codigo = $_POST['codigo'];
 $con_diagnostico =$_POST['diagnostico'];
 $con_data = $_POST['data'];
 $con_hora = $_POST['hora'];
 $vet_crv = $_POST['vet_crv'];
 $ani_codigo= $_POST['ani_codigo'];
 
 $vet_crv ='7';
 $ani_codigo=112;
 
	$sql=("INSERT INTO consulta (CON_DIAGNOSTICO, CON_DATA, CON_HORA, VET_CRV, CON_CODIGO) values ('$con_diagnostico','$con_data', '$con_hora', '$vet_crv','$ani_codigo')");
	
				if (mysqli_query($conn, $sql)){
			  echo "Salvo com sucesso";
			}else {
			  echo "Erro".$sql."<br>".mysqli_error($conn);
			}
             
	



?>