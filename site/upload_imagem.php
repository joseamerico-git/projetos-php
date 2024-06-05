<?php



use classes\Arquivo;

require_once 'classes/Arquivo.php';
$arquivo = new Arquivo();
$msg = false;

if(isset($_FILES['arquivo'])){
    
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
    
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    
  
    
    if($arquivo->insert()){
        $msg = "Arquivo enviado com sucesso!";
    }else
            $msg = "Falha ao enviar arquivo.";
            
}

     

?>
<h1>Upload de Arquivos</h1>
<?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
<form action="upload_imagem.php" method="POST" enctype="multipart/form-data">
  Arquivo: <input type="file" required name="arquivo">
  <input type="submit" value="Salvar">
</form>



<br>


<?php
$path = "upload/";
$diretorio = dir($path);
 
echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";


while($arquivo = $diretorio -> read()){
echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
}
$diretorio -> close();
?>