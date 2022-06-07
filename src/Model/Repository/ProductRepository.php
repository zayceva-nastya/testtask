<?php

declare(strict_types=1);

namespace Model\Repository;

use Model\Storage\StorageInterface;
use Model\Product;

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
            $product = new Product();
            if($value!=0){
                $products[]=$product
                ->setSku($value['sku'])
                ->setName($value['name'])
                ->setPrice($value['price'])
                ->setType($value['type_id'])
                ->setWeight($value['weight_book'])
                ->setSize($value['size_dvd'])
                ->setLength($value['length_furniture'])
                ->setWidth($value['width_furniture'])
                ->setHeight($value['height_furniture']);
            }
                    
        }
        return $products;
    }
  
    public function create($row): object
    {
        $id = $this->storage->insert($this->table, $row);
        $product = new Product();
        $product
            ->setSku($row['sku'])
            ->setName($row['name'])
            ->setPrice($row['price'])
            ->setType($row['type_id'])
            ->setSize($row['size_dvd'])
            ->setWeight($row['weight_book'])
            ->setLength($row['length_furniture'])
            ->setWidth($row['width_furniture'])
            ->setHeight($row['height_furniture']);

        return $product;
    }

    public function checkSku($sku)
    {

        $rows = $this->storage->checkSku($this->table, $sku);

        if (empty($rows[0])) {
            return null;
        }

        $row = $rows[0];
        $product = new Product();

        $product
            ->setSku($row['sku'])
            ->setName($row['name'])
            ->setPrice($row['price'])
            ->setType($row['type_id'])
            ->setSize($row['size_dvd'])
            ->setWeight($row['weight_book'])
            ->setLength($row['length_furniture'])
            ->setWidth($row['width_furniture'])
            ->setHeight($row['height_furniture']);

        return $product;

    }

    public function delete(array $id): bool
    {
        return (bool)$this->storage->delete($this->table, $id);
    }
}
