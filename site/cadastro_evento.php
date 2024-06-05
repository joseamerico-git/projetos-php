<?php

use classes\Evento;

require_once 'classes/Evento.php';


$evento = new Evento();

require_once 'funcoes/Funcoes.php';
$func = new Funcoes();


//Pesquiar 

if(isset($_POST['pesquisar'])){
        $nome = $_POST['pesquisar'];
    
}


//Cadasro de usuários

if(isset($_POST['cadastrar'])){
                           
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $dataEvento = $_POST['dataevento'];
    $horario = $_POST['horario'];
    $status = $_POST['status'];
    $vagas = $_POST['vagas'];
    
    
    
    $evento->setNome($nome);
    $evento->setDescricao($descricao);
    $evento->setDataEvento($dataEvento);
    $evento->setHorario($horario);
    $evento->setStatus($status);
    $evento->setVagas($vagas);
    
    if($evento->insert()){
        $div = '<div class="alert alert-success alert-dismissible fade show .text-success" role="alert">
  <strong>Evento cadastrado com sucesso!</strong>
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
    $evento = new Evento();
    $id=null;
    $id = $_POST['cd'];
    $nome = $_POST['n'];
    $descricao = $_POST['de'];
    $dataEvento = $_POST['d'];
    echo $dataEvento;
    $horario = $_POST['h'];
    $status = $_POST['s'];
    $vagas = $_POST['v'];
    
    $evento->setId($id);
    
    $evento->setNome($nome);
    
    $evento->setDescricao($descricao);
    
    $evento->setDataEvento($dataEvento);
    
    $evento->setHorario($horario);
    
    $evento->setStatus($status);
    
    $evento->setVagas($vagas);
    
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
<h2 >Cadastro de Eventos</h2>



<br>
<div>
    <form method="post" action="" >
         <div class="form-group">
         
         	 <label for="nome">Nome</label>
             <input type="text" class="form-control" name="nome" > 
           
              
    
            <label for="descricao">Descricao</label>
            <input type="descricao" class="form-control" name="descricao">
            
             <label for="dataevento">Data</label>
             <input type="date" class="form-control" name="dataevento">
            
             <label for="horario">Horario</label>
             <input type="time" class="form-control" name="horario">
             
             
              <label for="status">Status</label>
             <input type="check" class="form-control" name="status">
             
             <label for="vagas">Vagas</label>
             <input type="number" class="form-control" name="vagas">
                  
                           
            <br>
            <input id="cadastrar"  class="btn btn-primary" type="submit" name="cadastrar" value="Enviar"/>
            
            
            </div>

</form>
</div>
<br>
            

<br>


 <table data-spy="scroll" class="table table-responsive ">
  <thead>
    <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Descricao</th>
          <th scope="col">Data Evento</th>
           <th scope="col">Horario</th>
            <th scope="col">vagas</th>
            <th scope="col">status</th>
          
          
          
    </tr>
  </thead>
  <tbody>
  		<?php 
  		foreach ($evento->findAll() as $key => $value) { ?>
  		 
  	<tr>	
  		 <th scope="row">1</th>
         <td> <?php echo $value->nome;?></td>
         <td> <?php echo $value->descricao;?></td>
         <td> <?php  echo  $data = date("Y-m-d H:i:s", strtotime($dataEvento));?></td>
         <td> <?php echo $value->horario;?></td>
         <td> <?php echo $value->vagas;?></td>
          <td> <?php echo $value->status;?></td>
         
        
  		
  		 
        <td>
            <input id="nom" name="nom" type="hidden" value="<?php echo $value->nome;?>"/>
            <input id="des" name="des" type="hidden" value="<?php echo $value->descricao;?>"/>
            <input id="dt" name="dt" type="hidden" value="<?php echo $value->data;?>"/>
            <input id="hr" name="hr" type="hidden" value="<?php echo $value->horario;?>"/>
            <input id="v" name="v" type="hidden" value="<?php echo $value->vagas;?>"/>
            <input id="s" name="s" type="hidden" value="<?php echo $value->status;?>"/>
        
             <button name="alt" id="alt" type="button" class="btn btn-primary" data-toggle="modal" data-toggle="modal" data-target="#exampleModal" 
             data-whatever="<?php echo $value->id;?>" data-whatevernome="<?php echo $value->nome;?>"  
             data-whateverdescricao="<?php echo $value->descricao?>" data-whateverdata="<?php echo $value->data;?>" 
             data-whateverhorario="<?php echo $value->horario?>" data-whateverstat="<?php echo $value->status;?>" data-whatevervagas="<?php echo $value->vagas;?>">Alterar</button>
             
             
          
           
             
             
             
             
       
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


 


 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="eventoModalLabel" aria-hidden="true">
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
            <label for="recipient-descricao" class="col-form-label">Descricao:</label>
            <input type="text" class="form-control" id="de" name="de">
          </div>
          
            <div class="form-group">
            <label for="recipient-descricao" class="col-form-label">Data:</label>
            <input type="date" class="form-control" id="d" name="d">
          </div>
          
            <div class="form-group">
            <label for="recipient-descricao" class="col-form-label">Horario:</label>
            <input type="time" class="form-control" id="h" name="h">
          </div>
          
          <div class="form-group">
            <label for="recipient-descricao" class="col-form-label">Status:</label>
            <input type="text" class="form-control" id="s" name="s">
          </div>
          
            <div class="form-group">
            <label for="recipient-descricao" class="col-form-label">vagas:</label>
            <input type="text" class="form-control" id="v" name="v">
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
<?php require_once 'js/modal_evento.php';?>
</body>
</html>