<?php

namespace App\Repositories;

use App\Models\Base;
use App\Repositories\Interfaces\BaseRepositoriesInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;


class BaseRepositories implements BaseRepositoriesInterface{
    protected $model;
    public function __construct(
        Model $model
    ){
        $this->model = $model;
    }
    public function create(array $payload =[]){
        $model = $this->model->create($payload);
        return $model->fresh();
    }
    public function all(){
        return $this->model->all();
    }
    public function findById(
        int $modelId,
        array $column = ['*'],
        array $Relation = []
        ){
            return $this->model->select($column)->with($Relation)->findOrFail($modelId);
}
}