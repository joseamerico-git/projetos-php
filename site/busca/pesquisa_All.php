<?php
 use classes\Usuario;

 require_once 'classes/Usuario.php';
 $evento = new Usuario();
 
if(isset($_POST['pesquisar'])){
    
    $id = $_POST['pesquisar'];
    $evento->findUnitId($id);
    
    
    foreach ($evento->findAll() as $value){
        echo $value->nome;echo"<br>";
    }
        
   
    
}
?>

<h1>Pesquisar Cursos</h1>
    <form method="POST">
    Pesquisar:<input type="text" name="pesquisar" id="pesquisar" placeholder="PESQUISAR">
    <input type="submit" value="ENVIAR">
    </form>

