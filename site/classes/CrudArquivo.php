<?php
namespace classes;

require_once 'DB.php';

 abstract class CrudArquivo extends DB{
     
     
     
     protected $tabela;
     
     private $id;
     private $arquivo;
     private $data;
     
     public function getId() {
         return $this->id;
     }
     
     public function setId($id) {
         $this->id = $id;
         
     }
     
     public function getArquivo() {
         return $this->arquivo;
     }
     
     public function setArquivo($arquivo) {
         $this->arquivo = $arquivo;
     }
     
     
     
}

