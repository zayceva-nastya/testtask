<?php

namespace Model\Storage;
use PDO;

 class PdoDb implements StorageInterface
{
    protected $pdo;

    public function __construct($dsn,$username,$password)
    {

        //todo: Вынести настройки в параметры конструктора
        $this->pdo = new PDO(
            $dsn,
            $username,
            $password
        );
    }
    public function selectAll(array $table): array
    {
        $arr = [];

        $result = $this->pdo->query("SELECT * FROM " . implode(

            ',',
            $table
        ) . "WHERE `type_id`="

    ); 
    echo $result->queryString;

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $arr[] = $row;
        }

        return $arr;
    }
    public function select(string $table): array
    {
        $arr = [];

        $result = $this->pdo->query("SELECT * FROM   $table");

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $arr[] = $row;
        }

        return $arr;
    }


//     public function insertBook(string $table, array $row): int
//     {
//         $result = $this->pdo->prepare(
//                 "INSERT INTO  $table(`sku`,`name`,`price`,`type`,`weight_book`) VALUES ('" . implode(

//                 "','",
//                 $row
//             ) . "')"

//         ); 
//         echo $result->queryString;
// $result->execute();
//         return $this->pdo->lastInsertId();
//     }

public function showColumns($table)
{
    $result = $this->pdo->query("SHOW FIELDS FROM $table");
    $arr = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $arr[] = $row;
    }
//        echo $result->queryString;
    return array_slice(array_column($arr, 'Field'), 1);
}


    public function insert(string $table, array $row): int
    {

        $result = $this->pdo->prepare(
                "INSERT INTO  $table(".`.implode(",",$this->showColumns($table)).`.") VALUES ('" . implode(

                "','",
                array_filter($row,function($element) {
                    return !empty($element);
                })
            ) . "')"

        ); 
        echo $result->queryString;
$result->execute();
        return $this->pdo->lastInsertId();
    }



    public function delete(string $table, ...$id): int
    {
        $result = $this->pdo->prepare("DELETE FROM $table WHERE `SKU` IN (:id)");

        foreach ($id as $key => $value) {
            $result->bindParam(':id', $value, PDO::PARAM_INT);
            $result->execute();
            echo $result->queryString;
        }


        return $result->rowCount();
    }


   
}
 