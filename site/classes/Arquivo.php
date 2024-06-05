<?php
namespace classes;
require_once 'CrudArquivo.php';
require_once 'funcoes/Funcoes.php';
class Arquivo extends CrudArquivo {
    protected $tabela ='arquivo';
    
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
        $sql = "select *from $this->tabela order by arquivo asc limit 5";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function findAlldocumento($arquivo) {
        
        $sql = "select *from $this->tabela where documento like '%".$arquivo."%' ORDER BY arquivo ASC LIMIT 5";
        $stmt = DB::prepare($sql);
        // $stmt->bindParam(':nome',$nome, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function insert() {
        
        $arquivo = $this->getArquivo();
       
        
        //$this->dataCadastro = $this->objfc->dataAtual(2);
        
        
        $sql = "insert into $this->tabela (arquivo,data) values (:arquivo ,NOW())";
        $stmt = DB::prepare($sql);
       
        $stmt->bindParam(':arquivo',$arquivo, \PDO::PARAM_STR);
       
       
        
        return $stmt->execute();
        
        
    }
    
    
    public function update() {
        $id = $this->getId();
        $arquivo = $this->getArquivo();
    
        
        $stmt = DB::prepare("UPDATE $this->tabela SET  arquivo = :arquivo WHERE id = :id;");
        $stmt->bindParam(":id", $id, \PDO::PARAM_INT);
        $stmt->bindParam(':arquivo',$arquivo, \PDO::PARAM_STR);
   
        
        
        $stmt->execute();
        
        
        
    }
    
    
    
    public function delete($id) {
        $sql = "delete from $this->tabela where id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id, \PDO::PARAM_INT);
        $stmt->execute();
    }
}

?>