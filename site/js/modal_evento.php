<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- alteração de usuario -->
<script type="text/javascript" >
   

    $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          
          var recipient = button.data('whatever') // Extract info from data-* attributes
          
           var recipient1 = button.data('whatevernome') // Extract info from data-* attributes
           
            var recipient2 = button.data('whateverdescricao') // Extract info from data-* attributes
            
            var recipient3 = button.data('whateverdata') // Extract info from data-* attributes
            
            var recipient4 = button.data('whateverhorario') // Extract info from data-* attributes
            
           var recipient5 = button.data('whateverstat') // Extract info from data-* attributes
            var recipient6 = button.data('whatevervagas') // Extract info from data-* attributes
            
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('Alterar Evento - '+ recipient )
         
          
  
          modal.find('#cd').val(recipient)
          modal.find('#n').val(recipient1)
          modal.find('#de').val(recipient2)
          modal.find('#dt').val(recipient3) 
          modal.find('#h').val(recipient4) 
            modal.find('#s').val(recipient5)
              modal.find('#v').val(recipient6)  
         
 
          
      
   
        }); 
        
</script>