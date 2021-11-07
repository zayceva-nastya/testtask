<?php

namespace Model\Repository;

// use App\Framework\RepositoryInterface;
use Model\Storage\StorageInterface;
use Model\Furniture;

// class WorkerRepository implements RepositoryInterface

class FurnitureRepository 

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
            $product = new Furniture();
            $products[]=$product
                ->setSku($value['sku'])
                ->setName($value['name'])
                ->setPrice($value['price'])
                ->setType($value['type_id'])
                ->setLength($value['length_furniture'])
                ->setWidth($value['width_furniture'])
                ->setHight($value['hight_furniture']);
            
        }

        return $products;
    }
  
    public function create($row): object
    {
        $id = $this->storage->insertFurniture($this->table, $row);
        $product = new Furniture();
        $product
            ->setSku($row['sku'])
            ->setName($row['name'])
            ->setPrice($row['price'])
            ->setType($row['type_id'])
            ->setLength($row['length_furniture'])
            ->setWidth($row['width_furniture'])
            ->setHight($row['hight_furniture']);


        return $product;
    }



    public function delete(array $id): bool
    {
        return (bool)$this->storage->delete($this->table, $id);
    }
  

}