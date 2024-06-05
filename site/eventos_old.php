<?php
use classes\Evento;
require_once 'classes/Evento.php';
$evento = new Evento();
date_default_timezone_set('America/Sao_Paulo');
header("Content-type: text/html; charset=utf-8");
$buttonValue=0;
?>
<!doctype html>

<html>

	<head>
	   
		
	   
        <meta charset="utf-8" lang="pt-br">
		<link rel="stylesheet" href="css/estilo_old.css">
		<title>Sistema Semana Palo Freire</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			  <?php 
	  
	  ?>
	  

	</head>

	<body>
	
	<form>
		
		
		
	      
		  <div class="header">
		  
		  <h1 class="titulo">XX - Semana Paulo Freire</h1>
		  <h4 class="bemvindo">Bem vindo! <?php ?></h4>
		  
		</div>
		
	

		  
		  <div class="navigation-menu">
		  
		  </div>
		  
			  <div class = "content1">
			  
			  
			  </div>
			  
					  <div class ="main-content">
					  
					  
					  
					  </div>
					  
			  
			   <div class = "content1">
			  
			  
			  </div>
			  
			  <div class="footer">
			  
			  
			  </div>


     </div>
<div class="row">
		  <div class="col-3 menu">
		  <ul>
						<li>     <a class="link" href="eventos.php">Eventos e mini-cursos</a></a></li>
								<li><a class="link" href="cronograma.html">Cronograma do Evento</a></li>
								<li><a class="link" href="cadastro.php">Realizar meu Cadastro</a></li>
								
								<li><a class="link" href="ajuda.html">Ajuda</a></li>
			</ul>
		  </div>
		  
	  <div class="col-6">
 
    <h1>Cursos disponíveis para matrícula</h1>
		<table id="customers">
 <tr>
					  <th>Evento</th>
					  <th>Data</th>
					  <th>Horário</th>
					  <th>Vagas</th>
					  <th>Status</th>
					  <th>Ação</th>
					</tr>
			<?php  foreach ($evento->findAll() as $key => $value) { ?>
			<?php    if($value->vagas>0){
				    $icone = 'images/icone.jpg';
					$buttonValue = 1;
			   } else{
				    $icone = 'images/icone_1.jpg';
			   }
				   
			   require_once 'funcoes/Funcoes.php';
			   $fcn = new Funcoes();
			   ?>
				<tr>
				
					  <td> <?php  echo $value->nome;?></td>
					  <td><?php echo $value->data=$fcn->dataAtual(3);?></td>
					  <td><?php echo $value->horario; ?></td>
					  <td><?php echo $value->vagas; ?></td>
					  <!--<td><?php echo $value->status; ?></td> -->
					  <td> <img src= <?php echo $icone; ?>/></td>
					 
					 <td>
					    
					   <?php 
					   $codigo = $value->id; 
					   $descricao = $value->descricao;
					   $data =  date('d/m/Y', strtotime($value->data));
					   $horario = $value->horario;
					   $vagas = $value->vagas;
					   $status = $value->status;
					   
					   
					        if($value->vagas >0){
					      echo '<a href="login.html">Inscrever-se</a>';
						 
					      } else{
							  echo 'Encerrado'; 
						  }
					   
					   
					   ?>
					     
						
						
						
				  </td>
				</tr>
			<?php } ?>
			  </table>
			 
  </div>

  <div class="col-3 right">
    <div class="aside">
      <h2>Como faço para participar?</h2>
      <p>Veja os eventos disponíveis de seu interesse.</p>
	  <p>Clique em <a >"Realizar meu Cadastro"</a>, ao lado esquerdo da página, você será redirecionado para preencher o formulário de cadastro. Em seguida realize o login com seu usuário e senha para efetivar a inscrição.</p>
	  <p></p>
      <h2>Onde acontece o Evento?</h2>
      <p>Etec Pedro D'Arcádia Neto, Endereço</p>
	  <p>R. Sr. do Bonfim, 1226 - Vila Xavier, Assis - SP, 19802-130.</p>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d17512.447701598805!2d-50.425788475523625!3d-22.670984539597054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8ab16c09320aff3!2sEtec%20Pedro%20D&#39;Arc%C3%A1dia%20Neto!5e0!3m2!1spt-BR!2sbr!4v1575286566581!5m2!1spt-BR!2sbr" width="250" height="225" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <h2>How?</h2>
      <p>You can reach Chania airport from all over Europe.</p>
    </div>
  </div>
</div>
<div class="footer">
  <p>Projeto TCC - Alunos Etec - Assis/SP.</p>
  <p>Professor orientador: Nádia Sakai Habu.</p>
</div>
 </form>
	</body>

</html>