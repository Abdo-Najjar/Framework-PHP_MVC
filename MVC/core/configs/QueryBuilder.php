<?php


class QueryBuilder
{
    private $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function find($table,$id)
    {

        $statment =$this->pdo->prepare("Select * from {$table} where id=".$id);

        $statment->execute();   

        return $statment->fetch(PDO::FETCH_OBJ);
    }


    public function selectAll($table , $intoClass="nullClass")
    {
        $statment =$this->pdo->prepare("Select * from {$table}");

        $statment->execute();
        
        return $statment->fetchAll(PDO::FETCH_CLASS,$intoClass);
    }


    public function insert($table , $parameters)
    {
        

        $sql = sprintf(
            
            "INSERT INTO  %s (%s) VALUES (%s)",
                $table , implode( ",",array_keys($parameters)) ,
                     ":".  implode(", :",array_keys($parameters))
            
                    );
        

        try{
        $statment = $this->pdo->prepare($sql);
            
        return $statment->execute($parameters);
        
        }catch(PDOException $e){
         
            require "views/error/500.html";
            die();
        }
        
                
    }

    
}


//null Class
class nullClass{

}