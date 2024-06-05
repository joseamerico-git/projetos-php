<?php
namespace classes;

require_once 'CrudUser.php';
require_once 'funcoes/Funcoes.php';
class Usuario extends CrudUser{
    
    protected $tabela ='usuario';
    
    public function __construct(){
      
        $this->objfc = new \Funcoes();
    }
    
    public function findUnitId($id) {
        
        $sql = "select *from $this->tabela where id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
                     
    }
    
    public function findAll() {
        $sql = "select *from $this->tabela order by nome asc limit 5";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function findAllnome($nome) {
       
        $sql = "select *from usuario where nome like '%".$nome."%' ORDER BY nome ASC LIMIT 5";
        $stmt = DB::prepare($sql);
       // $stmt->bindParam(':nome',$nome, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function findLogin($nome,$senha) {
        
        
        $sql = "select *from $this->tabela where nome = :nome and senha = :senha";
        $stmt = DB::prepare($sql);
         $stmt->bindParam(':nome',$nome, \PDO::PARAM_STR);
         $stmt->bindParam(':senha',$senha, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    
    public function insert() {
       $nome = $this->getNome();
       $email = $this->getEmail();
       //$senha = sha1($this->getSenha());
       $senha = $this->getSenha();
       
       $this->dataCadastro = $this->objfc->dataAtual(2);
       
        $sql = "insert into $this->tabela (nome,email,senha,datacadastro) values (:nome,:email,:senha,:dt)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome',$nome, \PDO::PARAM_STR);
        $stmt->bindParam(':email',$email, \PDO::PARAM_STR);
        $stmt->bindParam(':senha',$senha, \PDO::PARAM_STR);
        $stmt->bindParam(":dt", $this->dataCadastro, \PDO::PARAM_STR);
       
        return $stmt->execute();
        
       
    }
    
    
    public function update() {
        $id = $this->getId();
        $nome = $this->getNome();
        $email = $this->getEmail();
        $senha = $this->getSenha();
        
            $cst = DB::prepare("UPDATE usuario SET  nome = :nome, email = :email, senha = :senha WHERE id = :id;");
            $cst->bindParam(":id", $id, \PDO::PARAM_INT);
            $cst->bindParam(":email", $email, \PDO::PARAM_STR);
            $cst->bindParam(":senha", $senha, \PDO::PARAM_STR);
            $cst->bindParam(":nome", $nome, \PDO::PARAM_STR);
        
           
            $cst->execute();
         
         
          
    }
        
    
    
    public function delete($id) {
        $sql = "delete from $this->tabela where id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id, \PDO::PARAM_INT);
        $stmt->execute();
    }
    
}

