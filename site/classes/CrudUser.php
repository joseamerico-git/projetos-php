<?php
namespace classes;

require_once 'DB.php';

 abstract class CrudUser extends DB{
     
     
     
     protected $tabela;
     
     private $nome;
     private $email;
     private $id;
     private $senha;
     private $dataCadastro;
     
     
     public function getDataCadastro(){
         return $this->dataCadastro;
     }
     
     public function setDataCadastro($dataCadastro){
         $this->dataCadastro = $dataCadastro;
     }
     
     public function getSenha() {
         return $this->senha;
     }
     public function setSenha($senha){
         $this->senha = $senha;
         
     }
     
     public function getId() {
         return $this->id;
     }
     
     public function setId($id) {
         $this->id = $id;
         
     }
     
     
          public function getNome() {
        return $this->nome;
         
     }
     
     public function setNome($nome) {
         $this->nome = $nome;
         
     }
     
     public function getEmail() {
        return $this->email; 
     }
     
    
     
     public function setEmail($email) {
         $this->email = $email;
     }
     
     
     
}

