<?php
namespace classes;

require_once 'CrudInscricao.php';
require_once 'funcoes/Funcoes.php';

class Inscricao extends CrudInscricao{
    
    protected $tabela ='inscricao';
    
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
    
    public function findInscUser($id_usuario,$id_evento) {
        
        $sql = "select *from $this->tabela where usuario = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id_usuario, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
        
    }
    
    public function findAll() {
        $sql = "select *from $this->tabela;";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
  
    
    
    public function insert() {
       $evento = $this->getEvento();
       $usuario = $this->getUsuario();
       $termos = $this->getTermos();
              
        $sql = "insert into $this->tabela (usuario,evento,termos) values (:usuario,:evento,:termos)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':termos',$termos, \PDO::PARAM_STR);
        $stmt->bindParam(':evento',$evento, \PDO::PARAM_INT);
        $stmt->bindParam(':usuario',$usuario, \PDO::PARAM_INT);
       
        return $stmt->execute();
        
       
    }
    
    
    public function update() {
        $evento = $this->getEvento();
        $usuario = $this->getUsuario();
        $termos = $this->getTermos();
        
            $stmt = DB::prepare("UPDATE $this->tabela SET  usuario = :usuario, evento = :evento, termos = :termos WHERE id = :id;");
           
            $stmt->bindParam(':evento',$evento, \PDO::PARAM_INT);
            $stmt->bindParam(':termos',$termos, \PDO::PARAM_CHAR);
            $stmt->bindParam(':usuario',$usuario, \PDO::PARAM_INT);
        
           
            $stmt->execute();
         
         
          
    }
        
    
    
    public function delete($id) {
        $sql = "delete from $this->tabela where id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id, \PDO::PARAM_INT);
        $stmt->execute();
    }
    
}

