<?php

namespace Model\Repository;

interface RepositoryInterface
{
    public function findAll(): array;

    public function create($row): object;

    // public function delete(int ...$id): bool;
    public function delete(array $id): bool;
}
