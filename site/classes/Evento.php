<?php
namespace classes;

require_once 'CrudEventos.php';
require_once 'funcoes/Funcoes.php';

class Evento extends CrudEventos{
    
    protected $tabela ='evento';
  
    
    public function __construct(){
      
     
    }
    
    public function findUnitId($id) {
        
        $sql = "select *from $this->tabela where id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
                     
    }
    
    public function findAll() {
        $sql = "select *from $this->tabela";
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
    
    public function insert() {
        
        
       $nome = $this->getNome();
       $descricao = $this->getDescricao();
       $dataEvento = $this->getDataEvento();
       $horario =$this->getHorario();
       $status = $this-> getStatus();
       $vagas = $this->getVagas();
       
     
       
        $sql = "insert into $this->tabela (nome,descricao,dataevento,horario,status,vagas) values (:nome,:descricao,:dataevento,:horario,:status,:vagas)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome',$nome, \PDO::PARAM_STR);
        $stmt->bindParam(':descricao',$descricao, \PDO::PARAM_STR);
        $stmt->bindParam(':dataevento',$dataEvento, \PDO::PARAM_STR);
        $stmt->bindParam(":horario", $horario, \PDO::PARAM_STR);
        $stmt->bindParam(":status", $status, \PDO::PARAM_STR);
        $stmt->bindParam(":vagas", $vagas, \PDO::PARAM_STR);
       
        return $stmt->execute();
        
       
    }
    
    
    public function update() {
        
        $func = new \Funcoes();
        $id= $this->getId();
        $nome = $this->getNome();
        $descricao = $this->getDescricao();
        
        $dataEvento=$this->getDataEvento();
       // $dataEvento = $func->dataAtual(2);
        $horario=$this->getHorario();
        $status=$this->getStatus();
        $vagas=$this->getVagas();
        
        
       $data = date("Y-m-d H:i:s", strtotime($dataEvento));
        $dataEvento=$func->dataAtual(2);
       // echo $dataEvento;
        
        
            $stmt = DB::prepare("UPDATE $this->tabela SET  nome = :nome, descricao = :descricao, dataevento = :dataevento,
             horario = :horario, status = :status,
             vagas = :vagas WHERE id = :id;");
        
            $stmt->bindParam(":id", $id, \PDO::PARAM_INT);
            $stmt->bindParam(":vagas", $vagas, \PDO::PARAM_INT);
            $stmt->bindParam(":status", $status, \PDO::PARAM_STR);
            $stmt->bindParam(":horario", $horario, \PDO::PARAM_STR);
            $stmt->bindParam(':dataevento',$data, \PDO::PARAM_STR);
             $stmt->bindParam(':descricao',$descricao, \PDO::PARAM_STR);
            $stmt->bindParam(':nome',$nome, \PDO::PARAM_STR);
          
          
            $stmt->execute();
         
         
          
    }
        
    
    
    public function delete($id) {
        $sql = "delete from $this->tabela where id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id, \PDO::PARAM_INT);
        $stmt->execute();
    }
    
}

