<?php

namespace Model\Repository;

// use App\Framework\RepositoryInterface;
use Model\Storage\StorageInterface;
use Model\Book;
use Model\Dvd;
use Model\Furniture;

// class WorkerRepository implements RepositoryInterface

class ProductRepository 

{
    private $storage;

    private $table;


    public function __construct(StorageInterface $storage,  $table)
    
    {

        $this->storage = $storage;
        $this->table = $table;
    }

    public function findAll()
    {
        $row = $this->storage->selectAll($this->table);
        $products = [];
        foreach ($row as $value) {
            $book = new Book();
            $products['book'][]=$book
                ->setSku($value['sku'])
                ->setName($value['name'])
                ->setPrice($value['price'])
                ->setType($value['type_id'])
                ->setWeight($value['weight_book']);
        }
        foreach ($row as $value) {
            $dvd= new Dvd();
            $products['dvd'][]=$dvd
            ->setSku($value['sku'])
                ->setName($value['name'])
                ->setPrice($value['price'])
                ->setType($value['type_id'])
                ->setSize($value['size_dvd']);
        }
        foreach ($row as $value) {
            $furniture = new Furniture();
            $products['furniture'][]=$furniture
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

    // public function findAll()
    // {
    //     $row = $this->storage->select($this->table);
    //     $products = [];
    //     foreach ($row as $value) {
    //         $product = new Product();
    //         $products[]=$product
    //             ->setSku($value['sku'])
    //             ->setName($value['name'])
    //             ->setPrice($value['price'])
    //             ->setType($value['type'])
    //             ->setSize($value['size'])
    //             ->setWeight($value['weight'])
    //             ->setLength($value['length'])
    //             ->setWidth($value['width'])
    //             ->setHight($value['hight']);
    
            
    //     }

    //     return $products;
    // }
  
    public function create($row): object
    {
        $id = $this->storage->insert($this->table, $row);
        $product = new Product();
        $product
            ->setSku($row['sku'])
            ->setName($row['name'])
            ->setPrice($row['price'])
            ->setType($row['type'])
            ->setSize($row['size'])
            ->setWeight($row['weight'])
            ->setLength($row['length'])
            ->setWidth($row['width'])
            ->setHight($row['hight']);


        return $product;
    }



    public function delete(array $id): bool
    {
        return (bool)$this->storage->delete($this->table, $id);
    }
  

}