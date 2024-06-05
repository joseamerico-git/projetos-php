
$(function() {
  $(".btn-toggle").click(function(e) {
    e.preventDefault();
    el = $(this).data('element');
    $(el).toggle();
  });
});





function Mudarestado(el) {
  var display = document.getElementById(el).style.display;
  if (display == "none")
    document.getElementById(el).style.display = 'block';
  else
    document.getElementById(el).style.display = 'none';
}

function fn_excluir(){
	
	$('.form_excluir').submit(funcion(){
		return confirm("Clique ok para continue?");
	});
	
}


function load_modal(nome,email,id){
	$('#text_nome').val(nome);
	$('#text_email').val(email);
	$('#id_uii').val(id);
	
}



$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
});



function cadastraUsuario() {
  $("#usuarios").modal({
    show: true
  });
}

setTimeout(cadastraUsuario, 1000);


function mostraEventos() {
  $("#eventos").modal({
    show: true
  });
}

setTimeout(mostraEventos, 1000);

function mostraCronograma() {
  $("#cronograma").modal({
    show: true
  });
}

setTimeout(mostraCronograma, 1000);

function saibaMais() {
  $("#saibamais").modal({
    show: true
  });
}

setTimeout(saibaMais, 1000);


$(document).ready(function() {
  // Handler for .ready() called.

  $( "#pesquisar" ).on( "focus", "div.onBlurTest", function() {
        $( this ).toggleClass( "hasFocus" );
        $( this ).removeClass( "hasLostFocus" );     
 alert("teste");            
  });

  $( "#pesquisar" ).on( "blur", "div.onBlurTest", function() {
        $( this ).toggleClass( "hasFocus" );
        $( this ).removeClass( "hasLostFocus" );      
 alert("teste");
  });    
});


 