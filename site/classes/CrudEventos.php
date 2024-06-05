<?php
namespace classes;

require_once 'DB.php';

 abstract class CrudEventos extends DB{
     
     
     
     protected $tabela;
     private $id;
     private $nome;
     private $descricao;
     private $dataCadastro;
     private $horario;
     private $status;
     private $vagas;
     
     public function getId()  {
         return $this->id;
     }
     
     public function setId($id) {
         $this->id = $id;
     }
     
     
     public function getVagas(){
         return $this->vagas;
     }
     
     public function setVagas($vagas){
         $this->vagas=$vagas;
     }
     public function getNome() {
         return $this->nome;
     }
     
          
     public function setNome($nome) {
         $this->nome=$nome;
     }
     
     public function getDescricao() {
         return $this->descricao;
     }
     public function setDescricao($descricao) {
         $this->descricao=$descricao;
     }
     
     public function getDataEvento() {
         return $this->dataCadastro;
     }
   
  
    public function setDataEvento($dataEvento) {
         $this->dataCadastro=$dataEvento;
     }
     public function getHorario(){
         return $this->horario;
     }
     public function setHorario($horario) {
         $this->horario=$horario;
     }
     public function getStatus() {
         return $this->status;
     }
     public function setStatus($status) {
        $this->status=$status;
     }
}

