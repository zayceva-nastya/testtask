<?php

namespace Model\Repository;

// use App\Framework\RepositoryInterface;
use Model\Storage\StorageInterface;
use Model\Dvd;

// class WorkerRepository implements RepositoryInterface

class DvdRepository 

{
    private $storage;

    private $table;


    public function __construct(StorageInterface $storage, string $table)
    
    {

        $this->storage = $storage;
        $this->table = $table;
    }

    public function findAll()
    {
        $row = $this->storage->select($this->table);
        $products = [];
        foreach ($row as $value) {
            $product = new Dvd();
            $products[]=$product
                ->setSku($value['sku'])
                ->setName($value['name'])
                ->setPrice($value['price'])
                ->setType($value['type_id'])
                ->setSize($value['size_dvd']);
    
            
        }

        return $products;
    }
  
    public function create($row): object
    {
        $id = $this->storage->insertDvd($this->table, $row);
        $product = new Dvd();
        $product
        ->setSku($row['sku'])
        ->setName($row['name'])
        ->setPrice($row['price'])
        ->setType($row['type_id'])
        ->setSize($row['size_dvd']);



        return $product;
    }



    public function delete(array $id): bool
    {
        return (bool)$this->storage->delete($this->table, $id);
    }
  

}