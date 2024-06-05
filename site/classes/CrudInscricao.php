<?php
namespace classes;
require_once 'DB.php';
class CrudInscricao extends DB{
    
    private $id;
    private $usuario;
    private $evento;
    private $termos;
    protected $tabela;
    
   
    public function getUsuario() {
        return $this->usuario;
    }

   
    public function getEvento() {
        return $this->evento;
    }

    
    public function getTermos() {
        return $this->termos;
    }

  
    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setEvento($evento) {
        $this->evento = $evento;
    }

   
    public function setTermos($termos) {
        $this->termos = $termos;
    }

    public function getId() {
       return $this->id ;
    }
    
    public function setId($id){
        $this->id=$id;
    }
    
    
}

