<?php
	$conn=mysqli_connect("localhost", "root", "usbw", "veterinario");
//Validação da base
if(!$conn){
	prinft("A conexão falhou %s\n",mysqli_connect_error());
	exit();
}





?>