<?php
header("Content-type: text/html; charset=utf-8");
?>

<html>
	<head>
		<meta charset = "utf-8" lang ="pt-br">
		
		<title>Semana Paulo Freire</title>
		<?php 
		require_once 'js/script.php';
		require_once 'bootstrap/config.php';?>
		
		
		
		
    	</head>

		<body>
		  
		
		 <?php require_once 'componentes/menu.php';?>
		   
		   
		   
		   
		   <div class="card">
                  <div class="card-body">
                  
                  <div class="card-group">
                  <div class="card">
                    <img src="images/cronograma.jpg" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cronograma do Evento</h5>
                      <p class="card-text">O Evento ocorrerá em todas as Etec(s) do Centro Paula Souza, porém você pode ecolher a Etec mais próxima de você, venha participar e aproveite para aprender e conhecer melhor a instituição*
                                             .</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <br><!--  -->
                       <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="mostraCronograma()">Cadastrar-se </button>
                      
                    </div>
                  </div>
                  <div class="card">
                    <img src="images/ciencia.jpg" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Eventos</h5>
                      <p class="card-text">Os mais variádos eventos oficinas, minicursos, palestras, danças, apresentações de projetos elaborados durante os estudos                                                                     </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <br><br><!--  -->
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="mostraEventos()">Cadastrar-se </button>
                    </div>
                  </div>
                  <div class="card">
                    <img src="images/semana.jpg" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Sobre a Semana Paulo Freire</h5>
                      <p class="card-text">A Semana Paulo Freire ocorre uma vez por ano em todas as etecs do Estado de São Paulo, trazendo oportunidade e conhecimento e integrando a comunidade.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <br>
                               <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="saibaMais()">SaibaMais </button>
                        </div>
                      </div>
                    </div>
                     
                  </div>
                </div>
		
		</div>
		</body>

   <div>
   <!-- Formulário de cadastro de usuários -->
   
		
   
   
  </div>
  
 
  <!-- Modal cadastro de usuário -->
  
  <div id="usuarios" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cadastrar Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal eventos -->
  
  <div id="eventos" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tabela de Eventos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
       eventos aqui
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Saiba mais -->
  
  <div id="saibamais" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">O que é a Semana Paulo Freire <br> como participar?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         Sobre o evento...
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal cronograma -->
  
  <div id="cronograma" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mapa Cronograma do Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Cronograma aqui.
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<br><br><!-- formulario testes -->


                       <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>



                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
                
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>








</html>