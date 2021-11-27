<?php

namespace Model\Storage;
use PDO;


 class PdoDb implements StorageInterface
{
    protected $pdo;

    public function __construct($dsn,$username,$password)
    {

        $this->pdo = new PDO(
            $dsn,
            $username,
            $password
        );
    }
    public function selectAll( $table): array
    {
        $arr = [];
        $result = $this->pdo->query("SELECT * FROM $table ORDER BY `sku` ASC"); 

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $arr[] = $row;
        }

        return $arr;
    }

   
    public function insert(string $table, array $row): int
    {

        $result = $this->pdo->prepare(
                    "INSERT INTO  $table  VALUES ('" . implode(

                "','",
               $row
            ) . "')"

        ); 
        echo $result->queryString;
        $result->execute();
        return $this->pdo->lastInsertId();
    }



    public function delete(string $table, array $id): int
    {

        $result = $this->pdo->prepare("DELETE FROM $table WHERE `SKU` IN (:id)");

            foreach($id as $value){
            $result->bindParam(':id', $value, PDO::PARAM_STR);
            $result->execute();
            echo $result->queryString;
        }

        return $result->rowCount();
    }


    public function checkSku($table,$sku):array
    {
        $arr=[];
        $result = $this->pdo->query("SELECT * FROM   $table WHERE `sku` = '$sku'");
    
         while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
           $arr[] = $row;
        }
  
        return $arr;
        
    }

   
}
 