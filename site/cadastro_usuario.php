<?php
use classes\Usuario;


require_once 'classes/Usuario.php';
$evento = new Usuario();


$evento = new Usuario();
//Pesquiar 

if(isset($_POST['pesquisar'])){
        $nome = $_POST['pesquisar'];
    
}


//Cadasro de usuários

if(isset($_POST['cadastrar'])){
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    
    $evento->setNome($nome);
    $evento->setEmail($email);
    $evento->setSenha($senha);
    
    if($evento->insert()){
        $div = '<div class="alert alert-success alert-dismissible fade show .text-success" role="alert">
  <strong>Usuario cadastrado com sucesso!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
            
</div>';
        
        echo $div;
        
        
    }
    
    
}

if(isset($_POST['excluir_ui'])){
    
    $id = $_POST['id_uii'];
    $evento->delete($id);
   
}

//pesquisar alterar



if(isset($_POST['alterar'])){
    
    $id = $_POST['cd'];
    $nome = $_POST['n'];
    $email = $_POST['em'];
    $senha = $_POST['se'];
    
    $evento->setId($id);
    $evento->setNome($nome);
    $evento->setEmail($email);
    $evento->setSenha($senha);
    
    $evento->update();
    
 
}





?>


<html lang="pt-br">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


</head>
<body>

<div class="container">
<h2 >Cadastro de Usuarios</h2>



<br>
<div>
    <form method="post" action="" >
         <div class="form-group">
         
         	 <label for="nome">Nome</label>
             <input type="text" class="form-control" name="nome" > 
           
              
               
                
             
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                   
            <label for="senha" >Senha: </label>
            <input type="password" name="senha" required="required" class="form-control">
            <br>
            <input class="btn btn-primary" type="submit" name="cadastrar" value="Enviar"/>
            
            
            </div>

</form>
</div>
<br>
            <!--  
            Pesquisar:<input type="text" name="pesquisar" id="pesquisar" placeholder="PESQUISAR">
                 <input type="submit" value="ENVIAR">
                <form method="POST" action="cadastro_usuario.php">
                Pesquisar:<input type="text" name="pesquisar" id="pesquisar" placeholder="PESQUISAR">
                <input type="submit" value="ENVIAR">
                </form>
            -->


<br>


 <table data-spy="scroll" class="table table-responsive ">
  <thead>
    <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">email</th>
          <th scope="col">controles</th>
    </tr>
  </thead>
  <tbody>
  		<?php 
  		foreach ($evento->findAll() as $key => $value) { ?>
  		  
  	<tr>	
  		 <th scope="row">1</th>
         <td> <?php echo $value->nome;?></td>
         <td> <?php echo $value->email;?></td>
        
  		
  		 
        <td>
            <input id="nom" name="nom" type="hidden" value="<?php echo $value->nome;?>"/>
            <input id="ema" name="ema" type="hidden" value="<?php echo $value->email;?>"/>
            <input id="se" name="se" type="hidden" value="<?php echo $value->senha;?>"/>
          
          
             <button name="alt" id="alt" type="button" class="btn btn-primary" data-toggle="modal" data-toggle="modal" data-target="#exampleModal" 
             data-whatever="<?php echo $value->id;?>" data-whatevernome="<?php echo $value->nome;?>"  
             data-whateveremail="<?php echo $value->email?>" data-whateversenha="<?php echo $value->senha;?>" >Alterar</button>
       
                  <form class="form_excluir" method="post" style = float:left; margin: 0 10px;">
                   
                   <input id="id_uii" name="id_uii" type="hidden" value="<?php echo $value->id;?>"/>
                   
                   <button name="excluir_ui" type="submit" onclick="" class="btn btn-danger">Excluir</button>
                      
                      </td>
                  
                  </form>
          
          
          
          </td>
     
    </tr>
    
    
    
        <?php } ?>
  </tbody>
</table>

</div>


 


 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
         <input type="hidden" class="form-control" id="cd" name="cd">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" id="n" name="n">
          </div>
          
           <div class="form-group">
            <label for="recipient-email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="em" name="em">
          </div>
          
           <div class="form-group">
            <label for="recipient-email" class="col-form-label">Senha:</label>
            <input type="password" class="form-control" id="se" name="se">
          </div>
          
            
        <button name="alterar" type="submit" class="btn btn-danger">Alterar</button>
           
             <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
           
      
        </form>
      </div>
      <div class="modal-footer">
     
      </div>
    </div>
  </div>
</div>
  
        
<?php require_once 'js/script.php';?>
</body>
</html>