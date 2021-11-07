<?php

namespace Model\Storage;

interface StorageInterface
{

    public function select(string $table): array;

    public function delete(string $table, array $id): int;

   
 
    public function insert(string $table, array $row): int;

 
  
}
