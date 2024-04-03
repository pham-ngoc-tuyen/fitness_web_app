<?php

namespace App\Repositories\Interfaces;

interface BaseRepositoriesInterface{
    public function all();
    public function findById(int $id, array $relations = []);
}