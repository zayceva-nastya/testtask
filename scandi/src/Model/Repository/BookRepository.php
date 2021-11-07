<?php

namespace Model\Repository;

use Model\Storage\StorageInterface;
use Model\Book;


class BookRepository implements RepositoryInterface

{
    private $storage;

    private $table;


    public function __construct(StorageInterface $storage, string $table)
    
    {

        $this->storage = $storage;
        $this->table = $table;
    }

    public function findAll():array
    {
        $row = $this->storage->select($this->table);
        $products = [];
        foreach ($row as $value) {
            $product = new Book();
            $products[]=$product
                ->setSku($value['sku'])
                ->setName($value['name'])
                ->setPrice($value['price'])
                ->setType($value['type_id'])
                ->setWeight($value['weight_book']);
    
            
        }

        return $products;
    }
  
    public function create($row): object
    {
        $id = $this->storage->insert($this->table, $row);
        $product = new Book();
        $product
        ->setSku($row['sku'])
        ->setName($row['name'])
        ->setPrice($row['price'])
        ->setType($row['type_id'])
        ->setWeight($row['weight_book']);



        return $product;
    }



    public function delete(array $id): bool
    {
        return (bool)$this->storage->delete($this->table, $id);
    }
  

}