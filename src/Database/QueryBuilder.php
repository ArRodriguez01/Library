<?php

  namespace App\Database;


  class QueryBuilder{
    protected $query=[];
    protected $fields=[];
    protected $conditions=[];
    protected $from = [];

    protected \PDO $pdo;

    function __construct($pdo){
      $this->pdo=$pdo;
    }
    public function query($sql){
           return  $statement = $this->pdo->prepare($sql);       
    }
    function select($fields):self{
      $sql="SELECT ";
      $list=implode(',',$fields);
      $this->query[]=$sql.$list;
      return $this;    
    }
    function table($table):self{
        $this->query[]=" FROM {$table}";
        return $this;
    }
    function where(array $conditions):self{
      $k=array_keys($conditions);
      $v=array_values($conditions);
      $this->query[]=" WHERE {$k[0]} = '{$v[0]}'";
      return $this;
    }
    function limit(int $n):self{
      $this->query[]=" LIMIT {$n}";
      return $this;
    }
    function __toString(){
      return join($this->query);
    }
    function execute(){
      $sql=join($this->query);
      $this->stmt=$this->pdo->query($sql);
      $this->stmt->execute();
      return $this;
    }
    function fetch(){
      $rows=$this->stmt->fetchAll(\PDO::FETCH_OBJ);
      return $rows;
    }
    function delete($table,$value,$key){
      
      $sql="DELETE FROM {$table} WHERE {$key}='{$value}'";
      $stmt=$this->query($sql);
        $res=$stmt->execute();
        if($res){
            return true;
        }
        else{
            return false;
        }    
    }
    function selectAll(string $table, array $fields=null):array{
                if (is_array($fields)){
                    $columns=implode(',',$fields);
                    
                }else{
                    $columns="*";
                }
                
                $sql="SELECT {$columns} FROM {$table}";
                $stmt=$this->pdo->query($sql);
                $stmt->execute();
                $rows=$stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $rows;
            }
    function insert($table,$data):bool {
              if (is_array($data)){
                $columns='';$bindv='';$values=null;
                  foreach ($data as $column => $value) {
                      $columns.='`'.$column.'`,';
                      $bindv.='?,';
                      $values[]=$value;
                  }
                  $columns=substr($columns,0,-1);
                  $bindv=substr($bindv,0,-1);
  
                  $sql="INSERT INTO {$table}({$columns}) VALUES ({$bindv})";
                      try{
                          $stmt=$this->query($sql);
                          $stmt->execute($values);
                          return $this->pdo->lastInsertId();
                      }catch(\PDOException $e){
                          echo $e->getMessage();
                          return false;
                      }
                  
                  return true;
                  }
                  return false;
              }
  }