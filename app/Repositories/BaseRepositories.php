<?php

namespace App\Repositories;

use App\Models\Base;
use App\Repositories\Interfaces\BaseRepositoriesInterface;
use Illuminate\Database\Eloquent\Model;


class BaseRepositories implements BaseRepositoriesInterface{
    protected $model;
    public function __construct(
        Model $model
    ){
        $this->model = $model;
    }
    public function all(){
        return $this->model->all();
    }
}