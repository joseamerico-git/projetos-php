<?php
	// Definindo variável php com valor de objeto JSON
	
	
	/*duas maneiras*/
	//Array associativo
	
	$cliente = '{"id":"1","nome":"Jose Américo","idade":"37","sexo":"M"}';

    //Lista ordenada
	
	$cliente = '["1","José Américo","37","M"]';
	
	/*Para converter arrays e objetos para estrutura JSON existem 2 funções nativas 
	json_decode($variavel,boolan[opcional,default:false] 
	e 
	json_encode($variavel)*/
	
	
	
	//JSON decode
	
	//criando uma string JSON
	$json_str = '{"nome" : "Paulo da Silva","idade":"28","sexo":"M"}';
	echo $json_str;
	echo "<br/>";
	
	//Faz o parse da json_str para um objeto php
	$obj = json_decode($json_str);
	//Faz o parse na string gerando um array php
	$array = json_decode($json_str,true);
	
	//var_dump($array);
	echo "fim do programa";
	foreach($array as $key => $value){
		echo $value[]=>;
	}
	
	//utilizando o JSON encode
	
	

?>



